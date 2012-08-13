<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="8_my_interest.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
		    <p class="txt_comment">I am interested in the following category and show me the related information while new information comes in each category updated.
			</p>
			<br><br>
			<img src="./image/box.png" class="img_interest">
			<table class="tbl1">
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
				<tr>
					<td><input type="button" value="select" class="btn_select"></td>
					<td><input type="button" value="dismiss" class="btn_dismiss"></td>
					<td><input type="text" id="txtbox1" class="txtbox1"></td>
				</tr>
			</table><br><br>
				<input type="button" value="Save Changes" id="btn_purple" class="btn_save">
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>