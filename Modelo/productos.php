<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<header class="header">

   <section class="flex">

      <a href="#" class="logo">Santa Catalina.</a>

      <nav class="navbar">
         <a href="../index.php">home</a>
         <a href="about.php">nosotros</a>
         <a href="carrito.php">carrito</a>
         <a href="#">productos</a>
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
<body>

<?php include "../Vistas/productosG.php"; ?>
<?php include "../Vistas/piepagina.php"; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="../Constrolador/script.js"></script>

<script>
var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});
</script>

</body>
</html>