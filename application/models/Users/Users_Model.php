<?php

class Users_Model extends CI_Model {

    function __construct() {
        $this->load->database(); // load databse library in constructor
        $this->load->library('session');
        parent::__construct();
    }

}
