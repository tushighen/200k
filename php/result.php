<?php
$aa = $_SESSION['mate']; //f7
$ab = $_SESSION['allSquare']; //c8
$ac = $_SESSION['pplNum']; //c9
$ad = $_SESSION['allBuild']; //c7
$ae = $_SESSION['neededEner']; //c22
$af = $_SESSION['yesNo']; //c23
$ext1;
$ext2 = "USD";
$ext3;
$ext4;
$ext5;
$ext6;
$ext7;


$a;
$a1 = $_SESSION['neededPwr']; //c27
$b;
$b1 = $_SESSION['heatPumpCost']; //e28
$c;
$c1 = $_SESSION['neededHoleNum']; //c29
$d;
$d1 = $_SESSION['holeTotalCostUsd']; //e30
$e;
$e1 = $_SESSION['techRoomEqUsd']; //e31
$f;
$f1 = $_SESSION['powerHotWater']; //c32
$g;
$g1 = $_SESSION['energyConsume']; //c33
$h;
$h1 = $_SESSION['hotWaterTotalAnnualUsd']; //e34
$i;
$i1 = $_SESSION['energyConsumption']; //c35

$a1=round($a1,1);
$b1=round($b1,1);
$c1=round($c1,1);
$d1=round($d1,1);
$e1=round($e1,1);
$g1=round($g1,1);
$f1=round($f1,1);
$h1=round($h1,1);
$i1=round($i1,1);




//$q;
//$q1 = $_SESSION[''];
if (!isset($_GET['lang'])) {
    $a = "Шаардагдах дулааны шахуургын хүчин чадал";
    $b = "CEPHEUS ARCTIC дулааны шахуургын үнэ";
    $c = "Шаардагдах цооногийн тоо /гүн 150 м, диаметр 120 мм/";
    $d = "Цооногийн нийт өртөг";
    $e = "Техникийн өрөөний тоноглол";
    $g = "Халуун усны хангамжид зарцуулах эрчим хүч";
    $f = "Халаалтын улиралд халаалтанд зарцуулах эрчим хүч";
    $h = "Халуун ус, халаалтын бүтэн жилийн зардал";
    $i = "Тодорхойлогдсон эрчим хүчний зарцуулалт";


// 3rd row begin here!
    $ext1 = "кВт";
    $ext3 = "ширхэг";
    $ext4 = "МВт/сард";
    $ext5 = "кВт/цаг";
    $ext6 = "долоо хоног";
    $ext7 = "жил";

// Translate Material Name
    if($aa == "tree")
        $aa = "Мод";
    elseif ($aa == "Warm Pol")
        $aa = "Дулаалсан полимер";
    elseif ($aa == "Block")
        $aa = "Блок";
    elseif ($aa == "beton erdest huvun")
        $aa = "Бетон эрдэст хөвөн";
    elseif ($aa == "toosgo")
        $aa = "Тоосго";
    else
        $aa = "Бетон";

} else {
    if ($_GET['lang'] == "ru") {
        $a = "Требуемая мощность теплового насоса";
        $b = "Цена теплового насоса CEPHEUS ARCTIC";
        $c = "Количество скважин на 150 м. диаметр 120 мм";
        $d = "Общая стоимость скважин";
        $e = "Оборудование котельной";
        $f = "Расходы по электроэнергии на ГВС";
        $g = "Расходы на отопление в сезон за месяц";
        $h = "Оплата за электроэнергию в год на ГВС и отопление";
        $i = "Номинальное электро потребление";



        $ext1 = "кВт";
        $ext3 = "шт";
        $ext4 = "МВт/месяц";
        $ext5 = "кВт/час";
        $ext6 = "недель";
        $ext7 = "лет";

// Translate Material Name
        if($aa == "tree")
            $aa = "Дерево";
        elseif ($aa == "Warm Pol")
            $aa = "Утеплен полимер";
        elseif ($aa == "Block")
            $aa = "Теплоблок";
        elseif ($aa == "beton erdest huvun")
            $aa = "Бетон минвата";
        elseif ($aa == "toosgo")
            $aa = "Кирпич";
        else
            $aa = "Бетон";
    } else {
        $a = "Required power of the heat pump";
        $b = "Price of reuired CEPHEUS ARCTIC heat pump";
        $c = "Required number of boreholes (ᴓ120mm, 150m deep)";
        $d = "Total cost of boreholes";
        $e = "Heating point installation ";
        $f = "Electricity consumption for hot water supply";
        $g = "Electricity consumption for heating in the season";
        $h = "Hot water and heating total cost";
        $i = "Nominal electricity consumption";


        $ext1 = "kWt";
        $ext3 = "pcs";
        $ext4 = "MWt/month";
        $ext5 = "kWt/h";
        $ext6 = "week(s)";
        $ext7 = "years";

// Translate Material Name
        if($aa == "tree")
            $aa = "Wood ";
        elseif ($aa == "Warm Pol")
            $aa = "";
        elseif ($aa == "Block")
            $aa = "";
        elseif ($aa == "beton erdest huvun")
            $aa = "";
        elseif ($aa == "toosgo")
            $aa = "";
        else
            $aa = "";
    }
}
if($af== 1) {

    echo "
<div class=\"uk-grid-small uk-child-width-1 - 4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6><i>$aa материалтай $ab м<sup>2</sup> $ac хүн амтай $ad барилгыг $ae &deg;C хэмд халаахад</i></h6>
</div>

</div>

<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
        $a
    </h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$a1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext1</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
$b
    </h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$b1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>

<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$c</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$c1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext3</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$d</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$d1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$e</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$e1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$f</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$f1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext4</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$g</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$g1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext4</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$h</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$h1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$i</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$i1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext5</h6>
</div>
</div>
";
}
else
    echo "
<div class=\"uk-grid-small uk-child-width-1 - 4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6><i>$aa материалтай $ab м<sup>2</sup> $ac хүн амтай $ad барилгыг $ae &deg;C хэмд халаахад</i></h6>
</div>

</div>

<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
        $a
    </h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$a1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext1</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
$b
    </h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$b1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>

<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$c</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$c1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext3</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$d</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$d1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$f</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$f1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext4</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$g</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$g1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext4</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$h</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$h1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$i</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$i1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext5</h6>
</div>
</div>

";
?>

