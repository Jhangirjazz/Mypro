<?php
include 'Connect.php';
session_start();
if ($_SESSION['UserRole'] != "Admin") {
    header("location: http://localhost/Sound/Login.php");
} else {
    if ((time() - $_SESSION['last_login_timestamp']) > 120) // 900 = 15 * 60  
    {
        header("location: http://localhost/Sound/Login.php");
    } else {
?>
<?php include 'header.php'; ?>

    <h1>Welcome Admin</h1>

<?php include 'footer.php'; ?>


<?php } }?>