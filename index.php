<?php
    $your_name = "Lome";
    $department = "Software";
    // echo $your_name; 

    // $your_age = 16;
    // echo "my name is $your_name"
    
    //string functions
    echo strlen ($your_name);
    echo strtoupper ($your_name);
    echo 'my name is '. $your_name. ' and i am in '. $department . ' department';
    
    //area of a circle (3.14 * r * r)
    $radius = '1';
    $area_of_circle = pi() * $radius**2;
    // echo $area_of_circle;
    
    //pythagoras theorem (3.14 * r * r)
    $opp = '5';
    $adj = '4';
    $hyp = $adj**2 + $opp**2;
    $answer = sqrt($hyp);
    $answer = round($answer, 2);
    echo $answer;

    //random value
    echo rand(1, 100);

    //arrays



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <link rel="shortcut icon" href="img/rcon.png" type="image/x-icon"> -->
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>Recipe.com</title>
    </head>
    <body>
        <h1 class = "red-text">Hello my name is <?php echo $your_name; ?> and i'm learning php</h1>
        <script src="js/jqueryv3.4.1.js"></script>
        <script src="js/materialize.js"></script>
        <script>
            $(document).ready(function(){

            })
        </script>
    </body>
</html>
