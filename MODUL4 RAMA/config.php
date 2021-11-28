<?php
if (!isset($_SESSION)) {
    session_start();
}

$conn = mysqli_connect("localhost", "root", "", "wad_modul4");

if (!$conn) {
    echo " <script>
                alert('Failed to Connect Database');
            </script>";

    die("connection failed." . mysqli_connect_error());
}

function registrasi($request)
{
    global $conn;

    $nama = $request['nama'];
    $email = $request['email'];
    $no_hp = $request['no_hp'];
    $password = mysqli_real_escape_string($conn, $request['password']);
    $passwordConfirm = mysqli_real_escape_string($conn, $request['passwordConfirm']);

    $emailCek = "SELECT email FROM user WHERE email='$email'";
    $select = mysqli_query($conn, $emailCek);

    if (!mysqli_fetch_assoc($select)) {

        if ($password == $passwordConfirm) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO user VALUES ('', '$nama', '$email', '$password', '$no_hp')";
            mysqli_query($conn, $query);

            $_SESSION['registered'] = 'Berhasil registrasi, silahkan login';

            header("Location: Rama_Login.php");
            exit();
        }
    }

    $_SESSION['message'] = 'Email anda sudah pernah terdaftar!';

    header("Location: Rama_Register.php");
    exit();
}



function login($request)
{
    global $conn;
    $email = $request['email'];
    $password = $request['password'];
    $emailCek = "SELECT * FROM user WHERE email = '$email'";
    $select = mysqli_query($conn, $emailCek);

    if (mysqli_num_rows($select) == 1) {
        $result =  mysqli_fetch_assoc($select);

        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result ['id'];
            $_SESSION['nama'] = $result ['nama'];
            $_SESSION['email'] = $result ['email'];
            $_SESSION['no_hp'] = $result ['no_hp'];

            $_SESSION['message'] = 'Berhasil Login';

            header("Location: Rama_Index.php");
            exit();
        } else {
            $_SESSION['message'] = 'Password Salah';
            header("Location: Rama_Login.php");
            exit();
        }
    }
    $_SESSION['message'] = 'Gagal Login';

    header("Location: Rama_Login.php");
    exit();
}
?>