<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php include "Vistas/user_header.php"?>
<?php include "Vistas/slider.php"?>
<section class="category">
   <h1 class="heading">shop by category</h1>
   <div class="swiper category-slider">
   <div class="swiper-wrapper">

   <a href="#" class="swiper-slide slide">
      <img src="project_images/icon-1.jpg" alt="">
      <h3>Cámaras</h3>
   </a>
   <a href="#" class="swiper-slide slide">
      <img src="project_images/icon-2.jpg" alt="">
      <h3>Celulares</h3>
   </a>
   <a href="#" class="swiper-slide slide">
      <img src="project_images/icon-3.jpg" alt="">
      <h3>Adsesorios</h3>
   </a>

   <a href="#" class="swiper-slide slide">
      <img src="project_images/icon-4.jpg" alt="">
      <h3>Domesticos</h3>
   </a>

   <a href="#" class="swiper-slide slide">
      <img src="project_images/icon-5.jpg" alt="">
      <h3>Electrodomésticos</h3>
   </a>

   </div>

   <!-- <div class="swiper-pagination"></div> -->

   </div>

</section>
<?php include "Vistas/productos.php"; ?>
<?php include "Vistas/piepagina.php"; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="Controlador/script.js"></script>

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