<?php
    //multidimensional array foreach loop
    $students = [
        ["name" => "Emeka Charles", "matric_no" => "VUG/SEN/23/8868", "fees_status" => "paid"],
        ["name" => "David King", "matric_no" => "VUG/SEN/23/8176", "fees_status_u" => "unpaid"],
        ["name" => "Ezehi Lome", "matric_no" => "VUG/SEN/23/8365", "fees_status" => "paid"],
        ["name" => "Busayomi Abass", "matric_no" => "VUG/SEN/23/9138", "fees_status_u" => "unpaid"]
    ];
    // foreach ($students as $student) {
    //     echo $student["name"] . "<br>";
    // }

    //functons
    function hello_world($user = "guest") {
        echo "Good Afternoon, $user";
    }
    hello_world("Lome the Boss");
    hello_world();

    function volume_of_sphere($radius = 0){
        $answer = (4/3) * pi() * $radius**3;
        echo $answer;
    }
    volume_of_sphere(5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <title>LOME-PHP</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <h1 class = "center-align green ">Students</h1>
        <div class="row">
            <?php foreach ($students as $student) {
                if ($student["fees_status"] == true) {
                    $color = "green";
                }else {
                    $color = "red";
                }
            
            ?>
                <div class="col l3 s12">
                    <div class="card" style= "background-color: <?php echo $color; ?>">
                        <div class="card-image"></div>
                        <div class="card-content">
                            <span class="card-title white-text"> <?php echo $student["name"];?> </span>
                            <span class = "white-text"> <?php echo $student["matric_no"]; ?> </span>
                            <span class = "white-text"> <?php echo $student["fees_status"]; ?> </span>
                            <span class = "white-text"> <?php echo $student["fees_status_u"]; ?> </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>