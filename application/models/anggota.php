<?php

class Anggota extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function login($nrp, $sandi) {
        //create query to connect user login database
        $this->db->select('nrp,sandi,nama');
        $this->db->from('mahasiswa');
        $this->db->where('nrp', $nrp);
        $this->db->where('sandi', $sandi);
        $this->db->limit(1);

        //get query and processing
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
    
    public function cek_sandi($nrp, $sandi_sebelumnya) {
        $query = $this->db->query("SELECT sandi FROM mahasiswa "
                . "WHERE nrp = $nrp AND sandi = '$sandi_sebelumnya'");
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ganti_sandi($nrp, $data) {
        $this->db->where('nrp', $nrp);
        $status = $this->db->update('mahasiswa', $data);
        return $status;
    }    
    
    function get_jumlah_anggota($jenis_kelamin) {
        $output = '';
        if($jenis_kelamin == 'L'){
            $url = 'saudaraku';
        }else{
            $url = 'saudariku';
        }
        for ($tahun = 2009; $tahun < 2015; $tahun++) {
            $angkatan = substr($tahun, 2, 3);
            $query = $this->db->query("SELECT count(nrp) jumlah FROM mahasiswa "
                    . "WHERE nrp LIKE  '$angkatan%' AND jenis_kelamin = '$jenis_kelamin'");
            foreach ($query->result() as $val) {
                if ($val->jumlah > 0) {
                    $output .= "<tr> <td><b>$tahun </b></td> "
                            . "<td> <a href='" . base_url("administrasi/profil/$url/$angkatan") . "'>$val->jumlah orang</a></td>"
                            . "</tr>";
                } else {
                    $output .= "<tr> <td><b>$tahun </b></td> <td> $val->jumlah orang</td></tr>";
                }
            }
        }
        return $output;
    }
    
    function get_profil($nrp = '') {
        $query = $this->db->query("SELECT nrp,mahasiswa.nama,jurusan,divisi.nama as divisi,kontak,foto "
                . "FROM mahasiswa,divisi "
                . "WHERE nrp = '".$nrp."' AND "
                . "mahasiswa.id_divisi = divisi.id_divisi ");
        return $query->result();
    }
    
    function get_saudaraku($kategoriPencarian= '',$kataKunci = '',$angkatan = '',$jenis_kelamin = '') {
        $output = '';
        $queryCari = "SELECT nrp,mahasiswa.nama,jurusan,divisi.nama as divisi,kontak,foto "
                . "FROM mahasiswa,divisi "
                . "WHERE jenis_kelamin = '$jenis_kelamin' "
                . "AND mahasiswa.id_divisi = divisi.id_divisi ";
        if($kategoriPencarian == 'nrp'){
            $queryCari .= "AND nrp LIKE  '%$kataKunci%' ";
        }elseif ($kategoriPencarian == 'nama') {
            $queryCari .= "AND mahasiswa.nama LIKE  '%$kataKunci%' ";
        }elseif ($angkatan != '') {
            $queryCari .= "AND nrp LIKE  '$angkatan%' ";
        }
        
        $query = $this->db->query($queryCari);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $val) {
                $output .= " <div class='row'>"
                        . "<div class='col-lg-3'> "
                        . "<img  class='img-rounded img-polaroid' src='" . base_url("aset/img/anggota/$val->foto") . "' width='140'/></div>
                        <div class='col-lg-8'>
                            <table class='table table-striped'>
                                <tr>  <td width='180'> <b> NRP </b></td><td> $val->nrp </td> </tr>
                                <tr>  <td> <b> Nama </b></td><td> $val->nama </td> </tr>
                                <tr>  <td> <b> Jurusan </b></td><td> $val->jurusan </td> </tr>
                                 <tr>  <td> <b> Divisi </b></td><td> $val->divisi </td> </tr>   
                                <tr>  <td> <b> Kontak </b></td><td> $val->kontak</td> </tr>
                            </table>                            
                        </div>                      
                        </div>
                        <hr>
"
                ;
            }
        } else {
            $output .= '<div class="col-lg-10"> 
                            hasil pencarian tidak ditemukan
                        </div>';
        }
        return $output;
    }

}
