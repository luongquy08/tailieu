<?php
// Quản lý danh sách tỉnh / thành phố (id char(2), name char (64), primary key (id) ). 
// Gồm các chức năng: Nhập mới, Sửa, Xóa, Tìm kiếm
include ('stdlib.php');
include ('dbtinh.php');
$cmd = $_POST['cmd'];
$ma = trim ($_POST['ma']);
$ten = trim ($_POST['ten']);
$rb = $_POST['rb'];
$c = $_POST['c'];

s_connect ();
tinh_create ();
$errmess = '';
$kq = read_all ('tinh');

switch ($cmd) {
	case 'Nhập':
		if ($ma!='' && $ten!='') {
			if ($rb) 
				tinh_update ($rb);
			else
				tinh_addrow ();
			$rb = $ma = $ten = '';
		} else
			$errmess = 'Mã và tên tỉnh phải khác rỗng!';
		$kq = read_all ('tinh');
		break;
	case 'Xóa':
		if (is_array ($c)) {
			foreach ($c as $key => $val)
				if ($val) 
					del_row ('tinh', 'id', $key);
		} else 
			$errmess = 'Phải đánh dấu 1 dòng muốn xóa!';
		$kq = read_all ('tinh');
		break;
	case 'Tìm':
		$kq = read_some ('tinh', " name like '%{$ten}%' and id like '%{$ma}%'");
		break;
	default:
		if ($rb!='') {
			$tmp = read_some ('tinh', "id='$rb'");
			$r = mysql_fetch_array ($tmp);
			$ma = $r['id'];
			$ten = $r['name'];
		} else 
			$ma=$ten='';
		break;
} 

echo htOpen () . frmOpen ();
echo 'QUẢN LÝ DANH SÁCH TỈNH/THÀNH PHỐ<hr /><br />';
echo '<center>'. tblOpen ('70%', '0');
echo tr (td('Tên Tỉnh/Thành phố:', '40%'). td(textbox('ten', '', '64', $ten, '40'), '60%'));
echo tr (td('Mã Tỉnh/Thành phố:'). td(textbox('ma', '', '2', $ma)));
echo tr (td(cmd('Nhập').cmd('Xóa').cmd('Tìm'), '', '', '', '2'), 'center');
echo tr (td($errmess, '', '', '', '2'), 'center');
echo tblClose ();

echo tblOpen ('90%');
echo tr ( td('STT', '10%') . td('', '5%') . td(rb('rb', '', $rb, '1'), '5%') . td('Mã tỉnh/thành phố', '15%') . td('Tên tỉnh/thành phố', '65%'), 'center');

$ci = 1;
while ($r = mysql_fetch_array ($kq)) {
	echo tr (td($ci++) . td(cb ('c['.$r['id'].']')) . td(rb('rb', $r['id'], $rb, '1')) . td($r['id']) . td($r['name']), 'center');
}

echo tblClose () . '</center>';
echo frmClose () . htClose ()
?>