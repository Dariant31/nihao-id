<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $data['title']; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="favicon" href="<?=$GLOBALS['basePath'];?>/assets/img/favicon.png">

		<!-- CSS -->
        <link rel="stylesheet" href="<?=$GLOBALS['basePath'];?>/css/main.css">
        <link rel="stylesheet" href="<?=$GLOBALS['basePath'];?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$GLOBALS['basePath'];?>/css/mdb.css">
        <!-- Font Awesome -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    </head>

    <body class="fixed-sn mdb-skin">
    <?php include 'Elements/mail_process.php'; ?>
    <?php include 'Elements/contact.php'; ?>
    <?php include 'Elements/whatsapp.php'; ?>
   
	    <!--Double navigation-->
	    <header>
	        <!-- Sidebar navigation -->
	        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
	            <!-- Logo -->
	            <li style="background-color: white; padding: 20px; height: 120px;">
	            	<a href="<?=$GLOBALS['basePath'];?>/home/index" style="padding: 0px;"><img src="<?=$GLOBALS['basePath'];?>/assets/img/logo.png"></a>
	            </li>
	            <!--/. Logo -->
	            <!--Social-->
	            <li>
	                <ul class="social">
	                    <li><a class="icons-sm fb-ic" href="https://www.facebook.com/rumbelnihao/" target="_blank"><i class="fa fa-facebook"> </i></a></li>
	                    <li><a class="icons-sm pin-ic" href="https://www.instagram.com/nihao_id/" target="_blank"><i class="fa fa-instagram"> </i></a></li>
	                    <li><a class="icons-sm gplus-ic" href="https://twitter.com/nihao_id" target="_blank"><i class="fa fa-linkedin"> </i></a></li>
	                    <li><a class="icons-sm tw-ic" href="https://www.linkedin.com/company-beta/17898171/" target="_blank"><i class="fa fa-twitter"> </i></a></li>
	                </ul>
	            </li>
	            <!--/Social-->
	            <!--Search Form-->
	            <li>
	                <form class="search-form" role="search">
	                    <div class="form-group waves-light">
	                        <input type="text" class="form-control" placeholder="Search">
	                    </div>
	                </form>
	            </li>
	            <!--/.Search Form-->
	            <!-- Side navigation links -->
	            <li>
	                <ul class="collapsible collapsible-accordion">
	                	<li><a class="waves-effect" href="<?= $GLOBALS['basePath'] ?>/Home/index"><i class="fa fa-home" aria-hidden="true"></i> Halaman Depan</i></a></li>
	                    <li><a class="waves-effect" href="<?= $GLOBALS['basePath'] ?>/AboutUs/index"><i class="fa fa-child" aria-hidden="true"></i> Tentang Kami</i></a></li>
	                    <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-graduation-cap"></i> Program Kami<i class="fa fa-angle-down rotate-icon"></i></a>
	                        <div class="collapsible-body">
	                            <ul>
	                                <li><a href="#" class="waves-effect">Bahasa Mandarin</a>
	                                </li>
	                                <li><a href="#" class="waves-effect">Calistung</a>
	                                </li>
	                                <li><a href="#" class="waves-effect">Bimbingan Belajar</a>
	                                </li>
	                            </ul>
	                        </div>
	                    </li> -->
	                    <li><a class="waves-effect" href="<?= $GLOBALS['basePath'] ?>/Gallery"><i class="fa fa-picture-o" aria-hidden="true"></i> Kumpulan Foto</i></a></li>
	                    <li><a class="waves-effect" href="<?= $GLOBALS['basePath'] ?>/Biaya/index" ><i class="fa fa-money" aria-hidden="true"></i> Biaya</i></a></li>
	                    <li><a class="waves-effect" href="<?= $GLOBALS['basePath'] ?>/Pendaftaran/index" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Formulir Pendaftaran</i></a></li>
	                    <li><a class="waves-effect" href="<?= $GLOBALS['basePath'] ?>/Alamat/index"><span class="fa-stack fa-lg"><i class="fa fa-map-o fa-stack-1x"></i><i class="fa fa-map-marker fa-stack-2x"></i></span> Alamat Kami</i></a></li>
	                </ul>
	            </li>
	            <!--/. Side navigation links -->
	            <div class="sidenav-bg mask-strong"></div>
	        </ul>
	        <!--/. Sidebar navigation -->

	        <!--Navbar-->
	        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

	            <!-- SideNav slide-out button -->
	            <div class="float-left">
	                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
	            </div>

	            <ul class="nav navbar-nav nav-flex-icons ml-auto">
	                <li class="nav-item">
	                    <a class="nav-link" data-toggle="modal" data-target="#modalContactForm" target=""><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
	                    
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" data-toggle="modal" data-target="#whatsappmodal"><i class="fa fa-whatsapp"></i> <span class="hidden-sm-down">Support</span></a>
	                </li>
	                <!-- <li class="nav-item dropdown">
	                    <a type="button" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span>
	                    </a>
	                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
	                        <a class="dropdown-item" href="#">Logout</a>
	                        <a class="dropdown-item" href="#">My account</a>
	                    </div>
	                </li> -->
	            </ul> 
	        </nav>
	        <!--/.Navbar-->
	    </header>
	    <!--/Double navigation-->

	    <!--Main layout-->
	    <main>

	    	<?php if (file_exists('app/views/'. $data['controller'] . '/' . $data['method'] . '.php')) { ?>
	    		<?php include 'app/views/'. $data['controller'] . '/' . $data['method'] . '.php'; ?>
	    	<?php } else { ?>
	    		<?php include 'app/views/Error/missing_content.php'; ?>
	    	<?php } ?>
	    </main>
	    <!--/Main layout-->


	    <!--Footer-->
	    <footer class="page-footer center-on-small-only">

	        <!--Footer Links-->
	        <div class="container-fluid">
	            <div class="row wow fadeIn" data-wow-delay="0.3s">

	                <!--First column-->
	                <div class="col-md-3 offset-md-1">
	                    <h5 class="title">Nihao Indonesia</h5>
	                    <p>Ni hao adalah Rumah Belajar Anak. yang didirikan pada tahun 2016 oleh salah satu guru tk khayangan montessori school depok. disini kami menawarkan tempat bagi anak-anak untuk belajar bahasa mandarin, belajar membaca menulis dan berhitung (calistung) dan juga membantu anak-anak untuk mereview pelajaran di sekolah.</p>
	                </div>
	                <!--/.First column-->

	                <hr class="hidden-md-up">

	                <!--Second column-->
	                <div class="col-md-2 offset-md-1">
	                    <h5 class="title">Tentang Nihao-Id</h5>
	                    <ul>
	                        <li><a href="<?= $GLOBALS['basePath'] ?>/AboutUs/index">Tentang Kami</a></li>
	                        <li><a data-toggle="modal" data-target="#modalContactForm">Hubungi Kami</a></li>
	                        <li><a href="<?= $GLOBALS['basePath'] ?>/assets/privacypolicy.htm">Karir di Nihao Id</a></li>
	                        <li><a href="<?= $GLOBALS['basePath'] ?>/assets/privacypolicy.htm">Privacy Policy kami</a></li>
	                    </ul>
	                </div>
	                <!--/.Second column-->

	                <hr class="hidden-md-up">

	                <!--Fourth column-->
	                <div class="col-md-4">
	                    <h5 class="title">Follow instagram kami</h5>
	                    <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/d2b4d4e152375698beceef926b8193eb.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
	                </div>
	                <!--/.Fourth column-->

	            </div>
	        </div>
	        <!--/.Footer Links-->

	        <hr>

	        <!--Call to action-->
	        <div class="call-to-action wow fadeIn" data-wow-delay="0.3s">
	            <ul>
	                <li>
	                    <h5>Daftarkan anak anda Sekarang ! </h5></li>
	                <li><a href="<?= $GLOBALS['basePath'] ?>/Pendaftaran/index" class="btn btn-danger">Daftar</a></li>
	            </ul>
	        </div>
	        <!--/.Call to action-->

	        <hr>

	        <!--Social buttons-->
	        <div class="social-section wow fadeIn" data-wow-delay="0.3s">
	            <ul>
	                <li><a href="https://www.facebook.com/mdbootstrap" target="_blank" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
	                <li><a href="https://twitter.com/MDBootstrap" target="_blank" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
	                <li><a href="https://www.instagram.com/material_design_for_bootstrap/" target="_blank" class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
	            </ul>
	        </div>
	        <!--/.Social buttons-->

	        <!--Copyright-->
	        <div class="footer-copyright">
	            <div class="container-fluid">
	           		Made with <i class="fa fa-heart" aria-hidden="true" style="color: red;"></i> in Nürnberg, Germany
	            </div>
	        </div>
	        <!--/.Copyright-->

	    </footer>
	    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?=$GLOBALS['basePath'];?>/js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="<?=$GLOBALS['basePath'];?>/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=$GLOBALS['basePath'];?>/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=$GLOBALS['basePath'];?>/js/mdb.min.js"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

    <!-- MDB Lightbox Init -->
	<script>
	    $(function () {
	        $("#mdb-lightbox-ui").load("<?=$GLOBALS['basePath'];?>/../app/views/Elements/mdb-lightbox-ui.html");
	    });
	</script>

    <script>
        new WOW().init();
    </script>
	<script type="text/javascript">

	<?php if(isset($_POST['send'])) { ?> /* Your (php) way of checking that the form has been submitted */

	            $(function() {                       // On DOM ready
	                $('#modalContactForm').modal('show');     // Show the modal
	            });

	<?php } ?>                                    /* /form has been submitted */

        </script>
    </body>
</html>