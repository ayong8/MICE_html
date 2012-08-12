<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
<!--	<link href="layout.css" rel="stylesheet" type="text/css" />-->
		<link href="18_find_friend.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="container">
		<?php include('header2.html'); ?>
		
		<div id="left">
			<img src="./image/profile.png" class="profile_picture"><br>
			<p class="profile_name">Bobby S, Kim</p>
			<hr size="2" width="75px"></hr>
			<p>Partners&Friends</p>
		</div>
		<div id="main">
			<p>partners&Friends</p>
			<hr size="2" width="600px"></hr>
			<span>Welcome Bobby Kim! Please find your partner company or your friend for collaboration</span>
			<table class="find_friend_login">
				<tr>
					<td><img src="./image/google.png" class="login_image"></td>
					<td><input type="email" class="login_email"></td>
					<td><input type="password" class="login_password"</td>
					<td><input type="button" value="search" class="login_search"></td>
					<td><input type="button" value="cancel" class="login_cencel"></td>
				</tr>
				<tr>
					<td><img src="./image/facebook.png" class="login_image"></td>
					<td><input type="email" class="login_email"></td>
					<td><input type="password" class="login_password"</td>
					<td><input type="button" value="search" class="login_search"></td>
					<td><input type="button" value="cancel" class="login_cencel"></td>
				</tr>
				<tr>
					<td><img src="./image/twitter.png" class="login_image"></td>
					<td><input type="email" class="login_email"></td>
					<td><input type="password" class="login_password"</td>
					<td><input type="button" value="search" class="login_search"></td>
					<td><input type="button" value="cancel" class="login_cencel"></td>
				</tr>
				<tr>
					<td><img src="./image/linkedin.png" class="login_image"></td>
					<td><input type="email" class="login_email"></td>
					<td><input type="password" class="login_password"</td>
					<td><input type="button" value="search" class="login_search"></td>
					<td><input type="button" value="cancel" class="login_cencel"></td>
				</tr>
				<tr>
					<td><img src="./image/yahoo.png" class="login_image"></td>
					<td><input type="email" class="login_email"></td>
					<td><input type="password" class="login_password"</td>
					<td><input type="button" value="search" class="login_search"></td>
					<td><input type="button" value="cancel" class="login_cencel"></td>
				</tr>
				<tr>
					<td><img src="./image/msn.png" class="login_image"></td>
					<td><input type="email" class="login_email"></td>
					<td><input type="password" class="login_password"</td>
					<td><input type="button" value="search" class="login_search"></td>
					<td><input type="button" value="cancel" class="login_cencel"></td>
				</tr>
			</table>
		</div>
		<div id="right">
			<p class="note">Note&Direction</p>
			<p>1. Input his/her e-mail address & password.<br>
				2. When click the ‘search’ button, all list of friends or partners name with profile picture in each network will be shown automatically				(see the next page for the search result)
			</p>
		</div>
		<div id="footer">
		
		</div>
	</div>

</body>
