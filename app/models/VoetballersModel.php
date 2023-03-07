<?php

class VoetballersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVoetballers()
    {
        $sql = 'SELECT  Id
                       ,Naam
                       ,Club
                       ,Leeftijd
                       ,Nationaliteit
                       ,Salaris
                FROM    Voetballers';

        $this->db->query($sql);

        return $this->db->resultSet();        
    }

}