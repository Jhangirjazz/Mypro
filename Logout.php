<?php
session_start();
unset($_SESSION["UserRole"]);
session_destroy();
header("Location: Login.php");
?>