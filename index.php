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
		
		<!-- Main Site -->
		<div id="home">
  		<div id="about">
    	<div id="resume">
     	<div id="portfolio">
        <div id="blog">
		<div id="contact">
			
			<div class="header-mobile">
                <a class="header-toggle"><i class="fas fa-bars"></i></a>
                <h2><?php echo $ayarcek['ayar_title']; ?></h2>
            </div>
			
			<!-- Left Block -->
			<nav class="header-main" data-simplebar>
		
				<!-- Logo -->
				<div class="logo">
            		<img src="<?php echo $ayarcek['ayar_logo']; ?>" alt="">
            	</div>
				
          		<ul>
					<li data-tooltip="Anasayfa" data-position="top">
            			<a href="#home" class="icon-h fas fa-house-damage"></a>
					</li>
					<li data-tooltip="Hakkımda" data-position="top">
            			<a href="#about" class="icon-a fas fa-user-tie"></a>
					</li>
					
					<li data-tooltip="Projelerim" data-position="top">
            			<a href="#portfolio" class="icon-p fas fa-briefcase"></a>
					</li>
					<li data-tooltip="blog" data-position="top">
            			<a href="#blog" class="icon-b fas fa-receipt"></a>
					</li>
					<li data-tooltip="iletişim" data-position="bottom">
						<a href="#contact" class="icon-c fas fa-envelope"></a>
					</li>
          		</ul>
				
				<!-- Sound wave -->
    			
			 </nav>
			
			<!-- Home Section -->
          	<div class="pt-home" style="background-image: url('img/home-bg.jpg')">
             	<section>
					
					<!-- Banner -->
					<div class="banner">
  						<h1>Ramazan Karaca</h1>
						<p class="cd-headline rotate-1">
							<span>I am a</span>
							<span class="cd-words-wrapper">
								<b class="is-visible"><?php echo $hakkimdacek['hakkimda_ad']; ?></b>
							</span>
						</p>
					</div>
					
		
					<!-- Social -->
					<div class="social">
            			<ul>
                			<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                			<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                			<li><a href="<?php echo $ayarcek['ayar_instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
							<li><a href="<?php echo $ayarcek['ayar_youtube']; ?>"><i class="fab fa-youtube"></i></a></li>
            			</ul>
        			</div>
			  	</section>  
          	</div>
			
			<!-- About Section -->
			<div class="page pt-about" data-simplebar>
				<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Hakkımda</h2>
						<span></span>
					</div>
				
					<!-- Personal Info Start -->
					<div class="row mt-100">
					
						<!-- Information Block -->
						<div class="col-lg-12 col-sm-12">
    						<div class="info box-1">
								<div class="row">
									<div class="col-lg-3 col-sm-4">
										<div class="photo">
											<img alt="" src="<?php echo $hakkimdacek['hakkimda_resim']; ?>">		
										</div>	
									</div>
									<div class="col-lg-9 col-sm-8">
										<h4><?php echo $hakkimdacek['hakkimda_ad']; ?></h4>
										<div class="loc">
											<i class="fas fa-map-marked-alt"></i> <?php echo $hakkimdacek['hakkimda_adres']; ?>
										</div>
										<?php echo $hakkimdacek['hakkimda_aciklama']; ?>
										
										
									</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-award"></i>
                                     		<div class="desc-icon">
												<h6><?php echo $hakkimdacek['hakkimda_deneyim']; ?></h6>
                                            	<p>Deneyim</p>
                                       		</div>
                                		</div>
                                	</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-certificate"></i>
                                     		<div class="desc-icon">
												<h6><?php echo $hakkimdacek['hakkimda_proje']; ?></h6>
                                            	<p>Tamamlandı</p>
                                      		</div>
                                		</div>
                                	</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-user-astronaut"></i>
                                     		<div class="desc-icon">
												<h6><?php echo $hakkimdacek['hakkimda_meslek']; ?></h6>
                                           		<p>Meslek</p>
                                        	</div>
                                		</div>
                                	</div>
									<div class="col-lg-3 col-sm-12 pt-50">
                                		<a target="_blank" href="<?php echo $ayarcek['ayar_url'].$hakkimdacek['hakkimda_cv']; ?>" class="btn-st">CV'Yİ İNDİR</a>
                                	</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Interests Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>İlgi Alanlarım</h3>
							</div>
						</div>
					
						<div class="col-lg-12 col-sm-12">
							<div class="box-2">
								<div class="row">
									<!-- Interests Item -->
<?php 

		$ilgi=$db->prepare("SELECT * FROM ilgi");
    $ilgi->execute();

    while($ilgicek=$ilgi->fetch(PDO::FETCH_ASSOC)) {

		 ?>
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="<?php echo $ilgicek["ilgi_fa"]; ?>"></i>
                                    	 	<div class="desc-inter">
												<h6><?php echo $ilgicek["ilgi_ad"]; ?></h6>
                               	        	</div>
										</div>
									</div>
								<?php } ?>
								
								</div>
							</div>
						</div>
					</div>
				
					<!-- Service Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Hizmetlerim</h3>
							</div>
						</div>
					<?php 

		$hizmet=$db->prepare("SELECT * FROM hizmetlerim");
    $hizmet->execute();

    while($hizmetcekk=$hizmet->fetch(PDO::FETCH_ASSOC)) {

		 ?>
						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-1 mb-40">
								<i class="<?php echo $hizmetcekk["hizmet_fa"]; ?>"></i>
								<h4><?php echo $hizmetcekk["hizmet_baslik"]; ?></h4>
								<p><?php echo $hizmetcekk["hizmet_aciklama"]; ?></p>
							</div>
						</div>

						<?php } ?>
						
					</div>
			  	</section>
         	</div>
			 
			
			 
			<!-- Portfolio Section -->
          	<div class="page pt-portfolio" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Projelerim</h2>
    					<span></span>
					</div>
					
					<!-- Portfolio Filter Row Start -->
					<div class="row mt-100">
						<div class="col-lg-12 col-sm-12 portfolio-filter">
							<ul>
								<li class="active" data-filter="*">Tümü</li>
							</ul>
						</div>
					</div>
					
					<div class="row portfolio-items mt-100 mb-100">
					
						<?php 

		$projesor=$db->prepare("SELECT * FROM proje");
		$projesor->execute();

		while($projecek=$projesor->fetch(PDO::FETCH_ASSOC)) {

		 ?>
						<div class="item col-lg-4 col-sm-6 graphic">
							<figure>
								<img alt="" src="<?php echo $projecek['proje_resim']; ?>">
								<figcaption>
									<h3><?php echo $projecek['proje_name']; ?></h3>
									<p><?php echo $projecek['proje_etiket']; ?></p><i class="fas fa-image"></i>
									<a class="image-link" href="<?php echo $projecek['proje_resim']; ?>"></a>
								</figcaption>
							</figure>
						</div>
					<?php } ?>
					</div>
				</section>
       	   	</div>
			 <!-- Blog Section -->
          	<div class="page pt-blog" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
             		<div class="header-page mt-70 mob-mt">
						<h2>Blog</h2>
    					<span></span>
					</div>
					
					<!-- Blog Row Start -->
					<div class="row blog-masonry mt-100 mb-50">
						
						<?php 

		$blogsor=$db->prepare("SELECT * FROM blog");
		$blogsor->execute();

		while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {

		 ?>
						<div class="col-lg-4 col-sm-6">
							<div class="blog-item">
								<div class="thumbnail">
									<a href="blog/<?=seo($blogcek["blog_isim"]).'/'.$blogcek["blog_id"]?>"><img alt="" src="<?php echo $blogcek['blog_resim']; ?>"></a>
								</div>
								<h4><a href="blog/<?=seo($blogcek["blog_isim"]).'/'.$blogcek["blog_id"]?>"><?php echo $blogcek['blog_isim']; ?></a></h4>
								<ul>
                            		<li><a href="#"><?php echo $blogcek['blog_tarih']; ?></a></li>
                            		
                           		</ul>
								<div class="blog-btn">
									<a href="blog/<?=seo($blogcek["blog_isim"]).'/'.$blogcek["blog_id"]?>" class="btn-st">Devamını Oku</a>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div>
            	</section>
			</div>
			 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

			 <?php 


							if (isset($_POST['iletisimekle'])) {

														$isim = $_POST['iletisim_isim'];
														$mail = $_POST['iletisim_mail'];
														$eposta = $_POST['iletisim_mail'];
														$mesaj = $_POST['iletisim_mesaj'];
														if($isim == "" || $mail =="" || $mesaj=="") {

														echo "<script type=\"text/javascript\">swal(\"HATA!\", \"Lütfen Alanı Boş Bırakmayın.\", \"error\");</script>";

														}
														
														else if(!filter_var($eposta, FILTER_VALIDATE_EMAIL))
														{
																echo "<script type=\"text/javascript\">swal(\"HATA!\", \"E-Posta Adresi Geçersiz.\", \"error\");</script>";
														}
														else if(filter_var($eposta, FILTER_VALIDATE_EMAIL))
														{
															
											
														$ayarekle=$db->prepare("INSERT INTO iletisim SET
															iletisim_isim=:iletisim_isim,
															iletisim_mail=:iletisim_mail,
															iletisim_mesaj=:iletisim_mesaj
															");

														$insert=$ayarekle->execute(array(
															'iletisim_isim' => $_POST['iletisim_isim'],
															'iletisim_mail' => $_POST['iletisim_mail'],
															'iletisim_mesaj' => strip_tags($_POST['iletisim_mesaj'])
															));


														if ($insert) {
													 
															echo "<script type=\"text/javascript\">swal(\"Başarılı!\", \"Mesajınız İletilmiştir.\", \"success\");</script>";


														} else {

															echo "<script type=\"text/javascript\">swal(\"Başarısız!\", \"Teknik Hata.\", \"error\");</script>";
														}
							}
													}
								 ?>
			<!-- Contact Section -->
         	<div class="page pt-contact" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
              		<div class="header-page mt-70 mob-mt">
						<h2>İletişim</h2>
    					<span></span>
					</div>
					
					<!-- Form Start -->
					<div class="row mt-100">
						<div class="col-lg-12 col-sm-12">
							<div class="contact-form ">
                        		<form method="post" action="index.php#contact" id="demo-form2" class="comment-form" novalidate="">
									<div class="row">
                            			<div class="col-lg-6 col-sm-12">
                                			<input type="text" name="iletisim_isim" id="name" required="required" class="form-control" placeholder="İsim *">
                            			</div>
                            			<div class="col-lg-6 col-sm-12">
                                			<input type="email" name="iletisim_mail" id="email" required="required" class="form-control" placeholder="Eposta *">
                            			</div>
                            			<div class="col-lg-12 col-sm-12">
                                			<textarea class="form-control" name="iletisim_mesaj" required="required"  id="note" placeholder="Mesajın"></textarea>
                            			</div>
                             			<div class="col-lg-12 col-sm-12 text-center">
                                			<button type="submit" name="iletisimekle" class="btn-st">Mesajı Yolla</button>
                                			
                            			</div>
										
									</div>
                    			</form>
                    		</div>
						</div>
					</div>
					
					<!-- Contact Info -->
					<div class="box-2 contact-info">
						<div class="row">
							<div class="col-lg-4 col-sm-12 info">
								<i class="fas fa-paper-plane"></i>
         						<p><?php echo $ayarcek['ayar_mail']; ?></p>
          						<span>Eposta</span>
							</div>
							<div class="col-lg-4 col-sm-12 info">
								<i class="fas fa-map-marker-alt"></i>
         						<p><?php echo $ayarcek['ayar_adres']; ?></p>
          						<span>Adres</span>
							</div>	
							<div class="col-lg-4 col-sm-12 info">
								<i class="fas fa-phone"></i>
         						<p><?php echo $ayarcek['ayar_tel']; ?></p>
          						<span>Telefon</span>
							</div>	
						</div>
					</div>
					
					<!--Google Map Start-->
					<div class="google-map box-1 mt-100 mb-100">
						<div class="row">
							<div class="col-lg-12">
								<?php echo $ayarcek["ayar_maps"]; ?>
							</div>
						</div>
					</div>
            	</section>
          	</div> 
			
        </div>
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
		
		<!-- Page Script -->
		<script src="js/jquery.ripples-min.js"></script>
		<script>
			$('.pt-home').ripples({
				resolution: 1000,
				dropRadius: 15,
				perturbance: 0.02
			});
		</script>
		
    </body>

</html>