<?php
//namespace MvcSpace;

class Controller_Services extends Core\Controller
{

    function action_index()
    {
        $this->view->generate('services_view.php', 'template_view.php');
    }
}
