#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    another_world.php                                  :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/12 09:30:43 by tmentor           #+#    #+#              #
#    Updated: 2019/10/12 09:30:45 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
if($argc > 1){
    $str = preg_replace('/\t+/', ' ', $argv[1]);
    $str = trim(preg_replace('/\s+/', ' ', $str));
    echo "$str\n";
}

?>