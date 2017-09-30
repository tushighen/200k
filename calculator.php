<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MONGOL TULSH</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300;subset=cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="css/uikit.css" type="text/css"/>
    <link rel="stylesheet" href="css/mongol_tulsh.css" type="text/css"/>
</head>
<body>

<div class="cover uk-background-cover uk-visible@m uk-background-image@m">
    <div class="uk-container">
        <div class="uk-grid-large uk-flex-middle uk-grid-margin-large uk-grid" uk-grid>
            <div class="uk-width-expand@m">

            </div>
            <div class="uk-width-expand@m">
                <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right"
                     uk-scrollspy-class="uk-animation-slide-right">
                    <div class="backgroundGrey">
                        <div class="uk-grid-large uk-flex-middle uk-grid-margin-large uk-grid" uk-grid>
                            <div class="uk-width-expand@m">
                                <a href="https://www.facebook.com/GSHPMONGOLIA/" uk-icon="icon: facebook"></a>
                            </div>
                            <div class="uk-width-expand@m">
                                <a href="calculator.php">MN </a>|
                                <a href="?lang=ru"> RU </a>|
                                <a href="?lang=en"> EN</a>
                            </div>
                        </div>
                        <img src="images/logo.png" style="height: 70px" class="uk-text-center">
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left">
                            <h5><?php
                                if (!isset($_GET['lang']))
                                    echo 'ТООЦООЛУУР';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo 'КАЛЬКУЛЯТОР';
                                    else echo 'CALCULATOR';
                                }
                                ?></h5>
                        </div>
                        <div>
<!--                            <form>-->
<!--                                <div>-->
<!--                                    <div class="uk-text-left">Барилгын материал</div>-->
<!--                                    <select name="type" class="uk-select uk-form-small uk-form-success">-->
<!--                                        --><?php //include('php/dropdown.php') ?>
<!--                                    </select>-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <div class="uk-text-left">Нийт талбайн м2</div>-->
<!--                                    <input class="uk-input uk-form-small uk-form-success" type="text" placeholder="">-->
<!--                                    <div class="uk-text-left">* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга-->
<!--                                        болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <div class="uk-text-left">Барилгын тоо *</div>-->
<!--                                    <input class="uk-input uk-form-small uk-form-success" type="text" placeholder="">-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <div class="uk-text-left">Нийт оршин суугчдын тоо *</div>-->
<!--                                    <input class="uk-input uk-form-small uk-form-success" type="text" placeholder="">-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <div class="uk-text-left">1 кВт эрчим хүчний үнэ *</div>-->
<!--                                    <input class="uk-input uk-form-small uk-form-success" type="text" placeholder="">-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <div class="uk-text-left">Халаалтын системд шаардагдах хэм</div>-->
<!--                                    <select name="type" class="uk-select uk-form-small uk-form-success">-->
<!--                                        --><?php //include('php/dropdown.php') ?>
<!--                                    </select>-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <div class="uk-text-center">Үйлзэлийн өрөө *</div>-->
<!--                                    <div uk-form-custom="target: > * > span:first">-->
<!--                                        <select>-->
<!--                                            <option value="">Байгаа</option>-->
<!--                                            <option value="1">Байхгүй</option>-->
<!--                                        </select>-->
<!--                                        <button class="uk-button uk-button-primary uk-button-small "-->
<!--                                                style="background-color: #336633" type="button" tabindex="-1">-->
<!--                                            <span></span>-->
<!--                                            <span uk-icon="icon: chevron-down"></span>-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="uk-margin">-->
<!--                                    <button name="req" type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-button-small"-->
<!--                                            style="background-color: #336633">Тооцоолох-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </form>-->
                            <?php include('php/calculatorForm.php');?>
                            <?php include('php/calculator.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>