<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f937b853a3.js" crossorigin="anonymous"></script>
	<title> Récapitulatif des produits </title>
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

<main>
<a href="#" class="link-primary">Sega Megadrive</a>
<p class="p-3 mr-3 border border-info w-25 p-3 mr-3" > La Mega Drive, ou Sega Genesis en Amerique du Nord, est une console de jeux vidéo de quatrieme génération conçue et commercialisée par le constructeur japonais Sega Enterprise,LTD. <br>
La Mega Drive est la troisieme console de Sega, elle succède à la Master System.</p> 

<p class="p-3 mr-3font-weight-bold">46,76€</p>

<p>
			<input type="submit" name="submit" value="Ajouter le produit" class="p-3 mb-2 btn btn-outline-info">
		</p>
</main>