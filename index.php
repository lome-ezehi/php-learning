<?php
    //indexed array
    // $cake = ["Chocolate", "Vanilla", "Strawberry"];
    // echo $cake[1];
    // $cake[0] = "Chocolate cake";
    // $cake[3] = "Sponge cake";
    // $cake[5] = "Blueberry cake";
    // array_push($cake, "Black cake", "gosh cake");
    // print_r($cake);

    //associative array
    $choco_cake = [
        "full_name" => "Chocolate cake",
        "bake_time" => 25,
        "ingredients" => "cocoa, sugar, flour, butter, milk",
        "likes" => 258
    ];
    $choco_cake["date_created"] = "02/09/2024";
    // echo $choco_cake["ingredients"];


    $student = [
        "matric_no" => "VUG/SEN/23/8868",
        "full_name" => "Emeka Charles",
        "course" => "Software Engineering",
        "admission_type" => "Direct Entry",
        "Faculty" => "Engineering",
        "year_registered" => "2023",
        "dob" => "29/05/2006",
        "fees_status" => "Paid"
    ];
    // print_r($student);

    //multidimensional array
    $students = [
        ["name" => "Emeka Charles", "matric_no" => "VUG/SEN/23/8868"],
        ["name" => "David King", "matric_no" => "VUG/SEN/23/8176"],
        ["name" => "Ezehi Lome", "matric_no" => "VUG/SEN/23/8365"]
    ];
    print_r($students);
    echo $students[2]["name"] . " " . $students[2]["matric_no"];
    print_r($students[1]);

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Student Details</h1>
            <div class="col s12 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title green-text text-darken-4 activator" style="font-size : 30px; text-decoration : Underline; font-weight : bold;">
                            <?php 
                                echo $student["full_name"];
                            ?>
                        </span>
                        <span class="grey-text text-darken-2" style="font-size : 18px; font-weight : bold;">
                            <?php 
                                echo $student["matric_no"];
                            ?>
                        </span><br>
                        <span class="green-text text-darken-4" style="font-size : 18px; font-weight : bold;">
                            <?php 
                                echo $student["fees_status"];
                            ?>
                        </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title">Close</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eius quas dolores. Dolorum, minima praesentium?</p>
                    </div>
                </div>
            </div>
            <div class="col s12 l4"></div>
            <div class="col s12 l4"></div>
        </div>
    </div>
</body>

<script src="js/jqueryv3.4.1.js"></script>
        <script src="js/materialize.js"></script>
        <script>
            $(document).ready(function(){

            })
</script>
</html>