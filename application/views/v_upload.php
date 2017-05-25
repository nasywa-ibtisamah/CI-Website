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
 
<div class="row">
			<div class="col-lg-12"><br/><br/><br/>
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<div class="col-md-6">
						<h1>Upload Bukti Pembayaran</h1>


								<?php
							echo validation_errors();
							?>
							<?php echo form_open_multipart('upload/create'); ?>


						    <input name="username" type="text" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" readonly> 
						    <input type="number" class="form-control" name="rek_asal" required placeholder="Rekening Asal"><br/>
						    <input type="number" class="form-control" name="rek_tujuan" required placeholder="Rekening Tujuan"><br/>
							<input type="text" class="form-control" name="keterangan" required placeholder="keterangan"><br/>


							<label for="userfile">File</label></td>
							<input type="file"  name="userfile" size="20" /><br/>


							<input type="hidden" name="is_submit" value="1" />
							<input  class="btn btn-primary" type="submit" name="submit" value="Submit">


							<?php echo form_close(); ?>


					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

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

	</body>
</html>                    