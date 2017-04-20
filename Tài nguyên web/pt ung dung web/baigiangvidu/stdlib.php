<?php
function htOpen ($title='notitle') {
	return "<html><head><title>$title</title><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body>";
}

function htClose () {
	return '</body></html>';
}

function frmOpen ($name='myform', $method='post', $style='', $action='') {
	$style = $style=='' ? '' : " style='$style'";
	$action = $action=='' ? ' action="' . htmlentities($_SERVER['PHP_SELF']) . '"' : " action='$action'";
	return "<form name='$name' method='$method'{$action}{$style} />";
}

function frmClose () {
	return '</form>';
}

function tblOpen ($width='100%', $border='1', $style='', $cellpadding='0') {
	$style = $style==' ' ? '' : " style='$style'";
	return "<table width='$width' border='$border' cellpadding='$cellpadding'{$style}>"; 
}

function tr ($content, $align='', $valign='') {
	$align = $align=='' ? '' : " align='$align'";
	$valign = $valign=='' ? '' : " valign='$valign'";
	return "<tr{$align}{$valign}>$content</tr>";
}

function td ($content='&nbsp;', $width='', $align='', $style='', $colspan='', $rowspan='', $valign='') {
	$align = $align=='' ? '' : " align='$align'";
	$valign = $valign=='' ? '' : " valign='$valign'";
	$style = $style=='' ? '' : " style='$style'";
	$colspan = $colspan=='' ? '' : " colspan='$colspan'";
	$rowspan = $rowspan=='' ? '' : " rowspan='$rowspan'";
	$width = $width=='' ? '' : " width='$width'";
	return "<td{$width}{$align}{$valign}{$colspan}{$rowspan}{$style}>$content</td>"; 
}

function tblClose () {
	return '</table>';
}

function textbox ($name='txt', $style='', $maxlength='', $value='', $size='') {
	$style = $style=='' ? '' : " style='$style'";
	$maxlength = $maxlength=='' ? '' : " maxlength='$maxlength'";
	$size = $size=='' ? '' : " size='$size'";
	$value = $value=='' ? '' : " value='$value'";
	return "<input type='text' name='$name'{$size}{$maxlength}{$value}{$style} />";	
}

function cmd ($value='Ok', $name='cmd', $style='') {
	$style = $style=='' ? '' : " style='$style'";
	return "<input type='submit' name='$name' value='$value'{$style} />";
}

function rb ($name='rb', $value='', $curval=' ', $submit='') {
	$checked = $value==$curval ? ' checked' : '';
	$submit = $submit=='' ? '' : ' onClick=submit()';
	return "<input type='radio' name='$name' value='$value'{$checked}{$submit} />";
}

function cb ($name='cb', $value='1', $curval='') {
	$checked = $value==$curval ? ' checked' : '';
	return "<input type='checkbox' name='$name' value='$value'{$checked} />";
}

?>