<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="10_com_account.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar.html'); ?>

    <div id="main">
    <div id="comment">
    	<p>MICE STAR will help your company/organization to create & manage your MICE related activities and promote your services, share your events, and easy to synchronize with your smart phone, table PC and even Smart TV!
</p>
		<hr size="2"></hr>
    </div>
	<div class="com_logo_image">
		<img src="./image/box.png">
	</div>
	<table class="com_account_table">
		<tr>
			<td class="com_account_name">Name of Company</td>
			<td><input type="text" class="com_account_text"></td>
		</tr>
		<tr>
			<td class="com_account_name">Business Category</td>
			<td>
				<select>
					<option>Travel Agent</option>
					<option>Accommodation</option>
					<option>Food&Beverage</option>
					<option>Transportation</option>
					<option>MICE</option>
					<option>Education</option>
					<option>Research</option>
					<option>Media</option>
					<option>Government</option>
					<option>Association/Org.</option>
					<option>Etc.</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="com_account_name">User Name</td>
			<td><input type="text" class="com_account_text"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_account_name">E-mail</td>
			<td><input type="email" class="com_account_text"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_account_name">Password</td>
			<td><input type="password" class="com_account_text"></td>	
			<td></td>
		</tr>
		<tr>
			<td class="com_account_name">Company Location</td>
			<td><input type="text" class="com_account_text"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_account_name">Phone Number</td>
			<td><input type="text" class="com_account_text"></td>
			<td></td>
		</tr>
		<tr>
			<td class="com_account_name">Colleagues(optional)</td>
			<td><input type="text" class="com_account_text"></td>
			<td><img src="./image/addmore.png"></td>
		</tr>
	</table>
	<div class="com_account_button_area">
	<input type="button" value="Create My Account">
	<input type="button" value="Cancel">
	</div>
	</div>
	
	<div id="footer">bottom</div>
</div>
</body>
</html>