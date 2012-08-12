<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="13_com_contact_info.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar_com.html'); ?>

    <div id="main">
	<div class="com_contact_info_manage">
		<img src="./image/box.png">
	</div>
	<table class="com_contact_info_table">
		<tr>
			<td class="com_contact_info_name">E-mail</td>
			<td><input type="email" class="com_contact_info_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_contact_info_name">Profile</td>
			<td>
				<select class="com_contact_info_text" style="width:80px">
					<option>office</option>
					<option>Home</option>
					<option>Mobile</option>
					<option>Others</option>
				</select> 
				<input type="text" class="com_contact_info_text" style="width:60px"> 
				<input type="text" class="com_contact_info_text" style="width:150px">
			</td>
			<td><img src="./image/addMore.png"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_contact_info_name">Address</td>
			<td><input type="text" class="com_contact_info_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_contact_info_name">Zip Code</td>
			<td><input type="text" class="com_contact_info_text"></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_contact_info_name">Fax</td>
			<td>
				<select class="com_contact_info_text" style="width:80px">
					<option>office</option>
					<option>Home</option>
					<option>Mobile</option>
					<option>Others</option>
				</select> 
				<input type="text" class="com_contact_info_text" style="width:210px">
			</td>
			<td><img src="./image/addMore.png"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_contact_info_name">Personal Media</td>
			<td><select class="com_contact_info_text" style="width:80px">
				<option>Google+</option>
				<option>Facebook</option>
				<option>Twitter</option>
				<option>Thumblr</option>
				<option>My Space</option>
				<option>Instagram</option>
				<option>Others</option>
			</select> <input type="text" class="com_contact_info_text" style="width:210px"></td>
			<td><img src="./image/addMore.png"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" class="com_contact_info_text"></td>
			<td><img src="./image/addMore.png"></td>
			<td></td>
		</tr>
	</table><br>
	<div class="com_contact_info_button">
		<input type="button" value="Save Changes">
	</div><br>
	</div>
	
	<div id="footer">bottom</div>
</div>
</body>
</html>