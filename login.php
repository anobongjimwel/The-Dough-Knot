<?php
    session_start();
    $_SESSION['username']='jimcyl';
    $_SESSION['cart']='0';
    header("location: pastries.php");
?>