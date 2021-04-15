<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use App\Repository\PoRepository;
use App\Repository\EmailsForDataRepository;
use App\Services\SendMail;

class PoCSV
{

    private $PoRepository;
    private $EmailsForDataRepository;
    private $Mailer;

    public function __construct(PoRepository $PoRepository, EmailsForDataRepository $EmailsForDataRepository, SendMail $Mailer)
    {
        $this->PoRepository = $PoRepository;
        $this->EmailsForDataRepository = $EmailsForDataRepository;
        $this->Mailer = $Mailer;
    }

    public function generate($po_number, $output_method) {

        $collection = $this->PoRepository->findOneBy([
            "number" => $po_number
        ]);

        $lots_data = $collection->getLots()->toArray();
 
        $delimiter = ",";
        $list = "Lot, Format, Quantity, Weight, Photo_MAIN, Photo_1, Photo_2, Photo_3, Photo_4, Photo_5, Photo_6, Photo_7, Photo_8, Photo_9\n";
        
        foreach ($lots_data as $data) {
        
            $add_list = "";
            $add_list .= $data->getNumber().$delimiter;
            $add_list .= ucwords($data->getFormat()).$delimiter;   // Première lettre en MAJ demandé par client
            $add_list .= $data->getQuantity().$delimiter;
            $add_list .= $data->getWeight().$delimiter;
            $add_list .= implode(",", $data->getPhotos());
            $add_list .= "\n";
    
        }
    
        $list .= $add_list;
    
        switch ($output_method) {
            case "mail": 
                $this->mail($po_number, $list);
                break;
            case "browser": 
                // Send back to controller for output in browser
                return $list;
                break;
        }

    }

    /**
     * @return string
    */
    public function convertLotsToDataForCSV($lots_data)
    {          
      //  dd($lots_data);
    // Créer fichier Excel

    // Entête des colonnes
    $delimiter = ",";

    $list = "Lot, Format, Quantity, Weight, Photo_MAIN, Photo_1, Photo_2, Photo_3, Photo_4, Photo_5, Photo_6, Photo_7, Photo_8, Photo_9\n";
    
    foreach ($lots_data as $data) {
    
        $add_list = "";
        $add_list .= $data->getNumber().$delimiter;
        $add_list .= ucwords($data->getFormat()).$delimiter;   // Première lettre en MAJ demandé par client
        $add_list .= $data->getQuantity().$delimiter;
        $add_list .= $data->getWeight().$delimiter;
        $add_list .= implode(",", $data->getPhotos());
        $add_list .= "\n";

    }

    $list .= $add_list;

    return $list;

    }


    public function getPoCSV($repo, $po)
    {          

        // Créer fichier Excel
        $list = array(
            //these are the columns
            array('Lot', 'Format', 'Quantity', 'Weight', 'Photo_MAIN', 'Photo_1', 'Photo_2', 'Photo_3', 'Photo_4', 'Photo_5', 'Photo_6', 'Photo_7', 'Photo_8', 'Photo_9')
        );

        $ret = $repo->findBy(['po' => $po]);

        foreach ($ret as $data) {
            
            $photos = $data->getPhotos();

            $myData = array(
                $data->getLot(),
                ucwords($data->getFormat()),    // Première lettre en majuscule
                $data->getQuantity(),
                $data->getWeight(),          
            );

            $finalData = array_merge($myData, $photos);

            array_push($list, $finalData);
            
        }
        $fp = fopen('php://output', 'w');

        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }

        $content = implode("\n", $list);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');

        /*
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv');
        //it's gonna output in a testing.csv file
        $fileName = "".$po.".csv";
        $response->headers->set("Content-Disposition", "attachment; filename=".$fileName);
        */
        return $response;



    }

    public function mail($po_number, $data) {
        
        $fp = fopen('php://temp', 'w');
        fwrite($fp, $data);
 
        $emails = $this->EmailsForDataRepository->findBy(
            ['active' => true]
        );

        foreach ($emails as $key) {
            $to = $key->getEmail();
            $this->Mailer->sendMail([
                'to' => $to,
                'subject' => "PO ".$po_number,
                'text' => "PO ".$po_number,
                'attachment_file' => $fp,
                'attachment_name' => 'PO_'.$po_number.'.csv',
                'attachment_type' => 'text/csv',
            ]);
        } 
    }

    public function browser($po_number, $data) {

        return new Response(
            $data,
            200,
            [
          //Définit le contenu de la requête en tant que fichier Excel
              'Content-Type' => 'application/vnd.ms-excel',
          //On indique que le fichier sera en attachment donc ouverture de boite de téléchargement ainsi que le nom du fichier
              "Content-disposition" => "attachment; filename=PO_".$po_number.".csv"
           ]
        );
    }

}