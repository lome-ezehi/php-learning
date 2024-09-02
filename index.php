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
    print_r($choco_cake);
?>