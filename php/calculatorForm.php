<?php
if (!isset($_GET['lang'])) {
    echo "
<form action='result.php' method='post'>
                                <div>
                                    <div class=\"uk-text-left\">Барилгын материал</div>
                                    <select name=\"type\" class=\"uk-select uk-form-small uk-form-success\">
    ";
include('php/dropdown.php');

    echo "
    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Нийт талбайн м2</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allSquare\" placeholder=\"\">
                                    <div class=\"uk-text-left\"><i style='color: #428bca'><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Барилгын тоо *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allBuild\" placeholder=\"\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Нийт оршин суугчдын тоо *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"pplNum\" placeholder=\"\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">1 кВт эрчим хүчний үнэ *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"perPower\" placeholder=\"MNT / Тугрик / Төгрөг / ₮\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Халаалтын системд шаардагдах хэм</div>
                                    <select name=\"neededEner\" class=\"uk-select uk-form-small uk-form-success\">
                                    <option value=\"40\">40°C</option>
                                    <option value=\"45\">45°C</option>
                                    <option value=\"50\">50°C</option>
                                    <option value=\"55\">55°C</option>
                                    <option value=\"60\">60°C</option>
                                    <option value=\"65\">65°C</option>
                                    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-center\">Техникийн өрөө *</div>
                                    <div uk-form-custom=\"target: > * > span:first\">
                                        <select name=\"yesNo\">
                                            <option value=\"1\">Байгаа</option>
                                            <option value=\"0\">Байхгүй</option>
                                        </select>
                                        <button class=\"uk-button uk-button-primary uk-button-small \"
                                                style=\"background-color: #336633\" type=\"button\" tabindex=\"-1\">
                                            <span></span>
                                            <span uk-icon=\"icon: chevron-down\"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <button name=\"calcForm\" type=\"submit\" class=\"uk-button uk-button-primary uk-width-1-1 uk-button-small\"
                                            style=\"background-color: #336633\">Тооцоолох
                                    </button>
                                </div>
                                </form>
                            
    ";
}
else {
    if ($_GET['lang'] == "ru") {
        echo "
<form action='result.php?lang=ru' method='post'>
                                <div>
                                    <div class=\"uk-text-left\">Материал здания</div>
                                    <select name=\"type\" class=\"uk-select uk-form-small uk-form-success\">
        ";
        include('php/dropdown.php');
        echo "
        </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Общая площадь отапливаемых помещений</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allSquare\" placeholder=\"\">
                                    <div class=\"uk-text-left\"><i style='color: #428bca'><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Общее количество зданий *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allBuild\" placeholder=\"\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Количество проживающих людей *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"pplNum\" placeholder=\"\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Стоимость 1 кВт электричества для комплекса *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"perPower\" placeholder=\"MNT / Тугрик / Төгрөг / ₮\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Температура на подачи в систему отопления </div>
                                    <select name=\"neededEner\" class=\"uk-select uk-form-small uk-form-success\">
                                    <option value=\"40\">40°C</option>
                                    <option value=\"45\">45°C</option>
                                    <option value=\"50\">50°C</option>
                                    <option value=\"55\">55°C</option>
                                    <option value=\"60\">60°C</option>
                                    <option value=\"65\">65°C</option>
                                    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-center\">Технический зал *</div>
                                    <div uk-form-custom=\"target: > * > span:first\">
                                        <select name=\"yesNo\">
                                            <option value=\"1\">Является</option>
                                            <option value=\"0\">Нет</option>
                                        </select>
                                        <button class=\"uk-button uk-button-primary uk-button-small \"
                                                style=\"background-color: #336633\" type=\"button\" tabindex=\"-1\">
                                            <span></span>
                                            <span uk-icon=\"icon: chevron-down\"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <button name=\"calcForm\" type=\"submit\" class=\"uk-button uk-button-primary uk-width-1-1 uk-button-small\"
                                            style=\"background-color: #336633\">Подсчитывать
                                    </button>
                                </div>
                                </form>
                            
        ";
    }
    else {
        echo "
<form action='result.php?lang=en' method='post'>
                                <div>
                                    <div class=\"uk-text-left\">Building made of</div>
                                    <select name=\"type\" class=\"uk-select uk-form-small uk-form-success\">
        ";
        include('php/dropdown.php');
        echo "
        </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Total area</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allSquare\" placeholder=\"\">
                                    <div class=\"uk-text-left\"><i style='color: #428bca'><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Number of buildings *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allBuild\" placeholder=\"\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Number of inhabitants *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"pplNum\" placeholder=\"\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">1kWt energy price in the region *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"perPower\" placeholder=\"MNT / Тугрик / Төгрөг / ₮\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Temperature desired for the heating</div>
                                    <select name=\"neededEner\" class=\"uk-select uk-form-small uk-form-success\">
                                    <option value=\"40\">40°C</option>
                                    <option value=\"45\">45°C</option>
                                    <option value=\"50\">50°C</option>
                                    <option value=\"55\">55°C</option>
                                    <option value=\"60\">60°C</option>
                                    <option value=\"65\">65°C</option>
                                    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-center\">Tech room *</div>
                                    <div uk-form-custom=\"target: > * > span:first\">
                                        <select name=\"yesNo\">
                                            <option value=\"1\">Yes</option>
                                            <option value=\"0\">No</option>
                                        </select>
                                        <button class=\"uk-button uk-button-primary uk-button-small \"
                                                style=\"background-color: #336633\" type=\"button\" tabindex=\"-1\">
                                            <span></span>
                                            <span uk-icon=\"icon: chevron-down\"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <button name=\"calcForm\" type=\"submit\" class=\"uk-button uk-button-primary uk-width-1-1 uk-button-small\"
                                            style=\"background-color: #336633\">Calculate
                                    </button>
                                </div>
                            </form>
        ";
    }
}
?>