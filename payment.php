
<?php
    include "dbConnection.php";
    session_start();
    echo "moce";
    echo $_SESSION['P_id'];
  

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container py-3">
  <header>
   

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pricing</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>
  </header>

  <main>
    <div class="row text-center">
     
 
      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm border-primary ">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">confirm Payment</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">© 2017–2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
  <?php

  ?>
</html>