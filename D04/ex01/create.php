<?PHP
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == 'OK'){
        if(!file_exists("../private")){
            mkdir("../private");
        }
        if(!file_exists("../private/passwd")){
            file_put_contents("../private/passwd", null);
        }
        $users = unserialize(file_get_contents("../private/passwd"));
        if ($users){
            $duplicate = 0;
            foreach ($users as $key => $var){
                if($var['login'] === $_POST['login'])
                    $duplicate = 1;
            }
        }
        if ($duplicate)
            echo "ERROR\n";
        else{
            $arr['login'] = $_POST['login'];
            $arr['passwd'] = hash('whirlpool', serialize($_POST['passwd']));
            $user[] = $arr;
            file_put_contents("../private/passwd", serialize($user));
            echo "OK\n";
        }
    }
    else
        echo "ERROR\n";
?>