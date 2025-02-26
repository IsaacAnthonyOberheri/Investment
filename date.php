<?php
$day = date('d').'th';
$month = date('M');
$year = date('Y');
//echo $day .' '.$month.' '.$year .' '.date('h:i:sa').'<br>';

$date1 = $day .' '.$month.' '.$year; 

//echo $date1.'<br>';
$date=date_create($date1);

date_add($date,date_interval_create_from_date_string("1 days"));
$New_date = date_format($date,"d").'th ';
$New_date .= date_format($date, "M Y");

//echo $New_date;

?>