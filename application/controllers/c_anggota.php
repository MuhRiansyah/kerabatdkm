<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_anggota
 *
 * @author RiansyahT
 */
class C_anggota extends Member_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function cetakHalo() {
        echo '<br>method';
    }
    
    public function index() {
        echo '<br>method index';
    }
    
    
}
