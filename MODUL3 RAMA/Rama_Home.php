<?php
    include('config.php');
    $query ="SELECT * FROM  buku_table";
    $select = mysqli_query($conn, $query)
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid justify-content-between">
                <img class="navbar-brand" src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="LogoEAD" style="height: 50px;">
                <a href="Rama_TambahBuku.php" class="btn btn-primary">Tambah Buku</a>
            </div>
      </nav>

    <div class="mt-3 container rounded-1">
        <p class="pt-5 pb text-center" style="font-size:25px"><b>Belum Ada Buku</b></p>
        <hr style="color:blue" size="5px">
    <div class="mt-3 container rounded-1">
        <p class="pt-1 pb text-center" style="font-size:20px">Silahkan Tambahkan Buku</p>
    </div>

    <center>
            <div class="row">
                <?php
                    while($show = mysqli_fetch_assoc($select)){
                ?>
            <div class="col-sm-3" style="border:2px solid lightgrey; border-radius:7px; padding:10px; margin-left: 10px; margin-bottom:10px;">
                <div class="card">
                    <img src="gambar/<?php echo $show['gambar']; ?>" class="card-img-top" alt="card image" style="height: 450px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $show['judul_buku']; ?></h5>
                        <p class="card-text"><?= $show['deskripsi']; ?> </p> 
                    </div>
                    <div class="card-footer">
                        <a href="Rama_DetailBuku.php? id_buku=<?= $show['id_buku']; ?>" class="btn btn-primary" type="submit" name="submit">Tampilkan Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>    
            </div>
        </center>
      </div>
</body>

<br><br>
<footer class="footer nt-auto bg-light text-center p-5">
  <a> <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logoEAD" width="140" height="50"> </a>
  <br><br><br>
      <h5><b>Perpustakaan EAD</h5>
      <h6>&copy; Rama_1202190264</h6>
</footer>
</html>