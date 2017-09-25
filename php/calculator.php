<?php
$constOutWarm = 0.0366; //c12
$constOnePersonPerWarm = 0.212; //c13
$constHotWaterPower = 0.0467; //c14
$constColdWaterFromTheEarth = 5; //c16
$constDHWWater = 50; //c17

$constNasosPow = 3.5; //f33

if (isset($_POST['calcForm'])) {

    $allBuild = $_POST['allBuild']; //c7
    $allSquare = $_POST['allSquare']; //c8
    $pplNum = $_POST['pplNum']; //c9
    $neededEner = $_POST['neededEner']; //c22
    $perPower = $_POST['perPower']; //c23
    $usdValue = $_POST['usdValue']; //e4

    $dayWorkTime = 12; //36

    $e20 = $allSquare * $constOutWarm; // Семья из 3 чел. в день 237 л. e20

    $type = $_POST['type']; //f7
    $getCoff = mysql_query("select coefficient as coff from tableMaterial WHERE id=$type");
    $row = mysql_fetch_assoc($getCoff);
    $coff = $row['coff'];

    $warmPerMonth = $e20 / 0.8598 * $coff; //c20
    $spentWaterInaMonth = $pplNum * 31 * 79;  //c18

    $e19 = $spentWaterInaMonth / 1000 * $constHotWaterPower; // Семья из 3 чел. в день 237 л. e19

    $mvtPerMonth = $e19 * 1.163; //c19

    $enEv = $warmPerMonth / 31 / 24 * 1000 * (1 + $allBuild / 150) + $mvtPerMonth / 31 / 24 * 1000; //c15
    $nasosTotCosMonth = $enEv / 20 * 24 * 31 / 1000 + $enEv / 40 * $dayWorkTime * 31 / 1000; //c21
    $enEv2 = (integer)$enEv;
    $enEv2_1 = round($enEv2, -1);
    if ($enEv2_1 > $enEv2)
        $enEv2_1 -= 10;

    $getPwr = mysql_query("select hpgkw as hp from tableNumbers WHERE hpgkw = $enEv2_1");
    $row = mysql_fetch_assoc($getPwr);
    $neededPwr = $row['hp']; //c27

    $getHeatPumpCost = mysql_query("select price as price from tableNumbers WHERE Hpgkw = '$neededPwr'");
    $row = mysql_fetch_assoc($getHeatPumpCost);
    $heatPumpCost = $row['price'];  //e28

    $heatPumpCostMNT = $heatPumpCost*$usdValue/1000000; //c28

    $getNeededHoleNum = mysql_query("select pcsBorHole as hole from tableNumbers WHERE Hpgkw = '$neededPwr'");
    $row = mysql_fetch_assoc($getNeededHoleNum);
    $neededHoleNum = $row['hole']; //c29

    $holeTotalCostUsd = $neededHoleNum * 7000; //e30

    $holeTotalCostMnt = $holeTotalCostUsd * $usdValue / 1000000; //c30

    $getTechRoomEq = mysql_query("select boilerRoom as boil from tableNumbers WHERE Hpgkw = '$neededPwr'");
    $row = mysql_fetch_assoc($getTechRoomEq);
    $techRoomEqUsd = $row['boil']; //e31

    $techRoomEqMnt = $techRoomEqUsd * $usdValue / 1000000; //c31

    

    header("Location: 200k.php?selected=$type&hotwater=$techRoomEqMnt");
}
?>