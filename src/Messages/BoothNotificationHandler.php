<?php

namespace App\Messages;

use App\Messages\BoothNotificationMessage;
use App\Services\Webdav;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class BoothNotificationHandler implements MessageHandlerInterface
{
    private $em;
    private $dav;

    public function __construct(EntityManagerInterface $em, Webdav $dav) {
        $this->em = $em;
        $this->dav = $dav;
    }

    public function __invoke(BoothNotificationMessage $message) {

        //echo ("allooo");
        //$lotDataId = $this->em->find(LotData::class, $message->getLotDataId());

        // Instruction à exécuter 5:40
        //if ($lotDataId !== null) {
            $data = $message->getImageData();
           $this->dav->uploadFile($data[0], $data[1], $data[2]);
       // }
    }
}