<?php
namespace AG;


use Doctrine\Instantiator\Exception\InvalidArgumentException;

class MathTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
       $this->assertInstanceOf('AG\Math', new \AG\Math());
    }

    public function somaProvider()
    {
        return [
            [2,2,4],
            [3,3,6],
            [4,4,8],
            [10,10,20],
            [15,16,31]
        ];
    }

    /**
     * @dataProvider somaProvider
     */
    public function testVerificaSeConsegueSomarComProvider($x, $y, $resultado)
    {
        $math = new \AG\Math();

        $result = $math->soma($x, $y);
        $this->assertEquals($resultado, $result);
    }

    public function testVerificaSeConsegueSomar()
    {
        $math = new \AG\Math();

        $result = $math->soma(10, 2); // deve ser 12
        $this->assertEquals(12, $result);

        $result = $math->soma(10, 12); // deve ser 22
        $this->assertEquals(22, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeConsegueSomarQuandoValorNaoENumerico()
    {
        $math = new \AG\Math();

        $math->soma(10, "Este é um teste!");
    }
} 