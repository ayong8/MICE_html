<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="7_category.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
			<img src="./image/box.png" class="img_category">
			<table class="tbl1">
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="txt_chkbox_field"><u>Public</u>     <u>Share</u>     <u>Private</u></td>
				</tr>
				<tr>
					<td class="txt_field">News</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Application</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Meetings</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Incentives</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Conventions</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Exhibition</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Festival</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Events</td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
					<td><img src="./image/addMore.png"></td>
					<td><input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1">
					  <input type="checkbox" class="chkbox1"></td>
				</tr>
			</table><br><br>
			<input type="button" value="Save Changes" id="btn_purple" class="btn_save">
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>