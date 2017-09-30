<?php include('php/dbConnection.php'); ?>
<?php include('php/calculator.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MONGOL TULSH</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300;subset=cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="css/uikit.min.css" type="text/css"/>
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
                                <a href="result.php">MN </a>|
                                <a href="?lang=ru"> RU </a>|
                                <a href="?lang=en"> EN</a>
                            </div>
                        </div>
                        <img src="images/logo.png" style="height: 70px" class="uk-text-center">
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left">
                            <h5>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo 'ТАНЫ БАРИЛГАД ДУЛААНЫГ ШИЙДЭХЭД';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo 'КАЛЬКУЛЯТОР';
                                    else echo 'CALCULATOR';
                                }
                                ?>
                            </h5>

                            <?php
                            include ('php/result.php');
                            ?>
                            </div>


<!--                            <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>-->
<!--                                <div class="uk-width-expand@m">-->
<!--                                    <h6>-->
<!--                                        --><?php
//                                        if (!isset($_GET['lang'])){
//                                            echo 'Шаардагдах цооногийн тоо /гүн 150 м, диаметр 120мм ';
//                                        }
//                                        else {
//                                            if ($_GET['lang'] == "ru")
//                                                echo 'КАЛЬКУЛЯТОР';
//                                            else echo 'CALCULATOR';
//                                        }
//                                        ?>
<!--                                    </h6>-->
<!--                                </div>-->
<!--                                <div class="uk-width-1-6@m">-->
<!--                                    <h6>11</h6>-->
<!--                                </div>-->
<!--                                <div class="uk-width-1-6@m">-->
<!--                                    <h6>сая төгрөг</h6>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <h6>-->
<!--                                --><?php
//                                if (!isset($_GET['lang'])){
//                                    echo 'Шаардагдах дулааны шахуургын хүчин чадал ';
//                                    echo '130 ';
//                                    echo 'кВт';
//                                }
//                                else {
//                                    if ($_GET['lang'] == "ru")
//                                        echo 'КАЛЬКУЛЯТОР';
//                                    else echo 'CALCULATOR';
//                                }
//                                ?>
<!--                            </h6>-->
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left">
                            <h5>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo 'АЖЛЫН НИЙТ ӨРТӨГ БОЛОН ГҮЙЦЭТГЭХ ХУГАЦАА';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo 'КАЛЬКУЛЯТОР';
                                    else echo 'CALCULATOR';
                                }
                                ?>
                            </h5>
                            <h6>

                            </h6>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left">
                            <h5>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo 'ХЭМНЭЛТ БОЛОН ДАВУУ ТАЛ';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo 'КАЛЬКУЛЯТОР';
                                    else echo 'CALCULATOR';
                                }
                                ?>
                            </h5>
                            <h6>

                            </h6>
                        </div>
                        <div>

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