<?php
if (empty($_GET['id'])) {
    header("location: http://localhost/Sound/Category/Create.php");
    exit;
} else {
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
                        <h5>Edit Category</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Edit Category</h4>
                        <form action="CategoryQuery.php" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Name</label>
                                <div class="col-sm-12">
                                    <?php
                                    $id = $_GET['id'];
                                    $SqlShowCategory = "select * FROM category where CategoryId = $id";
                                    $result = mysqli_query($con, $SqlShowCategory);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" />
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="btncat">Edit Category</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php include '../footer.php'; ?>


<?php }
    }
} ?>