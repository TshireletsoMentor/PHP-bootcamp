<?PHP
    function auth($login, $passwd){
        if(!$login || !$passwd)
            exit();
        $arr = unserialize(file_get_contents('private/passwd'));
        if ($arr){
            $var = hash('whirlpool', $passwd);
            foreach($arr as $key => $user){
                if ($user['login'] == $login && $user['passwd'] == $var){
                    return TRUE;
                }
            }
        }
        return FALSE;
    }
?>