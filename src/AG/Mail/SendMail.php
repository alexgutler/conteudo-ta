<?php
namespace AG\Mail;


class SendMail
{
    public function send($to, $subject, $msg)
    {
       if(mail($to,$subject,$msg))
       {
           return true;
       }
    }
} 