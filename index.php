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
		<a class="p-3 text-grey" style="text-decoration:none" href="recap.php"> <i class="fa-solid fa-cart-shopping"></i> <span><?php echo count($_SESSION['products'])?></span></a>
	</nav>

    <?

    require_once('db-functions.php');
        $store = findAll();