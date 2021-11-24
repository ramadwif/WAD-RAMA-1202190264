<?php
    include('config.php');
    $id_buku = $_GET['id'];
    $query = "DELETE FROM buku_table WHERE id_buku = '$id_buku'";

    mysqli_query($conn,$query);
    header('Location: Rama_Home.php');
?>