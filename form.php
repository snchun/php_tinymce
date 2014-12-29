<?php

include("db.php");
doDB();

//insert
$content = $_POST["content"];
$entity_content = htmlentities($content);
$entity_content = mysql_real_escape_string($entity_content);
$add_contents_sql = "UPDATE comment SET `textarea`= '$entity_content', `date`=now()";
$add_contents_res = mysql_query($add_contents_sql, $mysql) or die("Error in query: $query. " . mysql_error());

//read
$get_contents_sql = "SELECT * FROM comment";
$get_contents_res = mysql_query($get_contents_sql,$mysql) or die("Error in query: $query. " . mysql_error());

while ($row = mysql_fetch_assoc($get_contents_res)) {
    $contents = $row['textarea'];
}

mysql_close($mysql);

echo html_entity_decode($contents);
?>
