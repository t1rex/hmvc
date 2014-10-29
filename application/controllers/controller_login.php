<?php
/**
 * Created by PhpStorm.
 * User: t1rex
 * Date: 10/29/14
 * Time: 11:07 AM
 */

class Controller_Login extends Core\Controller
{
    function __construct()
    {
        $this->model = new Models\Model_Login();
        $this->view = new Core\View();
    }
    function action_index()
    {
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            $this->model->findUser($_POST["login"],$_POST["password"]);
            $this->view->generate('success_login.php', 'LayoutSimple.php');
            exit();
        }
        $this->view->generate('login_view.php', 'LayoutSimple.php');
    }

}