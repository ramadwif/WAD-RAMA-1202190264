<?php
    session_start();
    include_once("config.php")
    ?>
    
<?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-success" role="alert">
        <?= $_SESSION['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
    unset($_SESSION['message']);
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(148,192,244);">
            <div class='container' style="background-color: rgb(148,192,244);">
                <a class="navbar-brand" href="Rama_Index.php"><b>EAD Travel</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:<?= $navTextColor ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>    
                            Lorem Ipsum dolor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Rama_Profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="Rama_Bookings.php">Bookings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="Rama_Logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container mt-3">
        <div class="jumbotron jumbotron-fluid" style="background-color: rgb(146, 195, 163);">
        <div class="container text-center">
        <h2><b>EAD Travel</b></h2>
        </div>
    </div>
</div>

    <div class="container mt-3">
    <div class="card-group" style="justify-content: center">
    <div class="card">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Raja_Ampat_Islands_-_journal.pbio.1001457.g001.png/390px-Raja_Ampat_Islands_-_journal.pbio.1001457.g001.png" alt="img">
        <div class="card-body">
        <h5 class="card-title">Raja Ampat, Papua</h5>
        <p class="card-text">Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop)
            Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat. Kepulauan ini sekarang menjadi tujuan para penyelam yang tertarik akan keindahan pemandangan bawah lautnya.</p>
            <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
        <p class="card-text"><b>Rp.7.000.000</b></p>
        <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#card1"
              style="width:100%">Pesan Tiket</a>
        </div>
    </div>

    <div class="card">
        <img class="card-img-top" src="https://www.westend61.de/images/0001102223pw/indonesia-java-bromo-tengger-semeru-national-park-mount-bromo-volcanic-crater-at-sunrise-RUNF00686.jpg" alt="img">
        <div class="card-body">
        <h5 class="card-title">Gunung Bromo, Malang</h5>
        <p class="card-text">Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut
            dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur.</p>
            <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
        <p class="card-text"><b>Rp.2.000.000</b></p>
        <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#card2"
              style="width:100%">Pesan Tiket</a>
        </div>
    </div>

    <div class="card">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/TanahLot_2014.JPG/360px-TanahLot_2014.JPG" alt="img">
        <div class="card-body">
        <h5 class="card-title">Tanah Lot, Bali</h5>
        <p class="card-text">adalah salah satu Pura (Tempat Ibadah Umat Hindu) yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar.
            Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan dan pura laut juga tempat pemujaan dewa penjaga laut.</p>
            <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
        <p class="card-text"><b>Rp.5.000.000</b></p>
        <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#card3"
              style="width:100%">Pesan Tiket</a>
        </div>
    </div>
    </div>
</div>

<!-- MODAL 1 -->
    <div class="modal fade" id="card1" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <form action="Rama_TambahData.php" method="POST">
                    <input type="hidden" value="Raja Ampat" name="nama_tempat" id="nama_tempat">
                    <input type="hidden" value="Papua" name="lokasi" id="lokasi">
                    <input type="hidden" value="7000000" name="harga" id="harga">
                    <label>Tanggal Booking</label>
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date" id="date">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Tambahkan" name="tambahdata" class="btn btn-primary">
                    </div>
                </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="card2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <form action="Rama_TambahData.php" method="POST">
                    <input type="hidden" value="Gunung Bromo" name="nama_tempat" id="nama_tempat">
                    <input type="hidden" value="Malang" name="lokasi" id="lokasi">
                    <input type="hidden" value="2000000" name="harga" id="harga">
                    <label>Tanggal Booking</label>
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date" id="date">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Tambahkan" name="tambahdata" class="btn btn-primary">
                    </div>
                </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="card3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <form action="Rama_TambahData.php" method="POST">
                    <input type="hidden" value="Tanah Lot" name="nama_tempat" id="nama_tempat">
                    <input type="hidden" value="Bali" name="lokasi" id="lokasi">
                    <input type="hidden" value="5000000" name="harga" id="harga">
                    <label>Tanggal Booking</label>
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="date" id="date">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Tambahkan" name="tambahdata" class="btn btn-primary">
                    </div>
                </form>
        </div>
      </div>
    </div>

</body>

<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel"><b>Created By</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nama : RAMA DWI FADHILLAH
        <br/>
        NIM : 1202190264
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<footer class="footer mt-5 bottom" style="background-color: rgb(148,192,244);">
            <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a data-toggle="modal" href="#modalSaya"> RAMA 1202190264</a>
            </div>
    </footer> 

</html>