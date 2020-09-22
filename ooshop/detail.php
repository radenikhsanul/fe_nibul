<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Detail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    	<style type="text/css">
			.navbar-brand{
				margin:0 0 0 100px;
			}
		    .navbar{
		    	margin-bottom: -10px;
		  		width: 100%;
				background:#602749;

			}
			.navbar-nav{
				
				padding: 0;
				margin:0 20 0 80px;
			}
			.navbar-brand{
				margin-top: 10px;
			}
			.logo{
				margin-top: -20px;
				margin-left: -10px;
			}
			.btn{
				margin-top: -10px;
		
			}
			.dropdown{
				margin-top: 10px;
				margin-left: 30px;
			}
			.icon-shopping {
    		color: white;
			}
			.icon-search{
			color: #602749;
			}
			.card{
				margin-left: 80px;
				margin-top: 60px;
			}
			.card-img{
				margin-left: 200px;

			}
			.btn-group{
				margin-left: 10px;
				margin-bottom: -10px;

			}
			.btn-group{
				margin:0 20 0 80px;
				margin-left: 10px;
				margin-bottom: -10px;

			}
			.btn-beli{ 
			  	color: white; 
			  	background-color: #602749; 
			}
			.btn-keranjang{ 
			  	color: #602749; 

			}
			

		</style>

</head>
<body>

<!-- Navbar-->
<div id="wrapper">
 	<nav class="navbar">
 		


	    	<a class="navbar-brand">
	      		<div class="logo"><img src="logo.jpg" width="150" height="50"></div>
	    	</a>


	      	<ul class="navbar-nav mr-auto">

		       		<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
						<div class="btn-group mr-5" role="group" aria-label="First group">
						    <div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    Kategori
								</button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
							</div>
						</div>
						<div class="mx-auto" style="width: 350px;">

						  	<div class="btn-group mr-5" role="group" aria-label="Second group">

								<form class="navbar-search pl-5 ml-auto" action="">
								      <div class="input-group mb-0">
								        <div class="input-group-prepend">
								        	<input class="form-control white-text rgba-black-light border-5 z-depth-0 pl-3" type="text"
								            placeholder="Cari belanjaan anda" aria-label="Search">
								          		<a href="#!" class="input-icon d-flex align-items-center" type="button">
								          			<i class="glyphicon glyphicon-search icon-search mx-3"></i>
								          		</a>
								          
								        </div>
								      </div>
								    </form>

						  	</div>
						</div>

						  	<div class="btn-group mr-6" role="group" aria-label="Third group" style="margin-left: 520px">
						  		
						  		<li class="nav-item" style="margin-top:-8px">
							        <a href="#!" class="nav-link navbar-link-2 waves-effect">
							          <span class="badge badge-pill white">1</span>
							          <i class="glyphicon glyphicon-shopping-cart icon-shopping mr-6 pl-0" ></i>
							        </a>
							    </li>
						  		
						  	</div>	
					</div>

				

	      	</ul>

	      		<button type="button" class="btn btn-outline-light mr-3">Masuk</button>
	      
	      		<button type="button" class="btn btn-light">Daftar</button>

	</nav>
</div>
<!-- Navbar-->



<div class="card mb-3" style="max-width: 1350px;" >
	<div class="shadow p-3 mb-6 bg-white rounded">
		  <div class="row no-gutters">
		    <div class="col-md-4">
		      <img src="img/kaftanlyra.jpg" class="card-img" >
		    </div>


		<div class="row">
			<div style="margin-left: -440px">
            <div class="col-lg-3 col-md-4 col-xs-4 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/kaftanlyracoklat.jpg" alt="">
                    <img class="img-responsive" src="img/kaftanlyrahitam.jpg" alt="">
                    <img class="img-responsive" src="img/kaftanlyracream.jpg" alt="">
                </a>
             </div>


		    <div class="col-md-6" style="margin-left: 60px">
		    	<div class="keterangan"; style="margin-top: -20px" "margin-left: 400px" >
		      <div class="card-body">
		        <h1 class="card-title">Kaftan Lyra</h1>
		        <h5 class="card-title">124 Terjual</h5>
		        
		        
		        <h2>
		        	<b style="color:#602749"; class="card-title">Rp.320.000</b>
		        </h2>

		        <br>

  		Ukuran <div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				S
    				</button>
					    <div class="dropdown-menu m-4" aria-labelledby="btnGroupDrop1">
					      	<a class="dropdown-item" href="#">M</a>
					      	<a class="dropdown-item" href="#">L</a>
					      	<a class="dropdown-item" href="#">XL</a>
					    </div>
				</div>
<br>
<br>
		Warna 	<div class="btn-group m-4" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				coklat
    				</button>
					    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					      	<a class="dropdown-item" href="#">mocca</a>
					      	<a class="dropdown-item" href="#">hitam</a>
					    </div>
				</div>
		        
<br>
<br>

		Jumlah  <div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary">+</button>
					<button type="button" class="btn btn-secondary">1</button>
					<button type="button" class="btn btn-secondary">-</button>
				</div>

<br>
<br>
		Pengiriman <div class="btn-group m-4" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      				Kota Yogyakarta
    				</button>
					    <div class="dropdown-menu m-4" aria-labelledby="btnGroupDrop1">
					      	<a class="dropdown-item" href="#">M</a>
					      	<a class="dropdown-item" href="#">L</a>
					      	<a class="dropdown-item" href="#">XL</a>
					    </div>
				</div>		

<br>
<br>
				

	      		<button type="button" class="btn btn-default btn-keranjang">
	      			<div class="shadow-lg ">
		   				<span class="glyphicon glyphicon-shopping-cart"> Masukkan Kranjang</span>
		   			</div> 	
		   		</button>


	      		<button type="button" class="btn btn-beli" style="margin-left: 20px">Beli Sekarang</button>

		      	</div>
		    </div>
		</div>

	</div>
</div>


</body>
</html>