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
                                <a href="index.php">MN </a>|
                                <a href="?lang=ru"> RU </a>|
                                <a href="?lang=en"> EN</a>
                            </div>
                        </div>
                        <img src="images/logo.png" style="height: 70px" class="uk-text-center">
                        <?php include('php/indexLang.php');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="uk-hidden@m">-->
<!--    <p>asdasd</p>-->
<!--</div>-->

<div id="error" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">asd</h2>
        <button class="uk-modal-close" type="button"></button>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>