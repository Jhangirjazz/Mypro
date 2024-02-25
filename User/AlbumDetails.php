<?php
include '../Connect.php';
session_start();
if ($_SESSION['UserRole'] != "User") {
    header("location: Login.php");
} else {  ?>
    <?php include 'header.php' ?>


    <div class="Albumsbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Albumstitlepage">
                        <h2>Albums Details</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Albums -->
    <div class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="super_container">
                        <div class="single_product">
                            <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                                <div class="row">
                                    <?php
                                    $AlbumID = $_GET['Albumid'];
                                    $SqlShowAlbum = "select * FROM song inner JOIN album on album.AlbumId = song.AlbumId_Fk WHERE AlbumId_Fk = $AlbumID";
                                    $result = mysqli_query($con, $SqlShowAlbum);
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                    ?>
                                        <div class="col-lg-4 order-lg-2 order-1">
                                            <div class="image_selected "><img src="../AlbumImage/<?php echo $row['AlbumImage']; ?>" alt=""></div>
                                        </div>
                                        <div class="col-lg-6 order-3">
                                            <div class="product_description">
                                                <nav>
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                        <li class="breadcrumb-item"><a href="#">Album</a></li>
                                                        <li class="breadcrumb-item active"><?php echo $row['Albumname']; ?></li>
                                                    </ol>
                                                </nav>
                                            <?php  } ?>
                                            <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                                            <div>

                                                <div class="row" style="margin-top: 15px;">
                                                    <div class="col-md-12">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Album Name</th>
                                                                    <th scope="col">Song Name</th>
                                                                    <th scope="col">Song</th>
                                                                    <th scope="col">Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $AlbumID = $_GET['Albumid'];
                                                                $SqlShowAlbum = "select * FROM song inner JOIN album on album.AlbumId = song.AlbumId_Fk WHERE AlbumId_Fk = $AlbumID";
                                                                $result = mysqli_query($con, $SqlShowAlbum);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="badge badge-primary"><i class="fa fa-star"></i> <?php echo $row['Albumname']; ?></span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge badge-info"><i class="fa fa-star"></i> <?php echo $row['SongName']; ?></span>
                                                                            </td>
                                                                            <td align="center">
                                                                                <audio src="../SongsData/<?php echo $row['UploadedSong']; ?>" controls></audio>
                                                                            </td>
                                                                            <td align="center">
                                                                                <a href="../SongsData/<?php echo $row['UploadedSong']; ?>">
                                                                                    <i class="fa fa-download"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                <?php }
                                                                } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Albums -->
    <?php include 'footer.php' ?>

<?php } ?>