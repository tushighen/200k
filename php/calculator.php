<?php
    $constOutWarm = 0.0366;
    $constOnePersonPerWarm = 0.212;
    $constHotWaterPower = 0.0467;
    $constColdWaterFromTheEarth = 5;
    $constDHWWater = 50;

    if (isset($_POST['calcForm'])) {

        $allBuild = $_POST['allBuild'];
        $allSquare = $_POST['allSquare'];
        $pplNum = $_POST['pplNum'];
        $neededEner = $_POST['neededEner'];
        $perPower = $_POST['perPower'];

        $dayWorkTime = 12;

        $e20 = $allSquare * $constOutWarm; // Семья из 3 чел. в день 237 л.

        $type = $_POST['type'];
        $getCoff = mysql_query("select coefficient as coff from tableMaterial WHERE id=$type");
        $row = mysql_fetch_assoc($getCoff);
        $coff = $row['coff'];

        $warmPerMonth = $e20 / 0.8598 * $coff;
        $spentWaterInaMonth = $pplNum * 31 * 79;

        $e19 = $spentWaterInaMonth / 1000 * $constHotWaterPower; // Семья из 3 чел. в день 237 л.

        $mvtPerMonth = $e19 * 1.163;

        $enEv = $warmPerMonth / 31 / 24 * 1000 * (1 + $allBuild / 150) + $mvtPerMonth / 31 /24 * 1000;
        $nasosTotCosMonth = $enEv / 20 * 24 * 31 / 1000 + $enEv / 40 * $dayWorkTime * 31 / 1000;

        header("Location: 200k.php?selected=$type&hotwater=$nasosTotCosMonth");
    }
?>