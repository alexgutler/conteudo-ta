<?php
namespace AG\Cliente;


class Cliente
{
    private $nome;
    private $email;
    private $mailTransport;

    /**
     * @param mixed $mailTransport
     */
    public function setMailTransport($mailTransport)
    {
        $this->mailTransport = $mailTransport;
    }

    /**
     * @return mixed
     */
    public function getMailTransport()
    {
        return $this->mailTransport;
    }

    public function setEmail($email)
    {
        $res = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$res)
        {
            throw new \InvalidArgumentException("O Email informado eh invalido!");
        }
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function sendMail()
    {
        if($this->mailTransport->send("alex@grupolima.net.br","Assunto","Mensagem"))
        {
            return true;
        }
    }
} 