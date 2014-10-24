<?php

class Controller_reg extends Controller
{
    function __construct()
    {
        $this->model = new Model_reg();
        $this->view = new View();
    }
    function action_index()
    {
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            $data = $this->model->add_user();
            header("Location: http://tinymvc.loc/");
            exit();
        }

//        $model = $this->model;
//        $this->model->add_user();
        $this->view->generate('reg_view.php', 'template_view.php');
    }

}