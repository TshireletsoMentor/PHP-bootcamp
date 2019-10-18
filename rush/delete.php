<?PHP
    session_start();
    if($_SESSION['login']){
		$users = unserialize(file_get_contents('private/passwd'));
		if ($users) {
		    $already_exists = 0;
		    foreach ($users as $key => $value) {
				if ($value['login'] == $_SESSION['login']) {
				    $already_exists = 1;
				    $users[$key]['passwd'] = hash('whirlpool', "XXXXXXX");
			    }
		    }
			if ($already_exists) {
			    file_put_contents('private/passwd', serialize($users));
                echo "Account deleted"."\n";  
            ?>
            <html>
                <body>
                <br />
                <a href="index2.php">Return to store</a>
                </body>
            </html>
            <?php
            session_destry();
            }
        }
    }
    else
        echo "You need to login\n";
    ?>
    <html>
        <body>
        <br />
        <a href="login.html">login</a>
        </body>
    </html>
 