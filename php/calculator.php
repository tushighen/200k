<?php
    $constOutWarm = 0.0366;
    $constOnePersonPerWarm = 0.212;
    $constHotWaterPower = 0.0467;
    $constColdWaterFromTheEarth = 5;
    $constDHWWater = 50;

    if (isset($_POST['calcForm'])) {
        $type = $_POST['type'];
        echo $_GET['$type'];
    }
?>