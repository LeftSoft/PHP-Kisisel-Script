<?php 
include 'header.php';
$blogsor=$db->prepare("SELECT * FROM blog where blog_id=:id");
$blogsor->execute(array(
  'id' => $_GET['blog_id']
  ));

$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
$say=$blogsor->rowCount();
if($say==0)
{
header("Location:index.php");
  exit;
} 

?>
<style type="text/css">
	.kapak
{
width:1920px;
height:700px;
}
</style>
    <body>
		
		
		
		<!-- Preloader -->
		<div id="preloader">
  			<div class="loading-area">
    			<div class="circle"></div>
  			</div>
  			<div class="left-side"></div>
  			<div class="right-side"></div>
		</div>
		
		<div class="header-mobile">
        	<a class="header-toggle"><i class="fas fa-bars"></i></a>
        	<h2><?php echo $ayarcek['ayar_title'] ?></h2>
        </div>
			
		<!-- Left Block -->
		<nav class="header-main" data-simplebar>
		
			<!-- Logo -->
			<div class="logo">
            	<img src="img/logo.png" alt="">
            </div>
				
          	<ul>
				<li data-tooltip="Anasayfa" data-position="top">
            		<a href="#home" class="fas fa-house-damage"></a>
				</li>
				<li>
            		<span class="active fas fa-receipt"></span>
				</li>
				<li data-tooltip="Bloga Geri Dön" data-position="top">
            		<a href="blog-list.php" class="fas fa-long-arrow-alt-left"></a>
				</li>
          	</ul>
				
			
    		
		 </nav>
		
		<!--Blog Page-->
		<div class="blog-page" data-simplebar>
			<nav class="blog-nav">
            	
            	<a href="index.php#blog">
					<i class="fas fa-bars"></i>
				</a>
            	
            </nav>
			<div class="blog-image">
				<img src="<?php echo $blogcek["blog_resim"]; ?>" class="kapak" alt="">
			</div>
			<div class="row blog-container">
				<div class="col-md-10 offset-md-1">
						
					<!-- Heading -->
					<div class="blog-heading pt-70 pb-100">
						<h2><?php echo $blogcek["blog_isim"]; ?></h2>
						<span><i class="fas fa-home"></i><a href="#home">Anasayfa</a></span>
						
						<span><i class="fas fa-calendar-alt"></i><?php echo $blogcek["blog_tarih"]; ?></span>
					</div>

					<!-- Content -->
					<div class="blog-content">
						
						<?php echo $blogcek["blog_aciklama"]; ?>
					</div>

					
					
					<div class="contact-form mb-100">
                        
                   	</div>
				</div>
			</div>
		</div>
		
		<!-- All Script -->
		<script src="js/jquery.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/simplebar.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animatedheadline.min.js"></script>
		<script src="js/jquery.easypiechart.js"></script>
		<script src="js/jquery.validation.js"></script>
		<script src="js/tilt.js"></script>
        <script src="js/main.js"></script>
		<script src="js/main-demo.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    </body>

<!-- Mirrored from baha.malyarchuk.space/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 15:09:20 GMT -->
</html>