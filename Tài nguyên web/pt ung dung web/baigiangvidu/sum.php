<html><head><title>hello</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head>

<?php
	// Viết chương trình, nhận vào 1 số tự nhiên: N
	// Tính tổng tất cả các số tự nhiên <= N và in ra kết quả
	if (isset($_POST['cmd'])) {
		$sum = 0;
		//		++$ci			--$ci
		for ($ci=0, $cj=$_POST['N']; $ci < $cj ; ++$ci, --$cj) 
			$sum += $ci + $cj;
		if ($ci==$cj)
			$sum += $ci;
		echo "Tổng 0 + ... + {$_POST['N']} = $sum";
	} else {
?>

<form name='myform' method='post' action='sum.php'>
<h3>PHP example</h3><hr />
Hãy cho 1 số tự nhiên ? 
<input type='text' name='N' /> 
<input type='submit' name='cmd' value='Ok' />

<?php
	}
?>

</form>
</html>
