<?php

// time diff for single day
$star_time = "09:40 AM";
$end_time = "04:30 PM";

$star_time = "2000-02-02 " . $star_time;
$end_time  = "2000-02-02 " . $end_time;

$d1 = new DateTime($end_time);
$d2 = new DateTime($star_time);
$interval = $d1->diff($d2);

$res = $interval->h . " hours " . $interval->i . " minutes";

echo $res;

// date and time diff
$date1 = date_create("2012-01-03 18:13:00");
$date2 = date_create("2015-01-03 1:13:00");
$diff = date_diff($date1, $date2);
echo $diff->format("%y-%m-%d %h:%m:%s ");

// add time date with time date
$Date1 = '2022-09-15 09:00:00';
$Date2 = date('Y-m-d H:m:s', strtotime($Date1 . " + 1 day 5 hours"));
echo $Date2;
