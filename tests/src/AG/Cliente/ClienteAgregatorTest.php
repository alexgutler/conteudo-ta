<?php
namespace AG\Cliente;


class ClienteAgregatorTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaFuncionamentoDoClienteAgregator()
    {
        $cliente1 = $this->getMock('\AG\Cliente\Cliente', array("getNome"));
        $cliente1->expects($this->any())
                    ->method("getNome")
                    ->willReturn("Alex Gutler")
        ;

        $cliente2 = $this->getMock('\AG\Cliente\Cliente', array("getNome"));
        $cliente2->expects($this->any())
            ->method("getNome")
            ->willReturn("Renan Gutler")
        ;

        $agregator = new \AG\Cliente\ClienteAgregator();
        $agregator->addCliente($cliente1);
        $agregator->addCliente($cliente2);

        $clientes = $agregator->getClientes();

        $this->assertEquals("Alex Gutler",$clientes[0]->getNome());
        $this->assertEquals("Renan Gutler",$clientes[1]->getNome());
    }
} 