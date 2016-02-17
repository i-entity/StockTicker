<?php

class Playerprofile extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['player'] = $this->session->userdata('username');
        $this->data['gold_qty'] = 10;
        $this->data['silver_qty'] = 20;
        $this->data['bonds_qty'] = 30;
        $this->data['oil_qty'] = 40;
        $this->data['industrials_qty'] = 50;
        $this->data['grains_qty'] = 60;
        $this->data['pagebody'] = 'playerprofile';	// this is the view we want shown
        // build the list of authors, to pass on to our view

        $this->render();
    }

    function profile($id) {


        $this->data['pagebody'] = 'playerprofile';
        $this->data['gold_qty'] = 10;
        $this->data['silver_qty'] = 20;
        $this->data['bonds_qty'] = 30;
        $this->data['oil_qty'] = 40;
        $this->data['industrials_qty'] = 50;
        $this->data['grains_qty'] = 60;

        $this->render();
    }



}