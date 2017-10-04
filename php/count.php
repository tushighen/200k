<?php
if(file_exists('count.txt')){
    $fil = fopen('count.txt', "r");
    $dat = fread($fil, filesize('count.txt'));
    if(isset($_SESSION['counter']) == 0){
        $_SESSION['counter'] = 1;
        $fil = fopen('count.txt', "w");
        fwrite($fil, $dat + 1);
        fclose($fil);
    }
    else{
        fclose($fil);
    }
}
else{
    $fil = fopen('count.txt', "w");
    fwrite($fil, 1);
    fclose($fil);
}
?>
<?php
$file = fopen('count.txt', "r");
$date = fread($file, filesize('count.txt'));
?>