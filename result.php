<?php include('php/dbConnection.php'); ?>
<?php include('php/calculator.php'); ?>
<?php
    if (!isset($_GET['id']))
        echo "<script>window.location.replace('calculator.php');</script>";
?>
<?php
//if (!isset($_SESSION))
//    echo '<script>window.location.replace("calculator.php");</script>';
//else {
//
//}
//?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="coverc uk-background-cover uk-visible@m uk-background-image@m">
    <div class="">
        <div class="uk-grid-large uk-flex-middle uk-grid-margin-large uk-grid" uk-grid>
            <div class="uk-width-1-6@m">

            </div>
            <div class="uk-width-1-2@m">

            </div>
            <div class="uk-width-expand@m">
                <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right"
                     uk-scrollspy-class="uk-animation-slide-right">
                    <div class="backgroundGrey">
                        <img src="images/logo.png" style="height: 70px" class="uk-text-center">
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left">
                            <h5>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo '<p style="color:#336633"><b>ТАНЫ БАРИЛГЫН ДУЛААНЫГ ШИЙДЭХЭД</b></p>';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo '<p style="color:#336633"><b>ЧТОБЫ РЕШИТЬ ТЕПЛОТУ ЗДАНИЯ ВАШ</b></p>';
                                    else echo '<p style="color:#336633"><b>IN ORDER TO DECIDE YOUR CONSTRUCTIONS WARM</b></p>';
                                }
                                ?>
                            </h5>

                            <?php
                            include('php/result.php');
                            ?>
                        </div>

                    </div>
                    <div>

                    </div>
                </div>
                <div class="backgroundGrey" style="margin-top: 20px">
                    <div class="uk-text-left">
                        <h5>
                            <?php
                            if (!isset($_GET['lang']))
                                echo '<p style="color:#336633"><b>АЖЛЫН НИЙТ ӨРТӨГ БОЛОН ГҮЙЦЭТГЭХ ХУГАЦАА</b></p>';
                            else {
                                if ($_GET['lang'] == "ru")
                                    echo '<p style="color:#336633"><b>ОБЩАЯ СТОИМОСТЬ РАБОТЫ И ПРОДОЛЖИТЕЛЬНОСТЬ РАБОТЫ</b></p>';
                                else echo '<p style="color:#336633"><b>TOTAL COST OF WORK AND FINISH TIME</b></p>';
                            }
                            ?>
                        </h5>
                        <?php
                        include('php/result1.php');
                        ?>
                        <h6>

                        </h6>
                    </div>
                    <div>

                    </div>
                </div>
                <div class="backgroundGrey" style="margin-top: 20px">
                    <div class="uk-text-left uk-text-primary">
                        <h5>
                            <?php
                            if (!isset($_GET['lang']))
                                echo '<p style="color:#336633"><b>ХЭМНЭЛТ БОЛОН ДАВУУ ТАЛ</b></p>';
                            else {
                                if ($_GET['lang'] == "ru")
                                    echo '<p style="color:#336633"><b>СОХРАНЕНИЕ И ПРЕИМУЩЕСТВО</b></p>';
                                else echo '<p style="color:#336633"><b>SAVINGS AND ADVANTAGE</b></p>';
                            }
                            ?>
                        </h5>
                        <?php
                        include('php/result2.php');
                        ?>
                        <h6>
                            <?php
                            if (!isset($_GET['lang']))
                                echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                            </div>';
                            else {
                                if ($_GET['lang'] == "ru")
                                    echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                </div>';
                                else {
                                    echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                </div>';
                                }
                            }

                            ?>
                            <p class="uk-text-center"><a href="https://www.facebook.com/GSHPMONGOLIA/" class="fa fa-facebook-official">&nbsp;</a>
                                <font size="2">Copyright © 2017 Монгол Түлш ХХК. All rights reserved</font></p>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-visible@m uk-hidden@l">
    <div class="coverc uk-background-cover uk-background-image@m">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex-middle uk-grid-margin-large uk-grid" uk-grid>
                <div class="uk-width-expand@m">

                </div>
                    <div class="uk-width-expand@m">
                        <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right"
                             uk-scrollspy-class="uk-animation-slide-right">
                            <div class="backgroundGrey">
                                <img src="images/logo.png" style="height: 70px" class="uk-text-center">
                            </div>
                        <div class="backgroundGrey" style="margin-top: 20px">
                            <div class="uk-text-left">
                                <h5>
                                    <?php
                                    if (!isset($_GET['lang']))
                                        echo '<p style="color:#336633"><b>ТАНЫ БАРИЛГЫН ДУЛААНЫГ ШИЙДЭХЭД</b></p>';
                                    else {
                                        if ($_GET['lang'] == "ru")
                                            echo '<p style="color:#336633"><b>ЧТОБЫ РЕШИТЬ ТЕПЛОТУ ЗДАНИЯ ВАШ</b></p>';
                                        else echo '<p style="color:#336633"><b>IN ORDER TO DECIDE YOUR CONSTRUCTIONS WARM</b></p>';
                                    }
                                    ?>
                                </h5>

                                <?php
                                include('php/result.php');
                                ?>
                            </div>

                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left">
                            <h5>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo '<p style="color:#336633"><b>АЖЛЫН НИЙТ ӨРТӨГ БОЛОН ГҮЙЦЭТГЭХ ХУГАЦАА</b></p>';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo '<p style="color:#336633"><b>ОБЩАЯ СТОИМОСТЬ РАБОТЫ И ПРОДОЛЖИТЕЛЬНОСТЬ РАБОТЫ</b></p>';
                                    else echo '<p style="color:#336633"><b>TOTAL COST OF WORK AND FINISH TIME</b></p>';
                                }
                                ?>
                            </h5>
                            <?php
                            include('php/result1.php');
                            ?>
                            <h6>

                            </h6>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="backgroundGrey" style="margin-top: 20px">
                        <div class="uk-text-left uk-text-primary">
                            <h5>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo '<p style="color:#336633"><b>ХЭМНЭЛТ БОЛОН ДАВУУ ТАЛ</b></p>';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo '<p style="color:#336633"><b>СОХРАНЕНИЕ И ПРЕИМУЩЕСТВО</b></p>';
                                    else echo '<p style="color:#336633"><b>SAVINGS AND ADVANTAGE</b></p>';
                                }
                                ?>
                            </h5>
                            <?php
                            include('php/result2.php');
                            ?>
                            <h6>
                                <?php
                                if (!isset($_GET['lang']))
                                    echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                            </div>';
                                else {
                                    if ($_GET['lang'] == "ru")
                                        echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                </div>';
                                    else {
                                        echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                </div>';
                                    }
                                }

                                ?>
                                <p class="uk-text-center"><a href="https://www.facebook.com/GSHPMONGOLIA/" class="fa fa-facebook-official">&nbsp;</a>
                                <font size="2">Copyright © 2017 Монгол Түлш ХХК. All rights reserved</font></p>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-hidden@m">
    <div class="uk-container">
        <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right"
             uk-scrollspy-class="uk-animation-slide-right">
            <div class="backgroundGrey">
                <img src="images/logo.png" style="height: 70px" class="uk-text-center">
            </div>
            <div class="backgroundGrey" style="margin-top: 20px">
                <div class="uk-text-left">
                    <h5>
                        <?php
                        if (!isset($_GET['lang']))
                            echo '<p style="color:#336633"><b>ТАНЫ БАРИЛГЫН ДУЛААНЫГ ШИЙДЭХЭД</b></p>';
                        else {
                            if ($_GET['lang'] == "ru")
                                echo '<p style="color:#336633"><b>ЧТОБЫ РЕШИТЬ ТЕПЛОТУ ЗДАНИЯ ВАШ</b></p>';
                            else echo '<p style="color:#336633"><b>IN ORDER TO DECIDE YOUR CONSTRUCTIONS WARM</b></p>';
                        }
                        ?>
                    </h5>

                    <?php
                    include('php/result.php');
                    ?>
                </div>

            </div>
            <div>

            </div>
        </div>
        <div class="backgroundGrey" style="margin-top: 20px">
            <div class="uk-text-left">
                <h5>
                    <?php
                    if (!isset($_GET['lang']))
                        echo '<p style="color:#336633"><b>АЖЛЫН НИЙТ ӨРТӨГ БОЛОН ГҮЙЦЭТГЭХ ХУГАЦАА</b></p>';
                    else {
                        if ($_GET['lang'] == "ru")
                            echo '<p style="color:#336633"><b>ОБЩАЯ СТОИМОСТЬ РАБОТЫ И ПРОДОЛЖИТЕЛЬНОСТЬ РАБОТЫ</b></p>';
                        else echo '<p style="color:#336633"><b>TOTAL COST OF WORK AND FINISH TIME</b></p>';
                    }
                    ?>
                </h5>
                <?php
                include('php/result1.php');
                ?>
                <h6>

                </h6>
            </div>
            <div>

            </div>
        </div>
        <div class="backgroundGrey" style="margin-top: 20px">
            <div class="uk-text-left uk-text-primary">
                <h5>
                    <?php
                    if (!isset($_GET['lang']))
                        echo '<p style="color:#336633"><b>ХЭМНЭЛТ БОЛОН ДАВУУ ТАЛ</b></p>';
                    else {
                        if ($_GET['lang'] == "ru")
                            echo '<p style="color:#336633"><b>СОХРАНЕНИЕ И ПРЕИМУЩЕСТВО</b></p>';
                        else echo '<p style="color:#336633"><b>SAVINGS AND ADVANTAGE</b></p>';
                    }
                    ?>
                </h5>
                <?php
                include('php/result2.php');
                ?>
                <h6>
                    <?php
                    if (!isset($_GET['lang']))
                        echo '<div class="uk-text-left" ><i ><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                            </div>';
                    else {
                        if ($_GET['lang'] == "ru")
                            echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                </div>';
                        else {
                            echo '<div class="uk-text-left"><i><b>* Манай бүтээгдэхүүн нь 87м2 талбайтай байшин барилга
                                            болон түүнээс доош талбайтай байшин барилгад үнэ өртгийн хувьд адилхан</b></i>
                                </div>';
                        }
                    }

                    ?>
                    <p class="uk-text-center"><a href="https://www.facebook.com/GSHPMONGOLIA/" class="fa fa-facebook-official">&nbsp;</a>
                    <font size="2">Copyright © 2017 Монгол Түлш ХХК. All rights reserved</font></p>
                </h6>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
<?php include('php/count.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>