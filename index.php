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
								<b class="is-visible">Developer</b>
								<b>Photographer</b>
								<b>Designer</b>
								<b>Freelancer</b>
							</span>
						</p>
					</div>
					
		
					<!-- Social -->
					<div class="social">
            			<ul>
                			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
                			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
            			</ul>
        			</div>
			  	</section>  
          	</div>
			
			<!-- About Section -->
			<div class="page pt-about" data-simplebar>
				<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>About Me</h2>
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
											<img alt="" src="img/user-photo.jpg">		
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
												<h6>8 Years Job</h6>
                                            	<p>Experience</p>
                                       		</div>
                                		</div>
                                	</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-certificate"></i>
                                     		<div class="desc-icon">
												<h6>500+ Projects</h6>
                                            	<p>Completed</p>
                                      		</div>
                                		</div>
                                	</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-user-astronaut"></i>
                                     		<div class="desc-icon">
												<h6>Freelance</h6>
                                           		<p>Available</p>
                                        	</div>
                                		</div>
                                	</div>
									<div class="col-lg-3 col-sm-12 pt-50">
                                		<a href="#" class="btn-st">Download CV</a>
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
								<h3>My Interests</h3>
							</div>
						</div>
					
						<div class="col-lg-12 col-sm-12">
							<div class="box-2">
								<div class="row">
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="fas fa-music"></i>
                                    	 	<div class="desc-inter">
												<h6>Music</h6>
                               	        	</div>
										</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="fas fa-route"></i>
                                     		<div class="desc-inter">
												<h6>Travelling</h6>
                                       		</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                 	    	<i class="far fa-image"></i>
                                  		   	<div class="desc-inter">
												<h6>Photos</h6>
                                  	     	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-film"></i>
                                     		<div class="desc-inter">
												<h6>Movies</h6>
                                   	    	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                 	    	<i class="fas fa-space-shuttle"></i>
                                 	    	<div class="desc-inter">
												<h6>Space</h6>
                                	       	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-book"></i>
                                     		<div class="desc-inter">
												<h6>Books</h6>
                                    	   	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
        	                             	<i class="fas fa-gamepad"></i>
            	                         	<div class="desc-inter">
												<h6>Video games</h6>
                    	                   	</div>
                        	        	</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
        	                             	<i class="fas fa-tree"></i>
            	                         	<div class="desc-inter">
												<h6>Forest</h6>
                    	                   	</div>
                        	        	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<!-- Service Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Services</h3>
							</div>
						</div>
					
						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-1 mb-40">
								<i class="fas fa-desktop"></i>
								<h4>Web Design</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>

						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-2 mb-40">
								<i class="fas fa-cogs"></i>
								<h4>Web Development</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>

						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-2 mb-40">
								<i class="fas fa-mobile-alt"></i>
								<h4>Responsive Design</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>

						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-1 mb-40">
								<i class="fas fa-medkit"></i>
								<h4>quick Support</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>
					</div>
			  	</section>
         	</div>
			 
			<!-- Resume Section -->
          	<div class="page pt-resume" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Resume</h2>
    					<span></span>
					</div>
					
					<!-- Experience & Education Row Start -->
					<div class="row mt-100">
					
						<!-- Experience Column Start -->
						<div class="col-lg-6 col-sm-12">
						
							<!-- Header Block -->
							<div class="header-box mb-50">
								<h3>Experience</h3>
							</div>
						
							<div class="experience box-1">
								
								<!-- Experience Item -->
								<div class="item">
									<div class="main">
										<h4>Web Design</h4>
										<p><i class="far fa-calendar-alt"></i>2012 - 2014 | Сompany Inc</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
										<h4>Fornt-End Developer</h4>
										<p><i class="far fa-calendar-alt"></i>2014 - 2015 | Сompany Inc</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
										<h4>Web Development</h4>
										<p><i class="far fa-calendar-alt"></i>2015 - 2019 | Сompany Inc</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>
							</div>
						</div>
							
						<!-- Education Column Start -->
						<div class="col-lg-6 col-sm-12">
						
							<!-- Header Block -->
							<div class="header-box mb-50 mob-box-mt">
								<h3>Education</h3>
							</div>
						
							<div class="experience box-2">

								<!-- Education Item -->
								<div class="item">
									<div class="main">
										<h4>Phd</h4>
										<p><i class="far fa-calendar-alt"></i>2011 - 2013 | Computer Science</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Education Item -->
								<div class="item">
									<div class="main">
										<h4>Post Graduation</h4>
										<p><i class="far fa-calendar-alt"></i>2013 - 2016 | Computer Science</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>

								<!-- Education Item -->
								<div class="item">
									<div class="main">
										<h4>Gradution</h4>
										<p><i class="far fa-calendar-alt"></i>2016 - 2018 | Computer Science</p>
									</div>
									<p>Work experience is essential for getting a job. Whether it's a short work placement or a longer internship, work experience is always viewed favourably by employers and can help you decide your future career.</p>
								</div>
							</div>
						</div>
					</div>
				
					<!-- Skills Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Skills</h3>
							</div>
						</div>
					</div>
					
					<div class="box-1 skills">
						<div class="row">
							<div class="col-lg-6 col-sm-6">

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">HTML5</h4>
									<div class="progress">
										<div class="progress-bar" style="width:98%">
											<div class="progress-value">98%</div>
										</div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">CSS3</h4>
									<div class="progress">
										<div class="progress-bar" style="width:85%">
											<div class="progress-value">85%</div>
										</div>
									</div>
								</div>

								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">JavaScript</h4>
									<div class="progress">
										<div class="progress-bar" style="width:90%">
											<div class="progress-value">90%</div>
										</div>
									</div>
								</div>
							
								<!-- Skill Item -->
								<div class="skill-item">
									<h4 class="progress-title">UI/UX designer</h4>
									<div class="progress">
										<div class="progress-bar" style="width:77%">
											<div class="progress-value">77%</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="row">
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="80" data-bar-color="#fff"> 80% <p>PHP</p></div>
									</div>
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="70" data-bar-color="#fff"> 70% <p>Illustrator</p></div>
									</div>
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="60" data-bar-color="#fff"> 60% <p>Photoshop</p></div>
									</div>
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="90" data-bar-color="#fff"> 90% <p>AngularJS</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<!-- Work Process Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>My Working Process</h3>
							</div>
						</div>
					</div>
					
					<div class="box-2 work-process mb-100">
						<div class="row">
							<div class="col-lg-4 col-sm-12 ltr">
							
                    			<!-- Working Process Item-->
                          	 	<div class="single-wp width-sm process-1">
									<p class="wp-step">01</p>
									<h4 class="wp-title">Discuss idea</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>

								<!-- Working Process Item-->
								<div class="single-wp width-sm process-2">
									<p class="wp-step">02</p>
									<h4 class="wp-title">Creative concept</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>
							</div>
					
							<div class="col-lg-4 hidden-sm">
							
								<!-- Working Process Circle-->
								<div class="wp-circle">
									<h4>Working Process</h4>
									<span class="dots top-l"></span>
									<span class="dots bottom-l"></span>
									<span class="dots top-r"></span>
									<span class="dots bottom-r"></span>
								</div>
							</div>
					
							<div class="col-lg-4 col-sm-12 rtl">
						
								<!-- Working Process Item-->
								<div class="single-wp width-sm process-3">
									<p class="wp-step">03</p>
									<h4 class="wp-title">Web concept</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>
	
								<!-- Working Process Item-->
								<div class="single-wp width-sm process-4">
									<p class="wp-step">04</p>
									<h4 class="wp-title">Final concept</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>
							</div>
						</div>
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
                        		<form method="post" action="admin/ayar/islem.php" id="demo-form2" class="comment-form" novalidate="">
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
								<div id="map" data-latitude="40.712775" data-longitude="-74.005973" data-zoom="14"></div>
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