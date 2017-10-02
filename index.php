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
    <link rel="stylesheet" href="css/flag-icon.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="uk-visible@l">
    <div class="cover uk-background-cover uk-background-image@m">
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
                            <?php include('php/indexLang.php'); ?>
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
                            <?php include('php/indexLang.php'); ?>
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
                <?php include('php/indexLang.php'); ?>
            </div>
        </div>
    </div>
</div>

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