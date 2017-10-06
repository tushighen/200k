<?php
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM tableResult1 WHERE id = $id");
$row = mysql_fetch_object($sql);

//include ('php\dbconnection.php');
use PhpOffice\PhpWord\Style\Paragraph;
use PhpOffice\PhpWord\Style\Font;
require_once 'vendor2/autoload.php';
//require_once '.
// Creating the new document...

$phpWord = new \PhpOffice\PhpWord\PhpWord();


$section = $phpWord->addSection();

$header = $section->createHeader();
$header->addImage('images/logo.png');

$section_style = $section->getStyle();
$position =
    $section_style->getPageSizeW()
    - $section_style->getMarginRight()
    - $section_style->getMarginLeft();
$phpWord->addParagraphStyle("leftRight", array("tabs" => array(
    new \PhpOffice\PhpWord\Style\Tab("right", $position)),
    'space' => array('line' => 180)
));
$sql = mysql_query("SELECT * FROM tableResult1 WHERE id = $id");
$row1 = mysql_fetch_object($sql);
$sql = mysql_query("SELECT * FROM tableResult3 WHERE id = $id");
$row3 = mysql_fetch_object($sql);
$sql = mysql_query("SELECT * FROM tableResult2 WHERE id = $id");
$row2 = mysql_fetch_object($sql);

if (!isset($_GET['lang'])) {


    $section->addText(
        date("Y") . "  оны  " . date("m") . "  сарын  " . date("d") . "  № " . $row->id . "\tУлаанбаатар",
        array('bold' => true, 'name' => 'Times New Roman', 'size' => 11), "leftRight"
    );
    $section->addTextBreak(1);
    $section->addText(
        '
                                           Хүндэт Харилцагч Танаа,
',
        array('bold' => true, 'name' => 'Arial', 'size' => 12)
    );
    $section->addText(
        '            Монгол Түлш ХХК-нд хандсан Танд баярлалаа, танай объектын дулаан хангамжийн асуудлыг дэлгэрэнгүй хэлэлцхэд бид бэлэн. Ерөнхий төсвийн урьдчилсан тооцоололтой байх үүднээс бид Танд энэхүү захидлыг илгэжж байна.'
    );
   // $section->addTextBreak(1);
    $section->addText(
        '                  Тооцоолол хийх үзүүлэлтүүд:',array('bold'=>True)
    );
    $section->addListItem('Таны барилгын талбай          ' . $row->allSquare . ' m2', 1);
    $section->addListItem('Оршин суугчдын тоо              ' . $row->pplNum . ' хүн', 1);
    $section->addListItem('Шаардагдах дулааны шахуургын хүчин чадал              ' . $row->neededPwr . ' кВт', 1);
    $section->addListItem('Хүйтний улиралд тасалгаан дотор байх ёстой хэм + 24С', 1);



    $section->addText('            Энэ нөхцөлийг бүрдүүлэхийн тулд ' . $row->heatPumpCost . '$ үнэтэй дулааны насос шаардагдана , '
        . 'мөн 120 мм диаметртай 150м гүнтэй ' . $row->neededHoleNum . ' цооног өрөмлөн гаргах ба энэ ажлын хөлс нь нийт '
        . '' . $row->holeTotalCostUsd . ' $ болно. Хэрэв тоноглогдсон узелийн өрөө байхгүй тохиолдолд ' . $row->techRoomEqUsd . ' $ '
        . 'тоноглол бүхий узелийг шинээр хийж гүйцэтгэнэ. Тоног төхөөрөмж угсралт суурилуулалтын хөлс '
        . '' . $row2->installFeeUsd . ' $ байна. Бүх ажлыг бүрэн гүйцэтгэж дуусгахад нийт ' . $row2->getInstallTotalTime . ' өдөр шаардагдана.',
        array('align' => 'center')
    );
    $section->addText(
        'Бидний төхөөрөмжийг ашигласнаар Та халаалтын улиралд доорх ашиглалтын зардал төлнө:',
        array('bold' => true)
    );



    $section->addListItem('Эрчим хүчний тарифыг 1 кВт/ц нь таны оршин суугаа газарт ' . $row->perPower . ' ₮ гэж тооцвол', 1);
    $section->addListItem('Манай санал болгосон төхөөрөмжийг ашигласнаар Та сард ' . round($row->powerHotWater, 2) . ' сая төгрөгийн эрчим хүчний хэрэглээтэй байна.', 1);
    $section->addListItem('Халаалтанд цахилгаан тогоо ашигласнаар Та сард ' . round($row->energyConsume, 2) . ' сая төгрөгийн эрчим хүчний хэрэглээтэй байна.', 1);

//$savingMNT = ($row3->savingEcoUsd)*2450/1000000;
//$total = ($row2->totalUsd)*2450/1000000;

    $section->addText(
        'Манай санал болгож байгаа төхөөрөмжийг ашигласнаар Та зөвхөн ашиглалтын зардлаасаа жилд ' . $row3->savingEcoUsd . ' $ хэмнэх тул газрын гүний халаалтын систем суурилуулахад зарцуулсан '
        . $row2->totalUsd . ' $ анхны хөрөнгө оруулалтаа Та ' . round($row3->repayment, 1) . ' жилд нөхөн олох боломжтой.'
    );
    $section->addTextBreak(1);
    $section->addText(
        'Энэ саналыг дэлгэрүүлэн хэлэлцэж, Таны объектод тохируулан гүйцэтгэхэд бид бэлэн байна'
    );
    //$section->addTextBreak(1);
    $section->addText('                   Хүндэтгэсэн, ');
    $imageStyle = array(
        'wrappingStyle' => 'inline',
        /* 'positioning' => 'absolute',
         'posHorizontalRel' => 'margin',
         'posVerticalRel' => 'line',*/
        'alignment'=> \PhpOffice\PhpWord\SimpleType\Jc::CENTER,
    );

    //$section->addText("                        Executive Director:"."\tUlambat. M",array(),"leftRight");
    $section->addImage("images/sign.jpg",$imageStyle);

//$paragraphOptions1 = array('space' => array('line' => 200));
    $footer = $section->addFooter();
    $fontOpt = array('name' => 'Times New Roman', 'bold' => True, 'color' => '000000');

    $footer->addText("\tХОЛБОГДОХ ХАЯГ, УТАС", $fontOpt, "leftRight");
    $footer->addText("\tХан-Уул дүүрэг, 11-р хороо", $fontOpt, "leftRight");
    $footer->addText("\tЗайсан тойруу, 201/1 байр", $fontOpt, "leftRight");
    $footer->addText("\tУтас: 77118878", $fontOpt, "leftRight");
    $footer->addText("\tГар утас: 99041115", $fontOpt, "leftRight");

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('Dear Customer Mongol tulsh.docx');


} else{
    if ($_GET['lang'] == "en") {

        $section->addText(
            date("Y") . "  year  " . date("m") . "  month  " . date("d") . "  # " . $row->id . "\tUlaanbaatar",
            array('bold' => true, 'name' => 'Times New Roman', 'size' => 11), "leftRight"
        );
        $section->addTextBreak(1);
        $section->addText(
            '
                                          
Dear Customer,

',
            array('bold' => true, 'name' => 'Arial', 'size' => 12)
        );
        $section->addText(
            '          z  On behalf of the company, Mongol Tulsh would like to thank you for contacting our company, we are ready to discuss the details of the project for the heat supply of your house. For the preliminary understanding of the budget we send you a commercial offer.'

        );
        $section->addTextBreak(1);
        $section->addText(
            '                  The input data is as follows:',array('bold'=>True)
        );
        $section->addListItem('Building area:                               ' . $row->allSquare . ' m2', 1);
        $section->addListItem('Number of people living:              ' . $row->pplNum . ' person', 1);
        $section->addListItem('Requared power:                         ' . $row->neededPwr . ' kW', 1);
        $section->addListItem('Required room temperature in winter '.$row->neededEner.'C + 24С', 1);



        $section->addText('            To solve this task, you need a heat pump, the cost of which is ' . $row->heatPumpCost . '$ , '
            . 'you also need to make ' . $row->neededHoleNum . ' doreholes of 150 meters deep and diameter 120 mm cost of these works '
            . '' . $row->holeTotalCostUsd . ' $. If you do not have an equipped boiler room (steamshop), then its installation under the "key" will come out ' . $row->techRoomEqUsd . ' $ '
            . 'The working on the project is '. '' . $row2->installFeeUsd . ' $. The welling of the project will take ' . $row2->getInstallTotalTime . ' days to complete.',
            array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH)
        );
        $section->addText(
            '                  Operating costs in the winter from using our installation will be as follows:',
            array('bold' => true)
        );



        $section->addListItem('If the cost of 1 kWh of electricity in your region is ' . $row->perPower . ' Tugrik', 1);
        $section->addListItem('Accordingly, payment for heating per month from the operation of CEPHEUS ARCTIC
 ' . round($row->powerHotWater, 2) . ' tugrik per month.', 1);
        $section->addListItem('When heating from an electric boiler costs will be ' . round($row->energyConsume, 2) . ' million tugrik per month.', 1);

//$savingMNT = ($row3->savingEcoUsd)*2450/1000000;
//$total = ($row2->totalUsd)*2450/1000000;
        // $text=array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH);

        $section->addText(
            'Your savings from operating the system a year compared to heating from an electric boiler will be  ' . $row3->savingEcoUsd . ' $ which means that the payback period of your costs will be '
            //. $row2->totalUsd . ' $ анхны хөрөнгө оруулалтаа Та '
            . round($row3->repayment, 1) . ' years. '

        );

        $section->addText(
            '                  Are ready to discuss with you the details, prices and terms.',array('bold'=>True)
        );
        // $section->addText('Хүндэтгэсэн, ');//

        $imageStyle = array(
            'wrappingStyle' => 'inline',
            /* 'positioning' => 'absolute',
             'posHorizontalRel' => 'margin',
             'posVerticalRel' => 'line',*/
            'alignment'=> \PhpOffice\PhpWord\SimpleType\Jc::CENTER,
        );

        //$section->addText("                        Executive Director:"."\tUlambat. M",array(),"leftRight");
        $section->addImage("images/signEN.jph",$imageStyle);
        $section->addText('                  P.S. I wish prosperity to your business and career.');
//$paragraphOptions1 = array('space' => array('line' => 200));
        $fontOpt = array('name' => 'Times New Roman', 'bold' => True, 'color' => '000000');

        $footer = $section->addFooter();
        $footer->addText("\tADDRESS AND CONTACT DETAILS", $fontOpt, "leftRight");
        $footer->addText("\tRoom 201, 2nd floor", $fontOpt, "leftRight");
        $footer->addText("\tBldng. 201/1, Zaisan Toiruu", $fontOpt, "leftRight");
        $footer->addText("\t11th khoroo, Khan Uul district", $fontOpt, "leftRight");
        $footer->addText("\tPhone: 77118878", $fontOpt, "leftRight");
        $footer->addText("\tMobile: 99110725", $fontOpt, "leftRight");

// Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Dear Customer Mongol tulsh.docx');
    } else{
        $section->addText(
            date("Y") . "  год  " . date("m") . "  месяц  " . date("d") . "  № " . $row->id . "\tг. Улаанбаатар",
            array('bold' => true, 'name' => 'Times New Roman', 'size' => 11), "leftRight"
        );
        $section->addTextBreak(1);
        $section->addText(
            '
                                          
Уважаемый Клиент,

',
            array('bold' => true, 'name' => 'Arial', 'size' => 12)
        );
        $section->addText(
            '          От лица компания Монгол Тулш хотел бы поблагодарить Вас за обращение в нашу компанию, мы готовы обсудить детали проекта по теплоснабжению Вашего объекта. В целях предварительного понимания бюджета высылаем Вам коммерческое предложение:'

        );
        $section->addTextBreak(1);
        $section->addText(
            '                  Вводные данные следующие:',array('bold'=>True)
        );
        $section->addListItem('Площадь здания                                ' . $row->allSquare . ' m2', 1);
        $section->addListItem('Количество проживающих              ' . $row->pplNum . ' person', 1);
        $section->addListItem('Мощность установки                          ' . $row->neededPwr . ' kW', 1);
        $section->addListItem('Требуемая температура в помещении зимой '.$row->neededEner.'C + 24С', 1);



        $section->addText('            Для решения данной задачи потребуется тепловой насос, стоимость которого ' . $row->heatPumpCost . '$, '
            . 'так же нужно сделать ' . $row->neededHoleNum . ' скважин по 150 метров диаметром 120 мм стоимость этих работ '
            . '' . $row->holeTotalCostUsd . ' $. Если у Вас нет еще оборудованной котельной, то ее монтаж под «ключ» выйдет ' . $row->techRoomEqUsd . ' $. '
            . 'Стоимость работы по проекту составит '. '' . $row2->installFeeUsd . ' $. На реализацию всего проекта потребуется ' . $row2->getInstallTotalTime . ' дней.',
            array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH)
        );
        $section->addText(
            'Эксплуатационные расходы зимой от использования нашей установке будут следующие:',
            array('bold' => true)
        );



        $section->addListItem('Если стоимость 1 кВт/ ч электроэнергии в Вашем регионе ' . $row->perPower . ' тугрика', 1);
        $section->addListItem('Соответственно оплата за отопление в месяц от эксплуатации CEPHEUS ARCTIC
 ' . round($row->powerHotWater, 2) . ' тугриков в месяц.', 1);
        $section->addListItem('При отоплении от электро-бойлера расходы будут ' . round($row->energyConsume, 2) . ' тугриков в месяц.', 1);

//$savingMNT = ($row3->savingEcoUsd)*2450/1000000;
//$total = ($row2->totalUsd)*2450/1000000;
        // $text=array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::BOTH);

        $section->addText(
            'Ваша экономия от эксплуатации системы в год по сравнению с отоплением от электро-бойлера составит ' . $row3->savingEcoUsd . ' $, значит срок окупаемости Ваших затрат составит'
            //. $row2->totalUsd . ' $ анхны хөрөнгө оруулалтаа Та '
            . round($row3->repayment, 1) . ' (года) лет. '

        );

        $section->addText(
            '                  Готовы обсудить с Вами детали, цены и сроки.',array('bold'=>True)
        );
        // $section->addText('Хүндэтгэсэн, ');//

        $imageStyle = array(
            'wrappingStyle' => 'inline',
            /* 'positioning' => 'absolute',
             'posHorizontalRel' => 'margin',
             'posVerticalRel' => 'line',*/
            'alignment'=> \PhpOffice\PhpWord\SimpleType\Jc::CENTER,
        );

        //$section->addText("                        Executive Director:"."\tUlambat. M",array(),"leftRight");
        $section->addImage("images/signRU.jpg",$imageStyle);
        $section->addText('                  P.S. Желаю процветания Вашему бизнесу и карьере.');
//$paragraphOptions1 = array('space' => array('line' => 200));
        $fontOpt = array('name' => 'Times New Roman', 'bold' => True, 'color' => 'ccd1e3');

        $footer = $section->addFooter();
        $footer->addText("\tАДДРЕСС И КОНТАКТНЫЕ ДЕТАЛИ", $fontOpt, "leftRight");
        $footer->addText("\tХан-Уул район, 11-ый участок", $fontOpt, "leftRight");
        $footer->addText("\t2-ой этаж, №201", $fontOpt, "leftRight");
        $footer->addText("\tТелефон: 77118878", $fontOpt, "leftRight");
        $footer->addText("\tМобильный: 99041115", $fontOpt, "leftRight");
//        $section->addText("\tMobile: 99110725", $fontOpt, "leftRight");

// Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Dear Customer Mongol tulsh.docx');

    }
}