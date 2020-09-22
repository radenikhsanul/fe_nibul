<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home</title>
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
			.header{
				margin-left: 50px;
				margin-bottom: -60px;
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
			.carousel{
				margin-top: 10px;
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
						  		
						  		<li class="nav-item">
							        <a href="#!" class="nav-link navbar-link-2 waves-effect">
							          <span class="badge badge-pill white">1</span>
							          <i class="glyphicon glyphicon-shopping-cart icon-shopping mr-6 pl-0"></i>
							        </a>
							    </li>
						  		
						  	</div>	
					</div>

				

	      	</ul>

	      		<button type="button" class="btn btn-outline-light mr-3">Masuk</button>
	      
	      		<button type="button" class="btn btn-light">Daftar</button>

	</nav>
</div>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		    	<img src="img/store.jpg" class="d-block w-100">
			</div>
			    <div class="carousel-item">
			      	<img src="img/store2.jpg" class="d-block w-100">
			    </div>
				    <div class="carousel-item">
				      	<img src="img/store3.jpg" class="d-block w-100">
				    </div>
		  		</div>
		  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
		  	</a>
	</div>

<br>

	<div class='header'>
		<div class=''>
			<h2>Produk Terbaru</h2>
		</div>
	</div>

<br>
<br>
		<div class="card-deck m-5">
		  	<div class="card">
			  	<div class="shadow-lg p-3 mb-7 bg-white rounded">
				    <img src="img/kaftanlyra.jpg" class="card-img-top" alt="#">
				    <div class="card-body">
				      <h5 class="card-title">Kaftan Lyra</h5>
				      <p style="color:#602749;">Rp.320.000</p>
			      
			  	</div>
			</div>
		</div>
		  	<div class="card">
			  	<div class="shadow-lg p-3 mb-7 bg-white rounded">
				    <img src="img/tasrotan.jpg" class="card-img-top" alt="#">
				    <div class="card-body">
				      <h5 class="card-title">Tas Rotan</h5>
				      <p style="color:#602749;">Rp.130.000</p>
			    </div>
		  	</div>
		</div>
		  	<div class="card">
		  		<div class="shadow-lg p-3 mb-6 bg-white rounded">
				    <img src="img/cermincircle.jpg" class="card-img-top" alt="#">
				    <div class="card-body">
				      <h5 class="card-title">Cermin Circle</h5>
				      <p style="color:#602749;">Rp.145.000</p>
				</div>
		  	</div>
		</div>
		  	<div class="card">
			  	<div class="shadow-lg p-3 mb-6 bg-white rounded">
				    <img src="img/nikewmnsairforce.jpg" class="card-img-top" alt="#">
				    <div class="card-body">
				      <h5 class="card-title">Nike Wmns Air Force</h5>
				      <p style="color:#602749;">Rp.1.800.000</p>
			    </div>
		  	</div>
		</div>
		  	<div class="card">
			  	<div class="shadow-lg p-3 mb-6 bg-white rounded">
				    <img src="img/jacket.jpg" class="card-img-top" alt="#">
				    <div class="card-body">
				      <h5 class="card-title">Jaket</h5>
				      <p style="color:#602749;">Rp.560.000</p>
				</div>
		  	</div>
	</div>


</body>
</html>