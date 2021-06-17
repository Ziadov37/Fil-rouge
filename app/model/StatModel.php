<?php

class StatModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getStat()
    {
        //preparation de la query
        $this->db->query("SELECT * FROM `prof` ");
        //execution de la query / fetch all 
        $result = $this->db->resultSet();
        return $result;
    }
}