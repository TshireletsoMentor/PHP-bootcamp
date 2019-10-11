#!/usr/bin/php
<?PHP
$arr = [];
unset($argv[0]);
foreach($argv as $var){
    $tmp = array_filter(explode(" ", $var));
    foreach($tmp as $word)
        $arr[] = $word;
}
sort($arr);
foreach($arr as $a)
    echo "$a\n";
?>