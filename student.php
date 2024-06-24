
<?php require_once "server.php"; ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card_container{
            margin :25px;
            display : flex;

        }

    </style>


    <title>Students</title>
  </head>
  <body>
   
      <?php include "kbhead.php"; ?>

      <?php include 'navbar.php'; ?>

        <div class="card_container">

            <div class="card mx-3" style="width: 50%;">
            <img class="card-img-top" style ="width: 35%;" src="images/admit-card.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Admit Card</h5>
                <p class="card-text">Students can download their admit card by clicking at the links given below.</p>
                <a href="https://bbmkuniv.in/login" target = "_blank" class = "btn btn-primary">Admit Card</a>
            </div>
            </div>  

            <div class="card mx-3" style="width: 50%;">
            <img class="card-img-top" style ="width: 40%;" src="images/results.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Result</h5>
                <p class="card-text">Students can download their result by clicking at the links given below.</p>
                <a href="https://bbmkuniv.in/login" target = "_blank" class="btn btn-primary">Result</a>
            </div>
            </div>

        </div>

















        <?php include 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>