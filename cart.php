<?php
require 'inc/head.php';

if(empty($_SESSION['loginname'])){
    header('location: login.php');
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <h1>Votre panier</h1>
        <?php
        if (isset($_COOKIE['id'])){
            $id = $_COOKIE['id'];
            $product = $catalog[$id];
        }
        echo "- ". $product['name'];
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
