<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <script src="https://kit.fontawesome.com/f937b853a3.js" crossorigin="anonymous"></script>
  <title>Liste produit</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <!-- <img src="Images/logo.png"> -->
        <form>
          <input type="search" id="search-input" placeholder="Rechercher...">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
      <div class="cart">
        <a href="index.php">Ajout Article</a>
        <a href="recap.php" >
        <i class="fa-solid fa-cart-shopping"></i>
          <span>
            <?php
            if (isset($_SESSION['products'])) {
              echo count($_SESSION['products']);
            } else {
              echo "0";
            }
            ?>
          </span>
        </a>
      </div>
    </nav>
  </header>
  <main>
    <?php
    require_once('db-functions.php');
    $store = findAll();

    foreach ($store as $product) { ?>
      <form action="traitement.php?action=ajouterProduit&id=<?= $product["id"] ?>" method="post">
        <section class="product-card" data-product-id="<?= $product["id"] ?>">
          <a href="product.php?id=<?= $product["id"] ?>"><?= $product["nameProduct"] ?></a>
          <p><?= $product["description"] ?></p>
          <p><?= $product["price"] . "€" ?></p>
          <p><input type="submit" name="submit" value="Ajouter le produit"></p>
    </section>
			</main>
		</form>
	</body>
	<?php
}

	?>
	 </html>
