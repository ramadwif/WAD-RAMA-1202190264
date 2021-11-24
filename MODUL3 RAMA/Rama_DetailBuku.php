<?php
    include('config.php');
    $id_buku = $_GET['id_buku'];

    $query = "SELECT * FROM buku_table WHERE id_buku = '$id_buku'";
    $select = mysqli_query($conn, $query);
    $showdetail= mysqli_fetch_assoc($select);
    $tag = explode(',', $showdetail['tag']);
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 500px">Sunting</button>

        <a class="btn btn-danger" name="delete" style="width: 500px"
        href ="Rama_Delete.php?id=<?php echo $showdetail['id_buku'] ?>" > Hapus </a>
        </div>
        </center>
    </div>
</div>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            <form action="Rama_Update.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_buku" value="<?= $showdetail['id_buku'] ?>">
              <div class="mb-3">
                  <label for="judul_buku" class="form-label">Judul Buku</label>
                  <input type="text" name="judul_buku" class="form-control" id="judul_buku" value="<?= $showdetail['judul_buku'] ?>">
              </div>
              <div class="mb-3">
                  <label for="penulis" class="form-label">Penulis</label>
                  <input type="text" name="penulis_buku" class="form-control" id="penulis" value=<?= $showdetail['penulis_buku'] ?> readonly >
              </div>
              <div class="mb-3">
                  <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                  <input type="text" name="tahun_terbit" class="form-control" value="<?= $showdetail['tahun_terbit']; ?>" id="tahun_terbit">
              </div>
              <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Contoh : Buku ini menjelaskan tentang" id="deskripsi" rows="3"><?= $showdetail['deskripsi'] ?></textarea>
              </div>
              <div class="mb-3">
                  <label>Bahasa</label>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="bahasa" id="flexRadioDefault1" value="Indonesia" <?= $showdetail['bahasa'] == 'Indonesia' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                          Indonesia
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="bahasa" id="flexRadioDefault2" value="Lainnya" <?= $showdetail['bahasa'] == 'Lainnya' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="flexRadioDefault2">
                          Lainnya
                      </label>
                  </div>
              </div>
              <div class="mb-3">
                  <label>Tag</label>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Pemrograman" id="Pemrograman" name="tag[]" <?= in_array('Pemrograman', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="Pemrograman">
                          Pemrograman
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Website" id="Website" name="tag[]" <?= in_array('Website', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="Website">
                          Website
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Java" id="Java" name="tag[]" <?= in_array('Java', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="Java">
                          Java
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="OOP" id="OOP" name="tag[]" <?= in_array('OOP', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="OOP">
                          OOP
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="MVC" id="MVC" name="tag[]" <?= in_array('MVC', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="MVC">
                          MVC
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Kalkulus" id="Kalkulus" name="tag[]" <?= in_array('Kalkulus', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="Kalkulus">
                          Kalkulus
                      </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Lainnya" id="Lainnya" name="tag[]" <?= in_array('Lainnya', $tag)  ? 'checked' : ""; ?>>
                      <label class="form-check-label" for="Lainnya">
                          Lainnya
                      </label>
                  </div>
              </div>
              <div class="mb-3">
                  <label for="formFile" class="form-label">Gambar</label>
                  <input class="form-control" type="file" name="gambar" id="formFile">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <footer class="footer nt-auto bg-light text-center p-5">
  <a> <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logoEAD" width="140" height="50"> </a>
  <br><br><br>
      <h5><b>Perpustakaan EAD</h5>
      <h6>&copy; Rama_1202190264</h6>
</footer>

</body>
</html>