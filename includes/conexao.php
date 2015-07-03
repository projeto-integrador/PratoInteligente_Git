<?php

$servidor=mysql_connect("localhost","root","") or die(mysql_error());
$banco=mysql_select_db("projeto_cantina",$servidor) or die (mysql_error());

?>
