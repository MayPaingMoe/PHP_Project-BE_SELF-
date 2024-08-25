<?php
// require "insertsql.php";
// $insert=new insert();
// $admininsert=$insert->insertAdmin();

// require "database_connection.php";
// $insert=new CRUD();

?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Insert description Form</title>  
</head>  
<body>  
    <h1>Submit Your Recipe</h1>  
    <form action="insert.php" method="post" enctype="multipart/form-data">  
        <label for="instructions">Instructions:</label><br>  
        <textarea name="instructions" id="instructions" required></textarea><br><br>  

        <label for="ingredient">Ingredients:</label><br>  
        <textarea name="ingredient" id="ingredient" required></textarea><br><br>  

        <label for="pre_time">Preparation Time (minutes):</label><br>  
        <input type="number" name="pre_time" id="pre_time" required><br><br>  

        <label for="cook_time">Cooking Time (minutes):</label><br>  
        <input type="number" name="cook_time" id="cook_time" required><br><br>  

        <label for="photo">Upload Photo:</label><br>  
        <input type="file" name="photo" id="photo" accept="image/*" required><br><br>  

        <input type="submit" value="Submit Recipe">  
    </form>  
</body>  
</html>