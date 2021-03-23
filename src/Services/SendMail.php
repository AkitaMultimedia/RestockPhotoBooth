<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class SendMail
{

    private $params;
    private $sourcePath;
    private $mailer;


    public function __construct(MailerInterface $mailer, ParameterBagInterface $params)

    {


        $this->params = $params;
        $sourcePath = $this->params->get('photos_directory');
        $sourcePath .= "/";
        $this->sourcePath = $sourcePath;

        $this->mailer = $mailer;
    

    }

    /**
     * @return bool
    */
    public function sendMail($dest, $subject=null, $message=null, $attachement=null, $attachement_name=null):bool
    {          
        $email = (new Email())
            ->from('info@akitamultimedia.com')
            ->to($dest)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject($subject)
            ->text($message)
            ->html($message)
            ->attach($attachement, $attachement_name, 'text/csv');

            $this->mailer->send($email);

            return true;
    }

}