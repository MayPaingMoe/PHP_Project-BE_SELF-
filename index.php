<?php

require "database_connection.php";
$read=new CRUD();
// $admindata=$read->readAdmin();
// $catalogdata=$read->readCatalog();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="col-10 mt-5" >
                <h3>Description</h3>
                <a href="insertpage.php" class="btn btn-primary mb-2">Add new catalog</a>
    </div>
    <table border="1">
        <tr>
            <th>Cid</th>
            <th>Name</th>
            <!-- <th>Email</th>
            <th>Password</th> -->
            <th></th>
        </tr>
        <?php 
        // foreach($catalogdata as $a):
        ?>
        <!-- <tr> <td> -->
          
            <div>
            <?php echo "$a->Cid"?>
            </div>
        <!-- </td> -->
           <!-- <td> -->
           <div>
            <?php echo "$a->name"?>
           </div>
        <!-- </td> -->
           
           <td>
           <a href="editPage.php?id=<?php echo "$a->Aid"?>" class="btn btn-warning" >Edit? </a>
           <a href="" class="btn btn-danger"> Delete</a>
           </td>
        </tr>
        <?php 
    // endforeach; ?>
    </table>
    
</body>
</html>



<!-- <td> -->
    <?php
    //  echo "$a->email"
    ?>
    <!-- </td><td> -->
           <?php 
        //    echo "$a->password"
           ?>
           <!-- </td>  -->