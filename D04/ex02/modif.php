<?PHP
    if(file_exists('../private') && file_exists('../private/passwd') && $_POST['login'] && $_POST['oldpw']
    && $_POST['newpw'] && $_POST['submit'] == "OK"){
        $user = unserialize(file_get_contents('../private/passwd'));
        foreach($user as $key => $var){
            if ($var['passwd'] == $_POST['oldpw'] && $_POST['newpw'] != $var['passwd']){
                $arr['login'] = $_POST['login'];
                $arr['passwd'] = hash('whirlpool', serialize($_POST['newpw']));
                $user[] = $arr;
                file_put_contents('../private/passwd', serialize($user));
                echo "OK\n";
            }
            else
                echo "ErROR\n";
        }
    }
    else
        echo "eRROR\n";


?>