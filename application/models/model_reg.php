<?php
namespace Models;

use Core;

/**
 * Class Model_reg
 *
 * модель для форми реєстарції
 * просто вставляє імя і пароль нового юзера в базу
 * при цьому шифруючи пароль
 * @package Models
 */
class Model_reg extends Core\Model
{

    public function __construct() {
        parent::__construct();
    }

    public function add_user() {
            $password = crypt($_POST["password"],'$1$salt$');
            $sql = 'INSERT INTO users (name, password) VALUE (\'' . $_POST["login"]. '\', \''.$password.'\')';
            $this->db->exec($sql);
            return true;
    }
}