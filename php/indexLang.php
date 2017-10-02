<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == "ru") {
        echo '
                        <h4>Уважаемый партнер</h4>
                        <div class="uk-text-justify">
                        <p><font size="3">Наша компания предлагает геотермальные установки, которые позволяют полностью отказаться от сжигания угля и других углеводородов с целью обеспечения отопление и горячей водой. Мы имеем опыт работы в условиях Монгольского климата и обеспечиваем 5 летний срок гарантии. Данная технология позволяет сделать систему в любом месте независимо от географии, а также нет ограничения по её мощности. Данное приложение позволяет Вам сделать самостоятельный расчет необходимой для Ваших нужд установки, получить ее стоимость, а также оценить последующие эксплуатационные расходы.<br>
На весь расчет потребуется 3 минут при условии, что у Вас есть все необходимые вводные данные Вашего объекта, такие как общая площадь, количество проживающих.<br><br>
Заявки на инсталляцию в этом году (2017) принимаются до 27 октября.   
Будем рады дальнейшему плодотворному сотрудничеству команда Монгол Тулш</font></p>
</div>                     
                        <a href="index.php">MN </a>|
                        <a href="?lang=ru"> RU </a>|
                        <a href="?lang=en"> EN</a>
                        
                        <form action="index.php?lang=ru" method="post">
                            <input type="checkbox" name="age" value="age"><font size="2" style="font-weight: bold">&nbsp;&nbsp;Вы можете ввести, если вы +18</font><br>
                            <button name="req" type="submit" class="uk-button uk-button-primary uk-button-small" style="background-color: #336633">Войти</button>
                            <p><font size="2">Copyright © 2017  Монгол Түлш ХХК. All rights reserved</font></p>
                        </form>
    ';
    }
    else {
        echo '
                        <h4>Dear Customer</h4>
                        <div class="uk-text-justify">
                        <p><font size="3">Our company offers geothermal plants that allow to completely abandon the combustion of coal and other hydrocarbons in order to provide heating and hot water. We have experience in the conditions of the Mongolian climate and provide a 5-year warranty period. This technology allows you to make the system anywhere, regardless of geography, and there is no limit to its power. This application allows you to make a self-calculation of the installation necessary for your needs, to obtain its cost, as well as to estimate the subsequent operating costs.<br>
The entire calculation will take 3 minutes provided that you have all the necessary input data of your facility, such as the total area, the number of people living.<br><br>
Applications for installation this year (2017) are accepted until October 27.
We will be glad to further fruitful cooperation team Mongol Tulsh
</font></p>
</div>
                        <a href="index.php">MN </a>|
                        <a href="?lang=ru"> RU </a>|
                        <a href="?lang=en"> EN</a>
                        
                        <form action="index.php?lang=en" method="post">
                            <input type="checkbox" name="age" value="age"><font size="2" style="font-weight: bold">&nbsp;&nbsp;You can enter if you are +18</font><br>
                            <button name="req" type="submit" class="uk-button uk-button-primary uk-button-small" style="background-color: #336633">Login</button>
                            <p><font size="2">Copyright © 2017  Монгол Түлш ХХК. All rights reserved</font></p>
                        </form>
    ';
    }
}
else {
    echo '
                        <h4>Хүндэт харилцагч танаа</h4>
                        <div class="uk-text-justify">
                        <p><font size="3">Манай компани нь барилга байгууламжийн халаалт, халуун усны хангамжийг газрын
                                гүнийн дулааны
                                төхөөрөмжөөр шийдэж, нүүрс болон бусад нүүрс устөрөгчийг шатаахаас бүрэн татгалзахыг
                                санал болгож байна. Бид Монголын цаг уурын нөхцөлд ажиллах арвин туршлагатай бөгөөд 5 жилийн
                                баталгаат хугацаа олгож байна. Энэ технологийг газар зүйн байршилаас үл хамааран хаана ч
                                хэрэглэж болох ба хүчин чадлын хязгаарлалт үгүй. Энэхүү тооцоолуур нь Таны хэрэгцээнд
                                тохирсон тоног төхөөрөмжийг тодорхойлж, түүний урьдчилсан үнэлгээг тооцоолж, ашиглалтын
                                зардлыг үнэлэх боломжийг олгоно.<br>
                                Таны барилга байгууламжын нийт талбай, оршин суугчдын тоо зэрэг шаардлагатай мэдээлэл
                                байгаа тохиолдолд энэхүү тооцоолол хийхэд дээд тал нь 3 минут шаардлагатай.<br><br>
                                Энэ жилийн захиалгыг 2017 оны 10 сарын 27 хүртэл авахыг анхаарна уу.
                                Цаашид Таньтай хамтран ажиллахад бид бэлэн байна. Монгол Түлш ХХК</font></p>
</div>
                                   
                                   <a href="index.php">MN </a>|
                                   <a href="?lang=ru"> RU </a>|
                                   <a href="?lang=en"> EN</a>
                                   
                                  
                                    
                             
                        <form action="index.php" method="post">
                            
                            <input type="checkbox" name="age" value="age"><font size="2" style="font-weight: bold">&nbsp;&nbsp;+18 нас хүрсэн бол орж болно</font><br>
                            <button name="req" type="submit" class="uk-button uk-button-primary uk-button-small" style="background-color: #336633">Нэвтрэх</button>
                            <p><a href="https://www.facebook.com/GSHPMONGOLIA/" class="fa fa-facebook-official">&nbsp;</a><font size="2">Copyright © 2017  Монгол Түлш ХХК. All rights reserved</font></p>
                        </form>
    ';
}
include ('loginReq.php');
?>
