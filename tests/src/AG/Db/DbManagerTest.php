<?php
namespace AG\Db;

class DbManagerTest extends \PHPUnit_Framework_TestCase
{
    private $db;

    public function setUp()
    {
        $this->db = new \PDO("sqlite::memory:");

        $sql = "create table clientes(id integer AUTO_INCREMENT, nome varchar(150), email varchar(150))";
        $this->db->exec($sql);
    }

    public function tearDown()
    {
        $this->db->exec("DROP TABLE clientes");
    }

    public function testVerificaSeTemAdaptadorValidoDeBancoDeDados()
    {
        $dbManager = new DbManager();

        $dbManager->setDbAdapter(new \PDO("sqlite:teste.db"));

        $this->assertInstanceOf('\PDO', $dbManager->getDbAdapter());
    }

    public function testVerificaInsertDeDadosDoCliente()
    {
        $cliente = new \AG\Cliente\Cliente();
        $cliente->setNome("Alex");
        $cliente->setEmail("alex@email.com");

        $dbManager = new DbManager();
        $dbManager->setDbAdapter($this->db);

        $dbManager->persist($cliente);
        $dbManager->flush();

        $res = $this->db->query("select * from clientes");

        $this->assertEquals(1, count($res->fetchAll(\PDO::FETCH_ASSOC)));
    }
}