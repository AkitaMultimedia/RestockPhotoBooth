<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PoRepository;
use App\Repository\LotRepository;
use App\Repository\EmailsForDataRepository;
use App\Services\SendMail;
use App\Services\CreateCSV;
use App\Services\Webdav;
use App\Entity\Po;

/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="menu")
     */
    public function admin(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    /**
     * @Route("/polist/{active}", name="polist")
     */
    public function polist(PoRepository $PoRepository, $active): Response
    {
        // Display list of PO - active or inactive
        $poList = $PoRepository->findBy(['Active' => $active]);

        $state_name = "archived";
        if ($active == true) {
            $state_name = "active";
        }

        return $this->render('admin/polist.html.twig', [
            'po_list' => $poList,
            'state' => $active,
            'state_name' => $state_name
        ]);
    }    


    /* IMPORTANT : All settings are managed by the SettingsController */

    /**
     * @Route("/done/{id}", name="mark_done")
     */
    public function markAsDone(LotRepository $LotsRepo, EmailsForDataRepository $emailsRepo, CreateCSV $csv, SendMail $mailer, Po $po): RedirectResponse
    {

        // Mettre le Po Actif = FALSE dans DB
        $po->setActive(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($po);
        $em->flush();

        // Récupérer le # du PO et récupérer tous les lots de ce PO
        $po_number = $po->getNumber();
        
        $lots_data = $LotsRepo->findBy([
            "po" => $po_number
        ]);

        // Send CVS by email to admins
        $emails = $emailsRepo->findBy(
            ['active' => true]
        );

        $attachement = $csv->convertLotsToDataForCSV($lots_data);
        $attachementName = "PO_".$po_number.".csv";

        foreach ($emails as $key) {
            $email = $key->getEmail();
            $mailer->sendMail($email, "PO ".$po_number, "PO ".$po_number, $attachement, $attachementName);
        }  

        return $this->redirectToRoute('admin_polist', [
            'active' => 1
        ]);
    }   

     /**
     * @Route("/lots/{po_number}&{state}", name="view_lots")
     */
    public function viewLots(LotRepository $LotRepository, $po_number, $state): Response
    {
        $lot_data = $LotRepository->findBy(['po' => $po_number]);

        return $this->render('admin/lotlist.html.twig', [
            'lot_data' => $lot_data,
            'po' => $po_number,
            'state' => $state
        ]);
    }    
  
    /**
     * @Route("/lots/photos/{lot}&{state}", name="view_photos")
     */
    public function viewPhotos(Webdav $dav, LotRepository $LotRepo, $lot, $state): Response
    {

        $lot_data = $LotRepo->findOneBy(['lot' => $lot]);
        $data = $lot_data->getPhotos();
        $po = $lot_data->getPo();

        $photos = [];
        foreach ($data as $photo) {
            if ($photo) {
                $request = $dav->displayImage($po, $photo);
                array_push($photos, $request);
            } else {
                array_push($photos, "");
            }
        }

        return $this->render('admin/lot_images.html.twig', [
            'lot_data' => $lot_data,
            'photos' => $photos,
            'state' => $state
        ]);
    }   

    /**
     * @Route("/delete_photo/{id}/{name}/{state}", name="delete_photo")
     */
    public function deletePhoto(LotRepository $LotRepo, Webdav $dav, $id, $name, $state): Response
    {
        $lot = $LotRepo->findOneBy(['id' => $id]);

        $ls_photos = $lot->getPhotos();
        $posi_photo = array_search($name, $ls_photos);
        $ls_photos[$posi_photo] = "";

        // Delete in database for CSV
        $em = $this->getDoctrine()->getManager();
        $lot->setPhotos($ls_photos);
        $em->flush();

        // Delete photo
        $po = $lot->getPo();
        $dav->deleteFile($name, $po);

        return $this->redirectToRoute('admin_view_photos', [
            'lot' => $lot->getNumber(),
            'state' => $state
        ]);
    }    

    /**
     * @Route("/mailcsv/{po_number}/{state}", name="mail_csv")
     */
    public function mailCsv(CreateCSV $csv, SendMail $mailer, EmailsForDataRepository $emailsRepo, LotRepository $LotsRepo, $po_number, $state): Response
    {

        $emails = $emailsRepo->findBy(
            ['active' => true]
        );

        $lots_data = $LotsRepo->findBy([
            "po" => $po_number
        ]);

        $attachement = $csv->convertLotsToDataForCSV($lots_data);
        $attachementName = "PO_".$po_number.".csv";
        
        $fp = fopen('php://temp', 'w');
        fwrite($fp, $attachement);
 
        foreach ($emails as $key) {
            $email = $key->getEmail();
            $mailer->sendMail($email, "PO ".$po_number, "PO ".$po_number, $fp, $attachementName);
        }  
    
        return $this->redirectToRoute('admin_polist', [
            'active' => $state
        ]);

    }  

    /**
     * @Route("/getcsv/{po_number}", name="get_csv")
     */
    public function getCsv(CreateCSV $csv, LotRepository $LotsRepo, $po_number)
    {
        $lots_data = $LotsRepo->findBy([
            "po" => $po_number
        ]);

        $response = $csv->convertLotsToDataForCSV($lots_data);

        $fileName = "PO_".$po_number.".csv";

        return new Response(
            $response,
            200,
            [
          //Définit le contenu de la requête en tant que fichier Excel
              'Content-Type' => 'application/vnd.ms-excel',
          //On indique que le fichier sera en attachment donc ouverture de boite de téléchargement ainsi que le nom du fichier
              "Content-disposition" => "attachment; filename=".$fileName.".csv"
           ]
        );
        
    }  

}