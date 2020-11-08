<?php include 'header.php'; ?>
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
        	<h2><?php echo $ayarcek['ayar_title']; ?></h2>
        </div>
			
		<!-- Left Block -->
		<nav class="header-main" data-simplebar>
		
			<!-- Logo -->
			<div class="logo">
            	<a href="#home"><img src="<?php echo $ayarcek['ayar_logo']; ?>" alt=""></a>
            </div>
				
          	<ul>
				<li data-tooltip="Anasayfa" data-position="top">
            		<a href="#home" class="fas fa-house-damage"></a>
				</li>
				<li>
            		<span class="active fas fa-receipt"></span>
				</li>
          	</ul>
				
			<!-- Sound wave -->
    		
		 </nav>
		
		<!--Blog Page-->
		<div class="blog-list" data-simplebar>
			<div class="blog-head">
				<h2>Blog Listesi</h2>
				<ul class="blog-breadcrumb">
                	<li><a href="#home">Anasayfa</a></li>
                	<li>Blog Listesi</li>
				</ul>
			</div>
			<div class="row blog-list-container">
				<div class="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-8">
							<?php 

		$blogsor=$db->prepare("SELECT * FROM blog");
		$blogsor->execute();

		while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {

		 ?>

							<!--Blog Post-->
							<div class="blog-post">
                        		<div class="content">
									<div class="thumbnail">
                        				<a href="blog/<?=seo($blogcek["blog_isim"]).'/'.$blogcek["blog_id"]?>">
											<img src="<?php echo $blogcek['blog_resim']; ?>" alt="">
										</a>
									</div>
                            		<div class="detalis">
                                		<ul class="meta">
                                    		<li><i class="fa fa-calendar"></i><?php echo $blogcek['blog_tarih']; ?></li>
                                    		<li><i class="icon fa fa-user"></i><?php echo $hakkimdacek['hakkimda_ad']; ?></li>
                                		</ul>
                                		<h4><a href="blog/<?=seo($blogcek["blog_isim"]).'/'.$blogcek["blog_id"]?>"><?php echo $blogcek['blog_isim']; ?></a></h4>
                                		<div class="text"><?php $detay = $blogcek["blog_aciklama"];

                  	$uzunluk = strlen($detay);
                  $limit = 102;
                  if($uzunluk > $limit)
                  {
                    $detay = substr($detay,0,$limit)."...";
                  }
                  echo $detay;
                   ?>


                                		</div>
                                		<a href="blog/<?=seo($blogcek["blog_isim"]).'/'.$blogcek["blog_id"]?>" class="btn-st">Devamını Gör</a>
									</div>
								</div>
                            </div>
							<?php } ?>
                        </div>
						
						
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

</html>