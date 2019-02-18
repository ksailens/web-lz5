<?php

class Controller_MyInterests extends Controller
{

	function action_index()
	{	
		$this->view->generate('myInterests.php', 'template_view.php');
	}
}