<?PHP
    session_start();
    if($_SESSION['login']){
        $_SESSION['login'] = "";
        echo "You are logged out\n";
        session_destroy();
    }
    else{
        echo "You were not logged in\n";
    }
?>
<html><body>
<br />
<a href="index2.php">return to store</a>
</body></html>