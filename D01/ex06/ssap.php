#!/usr/bin/php
<?PHP
$i = 1;
$arr = [];
while($i < $argc){
    $arr = array_filter($argv[$i], explode(" ", $argv[$i]));
    $i++;
}
echo "$str";
?>