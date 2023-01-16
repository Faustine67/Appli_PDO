<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f937b853a3.js" crossorigin="anonymous"></script>
	<title> Ajout produit </title>
	<!--<link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>
</head>
	<nav class="d-flex flex-row justify-content-end" class="navbar navbar-light" style="background-color: #e3f2fd;">
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

    <?php

    require_once('db-functions.php');
    $store = findAll();

	foreach ($store as $product) { ?>
<main> <!--We link the name from the DB to the application -->
		<a href="#" class="link-primary"><?=$product["nameProduct"] ?></a> <!-- The information "<?=" / "?>" is equal to an "echo" -->
		<p class="p-3 mr-3 border border-info w-25 p-3 mr-3" ><?=$product["description"]?></p> 
		
		<p class="p-3 mr-3font-weight-bold"><?=$product["price"]?></p>
		
		<p>
					<input type="submit" name="submit" value="Ajouter le produit" class="p-3 mb-2 btn btn-outline-info">
				</p>
		</main>
<?php
}

	?>
	 
