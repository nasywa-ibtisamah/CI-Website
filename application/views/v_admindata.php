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
												<li><a href="<?php echo base_url().'admin'?>">Data Pesanan</a></li>
												<li class="active"><a href="<?php echo base_url().'admin/readUser' ?>">Data User</a></li>
												<li><a href="<?php echo base_url().'unduh' ?>">Data Upload</a></li>
												<li><a href="<?php echo base_url('login_admin/logout'); ?>">Logout</a></li>
												<div class="clear"></div>
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
		<!-- The top navigation starts here - contains links and logo -->

<!-- Top navigtion ending here-->

 <div class="wrap">
   	 <div class="main">
	    <div class="content"><br/><br/>
	    	 <h2>Data User</h2>
	    	 <style type="text/css">
        		table, td {
          		  border: 2px solid #C6C6C6;
       				 }
 				   </style>
	    	 <table style="width: 100%;">
				<thead>
					<td>SELECT</td>
					<td>ID</td>
					<td>Username</td>
					<td>Password</td>
					<td>Nama</td>
					<td>Email</td>
					<td>No. Telp</td>
					<td>Alamat</td>
				</thead>
				<form method="post" action="<?php echo base_url().'admin/delete_user'?>"> 
			 <tbody>
			  <?php foreach ($data as $x) { ?>
			  <tr>
			   <td><input type="checkbox" name="user[]" value="<?php echo
			$x['id']?>"></td>
			<td><?= $x['id'] ?></td>
			   <td><?= $x['username'] ?></td>
			   <td><?= $x['password'] ?></td>
			   <td><?= $x['name'] ?></td> 
			   <td><?= $x['email'] ?></td>
			   <td><?= $x['nomor'] ?></td>
			   <td><?= $x['alamat'] ?></td>
          	 </tr>
			  <?php } ?>
			 </tbody>
			</table>
			<br/>
			<input type="submit" value="Delete">
		  </div>
     	</div> 
   	</div>  

<!-- Contact / Order  form -->
		<!-- ================ -->
		
<!-- Contact ending here -->




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
		<script type="text/javascript" src="<?php echo base_url("assets/js/start.js")?>"></script>

	</body>
</html>                    