<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default mar lengkung">
                <h3 class="panel-heading">
                    Ubah Profil
                </h3>
                <div class="panel-body">
                    <?php if ($this->uri->segment(3) == 'gagal') { ?>
                        <p class="alert-danger"> sandi gagal diganti ! </p>
                    <?php } ?>
                    <div class="well row-fluid" role="alert">
                        <strong>
                            Hubungi admin jika kamu ingin mengubah foto,nama atau nrp-mu <i class="fa fa-fw fa-smile-o"></i>
                        </strong>
                    </div>                               
                    <form class="form-horizontal" method="post" action="">        
                        <?php foreach ($profil as $value) { ?>
                        
                            <div class="control-group <?php if (!empty($error)): ?>error<?php endif; ?>">
                                <label class="control-label">Nrp</label>                
                                <div class="controls">
                                    <input class="disabled input-xlarge" type="text" name="nrp" 
                                           value="<?php echo $value->nrp;?>" readonly/>
                                </div>
                            </div>        
                        
                            <div class="control-group <?php if (!empty($error)): ?>error<?php endif; ?>">
                                <label class="control-label">Nama</label>                
                                <div class="controls">
                                    <input class="input-xlarge" type="text" name="nama" 
                                           value="<?php echo $value->nama;?>" readonly/>
                                </div>
                            </div>        
                        
                            <div class="control-group">
                                <label class="control-label">Jurusan</label>                
                                <div class="controls">
                                    <select class="select" name="jurusan">
                                        <option value=""> Teknik informatika</option>
                                    </select>
                                </div>
                            </div>        
                        
                            <div class="control-group">
                                <label class="control-label">Divisi</label>                
                                <div class="controls">
                                    <select class="select" name="divisi">
                                        <option value=""> Rumah Tangga Dan Jum'atan</option>
                                    </select>
                                </div>
                            </div>        
                        
                            <?php // $error = form_error('kontak') ?>        
                            <div class="control-group <?php if (!empty($error)): ?>error<?php endif; ?>">
                                <label class="control-label">Kontak</label>                
                                <div class="controls">
                                    <input class="input-xlarge" type="text" name="kontak" 
                                          value="<?php echo $value->kontak;?>" />
                                    <div class="help-block">
                                        <?php // echo $error ?>
                                    </div>
                                </div>
                            </div>        

                        <?php } ?>

                        <div class="form-actions">
                            <input type="submit" class="btn btn-primary" value="ubah profil"/>
                            <a onclick="history.go(-1)" class="btn btn-primary">Batal ubah profil</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

