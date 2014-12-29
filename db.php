<?php

//mysql
function doDB() {
    global $mysql;

//connect to server and select database
    $mysql = mysql_connect("localhost", "root", "root");
    mysql_select_db("snchun_tinymce");
    if (!$mysql) {
        die('Could not connect: ' . mysql_error());
    }
}

?>
