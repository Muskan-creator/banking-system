<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">
    

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
     
      
            <div class="container1">
              <div class="header">
              
                  <h3>Welcome to</h3>
                  <h1>NEOBANK</h1>
                  <p>Get the access of your account </br>now in the comfort of your home</p>
                
              </div>

              <div class="header-img">
                <img src="img/Banking.png">
              </div>
</div>
            

      <!-- Activity section -->
      <section id="features">
            <div class="feature-row">
                  <div class="feature-col">
                    <img src="img/userss.jpg" class="img-fluid" height="300px" width="200px">
                    
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="feature-col">
                    <img src="img/tranfermoney2.png" class="img-fluid" height="200px" width="200px" >
                    
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="feature-col">
                    <img src="img/transactionhistory.jpg" class="img-fluid"  height="300" width="300px">
                    
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
            </section>
      
      <footer class="text-center mt-5 py-2">
      <p>&copy 2022. Created by <b>Muskan Bansal</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="css/navbar.js"></script>
  </body>
</html>