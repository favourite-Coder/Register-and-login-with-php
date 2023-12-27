<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal</title>
</head>
<body>
    <?php
/*
    //Superglobals
    //GLOBALS use to find data from way
    $x = 100;
    $y = 200;
    function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    add();
    echo $z; */

    //$_POST use to collect data  from html form [Insivible]

    //$_GET
    //$_SERVER
    //$_COOKIE
    //$_SESSION
    //$_FILES
    
    
    
    
    ?>

    <form action="post.php" method="post">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>