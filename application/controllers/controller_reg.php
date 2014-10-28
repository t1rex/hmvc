<?php


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
            $data = $this->model->add_user();
            header("Location: http://tinymvc.loc/");
            exit();
        }
        $this->view->generate('reg_view.php', 'template_view.php');
    }

}