<?php
    //multidimensional array foreach loop
    $students = [
        ["name" => "Emeka Charles", "matric_no" => "VUG/SEN/23/8868"],
        ["name" => "David King", "matric_no" => "VUG/SEN/23/8176"],
        ["name" => "Ezehi Lome", "matric_no" => "VUG/SEN/23/8365"],
        ["name" => "Busayomi Abass", "matric_no" => "VUG/SEN/23/9138"]
    ];
    // foreach ($students as $student) {
    //     echo $student["name"] . "<br>";
    // }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <title>LOME-PHP</title>
</head>
<body>
    <div class="container">
        <h1 class = "center-align green">Students</h1>
        <div class="row">
            <?php foreach ($students as $student) { ?>
                <div class="col l3 s12">
                    <div class="card">
                        <div class="card-image"></div>
                        <div class="card-content">
                            <span class="card-title green-text"><?php echo $student["name"]; ?> </span>
                            <span class = "green-text"> <?php echo $student["matric_no"]; ?> </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>