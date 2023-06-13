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
       <h1>Manage Admin</h1>
       <?php
        if (isset($_SESSION['add'])) {
          echo $_SESSION['add'];
        }
        ?>
       <br>
       <!-- Button to add admin -->
       <a href="add-admin.php" class="btn-primary">Add Admin</a>
       <br><br>
       <table class="tbl-full">
         <tr>
           <th>S.N</th>
           <th>Full name</th>
           <th>Username</th>
           <th>Actions</th>
         </tr>
         <tr>
           <td>1.</td>
           <td>Sakshi sawant</td>
           <td>sakshi19</td>
           <td>
             <a href="#" class="btn-secondary">Update Admin</a>
             <a href="#" class="btn-danger">delete Admin</a>
           </td>
         </tr>

         <tr>
           <td>2.</td>
           <td>Sakshi sawant</td>
           <td>sakshi19</td>
           <td>
             <a href="#" class="btn-secondary">Update Admin</a>
             <a href="#" class="btn-danger">delete Admin</a>
           </td>
         </tr>

         <tr>
           <td>3.</td>
           <td>Sakshi sawant</td>
           <td>sakshi19</td>
           <td>
             <a href="#" class="btn-secondary">Update Admin</a>
             <a href="#" class="btn-danger">delete Admin</a>
           </td>
         </tr>
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