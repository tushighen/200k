<?php include('php/dbConnection.php'); ?>
<?php include('php/calculator.php'); ?>
<?php
//if (!isset($_SESSION))
//    echo '<script>window.location.replace("calculator.php");</script>';
//else {
//
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MONGOL TULSH</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300;subset=cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="css/uikit.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/mongol_tulsh.css" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
</head>
<body>
<?php
if (!isset($_GET['lang'])) {
    echo "<div class=\"row\" style='font-size: 16px'>
    <div class=\"col-6 col-md-2\"></div>
    <div class=\"col col-md-8\">
        <div>
            <div class=\"uk-text-center\">
                <img src=\"images/logo.png\" style=\"width: 600px; height: 170px\" class=\"uk-text-center\">
            </div>
        </div>
        <div>
        <p class='uk-text-bold'>________ оны _____ сарын _____&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;№	_______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Улаанбаатар хот</p>
        <div class=\"uk--center\">
            <h4 class=\"uk-text-bold\">
                Хүндэт Харилцагч Танаа,
            </h4>
        <text/div>
        <p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Монгол Түлш ХХК-нд хандсан Танд баярлалаа, танай объектын дулаан хангамжийн асуудлыг дэлгэрэнгүй хэлэлцхэд бид бэлэн. Ерөнхий төсвийн урьдчилсан тооцоололтой байх үүднээс бид Танд энэхүү захидлыг илгэжж байна.</p>

        <p>Тооцоолол хийх үзүүлэлтүүд:</p>
        <ul>
            <li>Таны барилгын талбай			 м<sup>2</sup></li>
            <li>Оршин суугчдын тоо			______ хүн</li>
            <li>Төхөөрөмжийн хүчин чадал		______ кВт</li>
            <li>Хүйтний улиралд тасалгаан дотор байх ёстой хэм + 24&deg;С</li>
        </ul>
        <p>Энэ нөхцөлийг бүрдүүлэхийн тулд ____________$ үнэтэй дулааны насос шаардагдана, мөн 120 мм диаметртай 150м гүнтэй _______ цооног өрөмлөн гаргах ба энэ ажлын хөлс нь нийт ______________$ болно. Хэрэв тоноглогдсон узелийн өрөө байхгүй тохиолдолд ____________ $ тоноглол бүхий узелийг шинээр хийж гүйцэтгэнэ. Тоног төхөөрөмж угсралт суурилуулалтын хөлс _________$ байна. Бүх ажлыг бүрэн гүйцэтгэж дуусгахад нийт ________ өдөр шаардагдана.</p>

        <p class=\"uk-text-bold\">Бидний төхөөрөмжийг ашигласнаар Та халаалтын улиралд доорх ашиглалтын зардал төлнө:</p>
        <ul>
            <li>Эрчим хүчний тарифыг 1 кВт/ц нь таны оршин суугаа газарт 110₮ гэж тооцвол</li>
            <li>Манай санал болгосон төхөөрөмжийг ашигласнаар Та сард       ____________ төгрөгийн эрчим хүчний хэрэглээтэй байна.</li>
            <li>Халаалтанд цахилгаан тогоо ашигласнаар Та сард ____________ төгрөгийн эрчим хүчний хэрэглээтэй байна.</li>
        </ul>

        Манай санал болгож байгаа төхөөрөмжийг ашигласнаар Та зөвхөн ашиглалтын зардлаасаа жилд ___________ сая төгрөг хэмнэх тул газрын гүний халаалтын систем суурилуулахад зарцуулсан анхны хөрөнгө оруулалтаа Та _______ жилд нөхөн олох боломжтой.

        <p>Энэ саналыг дэлгэрүүлэн хэлэлцэж, Таны объектод тохируулан гүйцэтгэхэд бид бэлэн байна.</p>


        <p>
            Хүндэтгэсэн,<br><br>


        <blockquote>Гүйцэтгэх Захирал: 		<img src=\"images/signature.jpg\" alt=\"signDirec\" style=\"width:304px;height:228px;\"> 			М. Уламбат</blockquote>
        </p>
            <div class=\"uk-text-right\" style=\"color: grey\">
                ХОЛБОГДОХ ХАЯГ, УТАС<br>
                Хан-Уул дүүрэг, 11-р хороо<br>
                Зайсан тойруу, 201/1 байр<br>
                5-р давхар, 501 тоот<br>
                Утас: 77118878<br>
                Гар утас: 99041115
            </div>
        </div>
    </div>
    <div class=\"col-6 col-md-2\"></div>
</div>";
} else {
    if ($_GET['lang'] == "ru"){
        echo "<div class=\"row\" style='font-size: 16px'>
    <div class=\"col-6 col-md-2\"></div>
    <div class=\"col col-md-8\">
        <div>
            <div class=\"uk-text-center\">
                <img src=\"images/logo.png\" style=\"height: 70px\" class=\"uk-text-center\">
            </div>
        </div>
    <div>
    
        <p class='uk-text-bold'>________ год _____ месяц _____&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;№	_______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; г. Улаанбаатар</p>
        <div class=\"uk-text-center\">
            <h4 class=\"uk-text-bold\">
                Уважаемый Клиент,
            </h4>
        </div>
        <p>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;От лица компания Монгол Тулш хотел бы поблагодарить Вас за обращение в нашу компанию, мы готовы обсудить детали проекта по теплоснабжению Вашего объекта. В целях предварительного понимания бюджета высылаем Вам коммерческое предложение:
        </p>
        <p>Вводные данные следующие:
        </p>
        <ul>
            <li>Площадь здания 				______ м<sup>2</sup></li>
            <li>Количество проживающих			______ человек</li>
            <li>Мощность установки 			______ кВт</li>
            <li>Требуемая температура в помещении зимой + 24 &deg;С</li>
        </ul>
       <p>Для решения данной задачи потребуется тепловой насос, стоимость которого ____________$, так же нужно сделать _______ скважин по 150 метров диаметром 120 мм стоимость этих работ ______________$. Если у Вас нет еще оборудованной котельной, то ее монтаж под «ключ» выйдет ____________ $. Стоимость работы по проекту составит _________$. На реализацию всего проекта потребуется ________ дней.</p>

        <p class=\"uk-text-bold\">Эксплуатационные расходы зимой от использования нашей установке будут следующие:</p>
        <ul>
            <li>Если стоимость 1 кВт/ ч электроэнергии в Вашем регионе 110 тугрика</li>
            <li>Соответственно оплата за отопление в месяц от эксплуатации     CEPHEUS ____________ARCTIC      ____________ тугриков в месяц</li>
            <li>При отоплении от электро-бойлера расходы будут ____________ тугриков в месяц</li>
        </ul>

        Ваша экономия от эксплуатации системы в год по сравнению с отоплением от электро-бойлера составит ___________ млн. тугриков, значит срок окупаемости Ваших затрат составит _______ (года) лет.

        <p>Готовы обсудить с Вами детали, цены и сроки.</p>


        <p>
          


        <blockquote>Исполнительный директор: <img src=\"images/signature.jpg\" alt=\"signDirec\" style=\"width:304px;height:228px;\"> 					Уламбат М.</blockquote>
        </p>
            <div class=\"uk-text-right\" style=\"color: grey\">
                <b>АДДРЕСС И КОНТАКТНЫЕ ДЕТАЛИ</b><br>
                Хан-Уул район, 11-ый участок<br>
                Зайсан тойруу, здание 201/1<br>
                2-ой этаж, №201  <br>
                Телефон: 77118878<br>
                Мобильный: 99041115
            </div>
        </div>
    </div>
    <div class=\"col-6 col-md-2\"></div>
</div>";
    } else {
        echo "<div class=\"row\" style='font-size: 16px'>
    <div class=\"col-6 col-md-2\"></div>
    <div class=\"col col-md-8\">
        <div>
            <div class=\"uk-text-center\">
                <img src=\"images/logo.png\" style=\"height: 70px\" class=\"uk-text-center\">
            </div>
        </div>
        <div>
            <p class=\"uk-text-bold\">_______ year _____ month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#_______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ulaanbaatar</p>
            <div class=\"uk-text-center\">
                <h4 class='uk-text-bold'>
                    Dear Customer,
                </h4>
            </div>        
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On behalf of the company, Mongol Tulsh would like to thank you for contacting our company, we are ready to discuss the details of the project for the heat supply of your house. For the preliminary understanding of the budget we send you a commercial offer.</p>
    
            <p class='uk-text-bold'>The input data is as follows:</p>
            <ul>
                <li>Building area 				______ <sup>2</sup></li>
                <li>Number of people living			 ______ person</li>
                <li>Required power 			______ kW</li>
                <li>Required room temperature in winter + 24&deg;С</li>
            </ul>
            <p>To solve this task, you need a heat pump, the cost of which is ____________ $, you also need to make _______ doreholes of 150 meters deep and diameter 120 mm cost of these works ______________ $. If you do not have an equipped boiler room (steamshop), then its installation under the \"key\" will come out ____________ $. The working on the project is _________ $. The welling of the project will take ________ days to complete.</p>
    
            <p class=\"uk-text-bold\">Operating costs in the winter from using our installation will be as follows:</p>
            <ul>
                <li>If the cost of 1 kWh of electricity in your region is 110 Tugrik</li>
                <li>Accordingly, payment for heating per month from the operation of 
CEPHEUS _____ARCTIC ____________ tugrik per month</li>
                <li>When heating from an electric boiler costs will be      ____________ tugrik per month</li>
            </ul>
    
            Your savings from operating the system a year compared to heating from an electric boiler will be ___________ million tugriks, which means that the payback period of your costs will be _______ years.
    
            <p>Are ready to discuss with you the details, prices and terms.</p>
    
    
            <p>
                
    
    
            <blockquote>Executive Director: <img src=\"images/signature.jpg\" alt=\"signDirec\" style=\"width:304px;height:228px;\"> 					Ulambat. M</blockquote>
            </p>
                <div class=\"uk-text-right\" style=\"color: grey\">
                    <b>ADDRESS AND CONTACT DETAILS</b><br>
                    Room 201, 2nd floor<br>
                    Bldng. 201/1, Zaisan Toiruu<br>
                    11th khoroo, Khan Uul district <br>
                    Phone: 77118878<br>
                    Mobile: 99110725

    
            </div>
        </div>
    </div>
    <div class=\"col-6 col-md-2\"></div>
</div>";
    }
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>