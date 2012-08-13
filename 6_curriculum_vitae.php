<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="6_curriculum_vitae.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
			<img src="./image/box.png" class="img_profile">
			<table class="tbl1">
				<tr>
					<td class="txt_field">Introduction</td>
					<td><input type="text" class="txtbox_introduction"></td>
					<td><img src="./image/addMore.png"></td>
				</tr>
				<tr>
					<td class="txt_field">Job Achievement<br>&Carrier History</td>
					<td><input type="text" class="txtbox_job"></td>
					<td><img src="./image/addMore.png"></td>
				</tr><tr>
					<td class="txt_field">Education History</td>
					<td><input type="text" class="txtbox_education"></td>
					<td><img src="./image/addMore.png"></td>
				</tr><tr>
					<td class="txt_field">Miscellaneous</td>
					<td><input type="text" class="txtbox_miscell"></td>
					<td><img src="./image/addMore.png"></td>
				</tr><tr>
					<td class="txt_field">Language Availiable</td>
					<td><input type="text" class="txtbox_language"></td>
					<td><img src="./image/addMore.png"></td>
				</tr><tr>
					<td class="txt_field">Qualification&Traning</td>
					<td><input type="text" class="txtbox_qualification"></td>
					<td><img src="./image/addMore.png"></td>
				</tr><tr>
					<td class="txt_field">Skills</td>
					<td><input type="text" class="txtbox_skills"></td>
					<td><img src="./image/addMore.png"></td>
				</tr>
			</table><br><br>
			<input type="button" value="Save Changes" id="btn_purple" class="btn_save">
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>