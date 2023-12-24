<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!--<h1><u>Nigerian States & Capital</h1></u>
--->    <?php

  /*  //Data Types
    //Exercise Data Types
    //personal Information
    $x = 8;
    $y = 7;
    $z = ($x + $y) * 5;
    echo "The total is " . $z . "<br>";

    //value added tax
    $price = 50;
    $vat = 0.30;

    $totalPrice = ($price * $vat) + $price;
    echo "Price: " . $price . "<br>";
    echo "VAT: " . $vat . "<br>";
    echo "Total price: " . $totalPrice; 

    //Average
     $x = 4;
     $y = 9;
     $z = 4;

     $average = ($x + $y + $z) / 3;
     echo number_format($average, 2, '.', '');

     

     //States and Capital

     

     $states = array
     ("Anambra" => "Akwa",
     "Akwa-Ibom" => "Oyo",
     "Lagos" => "Ikeja",
     "Enugu" => "Enugu",
     "Ebonyi" => "Abakaliki");

     foreach ($states as $key => $value) {
        echo "The capital of " . $key . " is " 
        . $value;
        echo "<br>";
     } 


     //Centimeters to Inches
     $cm = 150;

     $cmToInche = $cm * 0.39;
     echo $cm . " Centimeter is " . $cmToInche . " inch";

     

     //Expenses

     $expenses = array(40, 70, 20, 85, 40);
     $totalAmount = 0;
     $amountOfExpenses = 0;

     foreach ($expenses as $expense) {
       $totalAmount = $expense + $totalAmount;
       $amountOfExpenses = $amountOfExpenses + 1;

     }
     
     echo "My " . $amountOfExpenses . " biggest 
     expenses were " . $totalAmount;

     */

     //Weather Condition
     $weather = array
     ("Rain",
     "Sunshine",
     "Clouds",
     "Hails",
     "Sleet",
     "Snow",
     "Wind");

     echo "We've seen all kinds of weather this month.
      At the begining of the month, we had " . 
      $weather[5] . " and " . $weather[6] . ". Then came "
       . $weather[1] . " with a few " . $weather[2] . 
        " and some " . $weather[0] . ". At least we didn't get
        any " . $weather[3] . " or " . $weather[4]

    ?>
</body>

</html>