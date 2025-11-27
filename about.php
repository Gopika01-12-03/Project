<?php

include 'config.php';

session_start();
error_reporting(0);
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>  
<?php include 'header.php'; ?>

<div class="heading">
   <h3  style="border:6px solid rgb(24, 234, 237);">&nbsp; About Us&nbsp;</h3>
   <p style="text-decoration:5px underline; text-decoration-color:rgb(24, 234, 237);"> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>"Welcome to The Fusion Art gallery, a haven celebrating the fusion of creativity and expression. Nestled in the heart of bhavnagar, we curate a diverse collection of artworks that transcend boundaries, beckoning admirers into a world where imagination knows no limits.</p>
          <p>   Our mission is simple: to provide a platform where artists find their voice and art aficionados discover the profound stories behind each brushstroke, each sculpture, and each creation that graces our walls. With a commitment to fostering artistic dialogue and community, we invite you to embark on a journey through the captivating narratives woven into every piece, inviting you to explore, engage, and be inspired."</p>
      
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title" style="text-decoration:5px underline; text-decoration-color:rgb(24, 234, 237);">Artist Details</h1>
   <div class="box-container">
   
   <?php 
      $q=mysqli_query($conn,"SELECT * FROM `artist`");
      if(mysqli_num_rows($q) > 0){ 
         while( $ab = mysqli_fetch_assoc($q)){
   ?>
   
      <div class="box">
         <img src="<?php echo 'images/'.$ab['artist_image']; ?>" alt="">
         <p><?php echo $ab['description']; ?></p>
         

         <h3><?php  echo $ab['artist_name']; ?></h3>
      </div>
        <?php  }
      }else{
         echo '<p class="empty">No Detail Of Artist Placed Yet!</p>';
      }?>
      </div>
     
</section>

<section class="authors">

   <h1 class="title" style="text-decoration:5px underline; text-decoration-color:rgb(24, 234, 237);">Art Gallery Photos</h1>

   <div class="box-container">
   <?php 
      $q=mysqli_query($conn,"SELECT * FROM `image_gallery`");
      if(mysqli_num_rows($q) > 0){ 
         while( $ab = mysqli_fetch_assoc($q)){
   ?>
   <div class="box">
   <img src="images/<?php echo $ab['image']; ?>"  alt="">
    <h3><?php echo $ab['image_name']; ?></h3></a>
   </div>
   <?php  }
      }else{
         echo '<p class="empty">No Detail Of Art Images Placed Yet!</p>';
      }?>
</div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>