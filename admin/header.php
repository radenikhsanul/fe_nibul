<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- CSS untuk bootstrap datetimepicker -->
 <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" type="text/css">  
</head>
<body>

    <div id="wrapper">
        <nav class="navbar" >
        
        
            <div class="container-fluid">
                <a class="navbar-brand">
                <div class="logo"><img src="assets/img/logo.jpg" width="140" height="40"/></div>
                </a>
                 
                <ul class="nav navbar-nav navbar-right">
      
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                 </ul>
             </div>
        </nav>
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user2.png" class="user-image img-responsive"/>
                    <h2>Admin</h2>
					</li>
          <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-user"></i> Akun Saya</a>
                    </li>

                    <li>
                        <a href="kategori.php"><i class="fa fa-clipboard-list"></i> Kategori</a>
                    </li>

                    <li>
                        <a href="toko.php"><i class="fa fa-store"></i>Toko</a>
                    </li>

                    <li>
                        <a href="produk.php"><i class="fa fa-box"></i> Produk</a>
                    </li>
                            
                    <li>
                        <a href="#"><i class="fa fa-bell"></i> Notifikasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="regisakun.php">Permintaan Registrasi</a>
                            </li>
                            <li>
                                <a href="dataakun.php">Data Akun</a>
                                
                            </li>
                            
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->