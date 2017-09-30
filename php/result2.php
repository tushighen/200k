<?php
$ext1;
$ext2 = "USD";
$ext3;
$ext4;
$ext5;
$ext6;
$ext7;

$o;
$o1 = $_SESSION['annualCostOfHeat']; //c51
$s;
$s1 = $_SESSION['annualTerminalOfHeatUsd']; //c52
$r;
$r1 = $_SESSION['savingEcoUsd']; //c53
$p;
$p1 = $_SESSION['repayment']; //c54

$o1=round($o1,1);
$s1=round($s1,1);
$r1=round($r1,1);
$p1=round($p1,1);


//$q;
//$q1 = $_SESSION[''];
if (!isset($_GET['lang'])) {

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
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
        $o
    </h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$o1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$s</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$s1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>

<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$r</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$r1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$p</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$p1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext7</h6>
</div>
</div>

";
?>

