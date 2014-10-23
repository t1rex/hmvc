<?php

class Controller_Main extends Controller
{

	function action_index()
	{

        $data = array(
            'user' => 'John',
            'email' => 'example@g.com'
        );
		$this->view->generate('main_view.php', 'template_view.php');
	}
}