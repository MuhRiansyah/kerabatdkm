<!--awal konten-->
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
                        <div class="panel-heading"><a class="btn btn-primary" href="<?php echo site_url("administrasi/profil/ubahprofil");?>"> Ubah Profil </a> </div>
                        <div class="panel-heading"><h4> Data singkat </h4> </div>
                        <?php foreach ($profil as $value) { ?>
                        <div class="col-lg-2"> 
                            <img  class="img-rounded img-polaroid"
                                  src="<?php echo base_url("aset/img/anggota/$value->foto") ?>" 
                                  width="140"/>
                        </div>
                        <div class="col-lg-10"> 
                            <table class="table table-striped">
                                    <tr>  <td> <b> NRP </b></td><td> <?php echo $value->nrp ?> </td> </tr>
                                    <tr>  <td> <b> Nama </b></td><td> <?php echo $value->nama ?> </td> </tr>
                                    <tr>  <td> <b> Jurusan </b></td><td> <?php echo $value->jurusan ?> </td> </tr>
                                    <tr>  <td> <b> Divisi </b></td><td> <?php echo $value->divisi ?> </td> </tr>
                                    <tr>  <td> <b> Kontak </b></td><td> <?php echo $value->kontak ?> </td> </tr>
                                <?php } ?>
                            </table>
                        </div>

                    </div>

                </div> 
            </div>
        </div>
    </div>
</div>
<!--akhir konten-->
