<?php

use Core\Controller;

class NotFoundController extends Controller
{
	
	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}

}
