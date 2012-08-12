<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="12_com_primary_info.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar_com.html'); ?>

<div id="main">

<div class="com_primary_info_profile">
	<img src="./image/box.png">
</div>
	<table class="com_primary_info_table">
	<tr>
		<td class="com_primary_info_name">My Icon/Picture</td>
		<td><input type="text" class="com_primary_info_text"></td>
		<td><input type="button" value="Upload" class="com_primary_info_button"></td>
		<td></td>
	</tr>
	<tr>
		<td class="com_primary_info_name">User Name<br></td>
		<td><input type="text" class="com_primary_info_text"><br></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td class="com_primary_info_name">E-mail</td>
		<td><input type="email" class="com_primary_info_text"></td>
		<td></td>
		<td><input type="button" value="Save" align="right" class="com_primary_info_button"></td>
	</tr>
	<tr>
		<td class="com_primary_info_name">Company<br>Phone</td>
		<td><input type="text" class="com_primary_info_text"></td>
		<td></td>
		<td></td>
	</tr>
	</table>
	
	<hr size="2"><br>
	
	<div class="com_primary_info_profile">
	<img src="./image/box.png">
	</div>
	
	<table class="com_primary_info_table">
	<tr>
		<td class="com_primary_info_name">Current Password</td>
		<td><input type="password" class="com_primary_info_text"></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td class="com_primary_info_name">New Password</td>
		<td><input type="password" class="com_primary_info_text"></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td class="com_primary_info_name">Re-enter New Password</td>
		<td><input type="password" class="com_primary_info_text"></td>
		<td></td>
		<td><input type="button" value="Save" align="right" class="com_primary_info_button"></td>
	</tr>
	</table>
</div>
  <div id="footer">bottom</div>
</div>
</body>
</html>