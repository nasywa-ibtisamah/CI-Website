<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url(); ?>assets/admin/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span></span>Admin</a>
                <div class="collapse navbar-collapse scrollspy smooth-scroll " id="nav-collapse">
                        <ul class="nav navbar-nav navbar-left wow zoomIn" data-wow-delay="0.5s">
                            <li><a href="<?php echo base_url().'admin/readUser' ?>">Data User</a></li>
                            <li><a href="<?php echo base_url('login_admin/logout'); ?>">Logout</a></li>
                    <div class="clear"></div>
                    </ul>
                          </div>
                         </div>            
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li><a href="<?php echo base_url('admin/datapesan'); ?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Pesanan</a></li>
            <li><a href="<?php echo base_url('unduh'); ?>"><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"></use></svg> Upload </a></li>
            <li><a href="<?php echo base_url('tabel_upload'); ?>"><svg class="glyph stroked fokder"><use xlink:href="#stroked-folder"></use></svg> Portofolio </a></li>
            </ul>
        <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
    </div><!--/.sidebar-->

    

       

    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min2.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
</body>

</html>
