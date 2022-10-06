<?php

session_start();

unset($_SESSION['pw']);

header('location:index.php');
?>