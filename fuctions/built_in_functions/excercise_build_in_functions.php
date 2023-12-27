<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excerise Buils in Funtions</title>
</head>
<body>
    <?php
    // Sorting array
   /* $numbers = array("Milk" => 2, "Cheese" => 4,
    "Pepsi" => 3); 

    arsort($numbers);
    print_r($numbers); 
    // Birthday Countdown
    $targetDays = mktime(0, 0, 0, 8, 21, 2023); 
    
    $today = time();
    $differenceDays = ($targetDays - $today);
    
    $days = (int)($differenceDays / 86400);
    
    echo "Days till next birthday: " . $days . " days!";


 //generating random float numbers

 $randnumber = rand(0, 100) / 10;
 echo $randnumber;  

 //lowerCase Check

 $str = "My name is Favour, I'm 22 years old
  for now, and I live in Nigeria. I like coding
  as a whole because they are programming languages!";

  function lowerCaseCheck($str) {
    echo strtolower($str);
  };
    
   lowerCaseCheck($str);

   //Search inside of a text

   $str = "My name is Favour. I'm 22 years old
  for now, and I live in Nigeria. I like coding
  as a whole because they are programming languages...!";
    
$punctuation = 0;

function searchText ($str, $punctuation) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == ".") {
            $punctuation++;

        }
    }
    echo "The text has " . $punctuation . 
    " punctuation";
}

searchText($str, $punctuation);   


      //Lowest and highest values
      $onlyNumbers = array(8, 7, 5, 21, 55, 44, 
    38, 44, 16, 60, 3);

    echo "The lowest value is " . min(
        $onlyNumbers) . " and the highest value
         is " . max($onlyNumbers);
                */


    //String Repeat
    
    $str = "My name is Favour";

    echo str_repeat($str, 8) . "<br>";
    ?>
</body>
</html>