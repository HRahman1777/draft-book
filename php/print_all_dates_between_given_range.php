<?php
$list=array();

$start_date = "2022-8-1";
$end_date = "2022-10-10";

$period = new DatePeriod(
     new DateTime($start_date),
     new DateInterval('P1D'),
     new DateTime($end_date)
);

foreach ($period as $key => $value) {
    $temp = $value->format('Y-m-d');
    $list[] = $temp;
}

echo "<pre>";
print_r($list);
echo "</pre>";

?>