<?php
session_start();

include_once ("config.php");

if (isset($_POST['registrasi'])) {
    registrasi($_POST);
}
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="background-color: rgb(244,244,244);"> 
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(148,192,244);">
            <div class='container' style="background-color: rgb(148,192,244);">
                <a class="navbar-brand"><b>EAD Travel</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="Rama_Register">Register<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Rama_Login">Login</a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>

        <?php if (isset($_SESSION['message'])) : ?>
            <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
                <?= $_SESSION['message']; ?>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <?php
            unset($_SESSION['message']);
        endif;
        ?>

        <div class="mx-auto py-8 px-5 shadow p-3 mb-5 bg-white rounded" style="width:33%; margin-top:3rem;">
            <p class="pt-3 pb-8 text-center" style="font-size:30px" ><b>Register</b></p>
            
            <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">

            <form class="form-container" action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describeby="emailHelp" placeholder="Masukkan Alamat E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                    </div>
                    <div class="form-group">
                        <label for="passwordConfirm">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Konfirmasi Kata Sandi Anda">
                        
                    </div>
                    <center>
                    <button type="submit" name="registrasi" class="btn btn-primary btn-block w-50">Daftar</button>
                    <div class="form-footer mt-2">
                        <p>Anda sudah punya akun? <a href="Rama_Login.php">Login</a></p>
                    </div><center>
                </form>
                
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

            </body>
            <footer class="footer mt-5 fixed-bottom" style="background-color: rgb(148,192,244);">
            <div class="footer-copyright text-center py-3">© 2021 Copyright:
                <a href="#"> RAMA 1202190264</a>
            </div>
        </footer> 
</html>