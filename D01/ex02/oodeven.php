#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    oodeven.php                                        :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/10 10:50:15 by tmentor           #+#    #+#              #
#    Updated: 2019/10/10 10:50:22 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

$input = fopen("php://stdin", "r");
while($input && !feof($input)){
    echo "Enter a number: ";
    $value = fgets($input);
    $value = trim($value, "\n");
    if(is_numeric($value)){
        if ($value % 2 == 0){
            echo "The number $value is even\n";
        }
        else{
            echo "The number $value is odd\n";
        }
    }
    else{
        echo "'$value' is not a number\n";
    }
}
fclose($input);
?>