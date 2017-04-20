<?php
// Các hàm truy xuất CSDL Tỉnh/Thành phố

function s_connect () {
	$con = mysql_connect (localhost, 'root', '1253') or die ('Could not connect to the DB Server');
	mysql_query ('create database if not exists test') or die ('Could not create database');
	mysql_select_db ('test', $con);
}

function tinh_create () {
	mysql_query ('create table if not exists tinh (id char(2) not null default "", name varchar(64) not null default "", primary key(id))') or die ('Could not create table!');
}

function read_all ($tblname) {
	$kq = mysql_query ("select * from $tblname") or die ("Lỗi: select * from $tblname");
	return $kq;
}

function read_some ($tblname, $where='') {
	$where = $where=='' ? '' : " where $where";
	$kq = mysql_query ("select * from $tblname{$where}") or die ("select * from $tblname{$where}");
	return $kq;
}

function tinh_addrow () {
	global $ma, $ten;
	mysql_query ("insert into tinh values ('$ma', '$ten')");
}

function tinh_update ($key) {
	global $ma, $ten;
	mysql_query ("update tinh set id='$ma', name='$ten' where id='$key'");
}

function del_row ($tblname, $fid, $key) {
	mysql_query ("delete from $tblname where $fid='$key'");
}

?>