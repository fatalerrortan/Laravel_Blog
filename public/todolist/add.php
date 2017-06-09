<?php
$test = $_POST['test'];
//echo 'it works for '. $test. ' !!!!';
//$to_return = json_encode(array($test, 'xulin', 'tan'));
//return $to_return;
echo $test;

function dbConnect(){

    $host_name = "db685411342.db.1and1.com";
    $database = "db685411342";
    $user_name = "dbo685411342";
    $password = "Testing73.";
    $connect = mysqli_connect($host_name, $user_name, $password, $database);

    if (mysqli_connect_errno()) {
        echo '<p>Verbindung zum MySQL Server fehlgeschlagen: ' . mysqli_connect_error() . '</p>';
    } else {
        echo '<p>Verbindung zum MySQL Server erfolgreich aufgebaut.</p>';
    }
}
