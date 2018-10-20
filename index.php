<?php
session_start();
if (!isset($_SESSION["loginname"]))
{
    header('Location: login.php');
    exit();
}

if (isset($_GET["out"]))
{
    session_destroy();
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count']['46'] = 0;
    $_SESSION['count']['36'] = 0;
    $_SESSION['count']['58'] = 0;
    $_SESSION['count']['32'] = 0;
} else {
    if (isset($_GET['add_to_cart'])) {
        ++$_SESSION['count'][$_GET['add_to_cart']];
    }
    if (isset($_GET['remove'])) {
        --$_SESSION['count'][$_GET['remove']];
    }
}


require 'inc/head.php'; ?>
    <h2 class="text-center" style="padding: 10px;">Bonjour <?= $_SESSION["loginname"] ?> !</h2><br>
<p class="text-center"><a href="index.php?out=1">Se déconnecter</a></p>
<section class="cookies container-fluid">
    <form method="post" action="">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
            <a  href="?add_to_cart=46" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </a><br><br>
            <p> <?= $_SESSION['count']['46'] ?> dans votre panier</p>
            <a href="?remove=46">Enlever un</a>
        </figcaption>
      </figure>

    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p> <?= $_SESSION['count']['36'] ?> dans votre panier</p>
            <a href="?remove=36">Enlever un</a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p> <?= $_SESSION['count']['58'] ?> dans votre panier</p>
            <a href="?remove=58">Enlever un</a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p> <?= $_SESSION['count']['32'] ?> dans votre panier</p>
            <a href="?remove=32">Enlever un</a>
        </figcaption>
      </figure>
    </div>
  </div>
</form>
</section>
<?php require 'inc/foot.php'; ?>
