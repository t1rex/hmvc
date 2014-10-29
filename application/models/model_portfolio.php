<?php
namespace Models;

use Core;

/**
 * Class Model_Portfolio
 *
 * модель для отримання даних з бази
 * підключається до бози за допомогою батьківського конструктора
 * вибирає всі дані з таблиці table1
 *
 * @package Models
 */
class Model_Portfolio extends Core\Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll()
    {
        $stmt = $this->db->query('SELECT * from table1');
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        $result = array();
        while($row = $stmt->fetch()) {
            $result[] = $row;
        }

        return $result;
    }
}
