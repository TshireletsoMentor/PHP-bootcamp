#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    do_op.php                                          :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 13:36:00 by tmentor           #+#    #+#              #
#    Updated: 2019/10/11 13:36:05 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
if($argc == 4){
    $arr = [];
    unset($argv[0]);
    foreach($argv as $var){
        $tmp = array_filter(explode(" ", $var));
        foreach($tmp as $word)
            $arr[] = $word;
    }
    if ($arr[1] == '+')
        $result = $arr[0] + $arr[2];
    elseif ($arr[1] == '-')
        $result = $arr[0] - $arr[2];
    elseif ($arr[1] == '*')
        $result = $arr[0] *  $arr[2];
    elseif ($arr[1] == '/' || $arr[1] == '%'){
        if($arr[2] == '0')
            exit("Incorrect Parameters\n");
        else{
            if($arr[1] == '*')
                $result = $arr[0] * $arr[2];
            elseif($arr[1] == '/')
                $result = $arr[0] / $arr[2];
            else
                $result = $arr[0] % $arr[2];
        }
    }
    else{
        exit("Incorrect Parameters\n");
    }
    echo "$result\n";
}
else{
    echo "Incorrect Parameters\n";
}
?>
