<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>
                  "Dive into Delight: Tep's FishyFlex – Where Every Tank Tells a Tale of Aquatic Wonder!"

               </span>
               <h3>Here at<br> Tep's FishyFlex</h3>
               <a href="menu.php" class="btn">SHOP NOW</a>
            </div>
            <div class="image">
               <img src="images/fish/orange-PhotoRoom.png-PhotoRoom.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
            <span>"Aquarium Dreams Begin Here: Tep's FishyFlex – Your Gateway to Vibrant Fish and Seamless Fishkeeping."</span>
               <h3>Here at<br> Tep's FishyFlex</h3>
               <a href="menu.php" class="btn">SHOP NOW</a>
            </div>
            <div class="image">
               <img src="images/fish/fish1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
            <span>"Unlock the Underwater Magic: Tep's FishyFlex – Turning Your Home into an Aquatic Paradise, One Fin at a Time!"</span>
               <h3>Here at<br> Tep's FishyFlex</h3>
               <a href="menu.php" class="btn">SHOP NOW</a>
            </div>
            <div class="image">
               <img src="images/fish/fish3.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>
   <div class="custom-shape-divider-bottom-1703130731">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>

</section>


<section class="category">

   <h1 class="title">Store</h1>

   <div class="box-container">

      <a href="category.php?category=fast food" class="box">
         <img src="images/fish/fish.png" alt="">
         <h3>Fishes</h3>
      </a>

      <a href="category.php?category=main dish" class="box">
         <img src="images/fish/fish-tank.png" alt="">
         <h3>Fish Products</h3>
      </a>

      <a href="category.php?category=drinks" class="box">
         <img src="images/fish/fish-bowl.png" alt="">
         <h3>Others</h3>
      </a>

      <!-- <a href="category.php?category=desserts" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>desserts</h3>
      </a> -->

   </div>

</section>




<section class="products">
<div class="custom-shape-divider-bottom-1703130731">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
<div class="custom-shape-divider-top-1703135017">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
   

   <h1 class="title">Latest in Shop</h1>

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <!-- <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a> -->
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>₱</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="menu.php" class="btn">View All</a>
   </div>

</section>
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
<section class="contact">

   <div class="row">

   <div class="mapouter">
      <div class="gmap_canvas">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d369.6121776503232!2d123.7322631882893!3d13.358011154350455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1ad5cb167bacb%3A0x8cbc069416047daa!2sBaby%20Jane%20Animalandia!5e1!3m2!1sen!2sph!4v1701938808221!5m2!1sen!2sph" 
             style="width: 580px; height: 550px; border-radius: 25px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </div>
 </div>

      <form action="" method="post">
         <h3>Tell us something!</h3>
         <input type="text" name="name" maxlength="50" class="box" placeholder="Enter your Name" required>
         <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="Enter your Number" required maxlength="10">
         <input type="email" name="email" maxlength="50" class="box" placeholder="Enter your Email" required>
         <textarea name="msg" class="box" required placeholder="Enter your Message" maxlength="500" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>

   </div>

</section>



















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>