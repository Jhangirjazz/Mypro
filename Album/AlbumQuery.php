<?php
include '../Connect.php';
date_default_timezone_set("Asia/Karachi");

if (isset($_REQUEST['SaveAlbum'])) {
    $albumname =  $_REQUEST['Albumname'];
    $writer = $_REQUEST['Writer'];
    $catid = $_REQUEST['CategoryId_Fk'];
    $createddate = date('Y-m-d H:i:s');
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../AlbumImage/" . $filename;
    $ImageNameChecker = "SELECT * FROM album WHERE AlbumImage='$filename'";
    $query = mysqli_query($con, $ImageNameChecker);
    $result = mysqli_fetch_array($query);
    if ( isset($result['AlbumImage']) == $filename) {

        header("Location: CreateAlbum.php?AlbumAddedError=Image Already Exsist.");
    } 
    else 
    {
    move_uploaded_file($tempname,$folder);
    $AlbumQuery = "INSERT INTO `album`(`Albumname`, `Writer`, `AlbumImage`, `CategoryId_Fk`, `CreatedAt`) 
    VALUES ('$albumname','$writer','$filename',$catid,'$createddate')";
    mysqli_query($con, $AlbumQuery);
    mysqli_close($con);
    header("location: CreateAlbum.php?AlbumAdded= Album Succesfully Added.");
}

}
?>