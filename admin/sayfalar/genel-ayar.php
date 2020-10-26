<?php 
include 'header.php'; 
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
  'id' => $_GET['kullanici_id']
  ));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);



?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Genel Ayarlar</h1>
            <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Genel Ayarlar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
             

<div class="row">
          <div class="col-12 ">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Site Ayarı</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile2" role="tab-2" aria-controls="custom-tabs-one-profile" aria-selected="false">Site Logo</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile3" role="tab-3" aria-controls="custom-tabs-one-profile" aria-selected="false">Fovico</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile4" role="tab-4" aria-controls="custom-tabs-one-profile" aria-selected="false">Sosyal Medya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile5" role="tab-5" aria-controls="custom-tabs-one-profile" aria-selected="false">İletişim Bilgileri</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                
                  <div class="tab-pane fade show active" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                      <form action="../ayar/islem.php" method="POST">
              
              <div class="form-group">
                        <label>Site Başlığı</label>
                        <input type="text" name="ayar_title" class="form-control" placeholder="site title" value="<?php echo $ayarcek['ayar_title']; ?>">
                      </div>
 <div class="form-group">
                        <label>Site Açıklaması</label>
                        <input type="text" name="ayar_description" class="form-control" placeholder="site açıklaması" value="<?php echo $ayarcek['ayar_description'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Site Anahtar Kelime</label>
                        <input type="text" name="ayar_keywords" class="form-control" placeholder="kişisel,script" value="<?php echo $ayarcek['ayar_keywords'] ?>">
                      </div>
    <button type="submit" name="genelayarkaydet" class="btn btn-success">Düzenle</button>
</form>
                  </div>
               



                <div class="tab-pane fade" id="custom-tabs-one-profile2" role="tabpanel" aria-labelledby="custom-tabs-one-profile2-tab">
             <div class="form-group">
                        <label>Yüklü Logo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                    <?php 
                    if (strlen($ayarcek['ayar_logo'])>0) {?>

                    <img width="200"  src="../../<?php echo $ayarcek['ayar_logo']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../../images/logo-yok.png">


                    <?php } ?>

                    
                  </div>
                      </div>
<form action="../ayar/islem.php" method="POST" enctype="multipart/form-data">
                      <div class="col-sm-12">
                      <div class="form-group">
                        <label>Resim Seç</label>
                        <div class="input-group">
                      <div class="custom-file">
                        <input  type="file" name="ayar_logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Dosya Değiştir</label>
                      </div>
                      
                    </div>
                      </div>
                    </div>
                    <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">
    <button type="submit" name="ayarlogokaydet" class="btn btn-success">Düzenle</button>
</form>
                  </div>
                 

                    <div class="tab-pane fade" id="custom-tabs-one-profile3" role="tabpanel" aria-labelledby="custom-tabs-one-profile2-tab">
             <div class="form-group">
                        <label>Yüklü Logo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                    <?php 
                    if (strlen($ayarcek['ayar_fovicon'])>0) {?>

                    <img width="200"  src="../../<?php echo $ayarcek['ayar_fovicon']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../../images/logo-yok.png">


                    <?php } ?>

                    
                  </div>
                      </div>
<form action="../ayar/islem.php" method="POST" enctype="multipart/form-data">
                      <div class="col-sm-12">
                      <div class="form-group">
                        <label>Fovico Seç</label>
                        <div class="input-group">
                      <div class="custom-file">
                        <input  type="file" name="ayar_fovicon" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Dosya Değiştir</label>
                      </div>
                      
                    </div>
                      </div>
                    </div>
                    <input type="hidden" name="eski_yoll" value="<?php echo $ayarcek['ayar_fovicon']; ?>">
    <button type="submit" name="fovicokaydet" class="btn btn-success">Düzenle</button>
</form>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-profile4" role="tabpanel" aria-labelledby="custom-tabs-one-profile4-tab">
<form action="../ayar/islem.php" method="POST" enctype="multipart/form-data">
                      
 <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="ayar_facebook" class="form-control" placeholder="facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>">
                      </div>
 <div class="form-group">
                        <label>İnstagram</label>
                        <input type="text" name="ayar_instagram" class="form-control" placeholder="instagram" value="<?php echo $ayarcek['ayar_instagram'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="ayar_twitter" class="form-control" placeholder="twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>">
                      </div>
<div class="form-group">
                        <label>Youtube</label>
                        <input type="text" name="ayar_youtube" class="form-control" placeholder="youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>">
                      </div>




                    <input type="hidden" name="eski_yoll" value="<?php echo $ayarcek['ayar_fovicon']; ?>">
    <button type="submit" name="sosyalkaydet" class="btn btn-success">Düzenle</button>
</form>
                  </div>








                  <div class="tab-pane fade" id="custom-tabs-one-profile5" role="tabpanel" aria-labelledby="custom-tabs-one-profile5-tab">
<form action="../ayar/islem.php" method="POST" enctype="multipart/form-data">
                      
 <div class="form-group">
                        <label>E-Posta</label>
                        <input type="text" name="ayar_mail" class="form-control" value="<?php echo $ayarcek['ayar_mail']; ?>">
                      </div>
 <div class="form-group">
                        <label>Adres</label>
                        <input type="text" name="ayar_adres" class="form-control" value="<?php echo $ayarcek['ayar_adres'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Telefon</label>
                        <input type="text" name="ayar_tel" class="form-control" value="<?php echo $ayarcek['ayar_tel'] ?>">
                      </div>
<div class="form-group">
                        <label>Google Maps(İframe)</label>
                        <textarea type="text" name="ayar_maps" class="form-control" ><?php echo $ayarcek['ayar_maps'] ?></textarea>
                      
                      </div>
                    <input type="hidden" name="eski_yoll" value="<?php echo $ayarcek['ayar_fovicon']; ?>">
    <button type="submit" name="iletisimkaydett" class="btn btn-success">Düzenle</button>
</form>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
         
         
        </div>


          


          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->

        





        
      </div><!-- /.container-fluid -->
    </section>
    
  </div>
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright 2019</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
