<?php
namespace Core;
/**
 * Class Controller
 *
 * абстрактний клас для всіх контроллерів
 * створює екземпляр класу View в конструкторі
 * @package Core
 */
abstract class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    // действие (action), вызываемое по умолчанию
    function action_index()
    {
        // todo
    }
}
