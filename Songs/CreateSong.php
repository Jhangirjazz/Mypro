<?php
include '../Connect.php';
session_start();
if ($_SESSION['UserRole'] != "Admin") {
    header("location: http://localhost/Sound/Login.php");
} else {
    if ((time() - $_SESSION['last_login_timestamp']) > 120) {
        header("location: http://localhost/Sound/Login.php");
    } else {
?>
        <?php include '../header.php'; ?>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add New Songs</h5>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>
                </div>
                <div class="card-block">
                    <h4 class="sub-title">Create Songs</h4>
                    <form action="SongsQuery.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Song Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="SongName" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Upload Song</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="uploadfile" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Choose Album</label>
                            <div class="col-sm-12">
                                <select name="AlbumId_Fk" class="form-control" required>
                                    <option selected disabled>Select One Value Only</option>
                                    <?php
                                    $SqlCreateAlbum = "select * FROM album";
                                    $result = mysqli_query($con, $SqlCreateAlbum);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?php echo $row['AlbumId']; ?>">Category Name : <?php echo $row['Albumname']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit" name="SaveSong"><i class="icofont icofont-song-notes"></i>Add Songs</button>
                    </form>
                    <!-- Displaying Error Code -->
                    <?php if (isset($_GET['SongAddedError'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            <strong>Alert !</strong> <?php echo $_GET['SongAddedError']; ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <!-- Displaying Error Code End-->

                    <!-- Displaying Error Code -->
                    <?php if (isset($_GET['SongAdded'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>Congratulation !</strong> <?php echo $_GET['SongAdded']; ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <!-- Displaying Error Code End-->
                </div>
            </div>
        </div>

     <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5><i class="icofont icofont-song-notes"></i> Songs</h5>
                <span>All Songs Details</span>

            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Song ID</th>
                                <th>Song Name</th>
                                <th>Song</th>
                                <th>Album Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $SqlShowAlbum= "select * FROM song inner JOIN album on album.AlbumId = song.AlbumId_Fk";
                            $result = mysqli_query($con, $SqlShowAlbum);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['SongID']; ?></td>
                                        <td><?php echo $row['SongName']; ?></td>
                                        <td align="center">
                                            <audio src="../SongsData/<?php echo $row['UploadedSong']; ?>" controls></audio>
                                        </td>
                                        <td><?php echo $row['Albumname']; ?></td>
                                        <td>
                                            <a href="http://localhost/Sound/Category/Edit.php?id=<?php echo $row['SongID']; ?>"><i class="icofont icofont-edit" ></i></a>
                                            <a href="http://localhost/Sound/Category/Delete.php?id=<?php echo $row['SongID']; ?>"><i class="icofont icofont-trash"></i></a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Added By</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div> 

        <?php include '../footer.php'; ?>


<?php }
} ?>