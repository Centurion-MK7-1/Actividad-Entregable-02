<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">

   <section class="flex">
      <a href="#" class="logo">Santa Catalina.</a>
      <nav class="navbar">
         <a href="../index.php">home</a>
         <a href="about.php">nosotros</a>
         <a href="#">carrito</a>
         <a href="productos.php">productos</a>
         <a href="contact.php">contacto</a>
      </nav>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="#"><i class="fas fa-search"></i></a>
         <a href="#"><i class="fas fa-heart"></i><span>(0)</span></a>
         <a href="#"><i class="fas fa-shopping-cart"></i><span>(1)</span></a>
         <div id="#" class="fas fa-user"></div>
      </div>
   </section>
</header>

<section class="products shopping-cart">
   <h3 class="heading">shopping cart</h3>
   <div class="box-container">

    <form action="" method="post" class="box">
      <input type="hidden" name="cart_id" value="">
      <a href="#" class="fas fa-eye"></a>
      <img src="../project_images/camera-1.webp" alt="">
      <div class="name">Camara Canon</div>
      <div class="flex">
         <div class="price">$39/-</div>
         <input type="number" name="qty" class="qty" min="1" max="99" value="1">
         <button type="submit" class="fas fa-edit" name="update_qty"></button>
      </div>
      <div class="sub-total"> sub total : <span>$39/-</span> </div>
      <input type="submit" value="delete item" class="delete-btn" name="delete">
   </form>

   <form action="" method="post" class="box">
      <input type="hidden" name="cart_id" value="">
      <a href="#" class="fas fa-eye"></a>
      <img src="../project_images/laptop-1.webp" alt="">
      <div class="name">Laptop 8GB ram</div>
      <div class="flex">
         <div class="price">$128/-</div>
         <input type="number" name="qty" class="qty" min="1" max="99" value="1">
         <button type="submit" class="fas fa-edit" name="update_qty"></button>
      </div>
      <div class="sub-total"> sub total : <span>$128/-</span> </div>
      <input type="submit" value="delete item" class="delete-btn" name="delete">
   </form>

   <form action="" method="post" class="box">
      <input type="hidden" name="cart_id" value="">
      <a href="#" class="fas fa-eye"></a>
      <img src="../project_images/fridge-1.webp" alt="">
      <div class="name">Nevera made</div>
      <div class="flex">
         <div class="price">$22/-</div>
         <input type="number" name="qty" class="qty" min="1" max="99" value="1">
         <button type="submit" class="fas fa-edit" name="update_qty"></button>
      </div>
      <div class="sub-total"> sub total : <span>$22/-</span> </div>
      <input type="submit" value="delete item" class="delete-btn" name="delete">
   </form>
</section>
   <div class="cart-total">
      <p>grand total : <span>$189/-</span></p>
      <a href="#" class="option-btn">continue shopping</a>
      <a href="#" class="delete-btn">delete all item</a>
      <a href="#" class="btn">proceed to checkout</a>
   </div>

<?php include "../Vistas/piepagina.php"; ?>
</body>
</html>