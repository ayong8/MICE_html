<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="15_com_category.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar_com.html'); ?>

    <div id="main">
	<div class="com_category_manage">
		<img src="./image/box.png">
	</div>
	<table class="com_category_table">
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><u>Public</u>   <u>Share</u>   <u>Private</u></td>
		</tr>
		<tr>
			<td class="com_category_name">News</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Application</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Meetings</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Incentives</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Conventions</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Exhibition</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Festival</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
		<tr>
			<td class="com_category_name">Events</td>
			<td><input type="text" class="com_category_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td><input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox">
			  <input type="checkbox" class="com_category_checkbox"></td>
		</tr>
	</table><br><br>
		<div class="com_category_button">
			<input type="button" value="Save Changes">
		</div>
	</div>
	
	<div id="footer">bottom</div>
</div>
</body>
</html>
