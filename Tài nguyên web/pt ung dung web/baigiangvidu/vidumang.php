<html><head><title>Vidu</title><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body>
<?php
	// Ví dụ về mảng

	$a = array ();
	$b = array ('red', 'green', 16, 0.35);
	echo '<pre>';
	print_r ($b);
	echo '</pre>';
	
	$c = array ('red'=>'đỏ', 'green'=>'xanh lá cây', 'blue'=>'xanh da trời');
	echo '<pre>';
	print_r ($c);
	echo '</pre>';

	foreach ($c as $key =>$val)
		echo "Gía trị của phần tử có key là $key bằng $val<br />";

	echo '-----------------<br />';
	$ana ['id'] = 1;
	$ana ['name'] = 'Trần Thủ Đô';
	foreach ($ana as $key =>$val)
		echo "Gía trị của phần tử có key là $key bằng $val<br />";


?>
</body></html>