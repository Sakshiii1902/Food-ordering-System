<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body style="background-color: antiquewhite;">
    <div id="login">
        <h3 class="text-center pt-5" style="color:#ff4757"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <div class="card-body" style="background-color:#ff4757; border-radius:25px;">
                            <form id="login-form" class="form" method="POST" autocomplete="off">
                                <h3 class="text-center" style="color:aliceblue">LOGIN</h3>
                                <div class="form-group">
                                    <label for="username" style="color:aliceblue">Username:</label><br>
                                    <input type="text" name="username" id="username" placeholder="Enter Username:" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" style="color:aliceblue">Password:</label><br>
                                    <input type="text" name="password" id="password" placeholder="Enter Password:" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remember-me" style="color:aliceblue"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="register.php" style="color:aliceblue">Register here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
     include("connection.php");
     if(isset($_POST['submit']))
     {
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM form WHERE fullname = '$username' AND repass ='$pwd' ";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        
        if($total == 1  )
        {

        //    header('location:resto.html');
       ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/food-ordermain/food-order/resto.html"/>

        <?php
        }
        else
        {
        //echo "Login Failed"; 
        echo "<script> alert('Login Failed');</script>";
        }

     }
?>