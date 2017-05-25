<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Chocotata Fountain Surabaya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

		<!-- Google Web Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>    
        <link href='http://fonts.googleapis.com/css?family=Indie Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
            
        <!-- Font Awesome CSS  is used for different incons-->
		<link href="<?php echo base_url("assets/fonts/font-awesome/css/font-awesome.css")?>" rel="stylesheet">    
        <!--Choco bar Theme CSS style -->
        <link href="<?php echo base_url("assets/css/choco-style.css")?>" rel="stylesheet">     
        
        <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css")?>">   
        


   
                        
</head>
	<body >
		<!-- The top navigation starts here - contains links and logo -->
		<header class="navbar navbar-fixed-top fixed clearfix top-nav">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="clearfix">
							<div class="main-navigation animated">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- For mobile / smartphones -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
                                            <a class="navbar-brand bizname scrollspy smooth-scroll wow zoomIn" href="#main-carousel">Chocotata</a>
										</div>
										<!-- Menu links  -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll " id="nav-collapse">
											<ul class="nav navbar-nav navbar-left wow zoomIn" data-wow-delay="0.5s">
												<li class="active"><a href="#main-carousel">Beranda</a></li>
												<li ><a href="#specialities">Fountain</a></li>
                                                <li><a href="#custfeedback">Feedback</a></li>
                                                <li><a href="#recipes">Konsep</a></li>
                                                <li><a href="#products">Sweet Corner</a></li>
												<li><a href="<?php echo base_url('user/order'); ?>">Order</a></li>
                                                 <div class="dropdown">
  														<button onclick="myFunction()" class="dropbtn">Hai, <?php echo $this->session->userdata('nama'); ?></button>
  														<div id="myDropdown" class="dropdown-content">
   														 <a href="<?php echo base_url('upload'); ?>">Konfirmasi Pesanan</a>
   														 <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
 												 </div>
											</div> 
											</ul>
										</div>
									</div>

                                    
								</nav>
							</div>
						</div>
					</div>


				</div>
			</div>
		</header>
<!-- Top navigtion ending here-->

<!-- Top carosel section starting here  -->
    	<div class="section" style="background-color: #5A423B;" id="main-carousel">
    	       	<div class="container">
    		      <div class="col-md-12">
                     <!--The main div for carousel-->
                    <div id="carousel-demo" class="carousel slide" data-ride="carousel" data-interval="2000">
                     <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-demo" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-demo" data-slide-to="1"></li>
                        <li data-target="#carousel-demo" data-slide-to="2"></li>
                        <li data-target="#carousel-demo" data-slide-to="3"></li>
                      </ol>
                      
                      <!-- Sliding images statring here --> 
                         <div class="carousel-inner"> 
                        <div class="item active"> 
                          <img src="<?php echo base_url("assets/img/logo2.jpg")?>" alt=""> 
                          <div class="carousel-caption">
                           <h3></h3>
                           <p></p>
                          </div>
                        </div> 
                        <div class="item"> 
                          <img src="<?php echo base_url("assets/img/produk/testes.png")?>" alt=""> 
                          <div class="carousel-caption">
                           <h3>Enak</h3>
                           <p>Harga rumahan dengan rasa restaurant</p>
                          </div>      
                       </div> 
                        <div class="item"> 
                          <img src="<?php echo base_url("assets/img/produk/gambar3.png")?>" alt=""> 
                          <div class="carousel-caption">
                           <h3>Sehat</h3>
                           <p>Bukan Coklat Abal-Abal</p>
                          </div>          
                        </div>
                        <div class="item"> 
                          <img src="<?php echo base_url("assets/img/produk/gambar4.png")?>" alt="">
                          <div class="carousel-caption">
                           <h3>Nikmat</h3>
                           <p>Lelehan Coklat yang terngiang-ngiang</p>
                          </div>           
                        </div> 
                         
                      </div> 
                      
                      <!-- Next / Previous controls here -->
                      <a class="left carousel-control" href="#carousel-demo" data-slide="prev">
                        <span class="icon-prev"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-demo" data-slide="next">
                        <span class="icon-next"></span>
                      </a>
                     <div>
                    
                     </div> 
            </div>
          </div>
         </div>   
<!--Carosel ending here -->   
  
<!-- Special Products section starts-->
		<div class="main section" style="background-color: #D3C2BC;" id="specialities">
 	     <div class="container">
    	  <div class="col-md-12"><h1 class="title text-center wow fadeInLeft"><span>Paket Fountain</span></h1>
    				<p class="sub-headers text-center">Spesial dari Kami!</p>
			
                <div class="speciality wow fadeIn" data-wow-delay="0.6s">


	             <div class="spe-prods">
					<div class="price-top">
						<h2>Special 1</h2>
                        <img class="rotprod" src="<?php echo base_url("assets/img/produk/paket.png")?>" alt="">
					</div>
					<div class="price-bottom">
						<div class="price1">
							<div class="dotter">
								<h3>500k</h3>
							</div>
							<div class="month">
								<p>/ 120 tusuk</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="price2">
								<a href="<?php echo base_url().'cpaket_logged'?>" class="buybtn">Include</a>
						</div>
					</div>
				</div>

                
			<div class="spe-prods">
					<div class="price-top">
						<h2>Special 2</h2>
                        <img class="rotprod"  src="<?php echo base_url("assets/img/produk/paket.png")?>" alt="">
					</div>
				<div class="price-bottom">
					<div class="price1">
						<div class="dotter">
							<h3>750   k</h3>
						</div>
						<div class="month">
							<p> / 200 tusuk</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="price2">
						<a href="<?php echo base_url().'cpaket_logged/paket2'?>" class="buybtn">Include</a>
					</div>
				</div>
			</div>
				<div class="spe-prods">
					<div class="price-top">
						<h2>Special 3</h2>
                        <img class="rotprod" src="<?php echo base_url("assets/img/produk/paket.png")?>" alt="">
					</div>
					<div class="price-bottom">
					<div class="price1">
						<div class="dotter">
							<h3>1000k</h3>
						</div>
						<div class="month">
							<p> / 330 tusuk</p>
						</div>
						<div class="clear"></div>
					</div>
						<div class="price2">
							<a href="<?php echo base_url().'cpaket_logged/paket2'?>" class="buybtn">Include</a>
						</div>
					</div>
				</div>
				<div class="spe-prods">
					<div class="price-top">
						<h2>Special 4</h2>
                        <img class="rotprod" src="<?php echo base_url("assets/img/produk/paket.png")?>" alt="">
					</div>
					<div class="price-bottom">
					<div class="price1">
						<div class="dotter">
							<h3>1500k</h3>
						</div>
						<div class="month">
							<p> / 500 tusuk</p>
						</div>
						<div class="clear"></div>
					</div>
						<div class="price2">
							<a href="<?php echo base_url().'cpaket_logged/paket2'?>" class="buybtn">Include</a>
						</div>
					</div>
				</div>
				</div>
			
                

                
                
              </div>
             </div>   
             </div> 
             </div>                           
				
<!--Special Products Ending here -->            
  
<!-- Customer feedback section starting here -->
		<div class="section clearfix wow bounceInUp" style="background-color:#AF8F85">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                    <h1 id="custfeedback" class="title text-center"><span>Feedback</span></h1>
                    
						<div class="space"></div>
							<div class="col-md-12">
                            
                            	<div class="panel-group" role="tablist" aria-multiselectable="true">
							
                            
                            		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#testipanels" href="#panel1" aria-expanded="true" aria-controls="panel1">
													Pelanggan Terpuaskan
												</a>
											</h4>
										</div>
										<div id="panel1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
    											<blockquote>
                                                 Pelayanan memuaskan. Fast respon, ramah, dan tidak tipu-tipu.
                                                <cite></cite>
                                                </blockquote>
											</div>
										</div>
									</div>
							
                            
                            		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#testipanels" href="#panel2" aria-expanded="false" aria-controls="panel2">
													Rasa coklat ala Restaurant
												</a>
											</h4>
										</div>
										<div id="panel2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												<blockquote>
                                                    Harga terjangkau tidak membuat rasa coklat abal-abal. lelehnya coklat mengalir nikmat di tenggorokan.
                                                <cite></cite>
                                                </blockquote>
											</div>
										</div>
									</div>
							
                            
                            		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#testipanels" href="#panel3" aria-expanded="false" aria-controls="panel3">
													Dekorasi Cantik
												</a>
											</h4>
										</div>
										<div id="panel3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
											<blockquote>
                                                    Dekorasi kekinian dan tidak tertinggal zaman. bisa custom, dan sesuai keinginan. keren!
                                                <cite></cite>
                                             </blockquote>

											</div>
										</div>
									</div>        
                    </div>
    			</div>
    		</div>
         </div>
        </div>
    </div>          
<!-- Customers feedback ends -->

<!-- Recipe / process starts here -->
    <div class="content-section-a" style="background-color: #D3C2BC;">
        <div class="container">
            <div class="col-md-12"><h1 id="recipes" class="title text-center"><span>- Konsep -</span></h1>
			</div>
             <div class="row">
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img src="<?php echo base_url("assets/img/produk/konsep.png")?>" alt="Recips and process">
                </div>
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">OUR HERITAGE</h3>
                    <p class="commontxt">Chocotata!</p>
					<ul class="process-listing">
						<li><i class="fa fa-info gen-padding-right"></i> Kualitas coklat yang bisa diadu</li>
						<li><i class="fa fa-info gen-padding-right"></i> Menjadi acuan coklat fountain di Surabaya</li>
						<li><i class="fa fa-info gen-padding-right"></i> Dekorasi kekinian</li>
                        <li><i class="fa fa-info gen-padding-right"></i> Solusi untuk mempercantik acara</li>
                        <li><i class="fa fa-money gen-padding-right"></i> Harga Rumahan dengan Rasa Restaurant</li>
					</ul>
				</div>           
            </div>
        </div>
    </div>
<!-- Recipes / process ending here -->

<!-- Complete Range of Products-->
		<div class="section clearfix wow flipInX" data-wow-delay="0.6s" style="background-color:#AF8F85">
			<div class="container text-center"><h1 id="products" class="title text-center"><span>Produk Lain</span></h1>
				<div class="row">
                    <div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="fruitscarousel">
                    
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12"><a href="<?php echo base_url().'cgleg'?>"><img src="<?php echo base_url("assets/img/gleg1.jpg")?>" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12"><a href="<?php echo base_url().'cchocojar'?>"><img src="<?php echo base_url("assets/img/choco.png")?>" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12"><a href="<?php echo base_url().'cgleg'?>"><img src="<?php echo base_url("assets/img/gleg2.jpg")?>" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12"><a href="<?php echo base_url().'churuf'?>"><img src="<?php echo base_url("assets/img/huruf1.jpg")?>" class="img-responsive"></a></div>
                            </div>
                            <div class="item active">
                                <div class="col-md-3 col-sm-4 col-xs-12"><a href="<?php echo base_url().'cchocojar'?>"><img src="<?php echo base_url("assets/img/chocojar2.jpg")?>" class="img-responsive"></a></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-4 col-xs-12"><a href="<?php echo base_url().'cmente'?>"><img src="<?php echo base_url("assets/img/mente1.jpg")?>" class="img-responsive"></a></div>
                            </div>
                        </div>
                    
                        <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 
                    </div>
                </div>
              </div>
          </div>                                                        
<!-- Complete range of products / small carousel ending here -->
<!-- Contact / Order  form -->
		<!-- ================ -->
		<div id="enquiry">
			<div class="section wow pulse" style="background-color:#D3C2BC;">
				<div class="container">
					
					<div class="row">
                    
                        <div class="col-md-6">
							<div class="footer-content">
								<p class="commontxt">Hubungi Kami</p>
								<ul class="list-icons">
									<li><i class="glyphicon glyphicon-map-marker gen-padding-right"></i> <span>Jalan Kalijudan Taruna 4 nomor 30 Surabaya, 60114</span></li>
									<li><i class="glyphicon glyphicon-earphone gen-padding-right"></i> 0856-4503-1983</li>
									<li><i class="glyphicon glyphicon-envelope gen-padding-right"></i>ika_ari@ymail.com</li>
								</ul>
								<ul class="social-links">
									<li class="instagram"><a target="_blank" href="https://www.instagram.com/chocotata.fountain/"><i class="fa fa-instagram-square"></i></a></li>
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/jualcoklatenakhalal/?fref=ts"><i class="fa fa-facebook-square"></i></a></li>
									<li class="instagram"><a target="_blank" href="https://instagram.com/chocotata.fountain"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCSjDHqr5BGahM3FQdyqkXww"><i class="fa fa-youtube-square"></i></a></li>
								</ul>
							</div>
						</div>


					</div>
				</div>
			</div>
           </div> 
         </div>  
<!-- Contact ending here -->

<!-- Site footer -->
      <div class="panel-footer text-center wow fadeInUp">
        <p>&copy; <a href="<?php echo base_url().'tentang'?>">Tentang Kami</a> | <a href="<?php echo base_url().'privacy'?>">Kebijakan Privasi</a> | <a href="<?php echo base_url().'terms'?>">Syarat dan Ketentuan</a></p>
      </div>    
<!-- Site footer ending here -->


<!-- Required JavaScript libraris collection -->    
<!--The jQuery library from local-->    
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js")?>"></script>

        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
<!-- Bootstrap library from local -->        
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
        
		<!-- Backstretch javascript for main sliding images -->
    	<!-- In own hosting -->
        <!-- <script src="js/wow.min.js"></script>-->
        
        <!-- In own hosting -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.0.3/wow.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        

		<script type="text/javascript" src="<?php echo base_url("assets/js/modernizr.js")?>"></script>

        <!-- Appear javascript -->
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.appear.js")?>"></script>     

        <!-- Initialization of Plugins -->
		<script type="text/javascript" src="<?php echo base_url("assets/js/start.js")?>"></script>

	</body>
</html>                    