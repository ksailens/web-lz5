<?php

class Controller_Photoalbum extends Controller
{

	function action_index()
	{	
		$this->view->generate('photoalbum.php', 'template_view.php');
	}
}