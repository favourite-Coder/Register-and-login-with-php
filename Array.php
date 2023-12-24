<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


//Array -- starting from 0
    $cars = array("BMW", "Audi", "Mercedes");
   echo $cars[2];

   echo "<br>";

   $myCar = array("Audi", 2015, 75.304);

   print_r($myCar);

   $cars2 = array("Volve", "Chevy", "Volkswagen");
 
   $cars2 = array_merge($cars, $cars2);
   print_r($cars); 

   //Associative array
   $cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedez" => 60.300);
   //$car1["Mercedez"] = 60.300;
   //echo $car1["Mercedez"]; 

   foreach ($cars as $key => $value) {
    echo "My " . $key . " has " . $value . " mileage <br>";
   } 

    //Multidimensional Arrays
    $cars = array(
        "Expensive" => array("Audi", "Mercedes", "BMW"), 
        "Inexpensive" => array("Volvo", "Ford", "Toyota")
    );

    echo $cars["Expensive"][0];


?>
</body>
</html>