<!--awal konten-->
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default mar lengkung">
                <h1 class="panel-heading">
                    Usulan
                </h1>
                <div class="panel-body">                   
                    <div class="well" role="alert">
                        <strong>
                            Kirimkan usul-usul kreatif mu disini
                        </strong>
                    </div> 
                    <hr>
                    <div class="row-fluid">
                        <a class="btn btn-default btn-twitter" href="#"><i class="fa fa-fw fa-plus"></i>Tambah Usul</a>
                        <div class="table"> 
                            <br>
                            <table class="table table-striped">
                                <tr> 
                                    <th> No</th>
                                    <th> Judul usulan</th>
                                    <th> Tanggal kirim</th>
                                    <th> Kelola Usulan</th>
                                </tr>

                                <?php for ($n = 1; $n < 10; $n++) { ?>
                                    <tr> 
                                        <td> <?php echo "$n"; ?> </td>
                                        <td> <?php echo "Usul $n"; ?> </td>
                                        <td> <?php echo "$n-10-2014"; ?> </td>
                                        <td> <a href="" class=""> Hapus</a> </td>
                                    </tr>
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
