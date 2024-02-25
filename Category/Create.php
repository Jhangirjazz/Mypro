<?php
include '../Connect.php';
session_start();
if ($_SESSION['UserRole'] != "Admin") {
    header("location: http://localhost/Sound/Login.php");
} else {
    if ((time() - $_SESSION['last_login_timestamp']) > 120) // 900 = 15 * 60  
    {
        header("location: http://localhost/Sound/Login.php");
    } else {
?>
    <?php include '../header.php'; ?>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Add New Category</h5>
                <div class="card-header-right">
                    <i class="icofont icofont-spinner-alt-5"></i>
                </div>
            </div>
            <div class="card-block">
                <h4 class="sub-title">Create Category</h4>
                <form action="CategoryQuery.php" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" placeholder="Hollywood Bollywood Etc.." />
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btncat">Add Category</button>
                </form>
                <!-- Displaying Error Code -->
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Alert !</strong> <?php echo $_GET['error']; ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <!-- Displaying Error Code End-->
                <!-- Displaying Error Code -->
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>Congratulation !</strong> <?php echo $_GET['success']; ?>.
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
                <h5>Category</h5>
                <span>All Songs Category Wise</span>

            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Added By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $SqlShowCategory = "select * FROM category inner JOIN signup on category.ID_Signup = signup.ID;";
                            $result = mysqli_query($con, $SqlShowCategory);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['CategoryId']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['Username']; ?></td>
                                        <td>
                                            <a href="http://localhost/Sound/Category/Edit.php?id=<?php echo $row['CategoryId']; ?>"><i class="icofont icofont-edit" ></i></a>
                                            <a href="http://localhost/Sound/Category/Delete.php?id=<?php echo $row['CategoryId']; ?>"><i class="icofont icofont-trash"></i></a>
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


<?php } } ?>