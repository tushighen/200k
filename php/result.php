<?php
$aa = $_SESSION['type']; //f7
$ab = $_SESSION['allSquare']; //c8
$ac = $_SESSION['pplNum']; //c9
$ad = $_SESSION['allBuild']; //c7
$ae = $_SESSION['neededEner']; //c22
//$af = $_SESSION['']; //c23
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
$j;
$j1 = $_SESSION['setCostUsd']; //e39
$k;
$k1 = $_SESSION['installFeeUsd']; //e40
$l;
$l1 = $_SESSION['totalUsd']; //e41
$m;
$m1 = $_SESSION['getInstallTotalTime']; //c42
$n;
$n1 = $_SESSION['connectedPwrObj1']; //c43
$n2 = $_SESSION['connectedPwrObj2']; //e43
$o;
$o1 = $_SESSION['annualCostOfHeat']; //c51
$s;
$s1 = $_SESSION['annualTerminalOfHeatUsd']; //c52
$r;
$r1 = $_SESSION['savingEcoUsd']; //c53
$p;
$p1 = $_SESSION['repayment']; //c54
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
    $j = "Иж бүрдлийн үнэ";
    $k = "Суурилуулалтын ажлын хөлс";
    $l = "Нийт";
    $m = "Суурилуулалтын нийт хугацаа";
    $n = "Объектод холбогдсон байх ёстой эрчим хүч";
    $o = "Цахилгаан халаалтын жилийн зардал";
    $s = "Гүний дулааны халаалтын жилийн зардал";
    $r = "Эдийн засгийн бодит хэмнэлт 1 жилд";
    $p = "Хөрөнгө оруулалт эргэн төлөгдөх хугацаа";

// 3rd row begin here!
    $ext1 = "кВт";
    $ext3 = "ширхэг";
    $ext4 = "МВт/сард";
    $ext5 = "кВт/цаг";
    $ext6 = "долоо хоног";
    $ext7 = "жил";

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
        $j = "Стоимость системы";
        $k = "Работа по установке системы на объекте";
        $l = "Итого";
        $m = "Срок монтажа котельной";
        $n = "Требуется подключение электро снабжения ";
        $o = "Расходы на отоплении электробойлерами год";
        $s = "Расходы на GeoThermal год";
        $r = "Экономический эффект по сравнению с электрокотлом";
        $p = "Срок окупаемости системы по сравнению с электрокотлом";


        $ext1 = "кВт";
        $ext3 = "шт";
        $ext4 = "МВт/месяц";
        $ext5 = "кВт/час";
        $ext6 = "недель";
        $ext7 = "лет";
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
        $j = "Whole system price";
        $k = "Installation and setup cost";
        $l = "TOTAL";
        $m = "Timeframes";
        $n = "Power reqquirements for the property";
        $o = "Annual cost of electrical heating";
        $s = "Annual cost of geothermal heating";
        $r = "Tangible economy per year";
        $p = "Initial investment return in";

        $ext1 = "kWt";
        $ext3 = "pcs";
        $ext4 = "MWt/month";
        $ext5 = "kWt/h";
        $ext6 = "week(s)";
        $ext7 = "years";
    }
}

echo "
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center\">
<div class=\"uk-width-expand@m\">
    <h6>$aa</h6>
</div>
<div ></div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
        $aa
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
?>

