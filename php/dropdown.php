<?php
$a;
$b;
$c;
$d;
$e;
$f;

if (!isset($_GET['lang'])) {
    echo "
                <option value=\"1\" selected>Мод</option>
                <option value=\"2\">Дулаалсан полимер</option>
                <option value=\"3\">Блок</option>
                <option value=\"6\">Бетон эрдэст хөвөн</option>
                <option value=\"8\">Тоосго</option>
                <option value=\"9\">Бетон</option>
";

}

else {
    if ($_GET['lang'] == "ru") {
        echo "
//                <option value=\"1\" selected>Дерево</option>
//                <option value=\"2\">Утеплен полимер</option>
//                <option value=\"3\">Теплоблок</option>
//                <option value=\"6\">Бетон минвата</option>
//                <option value=\"8\">Кирпич</option>
//                <option value=\"9\">Бетон</option>
";
    }
    else {
        echo "
                <option value=\"1\" selected>Wood</option>
                <option value=\"2\">Insulated polymere</option>
                <option value=\"3\">Blocks</option>
                <option value=\"6\">Concrete mineral wool</option>
                <option value=\"8\">Bricks</option>
                <option value=\"9\">Concrete</option>
";
    }
}

//if (isset($_POST['calcForm'])) {
//    $var = $_POST['type'];
//    switch ($var) {
//        case "1":
//            echo '
//                <option value="1" selected>Мод</option>
//                <option value="2">Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9">Бетон</option>';
//            break;
//        case "2":
//            echo '
//                <option value="1" >Мод</option>
//                <option value="2" selected>Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9">Бетон</option>
//        ';
//            break;
//        case "3":
//            echo '
//                <option value="1" >Мод</option>
//                <option value="2" >Дулаалсан полимер</option>
//                <option value="3" selected>Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9">Бетон</option>';
//            break;
//        case "6":
//            echo '
//                <option value="1" >Мод</option>
//                <option value="2" >Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6" selected>Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9">Бетон</option>';
//            break;
//        case "8":
//            echo '
//                <option value="1" >Мод</option>
//                <option value="2" >Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8" selected>Тоосго</option>
//                <option value="9">Бетон</option>';
//            break;
//        case "9":
//            echo '
//                <option value="1" >Мод</option>
//                <option value="2" >Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9" selected>Бетон</option>';
//            break;
//        default:
//            echo '
//                <option value="1" >Мод</option>
//                <option value="2" >Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9">Бетон</option>';
//    }
//} else echo '
//                <option value="1" selected>Мод</option>
//                <option value="2">Дулаалсан полимер</option>
//                <option value="3">Блок</option>
//                <option value="6">Бетон эрдэст хөвөн</option>
//                <option value="8">Тоосго</option>
//                <option value="9">Бетон</option>';
?>