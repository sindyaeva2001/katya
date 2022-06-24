<?php
    require 'ajax.php';
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Собачье сердце</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>	
	<!-- Шапка сайта -->
	<div class="container">
  		<nav class="navbar fixed-top navbar-dark bg-inverse" id="head" >
 		 	<a class="logo" href="index.html"><img src="resources/image 1.png" width=121px height=90px ></a>
			<a class="title" id="title" href="index.html">Собачье <br><p>сердце</p></a>
			<div class="center">
            		 <a class="title"  id="subtitle"  href="kinds.php">Наши  жители</a>
			</div>
			<div class="menu">
             		 <a class="text"  id="subtitle" href="form.php">Связь с нами</a>  
			</div>
		</nav>
	</div>
	<div style="margin-top: 160px; margin-left: 40px;">
	<!-- Форма для заполнения -->
  	<form method="post" action="ajax.php">
  		<div class="form-group">
   			 <label for="exampleInputPassword1" class="name">Ваше имя(обязательно)</label>
   			 <input type="name" class="form-control" name="name" id="name" placeholder="Введите имя:" style="width: 680px;" required>
 		 </div><br>
		<div class="form-group">
   			 <label for="exampleInputEmail1" class="name">Адрес электронной почты (обязательно)</label>
   			 <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Введите адрес почты" style="width: 680px;" required>	
  		</div><br>

		 <div class="form-group">
   			 <label for="exampleFormControlTextarea1" class="name">Ваше сообщение</label>
   			 <textarea class="form-control" id="text" name="text" rows="10" style="width: 680px;"></textarea>
 		 </div><br>
		  <!-- Кнопка -->
  		 <button type="submit" class="btn btn-dark btn-primary" data-bs-target="#mod" id="btn" data-bs-toggle="modal" >Отправить отзыв</button>
		</form>	
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
			  <p>Ваши данные успешно отправлены.</p>
			</div>
		  </div>
		</div>
	  </div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
 </body>
</html>