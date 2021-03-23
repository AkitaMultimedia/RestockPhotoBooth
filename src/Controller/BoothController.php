<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Services\Base64Convert;
use App\Services\Webdav;
use App\Entity\Po;
use App\Entity\Lot;
use App\Repository\PoRepository;
use App\Repository\LotRepository;

class BoothController extends AbstractController
{
   /**
     * @Route("/upload", name="data_upload")
     */
    public function upload(Request $request, Base64Convert $convert, PoRepository $PoRepository, LotRepository $lotRepo, Webdav $dav): Response
    {
        $Lot = new Lot;

        $em = $this->getDoctrine()->getManager();

        // Récupérer le # du lot, qui sera utilisé plusieurs fois
        $req_po_number = $request->request->get('po');
        $req_lot_number = $request->request->get('number');

        // Si le PO n'existe pas dans la table des Po, il faut le créer
        $po_exist = $PoRepository->findBy(
            ['Number' => $req_po_number]
        );
        if (!$po_exist) {
            $poData = new Po;
            $poData->setNumber($req_po_number);
            $poData->setActive(true);
            $em->persist($poData);
        }

        // Si le lot existait déjà dans la table, il sera remplacé
        $lot_exist = $lotRepo->findOneBy(
            ['lot' => $req_lot_number]
        );

        if ($lot_exist) {
            // 1 -> On efface les photos du WebDav - elles sont dans un sous-dossier nom = po
            $photos = $lot_exist->getPhotos();
            foreach ($photos as $photo) {
                if ($photo !== "") {
                    $dav->deleteFile($photo, $req_po_number);
                }
            }
            // 2 -> On efface les données de la DB
            $em->remove($lot_exist);
        }

        // STEP : Upload photos           
        $photo_names = ["", "", "", "", "", "", "", "", "", ""];  // List of photo names stored in DB
 
        $nbFiles = intval($request->request->get('nbfiles'));

        for ($i = 0; $i < $nbFiles; $i++) {

            $myFile = $request->request->get('file_' . $i);

            if ($i === 0) {
                $flag = "_MAIN";
            } else {
                $flag = "_" . $i;
            }

            $fileName = "" . $req_lot_number . $flag . ".jpg";
            $myFile = file_get_contents($myFile);

            // Move to DAV
            $dav->createFolder($req_po_number);
            $dav->uploadFile($fileName, $myFile, $req_po_number);

            $photo_names[$i] = $fileName;

        }

        // Insertion dans la base de données
        $Lot->setPo($req_po_number);
        $Lot->setNumber($req_lot_number);
        $format = $request->request->get('format');
        $Lot->setFormat($format);
        $Lot->setQuantity($request->request->get('quantity'));
        $Lot->setWeight($request->request->get('weight'));
        $Lot->setPhotos($photo_names);
        $Lot->setUser($this->getUser()->getUsername());

        $em->persist($Lot);
        $em->flush();

        return new Response("OkOk_" . $req_lot_number);
    }

}