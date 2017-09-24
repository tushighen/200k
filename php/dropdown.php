<?php
$var = $_GET['selected'];
switch ($var) {
    case "1":
        echo '
                <option value="1" selected>Мод</option>
                <option value="2">Дулаалсан полимер</option>
                <option value="3">Блок</option>
                <option value="6">Бетон эрдэст хөвөн</option>
                <option value="8">Тоосго</option>
                <option value="9">Бетон</option>';
        break;
    case "2":
        echo '
                <option value="1" >Мод</option>
                <option value="2" selected>Дулаалсан полимер</option>
                <option value="3">Блок</option>
                <option value="6">Бетон эрдэст хөвөн</option>
                <option value="8">Тоосго</option>
                <option value="9">Бетон</option>
        ';
        break;
    case "3":
        echo '
                <option value="1" >Мод</option>
                <option value="2" >Дулаалсан полимер</option>
                <option value="3" selected>Блок</option>
                <option value="6">Бетон эрдэст хөвөн</option>
                <option value="8">Тоосго</option>
                <option value="9">Бетон</option>';
        break;
    case "6":
        echo '
                <option value="1" >Мод</option>
                <option value="2" >Дулаалсан полимер</option>
                <option value="3">Блок</option>
                <option value="6" selected>Бетон эрдэст хөвөн</option>
                <option value="8">Тоосго</option>
                <option value="9">Бетон</option>';
        break;
    case "8":
        echo '
                <option value="1" >Мод</option>
                <option value="2" >Дулаалсан полимер</option>
                <option value="3">Блок</option>
                <option value="6">Бетон эрдэст хөвөн</option>
                <option value="8" selected>Тоосго</option>
                <option value="9">Бетон</option>';
        break;
    case "9":
        echo '
                <option value="1" >Мод</option>
                <option value="2" >Дулаалсан полимер</option>
                <option value="3">Блок</option>
                <option value="6">Бетон эрдэст хөвөн</option>
                <option value="8">Тоосго</option>
                <option value="9" selected>Бетон</option>';
        break;
    default:
        echo '
                <option value="1" >Мод</option>
                <option value="2" >Дулаалсан полимер</option>
                <option value="3">Блок</option>
                <option value="6">Бетон эрдэст хөвөн</option>
                <option value="8">Тоосго</option>
                <option value="9">Бетон</option>';
}
?>