<?php 
    $dbhost ="localhost:3306";
    $dbuser ="root";
    $dbname ="modul3";
    $dbpass ="";

    
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn) {
        echo "<script>
                alert('Failed Connect into Database')'
              </script>";
    }
?>