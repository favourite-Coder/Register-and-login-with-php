<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal</title>
</head>
<body>
    <?php
    //Superglobals

   //$_COOKIES
   //small files that the webserver stores in the
   //client computer

   //6 Cookies Arguements
   //Name
   //Value
   //Expire
   //Path
   //Domain
   //Security

   $time = time() + 86400 * 30;

   setcookie("name", "Favour", $time);

   print_r($_COOKIE);





   ?>
</body>
</html>