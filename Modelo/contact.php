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
    <title>Contacto</title>
       <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
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
         <a href="about.php">nosotros</a>
         <a href="carrito.php">carrito</a>
         <a href="productos.php">productos</a>
         <a href="#">contacto</a>
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
<body>
<section class="contact">

   <form action="" method="post">
      <h3>Contactanos</h3>
      <input type="text" name="name" placeholder="Escribe tu nombre" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="Escribe tu email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="Escribe tu numero" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</section>

<?php include "../Vistas/piepagina.php"; ?>

</body>
</html>