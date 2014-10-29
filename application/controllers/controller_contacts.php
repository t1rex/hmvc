<?php

/**
 * Class Controller_Contacts
 *
 * контроллер контактів
 */
class Controller_Contacts extends Core\Controller
{

    function action_index()
    {
        $this->view->generate('contacts_view.php', 'LayoutSimple.php');
    }
}
