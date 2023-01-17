<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('db-functions.php')?>;
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f937b853a3.js" crossorigin="anonymous"></script>
	<title> Presentation des produits </title>
	<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>

</head>
<nav class="d-flex flex-row justify-content-end" class="navbar-light" style="background-color: #e3f2fd;">
	<a class="p-3 text-grey" style="text-decoration:none" href="index.php">Ajout Article</a>
	<a class="p-3 text-grey" style="text-decoration:none" href="recap.php"> 
		<i class="fa-solid fa-cart-shopping"></i>
		 <span>
		 <?php 
					//condition ternaire
					//echo (isset($_SESSION['products'])) ? count($_SESSION['products']) : "0";

					if(isset($_SESSION['products'])){
						echo count($_SESSION['products']);
					} else {
						echo "0";
					}
				?>
		</span>
	</a>
</nav>
<body>
	<main>
	<form action="traitement.php?action=addProduct" method="post"> <!-- "action" indicate the form target, the file to reach when the user will send the form -->
	<p> <?($product['nameProduct']) ?></p>
	<p> <?($product ['description']) ?></p>
	<p> <?($product ['price']) ?></p>				
	<p>
				<input type="submit" name="submit" value="Ajouter le produit" class="p-3 mb-2 btn btn-outline-info">
			</p>
	</main> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>