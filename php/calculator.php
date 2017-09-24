<?php
    $constOutWarm = 0.0366;
    $constOnePersonPerWarm = 0.212;
    $constHotWaterPower = 0.0467;
    $constColdWaterFromTheEarth = 5;
    $constDHWWater = 50;

    if (isset($_POST['calcForm'])) {
        $type = $_POST['type'];

        $allBuild = $_POST['allBuild'];
        $allSquare = $_POST['allSquare'];
        $pplNum = $_POST['pplNum'];
        $neededEner = $_POST['neededEner'];
        $perPower = $_POST['perPower'];

        /*echo $_GET['$type'];*/
    }
?>