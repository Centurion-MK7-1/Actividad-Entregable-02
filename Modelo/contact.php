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
    
<header class="header">

   <section class="flex">

      <a href="#" class="logo">Santa Catalina.</a>

      <nav class="navbar">
         <a href="../index.php">home</a>
         <a href="about.php">nosotros</a>
         <a href="carrito.php">carrito</a>
         <a href="productos.php">productos</a>
         <a href="#">contacto</a>
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