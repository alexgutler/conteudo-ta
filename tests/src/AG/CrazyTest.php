<?php

namespace AG;


class CrazyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Retornar uma frase passada por parametro
     * loop de 0 a x
     * Retornar na tela a soma de dois numeros passados por parametro
     */
    public function testVerificaSeImprimiUmaFrasePassadaPorParametro()
    {
        $crazy = new Crazy();
        $crazy->setFrase("Minha Frase");
        $this->assertEquals("Minha Frase", $crazy->getFrase());
    }

    public function testVerificaSeRetornaLoop()
    {
        $crazy = new Crazy();
        $data = $crazy->getLoop(10);
        $array = range(0,10);
        $this->assertEquals($array, $data);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeAEntradaDoLoopEhValida()
    {
        $crazy = new Crazy();
        $crazy->getLoop("este é um teste");
    }

    public function testVerificaSeConsegueSomar()
    {
        $crazy = new Crazy();
        $this->assertEquals(8,$crazy->soma(5,3));
    }
} 