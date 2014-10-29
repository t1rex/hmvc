<?php
namespace Core;
/**
 * Class Model
 *
 * абстрактний клас всіх моделей
 * підключається до бази даних в конструкторі
 *
 * @author nazar
 * @package Core
 */
abstract class Model
{
    protected $db = null;

    public function __construct()
    {
        if (null === $this->db) {
            $this->db = new \PDO('mysql:host=localhost;dbname=tinymvc', 'root', 'qwsa');
            $this->db->exec('SET NAMES utf8');
        }
    }
}