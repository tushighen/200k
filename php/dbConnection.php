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