<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Buku</title>
  </head>

  <?php
    include('config.php');

    if(isset($_POST['submit'])){
        $judul_buku=$_POST['judul_buku'];
        $penulis=$_POST['penulis'];
        $terbit=$_POST['terbit'];
        $deskripsi=$_POST['deskripsi'];
        $tag=implode(",", $_POST['tag']);
        $bahasa=$_POST['bahasa'];
        
        $gambar=$_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = './gambar/';

        move_uploaded_file($source, $folder.$gambar);

        $query = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES ('$judul_buku', '$penulis', '$terbit', '$deskripsi', '$gambar', '$tag', '$bahasa')";
        mysqli_query($conn,$query);

        if($query){
            echo 'Berhasil';
        } else {
            echo 'Gagal';
        }

        header('Location: Rama_Home.php');
    }    
    
?>

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid justify-content-between">
                <img class="navbar-brand" src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="LogoEAD" style="height: 50px;">
                <a href="Rama_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
            </div>
      </nav>

    <div class="mt-5 container rounded-1 shadow">
            <p class="pt-3 pb-3 text-center" style="font-size:30px"><b>Tambah Data Buku</b></p>
            <ul type="none">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="p-3">
                        <li class="mb-2">
                            <label for="judul"><b>Judul Buku</b></label><br>
                            <input class="form-control" type="text" name="judul" id="judul" placeholder="Contoh: Pemrograman Web Bersama EAD">
                        </li>
                        <li class="mb-2">
                            <label for="penulis"><b>Penulis</b></label>
                            <input class="form-control" type="text" name="penulis" id="penulis" value="Rama_1202190264" readonly>
                        </li>
                        <li class="mb-2">
                            <label for="tahun"><b>Tahun Terbit</b></label>
                            <input class="form-control" type="text" name="tahun" id="tahun" placeholder="Contoh: 1990">
                        </li>
                        <li class="mb-2">
                            <label for="desc"><b>Deskripsi</b></label>
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="5" placeholder="Contoh: Buku ini menjelaskan tentang ..."></textarea>
                        </li>
                        <li class="mb-2">
                            <label for="bahasa"><b>Bahasa</b></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bahasa[]" id="bahasa" value="Indonesia">
                                <label class="form-check-label" for="Indonesia">Indonesia</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bahasa[]" id="bahasa" value="Lainnya">
                                <label class="form-check-label" for="Lainnya">Lainnya</label>
                            </div>
                        </li>
                        <li class="mb-2">
                            <label for="tag"><b>Tag</b></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="Pemrograman" value="Pemrograman">
                                <label class="form-check-label" for="Pemrograman">Pemrograman</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="Website" value="Website">
                                <label class="form-check-label" for="Website">Website</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="Java" value="Java">
                                <label class="form-check-label" for="Java">Java</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="OOP" value="OOP">
                                <label class="form-check-label" for="OOP">OOP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="MVC" value="MVC">
                                <label class="form-check-label" for="MVC">MVC</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="Kalkulus" value="Kalkulus">
                                <label class="form-check-label" for="Kalkulus">Kalkulus</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tag[]" id="Lainnya" value="Lainnya">
                                <label class="form-check-label" for="Lainnya">Lainnya</label>
                            </div>
                        </li>
                        <li class="mb-2">
                            <label for="gambar"><b>Gambar</b></label>
                            <input class="form-control" type="file" name="gambar" id="gambar">
                        </li>
                        <li class="text-center mb-2">
                            <button class="btn btn-primary" type="submit" name="submit" style="width: 300px">+ Tambah</button>
                      </li>
                  </div>
              </form>
          </ul>
      </div>
</body>

<footer class="footer nt-auto bg-light text-center p-5">
  <a> <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo EAD" width="140" height="50"> </a>
  <br><br><br>
      <h5><b>Perpustakaan EAD</h5>
      <h6>&copy; Rama_1202190264</h6>
</footer>

</html>