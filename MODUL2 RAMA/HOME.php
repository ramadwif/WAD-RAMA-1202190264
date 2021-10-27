<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HOME</title>
  </head>
  <body>
    <?php
    $gedung = [
        "Gedung1" => "Nusantara Hall",
        "Gedung2" => "Garuda Hall",
        "Gedung3" => "Gedung Serba Guna",
    ];
    $harga_gedung = [
        "Harga1" => 2000,
        "Harga2" => 1000,
        "Harga3" => 500,
    ]
    ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="justify-content: center;" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="HOME.php" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Booking.php" >Booking</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
    <h4 style="text-align: center;">WELCOME TO ESD VENUE RESERVATION</h4> <br>
 <section id="HOME"> 
    <div class="container">
      <h7 class="d-flex justify-content-center bg-dark text-white p-2">Find your best deal for your event, here!</h7>
    </div>

    <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://london.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/IMG_0483_hvxavm/ice-indonesia-convention-exhibition_wedding-at-ice-bsd1487580049_4.webp" alt="nusantara">
          <div class="card-body">
            <h5 class="card-title"><?= $gedung["Gedung1"] ?></h5>
            <p class="card-text" style="color: gray">
              $<?= $harga_gedung["Harga1"] ?> / Hour
              <br>
              5000 Capacity
            </p>
          </div>
  
    <ul class="list-group list-group-flush text-center">
      <li class="list-group-item" id="yes"><b style="color: tomato;">Free Parking</b></li>
      <li class="list-group-item" id="yes"><b style="color: tomato;">Full AC</b></li>
      <li class="list-group-item" id="yes"><b style="color: tomato;">Cleaning Service</b></li>
      <li class="list-group-item" id="yes"><b style="color: tomato;">Covid-19 Health Protocol</b></li>
    </ul>
  
    <div class="card-body text-center" style="background-color:rgb(244, 244, 244);">
      <form action="booking.php" method="POST">
        <button type="submit" name="book" class="btn btn-primary" value="Nusantara Hall">Book Now</button>
      </form>
    </div>   
    </div> 
    </div> 
  
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://alexandra.bridestory.com/image/upload/assets/icegaruda00008-ry-SmBt3V.jpg" alt="garuda">
          <div class="card-body">
            <h5 class="card-title"><?= $gedung["Gedung2"] ?></h5>
            <p class="card-text" style="color: gray">
              $<?= $harga_gedung["Harga2"] ?> / Hour
              <br>
              2000 Capacity
            </p>
          </div>
  
    <ul class="list-group list-group-flush text-center">
      <li class="list-group-item" id="yes"><b style="color: tomato;">Free Parking</b></li>
      <li class="list-group-item" id="yes"><b style="color: tomato;">Full AC</b></li>
      <li class="list-group-item" id="no"><b style="color: red;">No Cleaning Service</b></li>
      <li class="list-group-item" id="yes"><b style="color: tomato;">Covid-19 Health Protocol</b></li>
    </ul>
  
    <div class="card-body text-center" style="background-color:rgb(244, 244, 244);">
      <form action="booking.php" method="POST">
        <button type="submit" name="book" class="btn btn-primary" value="Garuda Hall">Book Now</button>
      </form>
    </div>   
    </div> 
    </div> 
      
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1BH8uEENUhw3U_K1smIQhBJ1Gvv1bAfkP6Q&usqp=CAU" alt="serbaguna"/>
          <div class="card-body">
            <h5 class="card-title"><?= $gedung["Gedung3"] ?></h5>
            <p class="card-text" style="color: gray">
              $<?= $harga_gedung["Harga3"] ?>/ Hour
              <br>
              500 Capacity
            </p>
          </div>
  
    <ul class="list-group list-group-flush text-center">
      <li class="list-group-item" id="no"><b style="color: red;">No Free Parking</b></li>
      <li class="list-group-item" id="no"><b style="color: red;">No Full AC</b></li>
      <li class="list-group-item" id="no"><b style="color:red;">No Cleaning Service</b></li>
      <li class="list-group-item" id="yes"><b style="color: tomato;">Covid-19 Health Protocol</b></li>
    </ul>
    <div class="card-body text-center" style="background-color:rgb(244, 244, 244);">
      <form action="booking.php" method="POST">
        <button type="submit" name="book" class="btn btn-primary" value="Gedung Serba Guna">Book Now</button>
      </form>
      </div>   
      </div> 
      </div> 
    </div>
    </div>
    </div>
      </div>
    </section>
  </body>
  <br><br><br>
  <footer>
    <p style="text-align: center;">Created by: rama_1202190264</p>
  </footer>
</html>