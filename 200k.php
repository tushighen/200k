<?php include('php/dbConnection.php') ?>
<?php
if (!isset($_SESSION['type'])) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/200k.css" type="text/css"/>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                CEPHEUS
            </a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Input</h3>
                </div>
                <div class="panel-body">
                    <form action="200k.php" method="post">
                        <div class="form-group">
                            <label>Нийт барилгын тоо</label>
                            <input type="text" class="form-control" name="allBuild" value="1" placeholder="0">
                        </div>
                        <div class="form-group">
                            <label>Нийт талбай кв.м</label>
                            <input type="text" class="form-control" name="allSquare" value="90" placeholder="0">
                        </div>
                        <div class="form-group">
                            <label>Нийт оршин суугчдын тоо</label>
                            <input type="text" class="form-control" name="pplNum" value="900" placeholder="0">
                        </div>
                        <div class="form-group">
                            <label>Халаалтйн системд шаардагдах хэм</label>
                            <input type="text" class="form-control" name="neededEner" value="55" placeholder="0">
                        </div>
                        <div class="form-group">
                            <label>Тухайн объектын хэрэглэх 1 кВт эрчим хүчний үнэ</label>
                            <input type="text" class="form-control" name="perPower" value="128" placeholder="0">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <select name="type" class="form-control">
                                    <?php include('php/dropdown.php') ?>
                                </select>
                            </div>
                            <br class="visible-xs">
                            <div class="col-md-6 has-success">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="usdValue" value="2450"
                                           placeholder="USD/$">
                                </div>

                            </div>
                        </div>
                        <!--                            <br>-->
                        <button name="calcForm" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <?php include_once('php/calculator.php') ?>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Предложение</th>
                        <th></th>
                        <th>Единицы измерения</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php include_once('php/table.php') ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--<tr>-->
<!--    <td>Шаардагдах дулааны шахуургын хүчин чадал</td>-->
<!--    <td></td>-->
<!--    <td>кВт</td>-->
<!--    <td></td>-->
<!--</tr>-->

<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
