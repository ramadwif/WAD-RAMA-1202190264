<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Profile</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="Rama_Register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Rama_Login">Login</a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>

    <div class="mx-auto py-10 px-5 shadow p-3 mb-5 bg-white rounded" style="width:75%; margin-top:3rem;">
            <p class="pt-3 pb-8 text-center" style="font-size:30px" ><b>Profile</b></p>
        <form class="form-container" action="....." method="POST">
            <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="Email" value="lorem@mail.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="Name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="noHP" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="noHP">
                </div>
                <hr style="color:blue" 
            size="5px" 
            width="97%" 
            class="mx-auto">

            </div><div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Kata Sandi">
                </div>
            </div><div class="form-group row">
                <label for="reinputPassword" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="reinputPassword" placeholder="Konfirmasi Kata Sandi">
                </div>
            </div>
            <div class="form-group row">
                <label for="navbar" class="col-sm-2 col-form-label">Warna Navbar</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="navbar">
                </div>
            </div>
            <center>
            <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button">Simpan</button>
            <button class="btn btn-warning" type="button" >Cancel</button>
            </div><center>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<footer class="footer mt-5 bottom" style="background-color: rgb(148,192,244);">
            <div class="footer-copyright text-center py-3">© 2021 Copyright:
                <a href="Rama_Footer.php"> RAMA 1202190264</a>
            </div>
    </footer> 

</html>