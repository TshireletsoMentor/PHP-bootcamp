#!/usr/bin/php
<?PHP
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    one_more_time.php                                  :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmentor <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/12 09:53:18 by tmentor           #+#    #+#              #
#    Updated: 2019/10/12 09:53:24 by tmentor          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

function month($month){

    if($month == "janvier" || $month == "Janvier")
        $month = "january";
    elseif($month == "février" || $month == "Février")
        $month = "febuary";
    elseif($month == "mars" || $month == "Mars")
        $month = "march";
    elseif($month == "avril" || $month == "Avril")
        $month = "april";
    elseif($month == "mai" || $month == "Mai")
        $month = "may";
    elseif($month == "juin" || $month == "Juin")
        $month = "june";
    elseif($month == "juillet" || $month == "Juillet")
        $month = "july";
    elseif($month == "aout" || $month == "Aout")
        $month = "august";
    elseif($month == "septembre" || $month == "Septembre")
        $month = "september";
    elseif($month == "octobre" || $month == "Octobre")
        $month = "october";
    elseif($month == "novembre" || $month == "Novembre")
        $month = "november";
    elseif($month == "décembre" || $month == "Décembre")
        $month = "december";
    else
        exit("Wrong Format\n");
    return ($month);

}

function day($day){

    if($day == "lundi" || $day == "Lundi")
        $day = "monday";
    elseif($day == "mardi" || $day == "Mardi")
        $day = "tuesday";
    elseif($month == "mercredi" || $month == "Mercredi")
        $month = "wednesday";
    elseif($month == "jeudi" || $month == "Jeudi")
        $month = "thursday";
    elseif($month == "vendredi" || $month == "Vendredi")
        $month = "friday";
    elseif($month == "samedi" || $month == "Samedi")
        $month = "saturday";
    elseif($month == "dimanche" || $month == "Dimanche")
        $month = "sunday";
    else
        exit("Wrong Format");
    return ($day);
}



if ($argc != 2)
    exit(0);

date_default_timezone_set('Europe/Paris');

$time = explode(' ', $argv[1]);

//check no.day and year are numeric
//check if no.day doesnt exceed 31 and year 4 digits 
if(sizeof($time) != 5)
    exit("Wrong Format\n");
elseif(!is_numeric($time[1]) || !is_numeric($time[3]))
    exit("wrong Format\n");
elseif(((int)$time[1] > 31) || ((int)$time[3] < 1000))
    exit("Worng Format\n");


$watch = explode(':', "$time[4]");
//check time is 2 digits and limits 24hrs:60min:60s
if(sizeof($watch) != 3)
    exit("Wrong Format\n");
elseif(!is_numeric($watch[0]) || !is_numeric($watch[1]) || !is_numeric($watch[2]))
    exit("Wrong Format\n");
elseif(strlen($watch[0]) != 2 || strlen($watch[1]) != 2 || strlen($watch[0]) != 2)
    exit("Wrong Format\n");
elseif((int)$watch[0] < 0 || (int)$watch[1] < 0 || (int)$watch[2] < 0)
    exit("Wrong Format\n");
elseif((int)$watch[0] > 23 || (int)$watch[1] > 59 || (int)$watch[2] > 59)
    exit("Wrong Format\n");

$time[0] = day($time[0]);
$time[2] = month($time[2]);

echo strtotime(implode(" ", $time))."\n";
?>