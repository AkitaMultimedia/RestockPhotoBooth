<?php

namespace App\Services;

use App\Entity\LotData;
use App\Repository\LotDataRepository;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DataBaseHelper
{

    public function checkLotExist($lot): Response
    {

        $exist = $this->getDoctrine()
        ->getRepository(LotData::class)
        ->findBy(
            ['lot' => $lot]
        ); 
        
        if ($exist) {
            return new Response(true); 
        } else {
            return new Response(false); 
        }
        
    }

}
