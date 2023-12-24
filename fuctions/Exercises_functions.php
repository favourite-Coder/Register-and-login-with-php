<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises_functions</title>
</head>
<body>

<?php
//vat calculator

/*$price = 100;
$vat = 0.21;

function calculateVat($price, $vat) {
    $calculatedPrice = ($price * $vat) * $price;
    return $calculatedPrice;
}

echo "Price : " . $price . "<br>"; 
echo "Vat : " . $vat . "<br>";
echo "Total Price : " . calculateVat($price, $vat);



//Leap Year
$year =2001;

function isLeapYear ($year) {
   if ($year % 400 == 0 || $year % 4 == 0){
   return true;
} else {
    return false;
}
}

if (isLeapYear($year)) {
    echo $year . " is a leap year";
} else {
   echo $year . " is not a leap year";
}  

//Calculator

$num1 = 10;
$num2 = 15;

function addNumbers ($num1, $num2) {
      return $num1 + $num2;
}

function subtractNumbers ($num1, $num2) {
    return $num1 - $num2;
}


function divideNumbers ($num1, $num2) {
    return $num1 / $num2;
}

function multiplyNumbers ($num1, $num2) {
    return $num1 * $num2;
}

echo "Addition of " .  $num1 . " and " . $num2 . 
" is " . addNumbers($num1,$num2) ." <br>";

echo "Subtraction of " .  $num1 . " and " . $num2 . 
" is " . subtractNumbers($num1,$num2) ." <br>";

echo "Division of " .  $num1 . " and " . $num2 . 
" is " . divideNumbers($num1,$num2) ." <br>";

echo "Multiplication of " .  $num1 . " and " . $num2 . 
" is " . multiplyNumbers($num1,$num2) ." <br>";



//Swapping Numbers

$num1 = 10;
$num2 = 20;

function swapNumbers ($num1, $num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "After swapping num 1 = " . $num1 . " num 2
     = " . $num2;
}swapNumbers($num1, $num2);



//Even or Odd

$num1 = 9;

function evenOrOdd($num1) {
    if ($num1 % 2 == 0) {
        echo $num1 . " is even";
    } else {
        echo $num1 . " is Odd";
    }
}

evenOrOdd($num1);

*/

//Prime Number

$num1 = 7;

function isPrime($num1) {
    if ($num1 == 1){
        return false;
    } else {
        for ($i = 2; $i < $num1 / 2; $i++) {
            if ($num1 % $i == 0) {
                return false;
            }
        }
        return 1;
    }
}

if (isPrime($num1)) {
    echo "This number is  a prime";
} else{
    echo "This number is not  a prime";
}








?>
    
</body>
</html>