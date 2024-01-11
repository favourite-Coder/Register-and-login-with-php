<?php
    require_once 'includes/header.php';
?>

<?php
if(isset($_SESSION['sessionId'])) {
    echo "<p class='logged-in'>LOGIN SUCCESSFUL</p>";
    echo "<a href='/Project/includes/logout.php'><button class='logout'>Log Out</button></a>";
} else {
    echo "<p class='welcome-message'>WELCOME TO MY CREATIVE HOME PAGE</p>";
}
?>

<?php
    require_once 'includes/footer.php';
?>
