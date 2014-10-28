<?php


class Controller_Portfolio extends Core\Controller
{

    function __construct()
    {
        $this->model = new Models\Model_Portfolio();
        $this->view = new Core\View();
    }

    function action_index()
    {
        $data = $this->model->findAll();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }
}
