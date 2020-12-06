<?php

require_once(__DIR__."/../DB/database.php");

class Sponsor {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getSponsorById($id) {
        $this->db->query("SELECT * FROM sponsors WHERE upline_id = :id");
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
}