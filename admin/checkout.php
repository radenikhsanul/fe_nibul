<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CheckOut</title>
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

   
 
  
</head>
<body>

    <div id="wrapper">
        <nav class="navbar" >
  <div class="container-fluid">
    
    <a class="navbar-brand">
      <div class="logo"><img src="assets/img/logo.jpg" width="140" height="40"/></div>
    </a>

    <ul class="nav navbar-nav">
    </ul>
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
                        <a href="profiluser.html"><i class="fa fa-user fa-3x"></i> Akun Saya</a>
                    </li>
                     <li>
                        <a class="active-menu" href="keranjang.html"><i class="fa fa-shopping-cart fa-3x"></i> Pesanan Saya</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <div class="container">
<!-- <a class="btn btn-primary" href="#" role="button">⬅Kembali</a> -->
<a href="index.html" class="btn btn-primary"><i style='font-size:16px' class="fa fa-angle-left fa-3x"></i> Kembali</a><br>
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home </a></li>
    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
  </ol>
</nav>
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<i class='fas fa-shopping-cart' style='font-size:24px'>Check Out</i>
<p align ="right">Tanggal pesan : 2020-07-28</p> 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img width="100" height="100" src="assets/img/iphone7plus.jpg" alt="" class="img-thumbnail"></td>
      <td>Iphone 7 Plus</td>
      <td>
        <div class="btn-group" role="group" aria-label="basic example">
          <button type="button" class="btn btn-secondary">-</button>
          <a type="text" class="btn btn-secondary">2</a>
          <button type="button" class="btn btn-secondary">+</button>
        </div>
      </td>
      <td>Rp. 6.000.000</td>
      <td>Rp. 12.000.000</td>
      <td>
          <a class="btn btn-danger" href="#" role="button"><i style='font-size:16px' class="fa fa-trash fa-3x"></i></a>
      </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img width="100" height="100" src="assets/img/sepatukets.jpg" alt="" class="img-thumbnail"></td>
      <td>Sepatu Kets</td>
      <td>
        <div class="btn-group" role="group" aria-label="basic example">
          <button type="button" class="btn btn-secondary">-</button>
          <a type="text" class="btn btn-secondary">1</a>
          <button type="button" class="btn btn-secondary">+</button>
        </div>
      </td>
      <td>Rp. 500.000</td>
      <td>Rp. 500.000</td>
      <td>
          <a class="btn btn-danger" href="#" role="button"><i style='font-size:16px' class="fa fa-trash fa-3x"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <th>Total Harga</th>
      <th>Rp.12.500.000</th>
      <td><a class="btn btn-success" href="#" role="button"><i style='font-size:16px' class="fa fa-shopping-cart fa-3x"></i> Checkout </a></td>
    </tr>
  </tbody>
</table>

</div>

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
   
</body>
</html>
