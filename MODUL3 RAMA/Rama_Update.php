<?php
    include('Config.php');
        if(isset($_POST['submit'])){
        $id_buku = $_POST['id_buku'];
        $judul_buku=$_POST['judul_buku'];
        $penulis_buku=$_POST['penulis_buku'];
        $tahun_terbit=$_POST['tahun_terbit'];
        $deskripsi=$_POST['deskripsi'];
        $bahasa=$_POST['bahasa'];
        $postTag= implode(", ",$_POST['tag']);

    if ($_FILES['gambar']['name'] == '') {
        $query = "UPDATE Buku_table SET judul_buku = '$judul_buku', penulis_buku = '$penulis_buku', tahun_terbit = '$tahun_terbit',
        deskripsi = '$deskripsi', tag = '$postTag', bahasa = '$bahasa' WHERE id_buku = '$id_buku'";
        mysqli_query($conn, $query);
    } else {
    $rand = rand();
    $filename = $_FILES['gambar']['name'];
    $formatfile =  array('png','jpg','jpeg');
    $ukuran = $_FILES['gambar']['size'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext, $formatfile) ) {
        echo "
        <script>
        alert('format file false');
        </script>";
    
    }else{
        if($ukuran < 1044070){		
            $gambar_baru = $rand.'_'.$filename;
            move_uploaded_file($tmp_name, './gambar/'.$gambar_baru);

            $query = "UPDATE buku_table SET judul_buku = '$judul_buku', penulis_buku = '$penulis_buku', tahun_terbit = '$tahun_terbit',
            deskripsi = '$deskripsi', tag = '$postTag', bahasa = '$bahasa', gambar = '$gambar_baru' WHERE id_buku = '$id_buku'";
            
            $dataselect = mysqli_query($conn, "SELECT * FROM Buku_table WHERE id_buku = '$id_buku'");
            $data = mysqli_fetch_assoc($dataselect);
            unlink("./gambar/". $data['gambar']);
            
            mysqli_query($conn, $query);
            echo "
            <script>
                alert('worked');
            </script>";
            
        }else{
            echo "
            <script>
                alert('error');
            </script>";
        }
    }
}
header('Location: Rama_Home.php');
}
?>