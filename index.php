<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'StopWatch.php';
$stopWatch = new StopWatch();
$stopWatch->start();
$arrayNumberRandom = [];
for ($i = 0; $i < 10000; $i++) {
    array_push($arrayNumberRandom, random_int(0, 1000));
}
for ($i = 0; $i < count($arrayNumberRandom) - 1; $i++) {
    for ($j = $i + 1; $j < count($arrayNumberRandom); $j++) {
        if ($arrayNumberRandom[$j] < $arrayNumberRandom[$i]) {
            $tmp = $arrayNumberRandom[$i];
            $arrayNumberRandom[$i] = $arrayNumberRandom[$j];
            $arrayNumberRandom[$j] = $tmp;
        }
    }
}
$stopWatch->stop();
echo 'Thoi gian de thuc thi thuat toan sap xep lua chon (sap xep tang dan) cho 100,000 so la: ' . $stopWatch->getElapsedTime().' s';
?>
</body>
</html>