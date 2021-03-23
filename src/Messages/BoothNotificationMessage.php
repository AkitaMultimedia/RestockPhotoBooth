<?php

namespace App\Messages;

class BoothNotificationMessage
{

    private $imageData;
//

    //public function __construct(array $imageData) {
    public function __construct(array $imageData) {
        $this->imageData = $imageData;
    }

    public function getImageData():array
    {
        return $this->imageData;
    }
}
