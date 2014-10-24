<?php
class Model_reg extends Model
{

    public function __construct() {
        parent::__construct();
    }

    public function add_user() {

            $sql = 'INSERT INTO users (name, password) VALUE (\'' . $_POST["login"]. '\', \''.$_POST["password"].'\')';
            $this->db->exec($sql);
            return true;
    }
}