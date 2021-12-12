<?php
    session_start();
    include_once("config.php");

    $bg1 = isset($_COOKIE['theme']) && ($_COOKIE['theme']['navbar'] === 'yellow') ? 'selected' : '';
    $bg2 = isset($_COOKIE['theme']) && ($_COOKIE['theme']['navbar'] === 'dark') ? 'selected' : '';

    ?>

<?php
$query = mysqli_query($conn, "SELECT * from user where email = '" . $_SESSION['email'] . "'");
while ($TampilDetail = mysqli_fetch_assoc($query)) {
    ?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        <center>
        <div class="col-md-8"
             style="background-color: rgb(255, 255, 255); border-radius: 4px; margin-bottom: 20px; text-align: left;">
            <center>
                <br>
                <h2>Profile</h2>
            </center>
            <form action="Rama_UpdateProfile.php" method="POST">
                <div class="row" style="padding: 20px;">
                    <input type="hidden" name="id" id="id" value="<?php echo $TampilDetail['id']; ?>">
                    <div class="col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Email</label>

                    </div>
                    <div class="col-md-10">
                        <p><?php echo $TampilDetail['email']; ?></p>
                        <input type="hidden" name="email" id="email" value="<?php echo $TampilDetail['email']; ?>">
                    </div>
                </div>
                <div class="row" style="padding: 20px;">
                    <div class="col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>

                    </div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo $TampilDetail['nama']; ?>" name="nama" id="nama"
                               class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row" style="padding: 20px;">
                    <div class="col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>

                    </div>

                    <div class="col-md-10">
                        <input type="number" name="no_hp" id="no_hp" value="<?php echo $TampilDetail['no_hp']; ?>"
                               class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <hr>
                <div class="row" style="padding: 20px;">
                    <div class="col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>

                    </div>
                    <div class="col-md-10">
                        <input type="password" name="password" id="password" value="" placeholder="Kata sandi..."
                               class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row" style="padding: 20px;">
                    <div class="col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>

                    </div>
                    <div class="col-md-10">
                        <input type="password" name="confirm_password" id="confirm_password" value=""
                               placeholder="Konfirmasi Kata Sandi" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row" style="padding: 20px;">
                    <div class="col-md-2">
                        <label for="exampleInputPassword1" class="form-label">Warna Navbar</label>

                    </div>
                    <div class="col-md-10">
                        <select class="form-control" id="navbar" name="navbar" required>
                            <option value="orange" <?= $bg1 ?>">Orange Ocean</option>
                            <option value="dark" <?= $bg2 ?>">Dark Boba</option>
                        </select>
                        </select>
                    </div>
                </div>
                <div class="row" style="padding: 20px;">
                    <div class="col-md-6">
                        <input style="margin-left: 200px; width: 200px;" type="submit" name="update"
                               class="btn btn-primary" value="Simpan">
                    </div>
                    <div class="col-md-6">
                        <a href="Rama_Index.php"><input type="cancel" name="cancel" style="width: 200px;" value="Cancel" class="btn btn-warning"></a>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </center>

    <?php
}
?>
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