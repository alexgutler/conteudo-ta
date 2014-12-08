<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 16/11/14
 * Time: 22:21
 */

namespace AG\Mail;


class MailTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeOSetEstaModificandoValorDosGetters()
    {
        $cliente = $this->getMock('\AG\Cliente\Cliente', array("getEmail"));
        $cliente->expects($this->any())
            ->method("getEmail")
            ->willReturn("alex@grupolima.net.br")
        ;

        $mail = new Mail();
        $mail->setCliente($cliente);

        $this->assertEquals("alex@grupolima.net.br", $mail->getTo());
    }
} 