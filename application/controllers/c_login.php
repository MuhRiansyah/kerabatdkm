<?php

class C_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('anggota');
    }

    function index() {
        $data = array(
            'title' => 'Login Page'
        );
        $this->load->view('v_login', $data);
    }

    function ceklogin() {
        $nrp = $this->input->post('nrp');
        $sandi = $this->input->post('sandi');
        $validasiLogin = $this->anggota->login($nrp, $sandi);
        //query  database        
        if ($validasiLogin) {
            $sess_array = array();
            foreach ($validasiLogin as $value) {
                //membuat session
                $sess_array = array(
                    'nrp' => $nrp,
                    'nama' => $value->nama,
                    'login_administrasi' => true,
                );
            }
            $this->session->set_userdata($sess_array);
            redirect('administrasi/beranda', 'refresh');
            return TRUE;
        } else {
            //if form validate false
            $this->session->set_flashdata('notif', 'username atau password yang anda masukan salah');
            redirect(base_url(), 'refresh');
            return FALSE;
        }
    }

    function logout() {
//        $level_akun = $this->uri->segment(1);
        $this->session->unset_userdata("nama");
        $this->session->unset_userdata("nrp");
        $this->session->unset_userdata("login_administrasi");
        $this->session->set_flashdata('notif', 'Terima kasih telah menggunakan aplikasi ini');
        redirect(base_url());
    }

}
