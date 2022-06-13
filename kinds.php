<?php
    require 'script.php';
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>MorphsGallery</title>
  <link rel="icon" href="resources/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 
 <div class="p-1 bg-image" style="background-image: url('resources/background1.png'); height: 100vh;">
	<!-- Шапка сайта -->
	<div class="container">
  		<nav class="navbar fixed-top navbar-light" id="head" >
 		 	<a class="logo" href="#"><img src="resources/logo.png" width=auto height=90px></a>
			<a class="title" id="title" href="lab1Web.html">MGallery</a>
			<div class="menu">
            		 <a class="text" id="subtitle" href="lab1Web.html">Главная</a>
            		 <a class="title"  id="subtitle" href="kinds.php">Морфы</a>
             		 <a class="text"  id="subtitle" href="form.php">Оставить отзыв</a>  
			</div>
   			 <form class="form-inline my-2 my-lg-0">
     			 <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" id="searchplace">
     			 <button class="btn btn-outline-warning my-2 my-sm-0" type="button" id="searchbutton"><img src="resources/search.png" width="32"></button>
    			</form>
		</nav>
	</div>
	
	
	
	
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" >
	<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="margin-top: -800px;"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="margin-top: -800px;"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
	<!-- Карточки 1-->
      <div class="row" style="margin-top: 130px; margin-left: 115px;" align="center";>
	
		<div class="card-img" style="width: 452px; height: 313px; margin-right: 162px;" alt="Card image" >
 	 		<img src="resources/<?php echo $img[0]?>" class="card-img-top"  width=452px height=311px>
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[0]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px; height: 313px; margin-right: 162px; " >
 	 		<img src="resources/<?php echo $img[1]?>" class="card-img-top"  width=452px height=311px>
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[1]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px; height: 313px; " >
 	 		<img src="resources/<?php echo $img[2]?>" class="card-img-top"  width=452px height=311px >
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[2]?> </a>
  			</div>
		</div>
	</div>
	
	
	
	<div class="row" style="margin-top: 100px; margin-left: 115px;" align="center">
		<div class="card-img" style="width: 452px; height: 313px; margin-right: 162px;" >
 	 		<img src="resources/<?php echo $img[3]?>" class="card-img-top" width=452px height=311px>
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[3]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px;height: 313px; margin-right: 162px; " >
 	 		<img src="resources/<?php echo $img[4]?>" class="card-img-top"  width=452px height=311px>
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[4]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px;height: 313px;" >
 	 		<img src="resources/<?php echo $img[5]?>" class="card-img-top"  width=452px height=311px >
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[5]?> </a>
			
  			</div>
		</div>
	</div>
	<img src="resources/Untitled.png" style="width: 1920px; height: 50px;">
	
    </div>
    <div class="carousel-item">
	<!-- Карточки 2-->
      <div class="row" style="margin-top: 130px; margin-left: 115px;" align="center";>
	
		<div class="card-img" style="width: 452px; height: 313px; margin-right: 162px;" alt="Card image" >
 	 		<img src="resources/<?php echo $img[6]?>" class="card-img-top"  width=452px height=311px style="border-radius: 30px 30px 0 0 ;">
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[6]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px; height: 313px; margin-right: 162px; " >
 	 		<img src="resources/<?php echo $img[7]?>" class="card-img-top"  width=452px height=311px style="border-radius: 30px 30px 0 0 ;">
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[7]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px; height: 313px; " >
 	 		<img src="resources/<?php echo $img[8]?>" class="card-img-top"  width=452px height=311px style="border-radius: 30px 30px 0 0 ;">
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[8]?> </a>
  			</div>
		</div>
	</div>
	
	
	
	<div class="row" style="margin-top: 100px; margin-left: 115px;" align="center">
		<div class="card-img" style="width: 452px; height: 313px; margin-right: 162px;" >
 	 		<img src="resources/<?php echo $img[9]?>" class="card-img-top" width=452px height=311px style="border-radius: 30px 30px 0 0 ;">
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[9]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px;height: 313px; margin-right: 162px; " >
 	 		<img src="resources/<?php echo $img[10]?>" class="card-img-top"  width=452px height=311px style="border-radius: 30px 30px 0 0 ;">
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[10]?> </a>
  			</div>
		</div>
		<div class="card-img" style="width: 452px;height: 313px;" >
 	 		<img src="resources/<?php echo $img[11]?>" class="card-img-top"  width=452px height=311px style="border-radius: 30px 30px 0 0 ;">
 	 		<div class="card-body">
			<a href="#" class="btn" style="width: 428px; 
													margin-left: -16px; 
													margin-top: -16px; 
													height: 50px; 
													border-radius: 0 0 30px 30px ;
													font-family: 'Playfair Display';
													font-size: 35px;
													font-style: normal;
													letter-spacing:15px;
													background-color: rgb(0,0,0, 0.6) ;
													color: white;"><?php echo $kind[11]?> </a>
			
  			</div>
		</div>
	</div>
	<img src="resources/Untitled.png" style="width: 1920px; height: 50px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="margin-left: -70px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="margin-right: -70px;" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>

	
	
	<script src="search.js"></script> 
	</div>
 </body>
</html>