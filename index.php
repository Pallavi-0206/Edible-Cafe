<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\Cafe\Restaurant-Reservation\css\style.css" >
    <title></title>

  </head>
<body>
  <style media="screen">
  .header2{
    background-color: #FFC38B;
  }
  </style>



  <?php
require "header.php";
?>
<header class="header">
  <img src="img\egc.png" alt="" height="80%" width="100%">
    <div class="row">

        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/heroImg.jpg" alt="restaurant"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make your Reservation Now!</em></button>
        </div>
    </div>
</header>


<div class="header2">
  <section id="menu">
    <div class="container" style="padding:10px;">
      <h3 class="text-center"><br><br>Our Menu</h3>
  <img src="img\menu.jpg" alt="Menu" height="100%" width="100%">
    </div>
  </section>

</div>




<!--Our story section-->
<div class="header2"><br>

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br>Edible gold cafe</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/3.jpg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100 " src="img/2.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/inside.jpg" alt="Third slide">
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
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>Our journey from the bean to the cup started in year 2000.
     Café culture had not set its footprint and coffee was still considered a luxury.
     Our quest to provide a truly international experience and brew a truly Italian cuppa, led us to create the brand Edible gold.
     Spearheading the Indian café culture, Edible gold was an opportunity to discover both the coffee and the craft.
     No one has mastered coffee better than the Italians.
     Tipping our hats their way,Edible gold cafe brings new meaning to Italian coffee and eats in the Indian sub-continent.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2"> <br>

</div>
<!--Why us --->
<div class="header2"><br>

<div class="container">


<div class="rows">
        <img class="img-fluid"   src="img\why\why3.jpg" alt="image" >
      <h5  class="text-center"> We provide best coffee you would ever taste</h5>
      <p >
      Our coffees are sourced from thousands of small coffee planters, who made us who we are today and we're glad to be a part of their lives.
      It's been an exciting journey since then to becoming the largest organised retail cafe chain in the country. </p>
     </div>
<br>
  </div>
</div>
<div class="header2"><br>

</div>


<!-- ======= Gallery Section ======= -->
<div class="container">
<section id="gallery" class="gallery">
  <div class="container-fluid">

    <div class="section-title">
      <br>
      <h2 class="text-center">Some photos from <span>Our Restaurant</span></h2><br><br><br>
    </div>

    <div class="row no-gutters">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\7.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\7.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\cups.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\cups.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\4.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\2.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\inside.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\inside.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\6.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\why\why1.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\why\why1.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="img\why\why2.jpg" class="venobox" data-gall="gallery-item">
            <img src="img\why\why2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Gallery Section -->



<br>


<br>
<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>

    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-block btn-lg" style="background-color:#4D3E3E">Click here to visit us!</button>

</div><br><br>

<div class="header2">
</div>
<!--order food-->

<div class="container" id="order">
    <h3 class="text-center"><br><br>Order Food at Home <br><br></h3>
<a href="https://www.zomato.com/ludhiana/order-food-online" class="btn btn-outline-light btn-block btn-lg" role="button" style="background-color:#4D3E3E"  > Click to order! </a>


</div><br><br>


<!-- main page map section-->


    <h3 class="text-center"><br><br>Find us!</h3><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3150.1829966583578!2d23.75232003459512!3d37.85600838634192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d37.8566691!2d23.752137599999998!4m0!5e0!3m2!1sel!2sgr!4v1524459240043" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
<div class="container">
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>

                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-outline-light  btn-block"  style="background-color:#4D3E3E">Check Open Time</button>
                        </div>
                    </form>

<?php

if(isset($_POST['check_schedule'])){

require 'includes/dbh.inc.php';

$date= $_POST['date'];

    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-light text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-light text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }

   //close connection
   mysqli_close($conn);
}
?>

                </div><br>
            </div>
<section class="map" id="footer">
            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">Edible Gold Cafe<br><i class="fa fa-map-marker"></i>304,Luxury street <br>Hoshiarpur <br><br>email: ediblegoldcafe@gmail.com<br>phone: +91 9876543210</p>
            </div>
	</div>
    </div>
</section>
<!--end of main page map section-->
</div>
<br>
<div class="container" >
<?php
require "footer.php";
?>
</div>


</body>
</html>
