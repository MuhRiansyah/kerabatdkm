<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default mar lengkung">
                <h3 class="panel-heading">
                    Ganti sandi
                </h3>
                <div class="panel-body">
                    <?php if ($this->uri->segment(3) == 'berhasil') { ?>
                        <p class="alert-success"> sandi berhasil diganti ! </p>
                    <?php } else if($this->uri->segment(3) == 'gagal'){ ?>
                        <p class="alert-danger"> sandi gagal diganti ! </p>
                    <?php } else if($this->uri->segment(3) == 'sandisalah'){ ?>
                        <p class="alert-danger"> sandi sebelumnya salah ! </p>                                                                                                        
                    <?php } else if($this->uri->segment(3) == 'sanditidaksesuai'){ ?>
                        <p class="alert-danger"> isi konfirmasi sandi dengan benar! </p>                                                                                                        
                    <?php } ?>
                    <form class="form-horizontal" method="post" action="">        

                        <?php $error = form_error('sandi_sebelumnya') ?>        
                        <div class="control-group <?php if (!empty($error)): ?>error<?php endif; ?>">
                            <label class="control-label">sandi Sebelumnya</label>                
                            <div class="controls">
                                <input class="input-xlarge" type="password" name="sandi_sebelumnya" />
                                <div class="help-block">
                                    <?php echo $error ?>
                                </div>
                            </div>
                        </div>        

                        <?php $error = form_error('sandi1') ?>        
                        <div class="control-group <?php if (!empty($error)): ?>error<?php endif; ?>">
                            <label class="control-label">sandi Baru</label>                
                            <div class="controls">
                                <input class="input-xlarge" type="password" name="sandi1" />
                                <div class="help-block">
                                    <?php echo $error ?>
                                </div>
                            </div>
                        </div>    
                        <?php $error = form_error('sandi2') ?>        
                        <div class="control-group <?php if (!empty($error)): ?>error<?php endif; ?>">
                            <label class="control-label">Tulis ulang sandi baru</label>                
                            <div class="controls">
                                <input class="input-xlarge" type="password" name="sandi2" />
                                <div class="help-block">
                                    <?php echo $error ?>
                                </div>
                            </div>
                        </div>    
                        
                        <div class="form-actions">
                            <input type="submit" class="btn btn-primary" value="ubah sandi"/>
                            <a onclick="history.go(-1)" class="btn btn-primary">Batal ubah sandi</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

