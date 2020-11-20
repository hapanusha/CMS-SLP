<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Globals {

//  Pass array as an argument to constructor function
public function __construct($config = array()) {

//  Create associative array from the passed array
foreach ($config as $key => $value) {
$data[$key] = $value;
}

// Make instance of CodeIgniter to use its resources
$CI = & get_instance();

// Load data into CodeIgniter
$CI->load->vars($data);
}

}

?>