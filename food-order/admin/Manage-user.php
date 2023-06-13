<!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="admin.css">
 </head>

 <body>
   <?php
    include('partials/menu.php');
    ?>

   <!--Main content section starts-->
   <div class="main-content">
     <div class="wrapper">
       <h1>Manage Users</h1>
       <?php
        if (isset($_SESSION['add'])) {
          echo $_SESSION['add'];
        }
        ?>
       <br>
       <!-- Button to add admin -->
       <table class="tbl-full">
         <thead>
           <tr>
             <th>S.N</th>
             <th>Full name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Password</th>
             <th>Update User</th>
             <th>Delete User</th>
           </tr>
         </thead>
         <tbody>
           <?php
            $dbHost = "localhost";
            $dbName = "food-order";
            $dbUser = "root";      //by default root is user name.  
            $dbPassword = "";     //password is blank by default  

            try {
              $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
              $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //PDO error mode to exception 
              // Echo "Successfully connected with database";
            } catch (Exception $e) {
              echo "Connection failed" . $e->getMessage();
            }

            $sql_display = $dbConn->prepare("SELECT * FROM `form`;");
            $sql_display->execute();
            $count_display = $sql_display->rowCount();
            if ($count_display > 0) {
              $fetch_data_display = $sql_display->fetchAll(PDO::FETCH_ASSOC);
              for ($i = 0; $i < $count_display; $i++) {
                $sr = $i + 1;

            ?>
               <tr>
                 <td><?= $sr ?></td>
                 <td><?= $fetch_data_display[$i]['fullname'] ?></td>
                 <td><?= $fetch_data_display[$i]['email'] ?></td>
                 <td><?= $fetch_data_display[$i]['phone'] ?></td>
                 <td><?= $fetch_data_display[$i]['Crpass'] ?></td>
                 <td>
                   <button class="btn btn-primary">Update User</button>
                 </td>
                 <td>
                   <button class="btn btn-danger">Delete User</button>
                 </td>
               </tr>
           <?php
              }
            }
            ?>
         </tbody>

       </table>

     </div>
   </div>
   <!--Main content section ends-->


   <?php
    include('partials/footer.php');
    ?>


   <!-- 
</body>

</html> -->