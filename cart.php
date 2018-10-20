<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
<?php
if (!isset($_SESSION['panier']))
{?>
        <h2 class="text-center">Votre panier est vide !</h2>
<?php
} else
{?>
   <h2>Votre panier contient :</h2>
    <ul>
        <li><?php if (isset($_SESSION['46'])) { echo 'Pecan Nuts x ' . $_SESSION['46']; } ?></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

<?php}?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
