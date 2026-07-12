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

      <a href="#" class="logo">Santa Catalina.</a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="Modelo/about.php">nosotros</a>
         <a href="Modelo/carrito.php">carrito</a>
         <a href="Modelo/productos.php">productos</a>
         <a href="Modelo/contact.php">contacto</a>
         <a href="Modelo/orden.php">ordenes</a>
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
         <a href="Controlador/lib/search_page.php"><i class="fas fa-search"></i></a>
         <a href="Vistas/wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="Modelo/carrito.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>
      <!--<div class="profile">
         <p>< $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">Actualizar Perfil</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">registrar</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 

         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">registrar</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>        
      </div>-->
   </section>

</header>
<body>