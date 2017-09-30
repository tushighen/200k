<?php
$ext1;
$ext2 = "USD";
$ext3;
$ext4;
$ext5;
$ext6;
$ext7;

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

if (!isset($_GET['lang'])) {

    $j = "Иж бүрдлийн үнэ";
    $k = "Суурилуулалтын ажлын хөлс";
    $l = "Нийт";
    $m = "Суурилуулалтын нийт хугацаа";
    $n = "Объектод холбогдсон байх ёстой эрчим хүч";


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


        $j = "Стоимость системы";
        $k = "Работа по установке системы на объекте";
        $l = "Итого";
        $m = "Срок монтажа котельной";
        $n = "Требуется подключение электро снабжения ";



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

        $j = "Whole system price";
        $k = "Installation and setup cost";
        $l = "TOTAL";
        $m = "Timeframes";
        $n = "Power reqquirements for the property";

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
echo "
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>
        $j
    </h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$j1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$k</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$k1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>

<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$l</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$l1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext2</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$m</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$m1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$ext6</h6>
</div>
</div>
<div class=\"uk-grid-small uk-child-width-1-4@s uk-flex-center \" uk-grid>
<div class=\"uk-width-expand@m\">
    <h6>$n</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$n1</h6>
</div>
<div class=\"uk-width-1-6@m\">
    <h6>$n2</h6>
</div>
</div>
";
?>