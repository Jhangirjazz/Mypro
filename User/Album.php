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
                        <h2>Albums</h2>
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
                    <div class="titlepage">

                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $SqlShowAlbum = "select * FROM album";
                $result = mysqli_query($con, $SqlShowAlbum);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 margin">
                            <div class="d-flex justify-content-center container mt-5">
                                <div class="card p-3 bg-white"><i class="fa fa-music"></i>
                                    <div class="about-product text-center mt-2"><img src="../AlbumImage/<?php echo $row['AlbumImage']; ?>" width="200">
                                        <div>
                                            <h4><?php echo $row['Albumname']; ?></h4>
                                            <h6 class="mt-0 text-black-50"><?php echo $row['Writer']; ?></h6>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Download Songs</span><span><a href="http://localhost/Sound/User/AlbumDetails.php?Albumid=<?php echo $row['AlbumId']; ?>"><i class="fa fa-download"></i></a></span></div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <!-- end Albums -->
    <?php include 'footer.php' ?>

<?php } ?>