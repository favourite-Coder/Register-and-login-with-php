<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date_functions</title>
</head>
<body>
    <?php

//Date Fuctions
//'d' = Day
//'j' = Day withot zeros
//'D' = Day of week (3 letters)
//'L' = full Day of the week
//'m' = month as a number with zeros
//'n' = month as a number without zeros
//'M' = Month (3 letters)
//'F' = Full month
//'y' = Two_degit year
//'Y' = Full year

//echo date('d/m/Y');

//Times

//'g' = Hours in 12-hour format without zeros
//'h' = Hours in 12-hour format zeros
//'G' = Hours in 24-hour format without zeros
//'H' = Hours in 24-hour format zeros
//'a' = am/pm in lowercase
//'A' = AM/PM in UPPERCASE
//'i' = minutes without leading zeros
//'s' = seconds without leading zeros
/*
echo date('h:i:s a');

//Set Define time zone
date_default_timezone_set('Asia/southkorea');

//String to time - is the timestamp value represented
//as seconds calculated, since UNIX Epoch, January 1,
//1970, and also called as Unix timestamp
$time = strtotime("4:00pm December 24 2023");

echo "<br>";
echo $time;
echo "<br>";

echo date('m/d/Y H:i:s a', $time); */


//Random number Fuctions 
$min = 1;
$max =10;
echo rand ($min,$max);

//echo getrandmax();

?>
</body>
</html>