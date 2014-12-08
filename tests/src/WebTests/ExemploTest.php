<?php

namespace AG;

class ExemploTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://www.wikipedia.org');
    }

    public function testVerificaTitle()
    {
        $this->url('http://www.wikipedia.org');
        $this->assertEquals('Titulo', $this->title());
    }
} 