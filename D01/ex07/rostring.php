#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    rostring.php                                       :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 09:18:06 by tmentor           #+#    #+#              #
#    Updated: 2019/10/11 09:18:35 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
function ft_split($str){
    $input = preg_replace('/\s+/', ' ', $str);
    $value = explode(" ", $input);
    return ($value);
}
$arr = ft_split($argv[1]);
if($argc > 1){
    $first = $arr[0];
    unset($arr[0]);
    foreach($arr as $var)
    echo "$var ";
    echo "$first\n";
}
?>