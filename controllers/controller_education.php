<?php

class Controller_Education extends Controller
{

	function action_index()
	{	
		$this->view->generate('education.php', 'template_view.php');
	}
}