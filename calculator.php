<?php include('php/dbConnection.php') ?>

<?php
if (isset($_SESSION))
    session_destroy();
else session_start();
?>
<?php
//session_start();
////unset($_SESSION['neededPwr']);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MONGOL TULSH</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300;subset=cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="css/uikit.css" type="text/css"/>
    <link rel="stylesheet" href="css/mongol_tulsh.css" type="text/css"/>
</head>
<body>

<div class="coverb uk-background-cover uk-visible@m uk-background-image@m">
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
                            <!--                            <form action="result.php" method="post">-->
                            <?php include('php/calculatorForm.php'); ?>
                            <?php include('php/calculator.php'); ?>
                                    <p><a href="https://www.facebook.com/GSHPMONGOLIA/" uk-icon="icon: facebook"></a>
                                    <font size="2">Copyright © 2017 Монгол Түлш ХХК. All rights reserved</font></p>
                            <!--                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-visible@m uk-hidden@l">
    <div class="cover uk-background-cover uk-background-image@m">
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
                                <!--                            <form action="result.php" method="post">-->
                                <?php include('php/calculatorForm.php'); ?>
                                <?php include('php/calculator.php'); ?>
                                <p><a href="https://www.facebook.com/GSHPMONGOLIA/" uk-icon="icon: facebook"></a>
                                <font size="2">Copyright © 2017 Монгол Түлш ХХК. All rights reserved</font></p>
                                <!--                            </form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="uk-width-expand@m">
<div class="uk-hidden@m">
    <div class="uk-container">
        <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right"
             uk-scrollspy-class="uk-animation-slide-right">
            <div class="backgroundGrey">
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
                    <!--                            <form action="result.php" method="post">-->
                    <?php include('php/calculatorForm.php'); ?>
                    <?php include('php/calculator.php'); ?>
                    <p><a href="https://www.facebook.com/GSHPMONGOLIA/" uk-icon="icon: facebook"></a>
                    <font size="2">Copyright © 2017 Монгол Түлш ХХК. All rights reserved</font></p>
                    <!--                            </form>-->
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