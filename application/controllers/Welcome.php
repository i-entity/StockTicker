<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{

		if ($_POST['username'] != null) {

			$this->session->set_userdata('username', $_POST['username']);
		}


		$this->data['pagebody'] = 'homepage';	// this is the view we want shown
		$this->data['username'] = $this->session->userdata('username');
		// build the list of authors, to pass on to our view
		
		$this->render();
	}
        
       

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */