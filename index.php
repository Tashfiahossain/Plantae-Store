<?php
include "dbConnection.php";
session_start();
echo $_SESSION['Id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Plantae Store</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="style.css">

</head>

<body>

   <!------NAV BAR-->
   <div class="head2">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-4">
         <a class="navbar-brand" href="#">Plantae Store</a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span id="bar" class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Plants
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="flowerplant.php">Flower Plants</a>
                     <a class="dropdown-item" href="fruitplant.php">Fruit Plants</a>
                     <a class="dropdown-item" href="indoor.php">Indoor Plants</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="bouqet.php">Bouquet</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="tools.php">Tools & Accesories</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Agrochemicals
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="seed.php">Seeds</a>
                     <a class="dropdown-item" href="fertilizer.php">Fertilizer</a>

                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link bi bi-card-list" href="account.html"></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link bi bi-box-arrow-in-right" href="logout.php"></a>
               </li>
            </ul>
         </div>
      </nav>

   </div>

   <section id="home">
      <div class="container">
         <h1>Buy Fresh Plants<br>to Decorate your Surroundings</h1>
         <p>You can't buy happiness<br> but you can buy plants</p>
         <form post="method">
         <button name="shop">Shop Now</button>
         </form>
      </div>
   </section>



   <!---slidess-->
   <section id="featured " class="pb-5">
      <div class="container text-center mt-5 py-5">
         <h3>Best Seller</h3>
         <hr class="mx-auto">
         <br>
         <p>Here you can check the most popular products</p>
      </div>
      <div class="row mx-auto container-fluid">

         <?php

         $query = "select * from plant limit 4";
         $rs = mysqli_query($conn, $query);
         while ($row = mysqli_fetch_array($rs)) {
         ?>
            <div class="product text-center col-lg-3 col-md-4 col-12">
               <img class="img-fluid mb-3" src="images/rose.jpg" />
               <h5 class="p-name"><?php echo $row['Name']?></h5>
               <h4 class="p-price"><?php echo $row['Taka']?></h4>
               <form method="post">
                  <?php $_SESSION['P_id']=$row['P_ID']; ?>
               <button  name="shop" class="'buy-btn">Buy Now</button>
               </form>
            </div>

         <?php
         }


         ?>



        


      </div>
   </section>
   


   <div class="foot">
      <footer class="mt-5 py-5">
         <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-4 col-md-8 col-12">
               <h4 class="pb-2">Location</h4>
               <p>Plot#2<br>Road#203A<br>Sector#12<br>Uttara,Dhaka</p>

            </div>
            <div class="footer-one col-lg-4 col-md-8 col-12">
               <h4 class="pb-2">Contact Us</h4>
               <p>Any Information-01365247845<br>Email- plantaestore@gmail.com</p>

            </div>
            <div class="footer-one col-lg-4 col-md-8 col-12">
               <h4 class="pb-2">About Us</h4>
               <p>We are plant Exporter, Importer and Supplier. Plantae Store provide best quality fruit plants,
                  flower plants, seeds, bonsai and many other tools and accesories all over Bangladesh. We provide the
                  best customer support
                  all time.
               </p>

            </div>
         </div>
      </footer>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

<?php 
  
  if(isset($_POST['shop']))
  {
    // header("Location: login.php"); 
    $_SESSION['id']=$row['P_ID'];
    ?>

      <script type="text/javascript">

         window.location.href="payment.php"   
      </script>
    <?php 


     echo "ds";
  } 
  ?>
</html>