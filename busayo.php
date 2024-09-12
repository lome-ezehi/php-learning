<?php
// $students = ["Lome", "Busayo", "Collins"];
// echo $array[0];
// print_r($array);

$arrays = [
    "name" => "Busayo",
    "matric_no" => "9136"
];

$md_students = [
    ["name" => "Lome", "matric_no" => "8868"]
];

$test_score = 60;

if ($test_score >= 60) {
    echo "passed";
}else {
    echo "failed";
}

for ($i=10; $i <= 11; $i++) { 
    echo '<br>' . 'VUG/SEN/23/111' . $i;
}


foreach ($students as $student) {
    echo "<br>" . $student;
}

foreach($arrays as $array){
    echo "<br>" . $array;
}

$students = [
    ["name" => "Emeka Charles", "matric_no" => "VUG/SEN/23/8868"],
    ["name" => "David King", "matric_no" => "VUG/SEN/23/8176"],
    ["name" => "Ezehi Lome", "matric_no" => "VUG/SEN/23/8365"]
];
foreach ($students as $student) {
    echo "<br>" . $student["name"] . " " . $student["matric_no"];
}


function hello_world($user = "guest") {
    echo "Good Afternoon, $user";
}
hello_world("Busayo");

//using function, calculate the volume of a sphere with a radius of 5, v.o.s(4/3 * pi * radius***3)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello, my name is <?php echo $md_students[0]["matric_no"]; ?></p>

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