<?php

    session_start();
    session_destroy();

    header("Location: Rama_Login.php");

?>