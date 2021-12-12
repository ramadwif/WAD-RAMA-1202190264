<?php
include("config.php");

if (isset($_POST['tambahdata'])) {
    $id = $_POST['id'];
    $nama_tempat = $_POST['nama_tempat'];
    $lokasi = $_POST['lokasi'];
    $harga = $_POST['harga'];
    $date = $_POST['date'];

    $inputData = "INSERT INTO booking
     (id,nama_tempat,lokasi,harga,tanggal) 
     VALUE ('$id','$nama_tempat','$lokasi' ,'$harga', '$date')";
    $query = mysqli_query($conn, $inputData);

    if ($query) {
        echo('Data Berhasil Ditambahkan !');
        header('Location:Rama_Index.php');
    } else {
        echo('Data Gagal Diinput !');
    }

} else {
    die("Akses Gagal !");
}

?>