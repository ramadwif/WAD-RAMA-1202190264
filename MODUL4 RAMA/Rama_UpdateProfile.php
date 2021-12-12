<?php
session_start();
include('config.php');

$id = $_POST['id'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$navbar = $_POST['navbar'];

if($password != "" AND $confirm = ""){
    if($password == $confirm){
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

$query = "UPDATE user SET nama = '$nama' , no_hp = '$no_hp' , password = '$password'  WHERE id = '$id';";
var_dump($query);
$queryExecute = mysqli_query($conn, $query);


if ($queryExecute) {
    setcookie("theme[navbar]", $navbar, time() + 3600, '/');
    header("Location: Rama_Profile.php");
} else {
    echo "Gagal Login";
}
}

?>