<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Stock_Info extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_stock_info($id) {
        if ($id != FALSE) {
            $query = $this->db->get_where('stocks', array('id' => $id));
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

}
