<?php
namespace Models;

use Core;


class Model_Login extends Core\Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findUser($name, $pass)
    {
        $stmt = $this->db->query('SELECT * from users');
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $bool = false;
        while($row = $stmt->fetch()) {
            if ($name == $row['name'] && $pass == $row['password']){
                $bool = true;
                define("UserName",$name,true );
            }
        }
        return $bool;
    }
}