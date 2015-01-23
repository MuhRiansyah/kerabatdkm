<!--awal konten-->
<?php 
    //untuk pergantian url saudara atau saudariku
    $jenis_kelamin = $this->uri->segment(3);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default mar lengkung">
                <h1 class="panel-heading">
                    Profil
                </h1>
                <div class="panel-body">                   

                    <div class="well row-fluid" role="alert">
                        <strong>
                            Kenali profil saudara-saudarimu <i class="fa fa-fw fa-smile-o"></i>
                        </strong>

                    </div>                                        
                    <div class="row-fluid"> 
                        <a href="<?php echo base_url("administrasi/profil/") ?>" class="btn btn-primary"> Profilku</a>
                        <a href="<?php echo base_url("administrasi/profil/saudaraku") ?>" class="btn btn-primary"> Profil Saudaraku</a>
                        <a href="<?php echo base_url("administrasi/profil/saudariku") ?>" class="btn btn-primary"> Profil Saudariku</a>
                    </div>
                    <hr>
                    <div class="row-fluid ">
                        <div class="panel-heading">
                            <form method="post" action="<?php echo base_url("administrasi/profil/$jenis_kelamin"); ?>"> 
                                <input type="text" placeholder="masukkan kata kunci..." name="kataKunci" class="input input-medium"/> berdasarkan
                                <select name="kategoriPencarian" class="select">
                                    <option value="nrp"> NRP </option>
                                    <option value="nama"> Nama </option>
                                </select>
                                <input class="btn btn-primary" value="cari" type="submit" name="cari">
                            </form>
                            <br><br>
                        </div>
                        <div class="col-lg-10"> 
                            <center><h3> Daftar <?php echo $jenis_kelamin;?> </h3><br></center>
                            <?php
                            if (isset($daftar_saudaraku)) {
                                if ($this->uri->segment(4) == NULL) {
                                    $kataKunci = $this->input->post('kataKunci');
                                    $kategoriPencarian = $this->input->post('kategoriPencarian');
                                    echo "<p>menampilkan hasil pencarian <u><b>$kategoriPencarian</b></u> anggota "
                                    . "dengan kata kunci <u><b>$kataKunci</b></u> </p><br>";
                                } else {
                                    $angkatan = $this->uri->segment(4);
                                    echo "<p>menampilkan hasil pencarian anggota untuk angkatan <u><b>20$angkatan</b></u><p> <br>";                                    
                                }
                                echo $daftar_saudaraku;
                            } else {
                                echo "silahkan cari saudara/i mu terlebih dahulu..";
                            }
                            ?>    
                        </div>
                        <div class="col-lg-2"> 
                            <u> <h6> Jumlah <?php echo $jenis_kelamin;?> per angkatan </h6></u>
                            <table class="table table-striped">
                                <?php echo $jumlah_anggota ?>
                            </table>                            
                        </div>



                    </div>

                </div> 
            </div>
        </div>
    </div>
</div>
<!--akhir konten-->
