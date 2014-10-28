<?php

class Controller_Main extends Core\Controller
{

    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}