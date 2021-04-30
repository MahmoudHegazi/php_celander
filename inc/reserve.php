<?php

include '..\config.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['month'])) {
$requestedmonth = $_GET['month'];


$response = array();

$pdo = new PDO('mysql:host='. $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass);
$statement = $pdo->query("SELECT * FROM reservations");
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
if ($rows != false){
  $response['data'] = array();
  foreach($rows as $row) {

    $resrved_month =  explode("-",$row['day'])[0];
    if ($requestedmonth == $resrved_month) {
      array_push($response['data'], $row);
    }
  }
  $response['code'] = 200;
  print_r(json_encode($response));
  die();
} else {
  $response['code'] = 404;
  $response['data'] = array();
  print_r(json_encode($response));
  die();
};

};

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $link = new PDO('mysql:host='. $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass);
  $req_data = file_get_contents('php://input');
  $php_data = json_decode($req_data, true);
  $req_day = $php_data['rday'];
  $req_time = $php_data['rtime'];
  $statement = $link->prepare('INSERT INTO reservations (`day`, `time`) VALUES (:fday, :ftime)');
  $statement->execute([
    'fday' => $req_day,
    'ftime' => $req_time,
   ]);
   echo json_encode('successfully reserved at' . $req_day . ' ' . $req_time);
}


?>
