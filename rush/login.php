<?PHP
    require('auth.php');

    session_start();
    if($_SESSION['login'] == "" || $_SESSION['login'] == $_POST['login']){
        if (auth($_POST['login'], $_POST['passwd'])){
            $_SESSION['login'] = $_POST['login'];
            echo "Logged in\n";
            ?>
            <html><body>
            <br />
            <a href="index2.php">return to store</a><br />
            </body>
            </html>
        <?PHP
        }
        else{
            echo "Incorrect credentials or Register\n";
            unset($_session['login']);
            ?>
            <html><body>
            <br />
            <a href="login.html">retry</a><br />
            <a href="create.html">register</a>
            </body>
            </html>
            <?PHP 
        }
    }
    else{
        echo "You are already logged in";
        ?>
        <html><body>
        <br />
        <a href="index2.php">return to store</a><br />
        </body>
        </html>
        <?PHP
    }
?>
