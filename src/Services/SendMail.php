<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class SendMail
{

    private $mailer;
    private $from = "info@akitamultimedia.com";
    //private $from = "notice@restockcrc.com";
    //private $from = "photobooth@restockcrc.com";

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @return bool
    */
    public function sendMail($data):bool
    {          
        $email = (new Email());
        $email->from($this->from);

        if ($data['to']) {
            $email->to($data['to']);
        }
        if ($data['subject']) {
            $email->subject($data['subject']);
        }        
        if ($data['text']) {
            $email->text($data['text']);
        }
        if (array_key_exists('html', $data)) {
            $email->html($data['html']);
        }
        if ($data['attachment_file'] && $data['attachment_name'] && $data['attachment_type']) {
            $email->attach($data['attachment_file'], $data['attachment_name'], $data['attachment_type']);
        }

        $this->mailer->send($email);

        return true;
        
        //->cc('cc@example.com')
        //->bcc('bcc@example.com')
        //->replyTo('fabien@example.com')
        //->priority(Email::PRIORITY_HIGH)

    }

}