<?php
    session_start();
    session_unset(); 
    session_destroy();
    header("Location: Rama_Login.php")
?> 