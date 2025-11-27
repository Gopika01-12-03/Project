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
   <title>Art type</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="border:6px solid rgb(24, 234, 237);">&nbsp; &nbsp;Art Type&nbsp;&nbsp;</h3>
   <p style="text-decoration:5px underline; text-decoration-color:rgb(24, 234, 237);"> <a href="home.php">Home</a> / Art Type </p>
</div>

<section class="reviews"  style="background-color:white;">

   <h1 class="title" style="text-decoration:5px underline; text-decoration-color: rgb(24, 234, 237);">Art Type Details</h1>

   <div class="box-container">
   <?php 
      $q=mysqli_query($conn,"SELECT * FROM `art_type`");
      if(mysqli_num_rows($q) > 0){ 
         while( $ab = mysqli_fetch_assoc($q)){
   ?>
  
      <div class="box">
         <img style ="width:300px; height:300px; border-redius:500%;" src="<?php echo 'images/'.$ab['image']; ?>" alt="">
         <h3>Art Type : <?php  echo $ab['art_type']; ?></h3>
         <p>Medium of Art : <?php echo $ab['medium_art']; ?></p>
         <p><?php echo $ab['description']; ?></p>
         

         
         </div>
      
        <?php  }
      }else{
         echo '<p class="empty">No Detail Of Artist Placed Yet!</p>';
      }?>
      </div>
   </section>   
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
