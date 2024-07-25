<?php
$link=mssql_connect("192.168.1.2,1433","www","w1e2b3") or die ("Can't connect to sql server");
mssql_select_db('www', $link) or die ("Can't connect to database");
?>
