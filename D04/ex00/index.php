<?PHP
    session_start();
    if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] == "OK"){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
    }
?>
<html><body>
    <form action="index.php" method="GET">
    Username: <input  type="text" name="login" value="" />
    <br />
    Password: <input  type="text" name="passwd" value="" />
    <input type="submit" name="submit" value="OK"/> 
    </form>
</body></html>