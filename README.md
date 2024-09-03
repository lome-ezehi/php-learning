# PHP Learning

I started learning php today.

$variable - variable
echo $variable; - call variable
pi() - pi value (number function)
round() - round to 2 decimal
strlen(variable) - string length
rand(1, 10) - random values between 1 - 10

indexed array
print_r() - to display array values
echo $arrayName [0] - to display first value of the array
array_push($cake, "Black cake", "gosh cake"); - to add values to end of the list¡

associative arrays
$choco_cake = [
        "full_name" => "Chocolate cake",
        "bake_time" => 25,
]; example

multidimensional arrays - mixture of indexed and associative array
$student[
        ["name" => "Lome", "matric" => 8868],
        ["name" => "Emeka", "matric" => 9123]
]
echo $student [0] ["name"] - to display first string of the array ("Lome")

Conditional statements
if statements
elseif statements
else statements
$total_score = 59;
    if ($total_score >= 80) {
        echo "Your grade is A";
    }elseif ($total_score >= 70) {
        echo "Your grade is B";
    }elseif ($total_score >= 60) {
        echo "Your grade is C";
    }elseif ($total_score >= 50) {
        echo "Your grade is D";
    }elseif ($total_score >= 40) {
        echo "Your grade is E";
    }else {
        echo "Your grade is F";
    }

loops

for loop and for each
