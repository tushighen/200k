<?php
$link = mysql_connect("localhost", "root", "");
if (!$link) {
    die ('Could not connect: ' . mysql_error());
}
$db = mysql_select_db("apartmentCalculator");
if (!$db) {
    die ('Could not select db: ' . mysql_error());
}
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
</head>
<body>
<div class="row">
    <div class="col-md-4">
        <form action="200k.php" method="post">
            <div class="form-group">
                <label>Нийт барилгын тоо</label>
                <input type="text" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label>Нийт талбай кв.м</label>
                <input type="text" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label>Нийт оршин суугчдын тоо</label>
                <input type="text" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label>Халаалтйн системд шаардагдах хэм</label>
                <input type="text" class="form-control"  value="0">
            </div>
            <div class="form-group">
                <label>Тухайн объектын хэрэглэх 1 кВт эрчим хүчний үнэ</label>
                <input type="text" class="form-control" value="0">
            </div>
            <div class="dropdown">

                <select name="type">
                    <option value="1">Мод</option>
                    <option value="2">Дулаалсан полимер</option>
                    <option value="3">Блок</option>
                    <option value="6">Бетон эрдэст хөвөн</option>
                    <option value="7">Тоосго</option>
                    <option value="8">Бетон</option>
                </select>
            </div>
            <br><br>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
