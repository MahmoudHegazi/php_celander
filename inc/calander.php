<?php

/* Advanced Function to return ontime day of month object */
function return_month_array($year, $month) {
 $data = array();
 $selectedyear = $year;
 $selectedmonth = $month;
 $days_total=cal_days_in_month(CAL_GREGORIAN,$selectedmonth,$selectedyear);

 $data['month'] = $month;
 $data['year'] = $year;
 $data['totaldays'] = $days_total;
 $data['days'] = array();

 $week = 1;
 $jd_first = gregoriantojd($selectedmonth,1,$selectedyear);
 $first_day_on_week = jddayofweek($jd_first,1);
 for ($d=1; $d <= $days_total; $d++){
  $jd=gregoriantojd($selectedmonth,$d,$selectedyear);
  $dayname = jddayofweek($jd,1);
  $day_date = $selectedmonth . '-' . $d . '-' . $selectedyear;
  $daynumber = $d;

  if ($d != 1 && $dayname == $first_day_on_week) {
     $week += 1;
  }
  $dayarray = array();
  // dayname
  $dayarray['dayname'] = strtolower($dayname);
  // daydate
  $dayarray['daydate'] = $day_date;
  // dayweek
  $dayarray['dayweek'] = $week;
  // daynumber
  $dayarray['daynum'] = $daynumber;

  array_push($data['days'], $dayarray);
 }

  return $data;


}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$req_data = file_get_contents('php://input');
$php_data = json_decode($req_data, true);
$req_month = $php_data['month'];
$req_year = $php_data['year'];
$month_array = return_month_array($req_year, $req_month);
$response = array();
$response['code'] = 200;
$response['data'] = $month_array;


print_r(json_encode($response));
die();

};
