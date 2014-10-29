<?php

/**
 * Class Controller_reg
 *
 * контроллер реєстрації
 * додає імя і пароль в базу і переходить на головну сторінку
 */
class Controller_reg extends Core\Controller
{
    function __construct()
    {
        $this->model = new Models\Model_reg();
        $this->view = new Core\View();
    }
    function action_index()
    {
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            $this->model->add_user();
            $this->view->generate('success_reg.php', 'LayoutSimple.php');
            exit();
        }
        $this->view->generate('reg_view.php', 'LayoutSimple.php');
    }

}