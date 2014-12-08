<?php
namespace AG\Db;


class DbManager
{
    private $db;
    private $entities = array();

    public function setDbAdapter(\PDO $db)
    {
        $this->db = $db;
    }

    public function getDbAdapter()
    {
        return $this->db;
    }

    public function persist($entity)
    {
        $this->entities[] = $entity;
    }

    public function flush()
    {
        foreach ($this->entities as $entity)
        {
            $query = "insert into clientes(nome, email) values ('{$entity->getNome()}', '{$entity->getEmail()}')";
            $this->db->exec($query);
        }
    }
} 