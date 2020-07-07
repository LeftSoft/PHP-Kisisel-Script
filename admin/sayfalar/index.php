<?php include 'header.php'; 

$projesor=$db->prepare("SELECT * FROM proje order by proje_id");
$projesor->execute();
$kullanicisor=$db->prepare("SELECT * FROM kullanici order by kullanici_id");
$kullanicisor->execute();
$blogsor=$db->prepare("SELECT * FROM blog order by blog_id");
$blogsor->execute();
$hakkimdasor=$db->prepare("SELECT * FROM hakkimda order by hakkimda_id");
$hakkimdasor->execute();
                $say=0;
                $say2=0;
                $say3=0;
                while($projecek=$projesor->fetch(PDO::FETCH_ASSOC))
                {
                    $say++;
                   
                }
               while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC))
                {
                   $say2++;
                }
                 while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC))
                {
                   $say3++;
                }
                while($hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC))
                {
                   $say4++;
                }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kontrol Paneli</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Kontrol Paneli</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $say; ?></h3>

                <p>Eklenen Projeler</p>
              </div>
              <div class="icon">
                
              </div>
              <a href="proje-listele.php" class="small-box-footer">Daha Fazla Bilgi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $say2; ?></h3>

                <p>Toplam Kullanıcı</p>
              </div>
              <div class="icon">
               
              </div>
              <a href="admin-listele.php" class="small-box-footer">Daha Fazla Bilgi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $say3; ?></h3>

                <p>Eklenen Blog</p>
              </div>
              <div class="icon">
                
              </div>
              <a href="blog-listele.php" class="small-box-footer">Daha Fazla Bilgi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $say4; ?></h3>

                <p>Hakkımda</p>
              </div>
              <div class="icon">
                
              </div>
              <a href="hakkimda-listele.php" class="small-box-footer">Daha Fazla Bilgi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          
          
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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

<!-- jQuery -->
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
</body>
</html>
