<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    ft_is_sort.php                                     :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 09:22:52 by tmentor           #+#    #+#              #
#    Updated: 2019/10/11 09:22:54 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
FUNCTION ft_is_sort($arr1){
    $arr2 = $arr1;
    sort($arr2);
    if (array_diff_assoc($arr1, $arr2) == null)
        return TRUE;
    else
        return FALSE;
}
?>