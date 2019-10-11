#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    ssap.php                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 09:16:53 by tmentor           #+#    #+#              #
#    Updated: 2019/10/11 09:17:09 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
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