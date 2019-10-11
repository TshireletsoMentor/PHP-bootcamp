#!/usr/bin/php
<?PHP
function ft_split($str){
    $input = preg_replace('/\s+/', ' ', $str);
    $value = explode(" ", $input);
    return ($value);
}
$arr = ft_split($argv[1]);
$first = $arr[0];
unset($arr[0]);
foreach($arr as $var)
    echo "$var ";
echo "$first\n";
?>