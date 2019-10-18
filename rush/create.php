<?PHP
session_start();
if(!$_SESSION['login']){
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == 'OK'){
        if(!file_exists("private")){
            mkdir("private");
        }
        if(!file_exists("private/passwd")){
            file_put_contents("private/passwd", null);
        }
        $users = unserialize(file_get_contents("private/passwd"));
        if ($users){
            $duplicate = 0;
            foreach ($users as $key => $var){
                if($var['login'] === $_POST['login'])
                    $duplicate = 1;
            }
        }
        if ($duplicate){
            echo "Username already in use\n";
        }
        else{
            $arr['login'] = $_POST['login'];
            $arr['passwd'] = hash('whirlpool', $_POST['passwd']);
            $users[] = $arr;
            file_put_contents("private/passwd", serialize($users));
            echo "Account created\n";
            session_destroy()
            ?>
            <br />
            <a href="login.html">login</a>   
            <?PHP     
        }
    }
    else{
        echo "Incorrect username or password input\n";
    }
}
else{
?>
<?php
    echo "ERROR RETRY";
?>
<br />
<a href="index2.php">Return to store</a>
<?PHP
session_destroy();
}
?>
