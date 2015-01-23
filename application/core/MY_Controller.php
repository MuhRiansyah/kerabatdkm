<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author muhriansyah
 */
class Member_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
//        $this->load->library('access');
        echo 'halo Member !';
//        if(!$this->access->is_login()){
//            //lepas komentar jika ingin membatasi akses
//            //redirect('akun/login');
//        }
    }
    function is_login(){
        return $this->access->is_login();
    }
    
    private function output($halaman_view = '', $data = array()) {
        //paramate show() yakni : halaman view, data yg akan dikirimkan, level-administrasi 
        //untuk level dapat diganti di pada templates_helper.php difolder helpers
        show("administrasi/$halaman_view", $data, 'administrasi');
    }
    
}

class Admin_Controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        echo 'halo Admin !';
    }
}