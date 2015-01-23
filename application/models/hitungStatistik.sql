-- hitung presensi per 1 siswa, paramater: id_pbm, nis
SELECT  tb_siswa.nis,nama,h.hadir,p.pertemuan,((h.hadir/p.pertemuan)*100) as presentasi
FROM tb_presensi,tb_siswa,
    (SELECT COUNT(id_presensi) hadir FROM tb_presensi 
        WHERE status_kehadiran = 'hadir' 
        AND nis = '123020001'
        AND id_pbm = 1
    ) h,
    (SELECT COUNT(DISTINCT(pertemuan)) pertemuan FROM tb_presensi 
        WHERE id_pbm = 1 ) p 
WHERE tb_siswa.nis = '123020001' AND tb_presensi.nis = tb_siswa.nis 
LIMIT 0,1

-- meretrive siswa pada satu kegiatan belajar mengajar tertentu 
SELECT DISTINCT(tb_presensi.nis),nama 
FROM tb_presensi,tb_siswa
WHERE id_pbm = 1 AND tb_siswa.nis = tb_presensi.nis
ORDER BY nama ASC