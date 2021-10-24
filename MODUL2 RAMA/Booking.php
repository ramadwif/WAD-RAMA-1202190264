<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Booking</title>
</head>
<section id="Booking">
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="justify-content: center;" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="HOME.php#HOME" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Booking.php#Booking" >Booking</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><div class="container">
        <ul class="navbar navbar-expand-lg nav justify-content-center mr-auto bg-dark text-white" style="color: white;" font-size: 15px; margin-top: 12px;">
            Reserve your venue now</ul>
                <div class="card" style="margin-top: 20px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="https://london.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/IMG_0483_hvxavm/ice-indonesia-convention-exhibition_wedding-at-ice-bsd1487580049_4.webp" class="img-fluid rounded-start" alt="nusantara" style="margin-top: 140px; margin-left: 35px; width: 85%">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                                <form action="mybooking" method="post">
                                    <label for="">Name</label>
                                    <input type="text" name="client" class="form-control" placeholder="rama_1202190264">
                                    <label for="">Event Date</label>
                                    <input type="date" name="tanggal" class="form-control">
                                    <label for="">Start Time</label>
                                    <input type="time" name="waktu" class="form-control">
                                    <label for="">Duration (Hours)</label>
                                    <input type="number" name="durasi" class="form-control">
                                    <label for="">Building Type</label>
                                    <select name="tipe_gedung" class="form-select">
                                        <option>Nusantara Hall</option>
                                        <option>Garuda Hall</option>
                                        <option>Gedung Serba Guna</option>
                                    </select>
                                    <label for="">Phone number</label>
                                    <input type="number" name="telepon" class="form-control">
                                    <label for="">Add Service(s)</label>
                                    <br>
                                    <input type="checkbox" name="layanan[]" class="form-check-input" value="Catering"> Catering / $700
                                    <br>
                                    <input type="checkbox" name="layanan[]" class="form-check-input" value="Decoration"> Decoration / $450
                                    <br>
                                    <input type="checkbox" name="layanan[]" class="form-check-input" value="Sound System"> Sound System / $250
                                    <div class="d-grid">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Book</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>          
        </body>
      </section>
        <br><br>
    <footer>
        <p style="text-align: center;">Created by: rama_1202190264</p>
    </footer>
</html>