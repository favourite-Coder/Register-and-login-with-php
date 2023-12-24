<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
      //Conditional statements

     /* $age = 20;
      if($age < 20) {
       echo "Sorry, You're too Young";
      } elseif ($age > 50) {
          echo "You are too old to Party";
  }  elseif ($age < 10) {
      echo "You need to be in Bed!";
  } elseif ($age > 18 && $age < 21) {
      echo "You are not allowed to drink";
  }
  else {
          echo "You are old enough to go out";
      } */



      //Switch statement

      $role = "Employee";
      switch ($role) {
        case 'Visitor':
            echo "Welcome Visitor";
            break;

            case 'Admin':
                echo "Welcome Admin";
                break;

                case 'SuperAdmin':
                    echo "Welcome SuperAdmin";
                    break;

                    case 'Boss':
                        echo "Welcome Boss";
                        break;
                        default:
                        echo "User has no role";
      }
    
    ?>
</body>
</html>