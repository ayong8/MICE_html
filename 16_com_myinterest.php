<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="16_com_myinterest.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar.html'); ?>

    <div id="main">
    <p class="com_myinterest_comment">I am interested in the following category and show me the related information while new information comes in each category updated.
	</p>
	<div class="com_myinterest_manage">
		<img src="./image/box.png">
	</div>
	<table class="com_myinterest_table">
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
		<tr>
			<td><input type="button" value="select" class="com_myinterest_button"></td>
			<td><input type="button" value="dismiss" class="com_myinterest_button"></td>
			<td><input type="text" class="com_myinterest_text"></td>
		</tr>
	</table><br><br>
	<div class="com_myinterest_button_save">
		<input type="button" value="Save Changes"">
	</div>
	</div>
	
	<div id="footer">bottom</div>
</div>
</body>
</html>