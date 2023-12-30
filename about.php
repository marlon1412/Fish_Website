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
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>About Us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
   <div class="custom-shape-divider-bottom-1703159485">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
   
</div>


<!-- about section starts  -->

<section class="about">


   <div class="row">

      <div class="image">
         <img src="/images/fish/fish2.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>
            Welcome to Tep's FishyFlex, where our love for aquatic life meets your passion for fishkeeping! 
            At Tep's, we're not just a pet shop; we're a community of dedicated fish enthusiasts committed to providing you with a top-notch experience. With a team of knowledgeable experts, 
            we ensure the health and happiness of every fish we offer. 
            Dive into a sea of possibilities with our wide selection of vibrant fish species and high-quality aquarium supplies. 
            What sets us apart is our customer-centric approach—we're here to assist whether you're a seasoned aquarium enthusiast or a first-time fish owner. Join our community, share experiences, and let 
            Tep's FishyFlex be your trusted partner in creating the perfect underwater haven. Thank you for choosing Tep's FishyFlex, where passion and expertise come together for an immersive aquatic journey!
         </p>
         <a href="menu.php" class="btn">Our Fishes</a>
      </div>

   </div>
   

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/fish/checkout.jpg" alt="">
         <h3>Checkout</h3>
         <p>
            Complete your underwater vision effortlessly at Tep's FishyFlex checkout—where vibrant fish and top-notch aquarium supplies meet. Dive into satisfaction as you secure your aquatic essentials and join a community of passionate fish enthusiasts.</p>
      </div>

      <div class="box">
         <img src="images/fish/deliver.jpg" alt="">
         <h3>Fast delivery</h3>
         <p>
         Experience the anticipation of aquatic wonders heading your way with Tep's FishyFlex swift and secure delivery service, ensuring your vibrant fish and premium aquarium supplies reach your doorstep in pristine condition.         </p>
      </div>

      <div class="box">
         <img src="images/fish/receive.jpg" alt="">
         <h3>Receive</h3>
         <p>
         Unbox joy and introduce your underwater companions to their new home as you receive your Tep's FishyFlex delivery, thoughtfully packaged to guarantee the well-being of your aquatic friends and kickstart a journey of fishkeeping delight

         </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Customer Reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>
            "Tep's FishyFlex has transformed my hobby with their diverse selection of vibrant fish and quality supplies. The impeccable delivery service ensures my aquatic companions arrive in perfect condition, making Tep's my go-to for all things fish-related."
         </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>"As a first-time fish owner, I was impressed by Tep's FishyFlex's knowledgeable and friendly team. The step-by-step guidance during the checkout process and the prompt delivery made my experience stress-free. Tep's has earned my trust for its commitment to customer satisfaction."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"The health and happiness of the fish from Tep's FishyFlex truly stand out. My aquarium has flourished since introducing their vibrant fish, and the seamless delivery process ensures a smooth transition for the aquatic additions to my home."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Tep's FishyFlex has created a community feel around fishkeeping. Their prompt and secure delivery not only brings quality products but also connects enthusiasts. I appreciate the personalized touch and sense of camaraderie Tep's brings to the fishkeeping community."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"I've tried various fish shops, but Tep's FishyFlex stands out for its dedication to customer care. The easy checkout process, reliable delivery, and the overall quality of their products make Tep's my preferred choice for all my aquarium needs."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"Tep's FishyFlex delivers not just fish but an experience. The anticipation during the delivery step is met with excitement upon receiving healthy and vibrant aquatic companions. Tep's attention to detail and commitment to customer satisfaction make them a standout in the world of fishkeeping."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
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