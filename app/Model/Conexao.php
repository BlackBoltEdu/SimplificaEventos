<?php

namespace App\Model;

class Conexao
{

    const HOST = 'localhost';
    const NAME = 'simplificaeventos';
    const USER = 'root';
    const PASS = '';
    private $table;

    /**
     * Construtor da classe
     */
    public function __construct($table)
    {
        $this->table = $table;
    }

    public static $connect;

    /**
     * Método responsável por conexão com o banco de dados 
     * @return getMessage();
     */
    public static function getConn()
    {
        try {
            self::$connect = new \PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME . ';charset=utf8', self::USER, self::PASS);
            return self::$connect;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Método responsável por cadastrar informações
     * @param array $values
     * @return integer
     */
    public function create($values)
    {

        $fields = array_keys($values);
        $binds  = array_pad([], count($fields), '?');
        $sql = "INSERT INTO " . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
        $stmt = self::getConn()->prepare($sql);
        $stmt->execute(array_values($values));

        return self::$connect->lastInsertId();
    }

    /**
     * Método responsável por retornar consulta
     * @param string $where
     * @param string $order
     * @param integer $limit
     * @param string $fields 
     * @return array
     */
    public function read($where = null, $order = null, $limit = null, $fields = '*')
    {
        $where = strlen($where) ? ' WHERE ' . $where    : ' '; // SE EU TIVER CONTEÚDO NESSA VARIAVEL FAÇA "ISSO" SENÃO FAÇA "AQUILO"
        $order = strlen($order) ? ' ORDER BY ' . $order : ' ';
        $limit = strlen($limit) ? ' LIMIT ' . $limit    : ' ';

        $sql = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;
        $stmt = self::getConn()->query($sql);

        return  $stmt->rowCount() != 0 ? $stmt->fetchAll(\PDO::FETCH_ASSOC) : [];
    }

    /**
     * Método responsável por atualizar informações
     * @param string $where
     * @param array $values
     * @return boolean
     */
    public function update($where, $values)
    {
        $fields = array_keys($values);
        $sql = 'UPDATE ' . $this->table . ' SET ' . implode('=?,', $fields) . '=?' . '  WHERE ' . $where . ' ';
        $stmt = self::getConn()->prepare($sql);
        $stmt->execute(array_values($values));

        return $stmt->rowCount() != 0 ? true : false;
    }

    /**
     * Método responsável por deletar informações
     * @param string $where
     * @return boolean
     */
    public function delete($where)
    {
        $sql = 'DELETE  FROM ' . $this->table . ' WHERE ' . $where . ' ';
        $stmt = self::getConn()->query($sql);

        return $stmt->rowCount() != 0 ? true : false;
    }
}