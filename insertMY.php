<?php  
session_start();
// Check if the meal is set  
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['meal'])) {  
//     $_SESSION['$selectedMeal'] = $_POST['meal'];  
    
//     // echo "Selected Meal: " . htmlspecialchars($selectedMeal) . "<br>"; // Display the selected meal  
// } else {  
//     echo "No meal selected.";  
//     exit();  
// }  

$store=$_SESSION['selectedMeal'];
?>  

<html>
<body>
<form action="insert_My.php" method="post" enctype="multipart/form-data">  
        
        <label for="name">Name:</label><br>  
        <textarea name="name" id="name" required></textarea><br><br>
        
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

