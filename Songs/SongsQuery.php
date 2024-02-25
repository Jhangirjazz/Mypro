<?php
include '../Connect.php';
date_default_timezone_set("Asia/Karachi");

if (isset($_REQUEST['SaveSong'])) {
    $songname =  $_REQUEST['SongName'];
    $albumidfk = $_REQUEST['AlbumId_Fk'];
    $createddate = date('Y-m-d H:i:s');
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../SongsData/" . $filename;
    $ImageNameChecker = "SELECT * FROM song WHERE UploadedSong='$filename'";
    $query = mysqli_query($con, $ImageNameChecker);
    $result = mysqli_fetch_array($query);
    if ( isset($result['AlbumImage']) == $filename) {

        header("Location: CreateSong.php?SongAddedError=Image Already Exsist.");
    } 
    else 
    {
    move_uploaded_file($tempname,$folder);
    $AlbumQuery = "INSERT INTO `song`(`SongName`, `UploadedSong`, `SongUploadedDate`, `AlbumId_Fk`) 
    VALUES ('$songname','$filename','$createddate',$albumidfk)";
    mysqli_query($con, $AlbumQuery);
    mysqli_close($con);
    header("location: CreateSong.php?SongAdded= Album Succesfully Added.");
}

}
?>