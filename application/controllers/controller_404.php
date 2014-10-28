<?php

class Controller_404 extends Core\Controller
{

    function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }

}
