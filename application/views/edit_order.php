q<!DOCTYPE html>
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
												<li class="active"><a href="<?php echo base_url().'home'?>">Beranda</a></li>
												<li ><a href="<?php echo base_url().'home'?>">Fountain</a></li>
                                                <li><a href="<?php echo base_url().'home'?>">Feedback</a></li>
                                                <li><a href="<?php echo base_url().'home'?>">Konsep</a></li>
                                                <li><a href="<?php echo base_url().'home'?>">Sweet Corner</a></li>
												<li><a href="<?php echo base_url().'pesan'?>">Cara Pesan</a></li>
                                                <li><a href="<?php echo base_url().'login'?>">Login / Register</a></li>
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

<!--Carosel ending here -->   
  								<?php foreach($purchase_order as $x){ ?>
								<form role="form" action="<?php echo base_url(). 'admin/update'; ?>" method="post">

								<div class="form-group">
									<input type="hidden" name="id" value="<?php echo $x->id ?>" readonly class="form-control">
								</div>

								<div class="form-group">
									<input type="text" name="tanggal" value="<?php echo $x->tanggal ?>" readonly class="form-control">
								</div>

								<div class="form-group">
									<td><input type="text" name="user" value="<?php echo $x->info_user ?>" readonly class="form-control">
								</div>

								<div class="form-group">
									<td><input type="text" name="fountain" value="<?php echo $x->fountain ?>" readonly class="form-control">
								</div>

								<div class="form-group">
									<input type="text" name="metode_pembayaran" value="<?php echo $x->metode_pembayaran ?>" readonly class="form-control">
								</div>

								<div class="form-group">
									<input type="text" name="catatan" value="<?php echo $x->catatan ?>" readonly class="form-control">
								</div>

								<div class="form-group">
									<label>status</label>
									<select class="form-control" name="status">
										<option value="<?php echo $x->status ?>"><?php echo $x->status ?></option>
								    <option value="tunggu">belum konfirmasi</option>
								    <option value="selesai">selesai</option>
								    <option value="batal">batal</option>
									</select>
								</div>

								<input type="submit" class="btn btn-primary" value="Submit">
							</div>
						</form>
						<?php } ?>




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
