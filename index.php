<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body >

    <!-- navbar of index -->
          <nav class="navbar navbar-expand-md navbar-light bg-light">
          <a class="navbar-brand" href="index.php" style="color : #1C2833;"><b>BANK OF BHARAT</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color : #F65E76 ;"><b>Home</b></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="transfermoney.php" style="color : #2E4053 ;"><b>Transfer Money</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="transactionhistory.php" style="color :#2E4053 ;"><b>Transaction History</b></a>
                  </li>
              </div>
           </nav>


      <div class="container-fluid" >
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #FFFFFF;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>BANK OF BHARAT</h1><br></br>
                 <!-- logo -->
                  <div class="row activity text-center">

                        <div class="col-md act">
                          <img src="img/transfer.jpg" class="img-fluid">
                          <br><br>

                          <a href="transfermoney.php"><button style="background-color : #2785C4;">Transfer Money</button></a>
                        </div>
                        <div class="col-md act">
                          <img src="img/history.jpg" class="img-fluid">
                          <br><br>
                          <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                        </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.png" class="img-fluid pt-1">
              </div>
            </div>


      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>SUJAL</b> <br> </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
