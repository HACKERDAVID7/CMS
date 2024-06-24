<?php require_once "server.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Department of Computer Applications</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <style>
    .card_container {
      margin: 25px;
      display: flex;

    }

    .card-img-top {
      float: left;
      margin: 15px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .content {
      text-align: justify;
      padding: 5px;
      margin: 10px;

    }

    /* univ css */

    div.logo {
      float: left;
      margin: 20px;
    }

    .univ {
      border: 0.5px solid grey;
      margin: 10px 30px;
      padding: 20px 40px;
    }

    div.row {
      margin: 10px;
    }


    iframe {
      width: 120%;
      height: 100%;
      padding: 20px;
      float: right;

    }
  </style>



</head>

<body>

  <?php include "kbhead.php"; ?>

  <?php include 'navbar.php'; ?>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/Main/front.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>K.B. College Bermo</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Main/clab.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>B.C.A. Laboratory</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Main/envi.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>College Campus</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container my-5">
    <p>
      KRISHNA BALLAV COLLEGE, BERMO was established in the year 1964 in the name of Late K. B. Sahay (Ex-Chief Minister of Bihar) to cater the needs of the economically and socially backward, marginalized and un-noticed mass of Bermo region of Bokaro district. It is the matchless, unparalleled and exemplary contribution of Late Bindeshwary Dubey (Ex-Chief Minister of Bihar), the leader of the people. The sole reason behind this outstanding effort of the above-mentioned stalwart was to disseminate knowledge and learning among the children of coal workers and the downtrodden in general.

      Late Ram Nandan Prasad was the first principal of this college. Under his administrative and academic skills, acumen and expertise, the college achieved its glory. Since, then, altogether, the college witnessed about a dozen of principals of high repute. The present principal is Dr. B. N. Rajwar who chaired as principal in Oct. 2014 and has made remarkable contributions in every phase of academic life as well as in co-curricular and extra-curricular activities with the congenial approach of all the dedicated and devoted teachers of different departments.

      The college was recognized and affiliated as Degree College in 1965. Degree in Arts was introduced in the year 1965 and in Science in the year 1967 in this college. The college was registered with the University Grants Commission under section 2(f) of the UGC Act, 1956, thereafter started to receive grants from the UGC. In 1980, the college attained its constituent status and became one of the constituent units of Ranchi University. In due course of time, it became one of the constituent units of Vinoba Bhave University, Hazaribag, when it came in its existence in 1992. It is the oldest college of Bokaro district and one of the Premier co-educational institutions of Vinoba Bhave University.

      College is Sprawling over 10.25 acres of land with built up area of around 14725 Sq. meters; centrally located on the Phusro-Gomia Coal Trunk Road, approximately 50 km. away from the Bokaro Steel City Railway Station. Being co-educational institution, the students pursue various under-graduate courses in Arts, Science, & a self-financed course “BCA”. .
    </p>
  </div>



  <div class="card_container">

    <div class="card mx-3" style="width: 50%;">
      <img class="card-img-top" style="width: 35%;" src="images/Main/principal.jpg" alt="Card image cap">

      <div class="content">
        Prof. S. Paul (Principal) joined the KB College, Bermo on 2022&nbsp;as Pricipal. He is an Faculty of Political Science at KB College Bermo.
      </div>



      <div class="card-body">
        <h5 class="card-title">Principal</h5>
        <p class="card-text">S. Paul</p>
      </div>

    </div>





    <div class="card mx-3" style="width: 50%;">
      <img class="card-img-top" style="width: 35%;" src="images/Main/kkk.jpg" alt="Card image cap">
      <div class="content">
        Prof. P.P. Kushwaha (BCA Department of Computer Applications)) joined the KB College, Bermo on 2016&nbsp;as Head Professor of BCA department. He is an Faculty of BCA at KB College Bermo.
      </div>
      <div class="card-body">
        <h5 class="card-title">Professor</h5>
        <p class="card-text">P.P. Kushwaha</p>
      </div>



    </div>

  </div>




  <div class="univ">

    <div class="row ml-0 mr-0 contanct">
      <div class="col-xl-5 pl-0 pr-0 address">
        <div class="logo col-5 pl-0 pr-0">
          <img style="width:60%" src="images/Main/kblogo.jpg" alt="KB College Bermo">
        </div>
        <div class="info col-7">
          <u>Contact us</u>
          <br>
          <font style="font-size:100%" my="my">K.B.COLLEGE, BERMO,
          </font><br>
          <font style="font-size:100%" my="my">P.O:- Jarangdih colliery
          </font><br>
          <font style="font-size:100%" my="my">(Bokaro)-Jharkhand Pin-829113
          </font><br>
          <font style="font-size:100%" my="my">Ph.No:06549-235433
          </font><br>
          <font style="font-size:100%" my="my">Email: principalbermo@gmail.com
          </font>
        </div>
      </div>

      <div class="col-xl-7 pl-0 pr-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.269426779649!2d85.89780845043904!3d23.77341828450236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f46b11e3f83599%3A0x2a64967294e8e46c!2sK.B.College%2CBermo!5e0!3m2!1sen!2sin!4v1663155431994!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>

      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

</body>

</html>