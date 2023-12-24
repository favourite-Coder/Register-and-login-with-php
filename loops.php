<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //While loop
    /*$x = 1;

    while ($x <= 10) {
        echo $x . "<br>";
        $x++;
    } 

        //Do-While loop
        $cookie = 1;
        do {
            echo "I love Cookies! <br>";
            $cookie ++;
        
        } while ($cookie < 0);
       

    //For loop

    for ($x = 1; $x <= 10; $x++) {
      echo "The number is: " . $x;
      echo "<br>";
    }  

  //Going to the bank on the first of january
  //want to deposit 1000 dollars
  //interst rate is 5%
  //withdrawal after 5 years

  $deposit = 1000;
  $interest = 0.05;

  for ($years = 1; $years <= 5; $years++) {
     $deposit += ($deposit * $interest);
     echo "The total amount after " . $years 
      . " year is: " . $deposit;
      echo "<br>";
  }

  */


// Foreach loop

$names = array ("Ernest", "Brae", "Juliet");

foreach ($names as $name) {
  echo "My name is " . $name;
  echo "<br>";
}

$person = array ("Name" => "Favour", "age" => 30,
 "Gender" => "Female");

 foreach ($person as $key => $value) {
    echo $key . ": " . $value;
    echo "<br>";
 }





        
    
    ?>
</body>
</html>