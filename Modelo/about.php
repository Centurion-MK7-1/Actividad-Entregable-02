<?php
include '../Controlador/lib/connect.php';
include '../Controlador/lib/wishlist_cart.php';
session_start();

   $user_id = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
<header class="header">

   <section class="flex">

      <a href="../index.php" class="logo">Santa Catalina.</a>

      <nav class="navbar">
         <a href="../index.php">home</a>
         <a href="#">nosotros</a>
         <a href="carrito.php">carrito</a>
         <a href="productos.php">productos</a>
         <a href="contact.php">contacto</a>
         <a href="orden.php">ordenes</a>
      </nav>

      <div class="icons">
        <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="../Controlador/lib/search_page.php"><i class="fas fa-search"></i></a>
         <a href="../Vistas/wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="carrito.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="#" class="fas fa-user"></div>
      </div>

   </section>

</header>

<div class="breadcumb-area bg-img" style="background-image: url(../project_images/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Sobre Mi</h2>
        </div>
    </div>

    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading" style="text-align: center; padding: 100px 50px;
                    letter-spacing: 2px; margin-bottom: 20px; font-family: Montserrat, sans-serif;    line-height: 1.3; ">
                        <span style="color: #606060; font-size: 12px; text-transform: uppercase; margin-bottom: 15px; display: block;
                        letter-spacing: 2px;">Peru 2026</span>
                        <h2 style="font-size: 36px;">Actividad Entregable 03</h2>
                        <h2 style="font-size: 36px;">Actividad Individual</h2>
                        <h5 style="font-size: 24px;">Curso: PROGRAMACIÓN WEB| Fecha: 28/06/2026 </h5>
                        <h5 style="font-size: 24px;">Autor: Dennis Diaz Meza | NRC: 38141</h5>
                        <h3 style="font-size: 24px;">PA03</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "../Vistas/piepagina.php"; ?>

</body>
</html>