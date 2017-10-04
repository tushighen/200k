<?php
if (isset($_POST['req'])){
    if (isset($_POST['age'])){
        if (isset($_GET['lang'])) {
            if ($_GET['lang'] == "ru") {
                echo '<script>window.location.replace("calculator.php?lang=ru");</script>';
            }
            else echo '<script>window.location.replace("calculator.php?lang=en");</script>';
        }
        else echo '<script>window.location.replace("calculator.php");</script>';
    }
    else {
        echo '<script>alert("АЛДАА / ОШИБКА / ERROR");</script>';
    }
}
?>