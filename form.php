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
			<a class="title" id="title" href="index.html">MGallery</a>
			<div class="menu">
            		 <a class="text" id="subtitle" href="lab1Web.html">Главная</a>
            		 <a class="text"  id="subtitle" href="kinds.php">Морфы</a>
             		 <a class="title"  id="subtitle" href="form.php">Оставить отзыв</a>  
			</div>
   			 <form class="form-inline my-2 my-lg-0">
     			 <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" id="searchplace">
     			 <button class="btn btn-outline-warning my-2 my-sm-0" type="button" id="searchbutton"><img src="resources/search.png" width="32"></button>
    			</form>
		</nav>
	</div>
	<!-- Вводный текст -->
	<div style="margin-top: 180px; margin-left: 180px;">
	
	<!-- Форма для заполнения -->
  	<form method="post" action="">
	<div class="form-group">
			
   			 <label for="exampleInputPassword1" style="font-family: 'Playfair Display'; font-size: 30px;letter-spacing:10px;" class="name">Ваше имя</label>
   			 <input type="name" class="form-control" name="name" id="name" placeholder="Введите имя:" style="width: 900px; height: 73px;font-family: 'Playfair Display';font-size: 30px;border-radius: 10px 10px 10px 10px;" required>
 		 </div>
 		 <div class="form-group">
		 <br>
   			 <label for="exampleInputEmail1"style="font-family: 'Playfair Display';font-size: 30px;letter-spacing:10px;" class="name">Адрес электронной почты</label>
   			 <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Введите e-mail" style="width: 900px; height: 73px;font-family: 'Playfair Display';font-size: 30px;border-radius: 10px 10px 10px 10px;" required>	
  		</div></br>
		 <div class="form-group">
		 
   			 <label for="exampleFormControlTextarea1" style="font-family: 'Playfair Display';font-size: 30px;letter-spacing:10px;" class="name">Ваш отзыв</label>
   			 <textarea class="form-control" id="text" name="text" rows="10" style="width: 900px; height: 300px; border-radius: 10px 10px 10px 10px;font-size: 30px;"></textarea>
 		 </div>
		  <!-- Кнопка -->
  		 <button type="submit" class="btn btn-dark btn-primary" style="font-family: 'Playfair Display';font-size: 30px; width: 384px;
  height: 74px; margin-left: 30px; border-radius: 10px 10px 10px 10px;margin-top: 20px;letter-spacing:10px; background-color: rgb(0,0,0, 0.6) ; "data-bs-target="#mod" id="btn" data-bs-toggle="modal" >Отправить</button>
		
		</form>	
		<?
		$email = $_POST['email'];
		$name = $_POST['name'];
		$text = $_POST['text'];
		$q = "INSERT INTO form (email, name, text) VALUES ('{$email}', '{$name}', '{$text}')";
		$conn->query($q);
		?>
		</div>
		
		
   	
	
	
	
	
	<?php
$conn = mysqli_connect("localhost", "root", "root", "lab4");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM form";
if($result = mysqli_query($conn, $sql)){
     
    
    echo "<table><tr><th>Имя___________</th><th>Почта_______________________________</th><th>Отзыв</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["text"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

	 <div class="imgTwo">
	  <img style="margin-right:50px;" src="resources/iconTwitter.png" width="80" >
	  <img style="margin-right:50px;" src="resources/iconVK.png" width="80">
	  <img src="resources/iconYouTube.png" width="80">
    </div>
	
	
	
	<!-- Модальное окно -->
	<div class="modal fade" id="mod" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Спасибо за ваш отзыв!</h5>
			  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
					  </button>
			</div>
			<div class="modal-body">
			  <p>Ваши данные успешно отправлены)</p>
			</div>
		  </div>
		</div>
	  </div>
	<script src="script.js"></script>
	
	</div>
 </body>
</html>