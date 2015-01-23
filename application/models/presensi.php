<?php

class Presensi extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getHari() {
        $this->db->select('id_hari,hari');
        $this->db->from('tb_hari');
        //get query and processing
        $query = $this->db->get();
        return $query->result();
    }

    function getMataPelajaran($id_pbm) {
        $query = $this->db->query("
                SELECT tb_matapelajaran.nama 
                FROM tb_belajar_mengajar,tb_guru,tb_matapelajaran 
                WHERE id_pbm = $id_pbm
                    AND tb_guru.nip = tb_belajar_mengajar.nip 
                    AND tb_matapelajaran.id_mapel = tb_guru.id_mapel             
                    ");
        foreach ($query->result() as $value) {
            $mapel = $value->nama; 
        };
        return $mapel;
    }

    function getKegiatanBelajarMengajar($id_hari) {
        $query = $this->db->query("
            SELECT kelas,jam,tb_matapelajaran.nama as mapel,tb_guru.nama as nama_guru, 
                tb_belajar_mengajar.id_pbm as link
            FROM tb_belajar_mengajar, tb_hari,tb_kelas,tb_guru,tb_matapelajaran
            WHERE tb_hari.id_hari = $id_hari AND
                tb_belajar_mengajar.id_hari = tb_hari.id_hari AND
                tb_belajar_mengajar.id_kelas = tb_kelas.id_kelas AND
                tb_belajar_mengajar.nip = tb_guru.nip AND 
                tb_guru.id_mapel = tb_matapelajaran.id_mapel
            ORDER BY tb_kelas.kelas ASC
                ");
        return $query->result();
    }

    function getPresensi($id_belajar_mengajar, $pertemuan) {
        $query = $this->db->query("
            SELECT DISTINCT (tb_siswa.nis),nama,status_kehadiran
            FROM tb_siswa,tb_kelas,tb_presensi,tb_belajar_mengajar
            WHERE pertemuan = $pertemuan AND tb_presensi.id_pbm  = $id_belajar_mengajar
                AND tb_siswa.id_kelas = tb_kelas.id_kelas
                AND tb_siswa.nis = tb_presensi.nis                
                AND tb_presensi.id_pbm = tb_belajar_mengajar.id_pbm
            ORDER BY tb_siswa.nama ASC
            ");

        return $query->result();
    }
    

    function getStatistikKehadiran($id_belajar_mengajar) {
        $output = "";
        $dataSiswa = $this->db->query("
                SELECT DISTINCT(tb_presensi.nis),nama 
                FROM tb_presensi,tb_siswa
                WHERE id_pbm = $id_belajar_mengajar 
                    AND tb_siswa.nis = tb_presensi.nis
                ORDER BY nama ASC
            ");
        foreach ($dataSiswa->result() as $value) {
            $dataStatistik = $this->db->query("
                SELECT  tb_siswa.nis,nama,h.hadir,p.pertemuan,((h.hadir/p.pertemuan)*100) as presentasi
                FROM tb_presensi,tb_siswa,
                    (SELECT COUNT(id_presensi) hadir FROM tb_presensi 
                        WHERE status_kehadiran = 'hadir' 
                        AND nis = '$value->nis'
                        AND id_pbm = $id_belajar_mengajar
                    ) h,
                    (SELECT COUNT(DISTINCT(pertemuan)) pertemuan FROM tb_presensi 
                        WHERE id_pbm = $id_belajar_mengajar ) p 
                WHERE tb_siswa.nis = '$value->nis' AND tb_presensi.nis = tb_siswa.nis 
                LIMIT 0,1            
            ");
            foreach ($dataStatistik->result() as $val) {
                $output .= "<tr>"
                        . "<th> $val->nis </th>"
                        . "<td> $val->nama </td>"
                        . "<td> $val->presentasi % </td>"
                        . "</tr>"
                        . "";
            }
        }
        return $output;
    }

    function getStatistikKehadiranGuru($id_belajar_mengajar) {
        $output = "";
        $query = $this->db->query("
            SELECT  tb_guru.nip,nama,h.hadir,p.pertemuan,((h.hadir/p.pertemuan)*100) as presentasi
                FROM tb_presensi,tb_guru,tb_belajar_mengajar,
                (SELECT COUNT(DISTINCT(pertemuan)) hadir FROM tb_presensi 
                    WHERE status_hadir_guru = 'hadir' 
                    AND id_pbm = $id_belajar_mengajar
                ) h,
                (SELECT COUNT(DISTINCT(pertemuan)) pertemuan FROM tb_presensi 
                    WHERE id_pbm = $id_belajar_mengajar ) p 
            WHERE tb_presensi.id_pbm = $id_belajar_mengajar AND
                tb_presensi.id_pbm = tb_belajar_mengajar.id_pbm AND 
                tb_guru.nip = tb_belajar_mengajar.nip 
            LIMIT 0,1            
            ");
        foreach ($query->result() as $value) {
            $output = " <p> Nama Guru : $value->nama </p>
                    <p> NIP : $value->nip </p>
                    <p> Statistik Kehadiran : $value->presentasi %</p>
                    <br><br>"
                    . "";
        }
        return $output;
    }
    
    function getBeritaAcara($id_pbm, $pertemuan){
        $query = $this->db->query("SELECT tanggal, tb_guru.nama as guru, tb_guru.nip, bab,berita_acara,status_hadir_guru "
                . "FROM tb_presensi,tb_guru,tb_belajar_mengajar,tb_materi "
                . "WHERE tb_presensi.id_pbm = $id_pbm AND pertemuan = $pertemuan "
                . "AND tb_presensi.id_pbm = tb_belajar_mengajar.id_pbm "
                . "AND tb_belajar_mengajar.nip = tb_guru.nip "
                . "AND tb_materi.id_materi = tb_presensi.id_materi "
                . "");
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }        
        
    }
    function getPertemuan($id_pbm) {
        $query = $this->db->query("SELECT distinct(pertemuan) "
                . "FROM tb_presensi WHERE id_pbm = $id_pbm");
        return $query->result();
    }

}
