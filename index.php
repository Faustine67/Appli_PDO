<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<script src="https://kit.fontawesome.com/f937b853a3.js" crossorigin="anonymous"></script>
	<title> Liste produit </title>
</head>
<body>
	<nav>
		<div class= "logo">
			<img src = "logo.png" alt= "">
		<div>
		<form>
			<input type= "search" placeholder ="Rechercher...">
			<button type= "submit"> Rechercher </button>
		</form>
		<div class = "cart">
		<a href="index.php">Ajout Article</a>
		<i class="fa-regular fa-cart-shopping"></i>
		<a  href="recap.php">
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
		<?php

		require_once('db-functions.php');
		$store = findAll();

		foreach ($store as $product) { ?>
			<form action="traitement.php?action=ajouterProduit&id=<?= $product["id"] ?>" method="post"> <!-- "action" indicate the form target, the file to reach when the user will send the form -->

			
				<a href="product.php?id=<?= $product["id"]?>"><?=$product["nameProduct"] ?></a>
				<p ><?=$product["description"]?></p>
				<p ><?=$product["price"]."€"?></p>
				<p><input type="submit" name="submit" value="Ajouter le produit"></p>
			</main>
		</form>
	</body>
	<?php
}

	?>
	 </html>
