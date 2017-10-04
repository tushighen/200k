<?php
if (isset($_POST['calcForm'])) {
    echo "
<thead>
    <tr>
        <th>Предложение</th>
        <th></th>
        <th>Единицы измерения</th>
        <th></th>
        <th></th>
    </tr>
</thead>
<tbody>
<tr>
    <td>Шаардагдах дулааны шахуургын хүчин чадал</td>
    <td>$neededPwr</td>
    <td>кВт</td>
</tr>
<tr>
    <td>CEPHEUS ARCTIC дулааны шахуургын үнэ</td>
    <td>$heatPumpCostMNT</td>
    <td>сая төгрөг</td>
    <td>$heatPumpCost</td>
    <td>USD</td>
</tr>
<tr>
    <td>Шаардагдах цооногийн тоо /гүн 150 м, диаметр 120 мм</td>
    <td>$neededHoleNum</td>
    <td>ш</td>
</tr>
<tr>
    <td>Цооногийн нийт өртөг</td>
    <td>$holeTotalCostMnt</td>
    <td>сая төгрөг</td>
    <td>$holeTotalCostUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Техникийн өрөөний тоноглол</td>
    <td>$techRoomEqMnt</td>
    <td>кВт</td>
    <td>$techRoomEqUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Халуун усны хангамжид зарцуулах эрчим хүч</td>
    <td>$powerHotWater</td>
    <td>МВт/сард</td>
    <td>Насосны хүчин чадал</td>
</tr>
<tr>
    <td>Халаалтын улиралд халаалтанд зарцуулах эрчим хүч</td>
    <td>$energyConsume</td>
    <td>МВт/сард</td>
    <td>COP</td>
    <td>$constNasosPow</td>
</tr>
<tr>
    <td>Халуун ус, халаалтын бүтэн жилийн зардал</td>
    <td>$hotWaterTotalAnnualMnt</td>
    <td>сая төгрөг</td>
    <td>$hotWaterTotalAnnualUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Тодорхойлогдсон эрчим хүчний зарцуулалт</td>
    <td>$energyConsumption</td>
    <td>кВт/цаг</td>
</tr>
<tr>
    <td>Время работы в сутки</td>
    <td>12</td>
    <td>часов</td>
</tr>
<tr>
    <td>Иж бүрдлийн үнэ</td>
    <td>$setCostMnt</td>
    <td>сая төгрөг</td>
    <td>$setCostUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Суурилуулалтын ажлын хөлс</td>
    <td>$installFeeMnt</td>
    <td>сая төгрөг</td>
    <td>$installFeeUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Нийт</td>
    <td>$totalMnt</td>
    <td>сая төгрөг</td>
    <td>$totalUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Суурилуулалтын нийт хугацаа</td>
    <td>$getInstallTotalTime</td>
    <td>долоо хоног</td>
</tr>
<tr>
    <td>Объектод холбогдсон байх ёстой эрчим хүч</td>
    <td>$connectedPwrObj1</td>
    <td>$energyConsumption</td>
    <td>кВт</td>
</tr>
<tr>
    <td>Гарантийный срок 2 года</td>
</tr>
<tr>
    <td>Первый год сервиса бесплатно</td>
</tr>
<tr>
    <td>Со второго года сервис в год</td>
    <td>$serviceFromSecYearUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>ТО каждые 5 лет</td>
    <td>$thenEveryFiveYearsUsd</td>
    <td>USD</td>
</tr>
<tr>
    <td>Расходы отопления при подключении к ТЭЦ год</td>
    <td>$dcsCostAnnual</td>
    <td>млн. тугриков</td>
</tr>
<tr>
    <td>Расходы на отопление углем год</td>
    <td>$coalCostAnnual</td>
    <td>млн. тугриков</td>
    <td>$coalSizeMonth</td>
    <td>тонн в месяц + кочегары</td>
</tr>
<tr>
    <td>Цахилгаан халаалтын жилийн зардал</td>
    <td>$annualCostOfHeat</td>
    <td>сая төгрөг</td>
</tr>
<tr>
    <td>Гүний дулааны халаалтын жилийн зардал</td>
    <td>$annualTerminalOfHeat</td>
    <td>сая төгрөг</td>
</tr>
<tr>
    <td>Эдийн засгийн бодит хэмнэлт 1 жилд</td>
    <td>$savingEco</td>
    <td>сая төгрөг</td>
</tr>
<tr>
    <td>Хөрөнгө оруулалт эргэн төлөгдөх хугацаа</td>
    <td>$repayment</td>
    <td>жил</td>
</tr>
</tbody>
    
    ";
}
?>