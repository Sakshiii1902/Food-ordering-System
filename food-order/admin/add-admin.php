<?php
include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full name</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your name">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your user name">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="your password">
                    </td>
                </tr>
                <br>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include('partials/footer.php'); ?>
<?php 
// include('config/constant.php')
?>

<?php
// process the value from form and save it in database
// check wheather the submit button is  clicked or not

if (isset($_POST['submit'])) {
    //button clicked
    //  echo"button clicked"

    // Get the data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //password encryption with md5

    // SQL query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
    ";


    //3. Executing Query and Saving Data into Datbase
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
    // check whether the (query is executed)    data is inserted or not and display appropriate msg
    if ($res == TRUE) {
        // data inserted 
        // Create a Session Variable to Display Message
        $_SESSION['add'] = "Admin Added Successfully";
        // Redirect page  to manage admin
        header("Location:http://localhost/food-order/admin/manage-admin.php");
       
    } else {
        // failed to insert data
        // echo "failed to insert data";
        $_SESSION['add'] = "Failed to add admin";
        // Redirect page  to add admin
        header("location:".SITEURL.'add-admin.php');
       
    }
}


?>