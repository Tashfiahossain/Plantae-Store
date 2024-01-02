<?php
include "dbConnection.php";

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


   <section id="home">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="card">
                  <header class="card-header">
                   
                     <h4 class="card-title mt-2">Sign In</h4>
                  </header>
                  <article class="card-body">
                     <form method="POST">

                        <div class="form-group">
                           <label>Email address</label>
                           <input name="email" type="email" class="form-control" placeholder="Email">
                           
                        </div> <!-- form-group end.// -->


                        <div class="form-group">
                           <label>Password</label>
                           <input name="pass" class="form-control" type="password" placeholder="Password">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                           <button name="logIN" type="submit" class="btn btn-primary btn-block"> Log In </button>
                        </div> <!-- form-group// -->
                       
                     </form>
                  </article> <!-- card-body end .// -->
                  <div class="border-top card-body text-center">Haven't any account? <a href="signUp.php">Sign Up</a></div>
               </div> <!-- card.// -->
            </div> <!-- col.//-->

         </div> <!-- row.//-->
      </div>
   </section>




   </div>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

<?php


session_start();
if (isset($_POST["logIN"])) {
   // echo "ok";

   $query  = "select * from  user where Email =  '$_POST[email]' and Password= $_POST[pass]";
   $rs = mysqli_query($conn, $query);
   $num_row = mysqli_num_rows($rs);
   $get_id = mysqli_fetch_array($rs);
   echo $get_id['U_ID'];
   if ($num_row > 0) {
      $_SESSION['Id'] = $get_id['U_ID'];
    
?>
      <script text="text/javascript">
         alert("Successfully LogIN!");
         window.location.href = "index.php";
      </script>
   <?php
   } else {
   ?>
      <script text="text/javascript">
         alert("Wrong Password!");
         //  window.location.href="logIn.php";
      </script>
<?php
   }
}



?>

</html>