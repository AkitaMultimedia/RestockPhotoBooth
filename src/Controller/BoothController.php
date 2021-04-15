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
use App\Repository\BoxSizePresetsRepository;
use Error;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class BoothController extends AbstractController
{
   /**
     * @Route("/upload", name="data_upload")
     */
    public function upload(Request $request, PoRepository $PoRepository, LotRepository $lotRepo, Webdav $dav): Response
    {

        $Lot = new Lot;
        $em = $this->getDoctrine()->getManager();
         
        // Récupérer le # du lot, qui sera utilisé plusieurs fois
        $req_po_number = $request->request->get('po');
        $req_lot_number = $request->request->get('number');   
        
        // Si le PO n'existe pas dans la table des Po, il faut le créer
        $po_data = $PoRepository->findOneBy(
            ['number' => $req_po_number]
        );
        
       // return new Response("Working2"); //.$fileName);
        if (!$po_data) {
            $po_data = new Po;
            $po_data->setNumber($req_po_number);
            $po_data->setActive(true);
            $em->persist($po_data);
            $em->flush();
        }
        
        // Si le lot existait déjà dans la table, il sera remplacé
        $lot_exist = $lotRepo->findOneBy(
            ['number' => $req_lot_number]
        );
        
        if ($lot_exist) {
            // 1 -> On efface les photos existantes
            $photos = $lot_exist->getPhotos();
            foreach ($photos as $photo) {
                if ($photo) {
                    $dest = "uploads/photos/".$req_po_number."/".$photo;
                    if (file_exists($dest)) {
                        unlink($dest);   
                    } 
               }
            }
            // 2 -> On efface les données de la DB
            $em->remove($lot_exist);
        }
        
        // STEP : Upload photos           
        $photo_names = ["", "", "", "", "", "", "", "", "", ""];  // List of photo names stored in DB
        
        $nbFiles = intval($request->request->get('nbfiles'));
        
       // $dav->createFolder($req_po_number);
       if (!file_exists("uploads/photos/".$req_po_number."/")) {
            mkdir("uploads/photos/".$req_po_number."/", 0777, true);
        }

        for ($i = 0; $i < $nbFiles; $i++) {
            
            $myFile = $request->request->get('file_' . $i);
            
            if ($i === 0) {
                $flag = "_MAIN";
            } else {
                $flag = "_" . $i;
            }
            
            // Save file in "uploads/photos"
            $fileName = "" . $req_lot_number . $flag . ".jpg";
            $myFile = file_get_contents($myFile);
            $finalFile = fopen("uploads/photos/".$req_po_number."/".$fileName, "w");
            fwrite($finalFile, $myFile);
            fclose($finalFile);

            $photo_names[$i] = $fileName;
            
        }
        
        // Insertion dans la base de données
        $Lot->setPo($po_data);
        $Lot->setNumber($req_lot_number);
        $format = $request->request->get('format');
        $Lot->setFormat($format);
        $Lot->setQuantity($request->request->get('quantity'));
        $Lot->setWeight($request->request->get('weight'));
        $Lot->setPhotos($photo_names);
        $Lot->setUser("Seb");
        //$Lot->setUser($this->getUser()->getUsername());
        $em->persist($Lot);

        $po_data->addLot($Lot);
        
        $em->flush();

        return new Response("OkOk_" . $req_lot_number);
    }

/**
     * @Route("/getpresets", name="getpresets")
     */
    public function getpresets(BoxSizePresetsRepository $boxPresets): Response
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $data = $boxPresets->findAll();
        $response = $serializer->serialize($data, 'json');

        return new Response($response);
    }

}