<?php

namespace AG\Mail;
use AG\Cliente\Cliente;

class Mail
{
    private $from;
    private $to;
    private $subject;
    private $msg;
    private $cliente;

    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->to = $cliente->getEmail();
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function send()
    {
        echo "Email enviado com sucesso!";
    }
} 