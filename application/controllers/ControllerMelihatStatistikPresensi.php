<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ControllerMelihatStatistikPresensi extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('login_administrasi') != TRUE) {
            $this->session->set_flashdata('notif', 'LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('login', 'refresh');
        };
        $this->load->library(array('table'));
        $this->load->model('presensi');
    }

    private function output($halaman_view = '', $data = array()) {
        //paramate show() yakni : halaman view, data yg akan dikirimkan, level-administrasi 
        //untuk level dapat diganti di pada templates_helper.php difolder helpers
        show("administrasi/$halaman_view", $data, 'administrasi');
    }

    public function index() {
        redirect('administrasi/beranda');
    }

    function beranda() {
        $this->output('frameBeranda');
    }

    function presensi() {
        $index['daftar_hari'] = $this->presensi->getHari();
        $this->output('framePresensi', $index);
    }
    
    function listBelajarMengajar() {
        $id_hari = $this->uri->segment(3);        
        $index['daftar_kegiatan_belajar_mengajar'] = $this->presensi->getKegiatanBelajarMengajar($id_hari);
        $index['daftar_hari'] = $this->presensi->getHari();
        $this->output('frameBelajarMengajar', $index);
    }
    
    function listPresensiSiswa() {        
        $id_pbm = $this->uri->segment(4);
        $pertemuan = $this->uri->segment(5);
        $index['mapel'] = $this->presensi->getMataPelajaran($id_pbm);
        $index['jumlah_pertemuan'] = $this->presensi->getPertemuan($id_pbm);
        $index['absen'] = $this->presensi->getPresensi($id_pbm, $pertemuan);        
        $index['berita_acara'] = $this->presensi->getBeritaAcara($id_pbm, $pertemuan);        
        $this->output('framePresensiKelas', $index);
    }
    
    function listStatistikPresensi() {        
        $id_pbm = $this->uri->segment(4);
        $index['mapel'] = $this->presensi->getMataPelajaran($id_pbm);
        $index['statistik_kehadiran'] = $this->presensi->getStatistikKehadiran($id_pbm);         
        $index['statistik_guru'] = $this->presensi->getStatistikKehadiranGuru($id_pbm);         
        $this->output('frameStatistikPresensi', $index);
    }


    
}
