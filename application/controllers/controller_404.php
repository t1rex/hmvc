<?php

/**
 * Class Controller_404
 *
 * просто викликає сторінку 404
 */
class Controller_404 extends Core\Controller
{

    function action_index()
    {
        $this->view->generate('404_view.php', 'LayoutSimple.php');
    }

}
