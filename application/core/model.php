<?php
namespace Core;

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