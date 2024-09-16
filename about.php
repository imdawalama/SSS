<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-image.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Hello! we are six string store where you can find your all the musical instrument and we provide you the quality guitar with fine accessories. We are also here to promote our traditional instrument so that our coming generation can follow our culture ongoingly. We are there for you 24/7 and if you have any query contact us.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-01.jpg" alt="">
         <p> Only issue I have is they usually deliver when I'm a little caught up, though I've set a preferred delivery time.Thank you!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lama Ji</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-02.jpg" alt="">
         <p>Shopping with music store is always a great and easy experience. I will be shopping with music store for many years to come. Thank you</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bibek Rai</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-03.jpg" alt="">
         <p>I was looking for monitors for my Reloop 7000 turntable and I found what I needed! Excellent quality/price! I will definitely buy in the future!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sonam lama</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-04.jpg" alt="">
         <p>Very swift handling of my order of a lefty ESP Ltd. Five string bass, very Sharp price and a quick responce and the bass was delivered fast and without any problems, carefully packed! Brilliant!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Piyush shrestha</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-05.jpg" alt="">
         <p>Great value for money and the goods were sent via a reliable courier and I was able to track my purchase.
Well packaged to prevent damage, even though this was an international shipment.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>karma lama</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-06.jpg" alt="">
         <p>Great product for a competitive price. I was just upset not to receive any notification about the delivery. I had to check by myself on the website to discover that my order had arrived for a couple days already..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tashi Tshering Lama</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>