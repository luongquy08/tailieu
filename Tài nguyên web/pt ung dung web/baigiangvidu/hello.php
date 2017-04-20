<?php
	// Viết ứng dụng nhận vào một (xâu) ký tự nếu là S, s thì
	// đưa câu chào buổi sáng, C, c .... , mặc định: Hello
	if (isset($_GET['cmd'])) {
		switch ($_GET['a']) {
			default:
				echo 'Hello !';
				break;
			case 's':
			case 'S':
				echo 'Good Morning!';
				break;
			case 'c':
			case 'C':
				echo 'Good Afternoon!';
				break;
			case 't':
			case 'T':
				echo 'Good Everning!';
				break;
		}
	} else {

?>

<html><head><title>hello</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
</head>
<form name='myform' method='get' action='hello.php'>
<h3>PHP example</h3><hr />
Hiện tại đang là sáng hay chiều hay tối? 
<input type='text' name='a' /> 
<input type='submit' name='cmd' value='Ok' />
</form>
</html>

<?php
	}
?>