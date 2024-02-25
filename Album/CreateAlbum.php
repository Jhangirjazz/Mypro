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
                    <h5>Add New Album</h5>
                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>
                </div>
                <div class="card-block">
                    <h4 class="sub-title">Create Album</h4>
                    <form action="AlbumQuery.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Album Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="Albumname" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Writer</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="Writer" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Album Image</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="uploadfile" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Choose Category</label>
                            <div class="col-sm-12">
                                <select name="CategoryId_Fk" class="form-control" required>
                                    <option selected disabled>Select One Value Only</option>
                                    <?php
                                    $SqlCreateAlbum = "select * FROM category";
                                    $result = mysqli_query($con, $SqlCreateAlbum);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <option value="<?php echo $row['CategoryId']; ?>">Category Name : <?php echo $row['name']; ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit" name="SaveAlbum">Add Album</button>
                    </form>
                    <!-- Displaying Error Code -->
                    <?php if (isset($_GET['AlbumAddedError'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            <strong>Alert !</strong> <?php echo $_GET['AlbumAddedError']; ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <!-- Displaying Error Code End-->

                    <!-- Displaying Error Code -->
                    <?php if (isset($_GET['AlbumAdded'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>Congratulation !</strong> <?php echo $_GET['AlbumAdded']; ?>.
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
                <h5>Album</h5>
                <span>All Album Details</span>

            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Album ID</th>
                                <th>Album Name</th>
                                <th>Album Writer</th>
                                <th>Album Image</th>
                                <th>Category Name</th>
                                <th>Added By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $SqlShowAlbum= "select * FROM album inner JOIN category on category.CategoryId = album.CategoryId_Fk";
                            $result = mysqli_query($con, $SqlShowAlbum);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['AlbumId']; ?></td>
                                        <td><?php echo $row['Albumname']; ?></td>
                                        <td><?php echo $row['Writer']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td align="center"><img src="../AlbumImage/<?php echo $row['AlbumImage']; ?>" width="100" height="80"></td>
                                        <td><?php echo $row['CreatedAt']; ?></td>
                                        <td>
                                            <a href="http://localhost/Sound/Category/Edit.php?id=<?php echo $row['AlbumId']; ?>"><i class="icofont icofont-edit" ></i></a>
                                            <a href="http://localhost/Sound/Category/Delete.php?id=<?php echo $row['AlbumId']; ?>"><i class="icofont icofont-trash"></i></a>
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