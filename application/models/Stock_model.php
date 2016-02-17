<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Stock_model extends CI_Model {

    function __construct() {
        // Call the Model constructor  
        parent::__construct();
    }

    function get_stocks() {
        $query = $this->db->get('stocks');
        return $query->result_array();
    }

}
