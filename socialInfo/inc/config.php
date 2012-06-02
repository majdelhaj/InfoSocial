<?php

$con = mysql_connect('localhost','root','0000');

if (!$con) {
    die('Could not connect: ' . mysql_error());
//    echo '<h1>skkoooooooooooooooooo</h1>';
} else {
    mysql_select_db("mobizoo", $con);
//    mysql_select_db("test", $con);
//    echo '<h1>loooooooool</h1>';
    mysql_query('SET NAMES "utf8";');
//    mysql_close($con);
}
?>