<?php
    include('config.php');
    $id_buku = $_GET['id_buku'];

    $query = "SELECT * FROM buku_table WHERE id_buku = '$id_buku'";
    $select = mysqli_query($conn, $query);
    $showdetail= mysqli_fetch_assoc($select);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Buku</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid justify-content-between">
                <img class="navbar-brand" src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="LogoEAD" style="height: 50px;">
                <a href="Rama_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
            </div>
      </nav>
      
            <div class="shadow-lg p-3 mb-5 bg-body rounded" style="margin-top: 50px;">
            <div class="h4 fw-bold text-center" style="margin-top: 20px;">Detail Buku</div>
                <center> <img src="gambar/<?= $showdetail['gambar']?>" style="height:650px"> </center>
            <hr style="color:blue;" size="5px;">
            <table>
                <tr>
                    <td><b>Judul :</b></td>
                </tr>
                <tr>
                    <td><?= $showdetail['judul_buku']; ?></td>
                </tr>
                <tr>
                    <td><b>Penulis :</b></td>
                </tr>
                <tr>
                    <td><?= $showdetail['penulis_buku']; ?></td>
                </tr>
                <tr>
                    <td><b>Tahun Terbit :</b></td>
                 <tr>
                    <td><?= $showdetail['tahun_terbit']; ?></td>
                </tr>
                <tr>
                    <td><b>Deskripsi :</b></td>
                </tr>
                <tr>    
                    <td><?= $showdetail['deskripsi']; ?></td>
                </tr>
                <tr>
                    <td><b>Bahasa :</b></td>
                </tr>
                <tr>
                    <td><?= $showdetail['bahasa']; ?></td>
                </tr>
                <tr>
                    <td><b>Tag :</b></td>
                </tr>
                <tr>
                    <td><?= $showdetail['tag']; ?></td>
                </tr>
            </table>
            <br>
            <center>
            <div class="mb-6">
                <input class="btn btn-primary" type="submit" name="submit" style="width: 500px" value="Sunting">
                <input class="btn btn-danger" type="submit" name="submit" style="width: 500px" value="Hapus">
            </div>
            </center>
            </div>
          </div>
  <footer class="footer nt-auto bg-light text-center p-5">
  <a> <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo EAD" width="140" height="50"> </a>
  <br><br><br>
      <h5><b>Perpustakaan EAD</h5>
      <h6>&copy; Rama_1202190264</h6>
</footer>

</body>
</html>