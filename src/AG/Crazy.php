<?php

namespace AG;


class Crazy
{
    private $frase;

    /**
     * @return mixed
     */
    public function getFrase()
    {
        return $this->frase;
    }

    /**
     * @param mixed $frase
     */
    public function setFrase($frase)
    {
        $this->frase = $frase;
    }

    public function getLoop($valor)
    {
        if (!is_int($valor))
        {
            throw new \InvalidArgumentException("O valor deve ser numérico!");
        }
        return range(0, $valor);
    }

    public function soma($x, $y)
    {
        return $x + $y;
    }
} 