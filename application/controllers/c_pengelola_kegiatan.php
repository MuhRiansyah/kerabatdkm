<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_pengelola_kegiatan
 *
 * @author RiansyahT
 */
class c_pengelola_kegiatan extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        
    }
    
    private function output($halaman_view = '', $data = array()) {
        //paramate show() yakni : halaman view, data yg akan dikirimkan, level-administrasi 
        //untuk level dapat diganti di pada templates_helper.php difolder helpers
        show("administrasi/$halaman_view", $data, 'administrasi');
    }
    
    public function index() {
        $this->output('v_kegiatan');
    }
    
}
