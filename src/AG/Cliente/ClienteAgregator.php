<?php
namespace AG\Cliente;


class ClienteAgregator
{
    private $clientes = array();

    function addCliente(Cliente $cliente)
    {
        $this->clientes[] = $cliente;
    }

    function getClientes()
    {
        return $this->clientes;
    }
} 