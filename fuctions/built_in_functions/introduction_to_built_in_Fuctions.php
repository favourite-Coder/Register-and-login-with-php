<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built_in_functions</title>
</head>
<body>
    <?php
    //String Functions
    /*
    //string length
    $str = "Today is a rainy day ";
    echo strlen($str);
    */

    /*
    //string word count
    $firstName = "My first name is Ernest";
    echo "<br>";
    echo str_word_count($firstName);
    */

    /*
    //how to find text within a string
    $email = "senawritesall08@gmail.com";
    echo "<br>";
    if (strpos($email, "@")) {
        echo "This is a valid email";
    } else {
        echo "This is an email input field";
    }
    echo "<br>";

    //Ucwords
    echo ucwords("what is my name?" . "<br>");
    echo "<br>";

    //Whole string to uppercase
    echo strtoupper("what is my name?" . "<br>");
    echo "<br>";

    //Whole string to lowercase
    echo strtolower("what is my name?" . "<br>");
    */

    //Math Functions
    /*
    //Ceil
    echo ceil(1.50) . "<br>";

    //Floor
    echo floor(0.50) . "<br>";

    //Round
    echo round(0.54335, 2) . "<br>";

    //exp
    echo exp(4) . "<br>";
    */

    //Array Functions
    $personalInfo = array("Name" => "Favour", "Age" => 22, "City" => "Nigeria");
    $moreInfo = array("State" => "Lagos", "Height" => 85);
    $personalInfo = array_merge($personalInfo, $moreInfo);

    foreach ($personalInfo as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    echo "<br>";

    //Print only keys
    //print_r(array_keys($personalInfo));
    echo "<br>";

    //Print only values
    //print_r(array_values($personalInfo));
    echo "<br>";

    //Add a value in Array with PUSH
    $cars = array("Toyota", "Camry", "Sienna");
    array_push($cars, "Tacoma");
    print_r($cars);

    //Search inside of an array using Array Search
    echo array_search("Tacoma", $cars) . "<br>";

    //Count the number of items in the array
    echo count($cars);
    ?>
</body>
</html>
