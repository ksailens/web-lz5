<?php

class Controller_aboutMe extends Controller
{

	function action_index()
	{	
		$this->view->generate('aboutMe.php', 'template_view.php');
	}
}