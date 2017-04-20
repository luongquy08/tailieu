<?php
	include ('stdlib.php');
	
	echo htOpen ();
	$conn = mysql_connect ('localhost', 'root', '1253');
	mysql_select_db ('test', $conn);
	$kq = mysql_query ('select * from huyen where name like "%tiên%"');
	$ci=1;
	
	echo '<center>' . tblOpen ('70%', '1', 'border-collapse: collapse');
	echo tr (td('STT', '15%') . td('MT', '10%') . td('MH', '10%') . td('Tên quận/huyện', '65%'), 'center');
	while ($row = mysql_fetch_array ($kq)) 
		echo tr ( td($ci++).td($row['matinh']).td($row['id']).td($row['name'], '', 'left'), 'center');
	echo tblClose () .  '</center>';	
	echo htClose ();
?>
