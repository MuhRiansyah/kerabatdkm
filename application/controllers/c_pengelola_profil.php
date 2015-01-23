<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_pengelolal_curhat
 *
 * @author RiansyahT
 */
class C_pengelola_profil extends CI_Controller {

    private $nrp;
    private $nama;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('anggota');
        if ($this->session->userdata('login_administrasi') != TRUE) {
            $this->session->set_flashdata('notif', 'LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('login', 'refresh');
        } else {
            $this->nrp = $this->session->userdata('nrp');
        }
    }

    private function output($halaman_view = '', $data = array()) {
        //paramate show() yakni : halaman view, data yg akan dikirimkan, level-administrasi 
        //untuk level dapat diganti di pada templates_helper.php difolder helpers
        show("administrasi/$halaman_view", $data, 'administrasi');
    }

    public function index() {
        $data['profil'] = $this->anggota->get_profil($this->nrp);
        $this->output('v_profil', $data);
    }
    
    public function ubah_profil() {
        $data['profil'] = $this->anggota->get_profil($this->nrp);
        $this->output('v_ubah_profil', $data);
    }

    public function beranda() {
        $this->output('v_beranda');
    }

    public function ganti_sandi() {        
        $this->load->library('form_validation');
        $this->valid = $this->form_validation; //persingkat nama agar lebih mudah digunakan                
        $this->valid->set_rules('sandi_sebelumnya', 'Password sebelum anda', 'required|min_length[7]|max_length[35]');
        $this->valid->set_rules('sandi1', 'Password anda', 'required|min_length[7]|max_length[35]');
        $validasi_sandi = $this->valid->run();
        if ($validasi_sandi == TRUE) {
            $this->cek_sandi();
            $this->konfirmasi_sandi();
            $data['sandi'] = $this->input->post('sandi1');
            if ($this->anggota->ganti_sandi($this->nrp, $data) == TRUE) {
                redirect('administrasi/gantisandi/berhasil');
            } else {
                redirect('administrasi/gantisandi/gagal');
            }
        } else {
            $this->output('v_ganti_sandi');
        }
    }

    public function cek_sandi() {        
        $sandi_sebelumnya = $this->input->post('sandi_sebelumnya');
        $cek_sandi = $this->anggota->cek_sandi($this->nrp, $sandi_sebelumnya);
        if ($cek_sandi == FALSE) {
            redirect('administrasi/gantisandi/sandisalah');
        }
    }

    public function konfirmasi_sandi() {
        $sandi1 = $this->input->post('sandi1');
        $sandi2 = $this->input->post('sandi2');
        if ($sandi1 != $sandi2) {
            redirect('administrasi/gantisandi/sanditidaksesuai');
        }
    }

    public function profil_saudaraku() {
        //profil saudara dan saudariku digabung
        if ($this->uri->segment(3) == 'saudaraku') {
            $jenis_kelamin = 'L';
        } else {
            $jenis_kelamin = 'P';
        }
        if ($this->uri->segment(4) == NULL) {
            if (isset($_POST['cari'])) {
                $kataKunci = $this->input->post('kataKunci');
                $kategoriPencarian = $this->input->post('kategoriPencarian');
                $data['daftar_saudaraku'] = $this->anggota->get_saudaraku($kategoriPencarian, $kataKunci, '', $jenis_kelamin);
            }
        } else {
            $angkatan = $this->uri->segment(4);
            $data['daftar_saudaraku'] = $this->anggota->get_saudaraku('', '', $angkatan, $jenis_kelamin);
        }
        $data['jumlah_anggota'] = $this->anggota->get_jumlah_anggota($jenis_kelamin);
        $this->output('v_profil_saudaraku', $data);
    }

}
