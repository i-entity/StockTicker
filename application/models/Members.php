<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Members extends CI_Model {
    
  function __construct() {
    parent::__construct();
  }
  
  function get_user($name) {
        $sql_movement = "SELECT * FROM members WHERE name= ?;";
        $query = $this->db->query($sql_movement, array($name));
        return $query->result_array();
    }
  
    
   function insert_into_members($name, $pass){
       $sql = "INSERT INTO members (name, password) VALUES (?, ?);";
       $query = $this->db->query($sql, array($name, $pass));
       
   }
    
}