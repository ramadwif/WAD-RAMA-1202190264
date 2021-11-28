<?php
session_start();

include_once "config.php";

if (isset($_POST['login'])) {
    login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
</head>
<body>
<body style="background-color: rgb(244,244,244);"> 
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(148,192,244);">
            <div class='container' style="background-color: rgb(148,192,244);">
                <a class="navbar-brand"><b>EAD Travel</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Rama_Register.php">Register</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Rama_Login.php">Login<span class="sr-only">(current)</span></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>

        <?php if (isset($_SESSION['message'])) : ?>
            <div class='alert alert-danger alert-dismissible fade show fade in' role='alert'>
                <?= $_SESSION['message']; ?>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION['message']);
        endif;
        ?>

        <?php if (isset($_SESSION['registered'])) : ?>
            <div class='alert alert-success alert-dismissible fade show fade in' role='alert'>
            <?= $_SESSION['registered']; ?>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <?php
            unset($_SESSION['registered']);
        endif;
        ?>

        <div class="mx-auto py-8 px-5 shadow p-3 mb-5 bg-white rounded" style="width:33%; margin-top:3rem;">
            <p class="pt-3 pb-8 text-center" style="font-size:30px" ><b>Login</b></p>
            
            <hr style="color:blue" 
            size="5px" 
            width="100%" 
            class="mx-auto">
                <form class="form-container" action="Rama_Login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-Mail Anda">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                    </div>
                    <div class="form-check form-check-inline" style="text-align: left;">
                    <p><input type="checkbox" name="remember" value="Remember Me">Remember Me</p></div>
                  <center>
                    <button type="submit" name="login" class="btn btn-primary btn-block w-50">Login</button>
                    <div class="form-footer mt-2">
                        <p> Anda Belum punya akun? <a href="Rama_Register.php">Register</a></p>
                    </div>
                    <center>
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