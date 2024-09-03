<?php  
// require "clearCache.php";
require "database_connection.php";

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo $msg;
}

$read=new CRUD();
$read_En=$read->read_desEn();
$read_My=$read->read_desMy();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="choose.php">Insert New Recipe</a>
    <table border="1">
        <tr>
            <th>EN_id</th>
            <th>Instructions</th>
            <th>Ingredient</th>
            <th>Preparation Time</th>
            <th>Cooking Time</th>
            <th>Photo</th>
           
        </tr>

        <?php foreach($read_En as $r): ?>

            <tr>
                <td><?php echo $r["EN_id"] ?></td>
                <td><?php echo $r["instructions"] ?></td>
                <td><?php echo $r["ingredient"] ?></td>
                <td><?php echo $r["pre_time"] ?></td>
                <td><?php echo $r["cook_time"] ?></td>
                <td>  
                    <img src="data:image/jpg;base64,<?php echo base64_encode($r["photo"]) ?>" alt="Recipe Photo" style="max-width: 300px;"/>  
                </td>  
            </tr>
            <?php endforeach; ?>

            <?php foreach($read_My as $m): ?>

<tr>
    <td><?php echo $m["MY_id"] ?></td>
    <td><?php echo $m["instructions"] ?></td>
    <td><?php echo $m["ingredient"] ?></td>
    <td><?php echo $m["pre_time"] ?></td>
    <td><?php echo $m["cook_time"] ?></td>
    <td>  
        <img src="data:image/jpg;base64,<?php echo base64_encode($m["photo"]) ?>" alt="Recipe Photo" style="max-width: 300px;"/>  
    </td>  
</tr>
<?php endforeach; ?>


    </table>
</body>
</html>