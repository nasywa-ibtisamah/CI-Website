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
                        <li class=""><a href="<?php echo base_url().'admin'?>">Data Pesanan</a></li>
                        <li><a href="<?php echo base_url().'admin/readUser' ?>">Data User</a></li>
                        <li class="active"><a href="<?php echo base_url().'unduh' ?>">Data Upload</a></li>
                        <li ><a href="<?php echo base_url('login_admin/logout'); ?>">Logout</a></li>
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
<div class="wrap">
     <div class="main">
      <div class="content"><br/><br/>
         <h2>Data Upload Bukti Pembayaran</h2>
          <style type="text/css">
            table, td {
                border: 2px solid #C6C6C6;
               }
           </style>
         <table style="width: 100%" >

<hr>


<div class="table-responsive">
    <table  class="table table-bordered table-striped">
          <thead>
          <tr>
              <th data-field="id" data-sortable="true">id</th>
               <th data-field="username" data-sortable="true" value="<?php echo $this->session->userdata('nama'); ?>" readonly>Nama</th>
              <th data-field="rek_asal"  data-sortable="true">rek_asal</th>
              <th data-field="rek_tujuan"  data-sortable="true">rek_tujuan</th> 
              <th data-field="keterangan"  data-sortable="true">keterangan</th>
              <th data-field="gambar" data-sortable="true">gambar</th>
              <th data-field="unduh" data-sortable="true">unduh</th>
          </tr>
          </thead>
          <?php
          $id = 1;
          foreach($upload as $u){
          ?>
          <tr>
            <td><?php echo $id++ ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo $u->rek_asal ?></td>
            <td><?php echo $u->rek_tujuan ?></td>
            <td><?php echo $u->keterangan ?></td>
            <td><img src="<?php echo base_url('buktitrf/'.$u->nama_file); ?>"></td>
            <td><a href="<?php echo base_url('buktitrf/'.$u->nama_file); ?>">Unduh</a></td>
          </tr>
          <?php } ?>
      </table>
</div>
