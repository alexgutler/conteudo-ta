<?php
namespace AG;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Math
{
    public function soma($x,$y)
    {
        if (!is_numeric($x) or !is_numeric($y))
        {
            throw new \InvalidArgumentException("Os valores devem ser numéricos!s");
        }
        return $x + $y;
    }
} 