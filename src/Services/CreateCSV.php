<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Response;

class CreateCSV
{

    public function __construct()

    {
      
    

    }

    /**
     * @return string
    */
    public function convertLotsToDataForCSV($lots_data)
    {          

    // Créer fichier Excel

    // Entête des colonnes
    $delimiter = ",";

    $list = "Lot, Format, Quantity, Weight, Photo_MAIN, Photo_1, Photo_2, Photo_3, Photo_4, Photo_5, Photo_6, Photo_7, Photo_8, Photo_9\n";
    
    foreach ($lots_data as $data) {
    
        $add_list = "";
        $add_list .= $data->getLot().$delimiter;
        $add_list .= ucwords($data->getFormat()).$delimiter;   // Première lettre en MAJ demandé par client
        $add_list .= $data->getQuantity().$delimiter;
        $add_list .= $data->getWeight().$delimiter;
        $add_list .= implode(",", $data->getPhotos());
        $add_list .= "\n";

    }

    $list .= $add_list;

    return $list;
        /*
        // Créer fichier Excel
        $list = array(
            //these are the columns
            array('Lot', 'Format', 'Quantity', 'Weight', 'Photo_MAIN', 'Photo_1', 'Photo_2', 'Photo_3', 'Photo_4', 'Photo_5', 'Photo_6', 'Photo_7', 'Photo_8', 'Photo_9')
        );

        foreach ($lots_data as $data) {
            
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

        return $list;
        */

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

}