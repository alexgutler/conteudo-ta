<?php
namespace AG\Cliente;


class ClienteTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSetEGetNome()
    {
        $cliente = new \AG\Cliente\Cliente();
        $cliente->setNome("Alex");

        $this->assertEquals("Alex", $cliente->getNome());
    }

    public function testVerificaSetEGetEmail()
    {
        $cliente = new \AG\Cliente\Cliente();
        $cliente->setEmail("alex@ag.com");

        $this->assertEquals("alex@ag.com", $cliente->getEmail());
    }

    public function testVerificaSeConsegueEnviarEmail()
    {
        $mailTransport = $this->getMock('\AG\Mail\SendMail',array("send"));
        $mailTransport->expects($this->once())
            ->method("send")
            ->willReturn(true)
        ;

        $cliente = new Cliente();
        $cliente->setMailTransport($mailTransport);

        $this->assertTrue($cliente->sendMail());
    }
}


