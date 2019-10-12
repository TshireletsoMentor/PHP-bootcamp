#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    do_op2.php                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 16:14:16 by tmentor           #+#    #+#              #
#    Updated: 2019/10/11 16:14:19 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

if ($argc != 2)
    exit("Incorrect Parameters\n");

$str = str_replace(" ", "", $argv[1]);
if (strpos($str, '-') !== false)
{
   $array = explode('-', $str);
   if (!is_numeric($array[0]) || !is_numeric($array[1]))
       exit("Syntax Error\n");
   echo ($array[0] - $array[1])."\n";
}
else if (strpos($str, '+') !== false)
{
   $array = explode('+', $str);
   if (!is_numeric($array[0]) || !is_numeric($array[1]))
       exit("Syntax Error\n");
   echo ($array[0] + $array[1])."\n";
}
else if (strpos($str, '*') !== false)
{
   $array = explode('*', $str);
   if (!is_numeric($array[0]) || !is_numeric($array[1]))
       exit("Syntax Error\n");
   echo ($array[0] * $array[1])."\n";
}
else if (strpos($str, '/') !== false)
{
   $array = explode('/', $str);
   if (!is_numeric($array[0]) || !is_numeric($array[1]))
       exit("Syntax Error\n");
   echo ($array[0] / $array[1])."\n";
}
else if (strpos($str, '%') !== false)
{
   $array = explode('%', $str);
   if (!is_numeric($array[0]) || !is_numeric($array[1]))
       exit("Syntax Error\n");
   echo ($array[0] % $array[1])."\n";
}
   else
       echo "Syntax Error"."\n";
?>