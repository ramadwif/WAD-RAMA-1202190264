<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>HOME</title>
  </head>
  <body>
    <?php
    if (isset($_POST["booking"])) {
        $name = "rama_1202190264";
        $gedung = $_POST["tipe_gedung"];
        if ($gedung == "Nusantara Hall") {
            $harga_gedung = 2000;
        } elseif ($gedung == "Garuda Hall") {
            $harga_gedung = 1000;
        } elseif ($gedung == "Gedung Serba Guna") {
            $harga_gedung = 500;
        }
        $book_id = rand();
        $telepon = $_POST["telepon"];
        $durasi = $_POST["durasi"];
        $tanggal = $_POST["tanggal"];
        $waktu = $_POST["waktu"];
        $checkin = date('Y-m-d H:i:s', strtotime("$tanggal $waktu"));
        $checkout = date('Y-m-d H:i:s', strtotime($durasi . " " . "hours", strtotime($checkin)));
        $layanan = $_POST["layanan"];
        $harga_layanan = 0;
        foreach ($layanan as $value) {
            if ($value == "Catering") {
                $harga_layanan += 700;
            } elseif ($value == "Decoration") {
                $harga_layanan += 450;
            } elseif ($value == "Sound System") {
                $harga_layanan += 250;
            }
        }
        $total_harga = ($harga_gedung*$durasi) + $harga_layanan;
    }
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
      <table class="table"> 
              <thead> 
                  <tr>
                      <th scope="col">Booking Number</th>
                      <th scope="col">Name</th>
                      <th scope="col">Check In</th>
                      <th scope="col">Check Out</th>
                      <th scope="col">Building Type</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Service(s)</th>
                      <th scope="col">Total Price</th>
                  </tr>
              </thead>
              <tbody style="background-color: #d3d3d3">
                  <tr>
                      <th scope="row"><?=$book_id?></th>
                      <td><?=$name?></td>
                      <td><?=$checkin?></td>
                      <td><?=$checkout?></td>
                      <td><?=$gedung?></td>
                      <td></td>
                      <td>
                          <ul>
                              <?php
                              foreach ($layanan as $value) {
                                  echo "<li> $value </li>";
                              }
                              ?>
                          </ul>
                      </td>
                      <td>$<?=$total_harga?></td>
                  </tr>
              </tbody>
          </table>
</body><br><br><br>
<footer>
    <p style="text-align: center; ">Created by: rama_1202190264</p>
  </footer>
</html>