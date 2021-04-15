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
use App\Services\PoCSV;
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
        $poList = $PoRepository->findBy(['active' => $active]);

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
     * @Route("/done/{po_number}", name="mark_done")
     */
    public function markAsDone(PoCSV $PoCSV, PoRepository $PoRepository, $po_number): RedirectResponse
    {

        // Mettre le Po Actif = FALSE dans DB
        $po = $PoRepository->findOneBy([
            'number' => $po_number
        ]);
        $po->setActive(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($po);
        $em->flush();

        $po_number = $po->getNumber();
         // Envoi du fichier CSV
        $PoCSV->generate($po_number, 'mail');   

        return $this->redirectToRoute('admin_polist', [
            'active' => 1
        ]);
    }   

     /**
     * @Route("/lots/{id}/{state}", name="view_lots")
     */
    public function viewLots(PoRepository $poRepository, $id, $state): Response
    {
        // Je reçois le id du lot 
        $po = $poRepository->findOneBy(['id' => $id]);

        $lots = $po->getLots();
 
        return $this->render('admin/lotlist.html.twig', [
            'lot' => $lots,
            'po' => $po->getNumber(),
            'state' => $state
        ]);
    }    
  
    /**
     * @Route("/lots/photos/{id}/{state}", name="view_photos")
     */
    public function viewPhotos(LotRepository $LotRepository, $id, $state): Response
    {

        $lot = $LotRepository->findOneBy(['id' => $id]);
        $photos = $lot->getPhotos();
        $po_number = $lot->getPo()->getNumber();
       
        return $this->render('admin/lot_images.html.twig', [
            'id' => $id,
            'lot' => $lot,
            'photos' => $photos,
            'po_number' => $po_number,
            'state' => $state
        ]);
    }   

    /**
     * @Route("/delete_photo/{id}/{name}/{state}", name="delete_photo")
     */
    public function deletePhoto(LotRepository $LotRepository, $id, $name, $state): Response
    {
        $lot = $LotRepository->findOneBy(['id' => $id]);

        $ls_photos = $lot->getPhotos();
        $posi_photo = array_search($name, $ls_photos);
        $ls_photos[$posi_photo] = "";

        // Delete in database for CSV
        $em = $this->getDoctrine()->getManager();
        $lot->setPhotos($ls_photos);
        $em->flush();

        // Delete photo
        $po_number = $lot->getPo()->getNumber();
        $pathFile = "uploads/photos/".$po_number."/".$name;
       
        if (file_exists($pathFile)) {
            unlink($pathFile);
        }

        return $this->redirectToRoute('admin_view_photos', [
            'id' => $lot->getId(),
            'lot' => $lot->getNumber(),
            'state' => $state
        ]);
    }    

    /**
     * @Route("/mailcsv/{po_number}/{state}", name="mail_csv")
     */
    public function mail_csv(PoCSV $PoCSV, $po_number, $state): Response
    {

        $PoCSV->generate($po_number, 'mail');

        return $this->redirectToRoute('admin_polist', [
            'active' => $state
        ]);

    }  

    /**
     * @Route("/getcsv/{po_number}", name="get_csv")
     */
    public function get_csv(PoCSV $PoCSV, $po_number)
    {

        $response = $PoCSV->generate($po_number, 'browser');

        return new Response(
            $response,
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