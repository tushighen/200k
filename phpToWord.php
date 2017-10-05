<?php
require_once 'vendor/autoload.php';
use PhpOffice\PhpWord\Style\Paragraph;
use PhpOffice\PhpWord\Style\Font;
//require_once '.
// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

$allBuild= 232;
$year= 2017;
$month= 10;
$day=6;
$no=1;

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

$section->addText(
    "____".$year."____оны____".$month."____сарын____".$day."____№____".$no."____\tУлаанбаатар",
    array('bold'=>true,'name'=>'Times New Roman','size'=>11),"leftRight"
);
$section->addText(
    '
                                           Хүндэт Харилцагч Танаа,
',
    array('bold'=>true,'name'=>'Arial','size'=>12)
);
$section->addText(
    '            Монгол Түлш ХХК-нд хандсан Танд баярлалаа, танай объектын дулаан хангамжийн асуудлыг дэлгэрэнгүй хэлэлцхэд бид бэлэн. Ерөнхий төсвийн урьдчилсан тооцоололтой байх үүднээс бид Танд энэхүү захидлыг илгэжж байна.'
);
$section->addTextBreak(1);
$section->addText(
  '                  Тооцоолол хийх үзүүлэлтүүд:'
);
$section->addListItem('Таны барилгын талбай			 '.$allBuild, 1);
$section->addListItem('Оршин суугчдын тоо			______ хүн', 1);
$section->addListItem('Хүйтний улиралд тасалгаан дотор байх ёстой хэм + 24С', 1);

$section->addText('            Энэ нөхцөлийг бүрдүүлэхийн тулд _____'.'_____$ үнэтэй дулааны насос шаардагдана , '
                        .'мөн 120 мм диаметртай 150м гүнтэй ___'.'___ цооног өрөмлөн гаргах ба энэ ажлын хөлс нь нийт '
                        .'______'.'______$ болно. Хэрэв тоноглогдсон узелийн өрөө байхгүй тохиолдолд _____'.'_____ $ '
                        .'тоноглол бүхий узелийг шинээр хийж гүйцэтгэнэ. Тоног төхөөрөмж угсралт суурилуулалтын хөлс'
                        .'____'.'____$ байна. Бүх ажлыг бүрэн гүйцэтгэж дуусгахад нийт ___'.'___ өдөр шаардагдана.',
    array( 'align' => 'center'  )
);
$section->addText(
    'Бидний төхөөрөмжийг ашигласнаар Та халаалтын улиралд доорх ашиглалтын зардал төлнө:',
    array('bold'=>true)
);
$section->addListItem('Эрчим хүчний тарифыг 1 кВт/ц нь таны оршин суугаа газарт 110₮ гэж тооцвол', 1);
$section->addListItem('Манай санал болгосон төхөөрөмжийг ашигласнаар Та сард       _____'.'_____ төгрөгийн эрчим хүчний хэрэглээтэй байна.', 1);
$section->addListItem('Халаалтанд цахилгаан тогоо ашигласнаар Та сард _____'.'_____ төгрөгийн эрчим хүчний хэрэглээтэй байна.', 1);

$section->addText(
    'Манай санал болгож байгаа төхөөрөмжийг ашигласнаар Та зөвхөн ашиглалтын зардлаасаа жилд_____'.'_____ 
    сая төгрөг хэмнэх тул газрын гүний халаалтын систем суурилуулахад зарцуулсан'
    .'анхны хөрөнгө оруулалтаа Та ____'.'____ жилд нөхөн олох боломжтой.'
);
$section->addTextBreak(1);
$section->addText(
    'Энэ саналыг дэлгэрүүлэн хэлэлцэж, Таны объектод тохируулан гүйцэтгэхэд бид бэлэн байна'
);
$section->addTextBreak(1);
$section->addText('Хүндэтгэсэн, ');
$section->addText('                        Гүйцэтгэх Захирал:                                                М. Уламбат');

//$paragraphOptions1 = array('space' => array('line' => 200));
$fontOpt=array('name'    =>'Times New Roman','bold'=>True,'color'=>'ccd1e3');

$section->addText("\tХОЛБОГДОХ ХАЯГ, УТАС", $fontOpt,"leftRight");
$section->addText("\tХан-Уул дүүрэг, 11-р хороо", array('name'    =>'Times New Roman','bold'=>True,'color'=>'ccd1e3','space' => array('line' => 160)),"leftRight");
$section->addText("\tЗайсан тойруу, 201/1 байр", array('name'    =>'Times New Roman','bold'=>True,'color'=>'ccd1e3','space' => array('line' => 100)),"leftRight");
$section->addText("\tУтас: 77118878", array('name'    =>'Times New Roman','bold'=>True,'color'=>'ccd1e3','space' => array('line' => 160)),"leftRight");
$section->addText("\tГар утас: 99041115", array('name'    =>'Times New Roman','bold'=>True,'color'=>'ccd1e3','space' => array('line' => 150)),"leftRight");






// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('helloWorld.docx');
