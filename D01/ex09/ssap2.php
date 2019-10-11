#!/usr/bin/php
<?PHP
$arr = [];
unset($argv[0]);
foreach($argv as $var){
    $tmp = array_filter(explode(" ", $var));
    foreach($tmp as $word)
        $arr[] = $word;
}
$alpha = [];
$digit = [];
$ascii = [];
$store = [];
foreach($arr as $letter){
    $store = str_split($letter);
    if (!is_numeric($store[0]) && ctype_alnum($store[0])){
        $alpha[] = $letter;
    }
    elseif (is_numeric($store[0])){
        $digit[] = $letter;
    }
    else{
        $ascii[] = $letter;
    }
}
sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
sort($digit, SORT_STRING | SORT_FLAG_CASE);
sort($ascii);
foreach($alpha as $i)
    echo "$i\n";
foreach($digit as $j)
    echo "$j\n";
foreach($ascii as $k)
    echo "$k\n";
?>