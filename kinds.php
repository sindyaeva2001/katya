<?php
    require 'script.php';
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
			<form class="form-inline">
     			<input class="form-control" type="search" placeholder="Поиск" aria-label="Search" id="searchplace">
     			<button class="btn btn-outline-success" type="button" id="searchbutton">Искать</button>
    			</form>
			<div class="menu">
             		 <a class="text"  id="subtitle" href="form.php">Связь с нами</a>  
			</div> 			 
		</nav>
	
	         </div>
	<!-- Карточки -->
	<div class="row" style="margin-top: 160px; margin-left: 130px;" align="center">
		<div class="card border-dark" style="width: 20rem; height: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="resources/<?php echo $img[0]?>" class="card-img-top" width=279px height=221px>
 	 		<div class="card-body">
			<p class="kind" align="justify"><?php echo $kind[0]?></p>
   	 		<p class="sn" align="justify"><?php echo $name[0]?></p>
  			</div>
		</div>
		<div class="card border-dark" style="width: 20rem; height: 22rem; margin-right: 80px; " >
			<p>	</p>
 	 		<img src="resources/<?php echo $img[1]?>" class="card-img-top"  width=279px height=221px>
 	 		<div class="card-body">
   	 		<p class="kind" align="justify"><?php echo $kind[1]?></p>
   	 		<p class="sn" align="justify"><?php echo $name[1]?></p>
  			</div>
		</div>
		<div class="card border-dark" style="width: 20rem; height: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="resources/<?php echo $img[2]?>" class="card-img-top"  width=279px height=221px >
 	 		<div class="card-body">
   	 		<p class="kind" align="justify"><?php echo $kind[2]?></p>
   	 		<p class="sn" align="justify"><?php echo $name[2]?></p>
  			</div>
		</div>


	</div>
	<div class="row" style="margin-top: 40px; margin-left: 130px;" align="center">
		<div class="card border-dark" style="width: 20rem; height: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="resources/<?php echo $img[3]?>" class="card-img-top" width=279px height=221px>
 	 		<div class="card-body">
			<p class="kind" align="justify"><?php echo $kind[3]?></p>
   	 		<p class="sn" align="justify"><?php echo $name[3]?></p>
  			</div>
		</div>
		<div class="card border-dark" style="width: 20rem; height: 22rem; margin-right: 80px; " >
			<p>	</p>
 	 		<img src="resources/<?php echo $img[4]?>" class="card-img-top"  width=279px height=221px>
 	 		<div class="card-body">
   	 		<p class="kind" align="justify"><?php echo $kind[4]?></p>
   	 		<p class="sn" align="justify"><?php echo $name[4]?></p>
  			</div>
		</div>
		<div class="card border-dark" style="width: 20rem; height: 22rem; margin-right: 80px;" >
			<p>	</p>
 	 		<img src="resources/<?php echo $img[5]?>" class="card-img-top"  width=279px height=221px >
 	 		<div class="card-body">
   	 		<p class="kind" align="justify"><?php echo $kind[5]?></p>
   	 		<p class="sn" align="justify"><?php echo $name[5]?></p>
  			</div>
		</div>

	</div>  
	<script src="search.js"></script> 
 </body>
</html>