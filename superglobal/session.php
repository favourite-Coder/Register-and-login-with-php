<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal</title>
</head>
<body>
    <?php
    //Superglobals
    //$_SESSION good to use for sentitive information
    // session exit as long as the browser is open

    session_start();

    //Storing information

     $_SESSION["Name"] = "Favour";
     $_SESSION["Age"] = 24;

     echo "Hello " . $_SESSION["Name"];

     session_destroy();

     echo "Hello " . $_SESSION["Name"];
    
    
    
    
    ?>

    <form action="post.php" method="post">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>