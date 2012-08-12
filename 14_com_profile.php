<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="14_com_profile.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar_com.html'); ?>

    <div id="main">
	<div class="com_profile_manage">
		<img src="./image/box.png">
	</div>
	<table class="com_profile_table">
		<tr>
			<td class="com_profile_name">Introduction</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">Achievement</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">History of Company</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">Company Logo</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">Language Available</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">Qualification</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">Festival</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="com_profile_name">Core Competition</td>
			<td><input type="text" class="com_profile_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
	</table><br><br>
	<div class="com_profile_button">
		<input type="button" value="Save Changes">
	</div>
	
	<div id="footer">bottom</div>
</div>
</div>
</body>
</html>