<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-user fa-3x"></i> Akun Saya</a>
                    </li>
                            
                    <li>
                        <a href="#"><i class="fa fa-bell fa-3x"></i> Notifikasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="regisakun.php">Permintaan Registrasi</a>
                            </li>
                            <li>
                                <a href="blokakun.php">Data Akun</a>
                                
                            </li>
                            
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Profil Admin</h2>   
                        <h5>Welcome Ade Syahreza , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div>
                    <form class="form-horizontal" action="/action_page.php">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tlp">Nomor Telepon:</label>
                            <div class="col-sm-10">
                              <input type="tel" class="form-control" id="tlp" placeholder="Masukkan Nomor Telepon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}">
                            </div>
                        </div>

                        <div class="form-group">
                                            <label class="control-label col-sm-2">Jenis Kelamin:</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Laki - Laki
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Perempuan
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>Lainnya
                                                </label>
                                            </div>
                                        </div>

                        <div class="form-group">
                                            <label class="control-label col-sm-2">Tanggal Lahir:</label>
                                              <div class="col-sm-10">
                              <input type="date" class="form-control" id="date">
                            </div>
                                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-2">
                              <div class="checkbox">
                                <label><input type="checkbox"> Ingat Saya</label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-2">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- js untuk bootstrap datetimepicker -->
 <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){

    $('#dtp').datetimepicker({
     format : 'DD/MM/YYYY'
    });

    $('#dtp_icon').datetimepicker({
     format : 'DD/MM/YYYY'
    });

    $('#dtp_jam').datetimepicker({
     format : 'HH:mm'
    });

  });
    
   
</body>
</html>
