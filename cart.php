<?php
session_start();
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <div style="margin-left: 100px">
<?php

if (array_sum($_SESSION['count']) == 0)
{
    echo '<h2>Votre panier est vide ! </h2><br>';
} else {
    echo '<h2>Votre panier contient :</h2><br>';
    if ($_SESSION['count']['46'] > 0) {
        echo '<h3>Pecan nuts ---->  x ' . $_SESSION['count']['46'] . '</h3>';
    }
    if ($_SESSION['count']['36'] > 0) {
        echo '<h3>Chocolate chips ---->  x ' . $_SESSION['count']['36'] . '</h3>';
    }
    if ($_SESSION['count']['58'] > 0) {
        echo '<h3>Chocolate cookie ---->  x ' . $_SESSION['count']['58'] . '</h3>';
    }
    if ($_SESSION['count']['32'] > 0) {
        echo '<h3>M&M\'s&copy; cookies ---->  x ' . $_SESSION['count']['32'] . '</h3>';
    }
}
?>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
