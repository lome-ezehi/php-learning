<?php
//1. connection file
include('./connect.php');

//print_r($_POST);
//2. Create blank variables to store data
$recipe_name = " ";
$created_by = " ";

//3. Check if the submit button is pressed
if (isset($_POST['submit'])) {

//4. store array variables to array
    $recipe_name = $_POST['recipe_name'];
    $created_by = $_POST['created_by'];

//5. Write the insert query
    $insert_query = "INSERT INTO `recipe_tb`(`recipe_name`, `created_by`) VALUES ('$recipe_name', '$created_by')";

//6. Send query to the server
    $send_query = mysqli_query($db_connect, $insert_query);    

    echo "Thank you for filling the form";

//7. Check if data is sumbitted successfully
    if ($send_query) {
        header('Location : recipes.php'); //redirects to recipe file
    } else {
        echo 'error in saving data' . mysqli_error($db_connect);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <style>
        h1{
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <h1 class = "center brown-text text-darken-1">Add New Recipe</h1>
    <div class="container">
        <div class="row">
            <div class="col l12">
                <form action="new_recipe.php" method="POST">
                    <div class="col l6"></div>
                    <div class="col l6 input-field pull-l3">
                        <input type="text" name="recipe_name" id="recipe_name" placeholder="<?php echo $recipe_name  ?>">
                        <label for="recipe_name">Recipe name:</label>
                    </div>
                    <div class="col l6"></div>
                    <div class="col l6 input-field pull-l3">
                        <input type="text" name="created_by" id="created_by" placeholder="<?php echo $created_by  ?>">
                        <label for="created_by">Created By:</label>
                    </div>
                    <div class="button center">
                        <input type="submit" value="submit" name="submit" class="btn center brown darken-1">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jqueryv3.4.1.js"></script>
    <script src="js/materialize.js"></script>
    <script>

    </script>
</body>
</html>