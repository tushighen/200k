<?php
if (!isset($_GET['lang'])) {
    echo "
<form action='calculator.php' method='post'>
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
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allSquare\" value=\"87\">
                                    <div class=\"uk-text-left\"><i style='color: #428bca; font-size: small;'><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Барилгын тоо *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allBuild\" value=\"1\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Нийт оршин суугчдын тоо *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"pplNum\" value=\"1\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">1 кВт эрчим хүчний үнэ *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"perPower\" value=\"118\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Халаалтын системд шаардагдах хэм</div>
                                    <select name=\"neededEner\" class=\"uk-select uk-form-small uk-form-success\">
                                    <option value=\"35\">35°C</option>
                                    <option value=\"40\">40°C</option>
                                    <option value=\"45\" selected>45°C</option>
                                    <option value=\"50\">50°C</option>
                                    <option value=\"55\">55°C</option>
                                    <option value=\"60\">60°C</option>
                                    <option value=\"65\">65°C</option>
                                    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
                                    <div class=\"uk-text-center\">Техникийн өрөө *</div>
            <label><input class=\"uk-radio uk-button-secondary\" type=\"radio\" name=\"yesNo\" value=\"1\" checked> Байгаа</label>
            <label><input class=\"uk-radio uk-button-secondary\" type=\"radio\" name=\"yesNo\" value=\"0\"> Байхгүй</label>
        </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <button name=\"calcForm\" type=\"submit\" class=\"uk-button uk-button-primary uk-width-1-1 uk-button-small\"
                                            style=\"background-color: #336633\">Тооцоолох
                                    </button>
                                </div>
                                </form>
                            
    ";
} else {
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
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allSquare\" value=\"87\">
                                    <div class=\"uk-text-left\"><i style='color: #428bca; font-size: small;'><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Общее количество зданий *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allBuild\" value=\"1\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Количество проживающих людей *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"pplNum\" value=\"1\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Стоимость 1 кВт электричества для комплекса *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"perPower\" value=\"118\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Температура на подачи в систему отопления </div>
                                    <select name=\"neededEner\" class=\"uk-select uk-form-small uk-form-success\">
                                    <option value=\"35\">35°C</option>
                                    <option value=\"40\">40°C</option>
                                    <option value=\"45\" selected>45°C</option>
                                    <option value=\"50\">50°C</option>
                                    <option value=\"55\">55°C</option>
                                    <option value=\"60\">60°C</option>
                                    <option value=\"65\">65°C</option>
                                    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
                                        <div class=\"uk-text-center\">Технический зал *</div>
                                        <label><input class=\"uk-radio uk-button-secondary\" type=\"radio\" name=\"yesNo\" value=\"1\" checked> Да</label>
                                        <label><input class=\"uk-radio uk-button-secondary\" type=\"radio\" name=\"yesNo\" value=\"0\"> Нет</label>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <button name=\"calcForm\" type=\"submit\" class=\"uk-button uk-button-primary uk-width-1-1 uk-button-small\"
                                            style=\"background-color: #336633\">Подсчитывать
                                    </button>
                                </div>
                                </form>
                            
        ";
    } else {
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
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allSquare\" value=\"87\">
                                    <div class=\"uk-text-left\"><i style='color: #428bca; font-size: small;'><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                    </div>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Number of buildings *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"allBuild\" value=\"1\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Number of inhabitants *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"pplNum\" value=\"1\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">1kWt energy price in the region *</div>
                                    <input class=\"uk-input uk-form-small uk-form-success\" type=\"text\" name=\"perPower\" value=\"118\">
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-text-left\">Temperature desired for the heating</div>
                                    <select name=\"neededEner\" class=\"uk-select uk-form-small uk-form-success\">
                                    <option value=\"35\">35°C</option>
                                    <option value=\"40\">40°C</option>
                                    <option value=\"45\" selected>45°C</option>
                                    <option value=\"50\">50°C</option>
                                    <option value=\"55\">55°C</option>
                                    <option value=\"60\">60°C</option>
                                    <option value=\"65\">65°C</option>
                                    </select>
                                </div>
                                <div class=\"uk-margin\">
                                    <div class=\"uk-margin uk-grid-small uk-child-width-auto uk-grid\">
                                        <div class=\"uk-text-center\">Technical room *</div>
                                        <label><input class=\"uk-radio uk-button-secondary\" type=\"radio\" name=\"yesNo\" value=\"1\" checked> Yes</label>
                                        <label><input class=\"uk-radio uk-button-secondary\" type=\"radio\" name=\"yesNo\" value=\"0\"> No</label>
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