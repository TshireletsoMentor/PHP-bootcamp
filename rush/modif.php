<?PHP
    session_start();
    if($_SESSION['login']){
	    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit']) {
		    $users = unserialize(file_get_contents('private/passwd'));
		    if ($users) {
			    $already_exists = 0;
			    foreach ($users as $key => $value) {
				    if ($value['login'] == $_POST['login'] && $value['passwd'] == hash('whirlpool', $_POST['oldpw'])) {
					    $already_exists = 1;
					    $users[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				    }
			    }
			    if ($already_exists) {
				    file_put_contents('private/passwd', serialize($users));
                    echo "Password changed"."\n";
                    
                ?>
                <html>
                    <body>
                        <br />
                        <a href="login.html">login</a>
                    </body>
                </html>
                <?PHP 
                session_destry();
                } 
                else{
                    echo "Incorrect credentials"."\n";
                ?>
                <html>
                    <body>
                        <br />
                        <a href="modif.html">Retry</a>
                    </body>
                </html>
                <?PHP 
                }
            } 
            else{
            ?>
                <html>
                    <body>
                        <br />
                        <a href="create.html">Register</a>
                    </body>
                </html>
            <?PHP
            }
        } 
        else{
            echo "Incorrect input"."\n";
        ?>
            <html>
                <body>
                    <br />
                    <a href="modif.html">Retry</a>
                </body>
            </html>
        <?PHP 
        }
    }
    else{
        echo "You need to login or register";
    ?>
        <html>
            <body>
                <br />
                <a href="index2.php">Return to store</a>
            </body>
        </html>
    <?PHP 
    };
?>
