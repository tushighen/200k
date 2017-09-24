<?php include('php/dbConnection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/200k.css" type="text/css"/>
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="columnLeft">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Input</h3>
                    </div>
                    <div class="panel-body">
                        <form action="200k.php" method="post">
                            <div class="form-group">
                                <label>Нийт барилгын тоо</label>
                                <input type="text" class="form-control" name="allBuild" value="" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label>Нийт талбай кв.м</label>
                                <input type="text" class="form-control" name="allSquare" value="" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label>Нийт оршин суугчдын тоо</label>
                                <input type="text" class="form-control" name="pplNum" value="" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label>Халаалтйн системд шаардагдах хэм</label>
                                <input type="text" class="form-control" name="neededEner" value="" placeholder="0">
                            </div>
                            <div class="form-group">
                                <label>Тухайн объектын хэрэглэх 1 кВт эрчим хүчний үнэ</label>
                                <input type="text" class="form-control" name="perPower" value="" placeholder="0">
                            </div>
                            <div class="">
                                <select name="type">
                                    <option value="1" selected="">Мод</option>
                                    <option value="2" selected="">Дулаалсан полимер</option>
                                    <option value="3" selected="">Блок</option>
                                    <option value="6" selected="">Бетон эрдэст хөвөн</option>
                                    <option value="8" selected="">Тоосго</option>
                                    <option value="9" selected="">Бетон</option>
                                </select>
                            </div>
                            <br>
                            <button name="calcForm" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <?php include('php/calculator.php')?>
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
</div>
<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
