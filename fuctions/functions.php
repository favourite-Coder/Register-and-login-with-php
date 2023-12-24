<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php

    //Functions
    
  /*  function myFunction() {
       $x = "Hello!";
       echo $x;

    }
    myFunction();

    


    //Parameters

    $num1 = 5;
    $num2 = 5;
    function calculator($num1 = 5, $num2) {
        echo $num1 * $num2;
    }

    //Arguments
    calculator($num1, $num2);
    

    //functions with return value
    //pass by value
    $num1 = 10;
    $num2 = 15;

    function add($num1, $num2) {
      $result = $num1 + $num2;
      return $result;

    }

echo "The number is: " . add($num1, $num2);
*/

//pass by reference

$x = 10;
function addByValue($x){
    $x += 5;
}

function addByReference(&$x) {
    $x += 10;
}

addByValue($x);
echo "The value is: " . $x; 

echo "<br>";

addByReference($x);
echo "The value is: " . $x;    
    
    ?>
</body>
</html>