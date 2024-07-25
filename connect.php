<?php
$link=mssql_connect("192.168.1.2,1433","www","w1e2b3") or die ("Can't connect to sql server");
mssql_select_db('www', $link) or die ("Can't connect to database");
$table="form";
// insert
$insert="insert into $table (name, address, city, state, email, phone, graduation_date) values ('Ouwehand','Kristin Ln', 'Saugus', 'CA', 'a@b.c', '555-555-5555', '01/01/1999')";
$insert_result=mssql_query($insert,$link);

// select
$select="select * from $table";
$select_result=mssql_query($select,$link);
$no=mssql_num_rows($select_result);
?>
<html>
<body>
<?php
for ($i=0;$i<$no;$i++) {
		$row=mssql_fetch_row($select_result);
		print "id = ".$row[0]." name = ".$row[1]." address = ".$row[2]."<br>";
		}
?>
<br><br>blabla
</body>
</html>