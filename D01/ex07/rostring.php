#!/usr/bin/php
<?PHP
if (argc > 1){
    $s1 = argv[1];
    $str = trim(preg_replace('/\s+/', ' ', $s1));
    $a = $str[0];
    unset($str[0]);
    foreach($str as $var)
        echo "$var";
    echo " $a";
}
?>