<?php

class Controller_History extends Controller
{

	function action_index()
	{	
		$this->view->generate('history.php', 'template_view.php');
	}
}