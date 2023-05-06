<?php
namespace Libs\Database;
use PDOException;

class RolesTable
{
    private $db = null;
    
    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    public function insert($data)
    {
        try{
            $query = "INSERT INTO roles (name) VALUES (:name)";
            $statement = $this->db->prepare($query);
            $statement->execute($data);

            return $this->db->lastInsertId();
        } catch (PDOException $e){
            return $e->getMessage();
        }
    }
}