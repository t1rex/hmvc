<?php

class Model_Portfolio extends Model
{

    public function __construct() {
        parent::__construct();
    }

    public function findAll() {
        $stmt = $this->db->query('SELECT * from table1');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = array();
        while($row = $stmt->fetch())
        {
            $result[] = $row;
        }

        return $result;
    }
}
