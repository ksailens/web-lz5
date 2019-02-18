<?php

class Controller_Test extends Controller
{

	function action_index()
	{	
		$this->view->generate('test.php', 'template_view.php');
	}
}