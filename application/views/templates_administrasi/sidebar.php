
<!--awal sidebar-->                   
<div class="navbar-default sidebar" role="navigation" style="margin-top: 100px ">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li> <a class='hijau' <?php
            if ($this->uri->segment(2) == "beranda" || $this->uri->segment(2) == "") {
                echo 'class="active"';
            }
            ?> 
                href="<?php echo site_url('administrasi/beranda'); ?>"><i class="fa fa-fw fa-home "></i> Beranda</a>
            </li>                        
            <li><a class='hijau' <?php
            if ($this->uri->segment(2) == "absensi") {
                echo 'class="active"';
            }
            ?> 
                href="<?php echo site_url('administrasi/profil'); ?>"><i class="fa fa-fw fa-male"></i> Profil</a>
            </li>
<!--            
            <li><a class='hijau' <?php
            if ($this->uri->segment(2) == "absensi") {
                echo 'class="active"';
            }
            ?> 
                href="<?php echo site_url('administrasi/usulan'); ?>"><i class="fa fa-fw fa-gift"></i> Usulan</a>
            </li>
            <li><a class='hijau' <?php
            if ($this->uri->segment(2) == "absensi") {
                echo 'class="active"';
            }
            ?> 
                href="<?php echo site_url('administrasi/curhat'); ?>"><i class="fa fa-fw fa-smile-o"></i> Curhat</a>
            </li>
            
            <li><a class='hijau' <?php
            if ($this->uri->segment(2) == "absensi") {
                echo 'class="active"';
            }
            ?> 
                href="<?php echo site_url('administrasi/kegiatan'); ?>"><i class="fa fa-fw fa-calendar"></i> Kegiatan DKM</a>
            </li>
-->
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
    <!-- akhir sidebar -->
</div>
<!-- /.navbar-static-side -->
</nav>

