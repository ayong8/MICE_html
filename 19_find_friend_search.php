<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="19_find_friend_search.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div id="wrap">
			<?php include('header2.html'); ?>
			
			<div id="sidebar">
				<img src="./image/profile.png" class="img_profile"><br>
				<p class="txt_name">Bobby S, Kim</p>
				<hr size="2" width="100px"></hr>
				<p class="txt_partners">Partners&Friends</p>
			</div>
			<div id="contents">
				<p class="contents_txtmenu">partners&Friends > Search</p>
				<hr size="2" width="600px"></hr>
				<table>
					<tr>
						<td><img src="./image/google.png" class="img_sns"></td>
						<td><input type="email" id="txtbox3" class="txtbox_email"></td>
						<td><input type="password" id="txtbox3" class="txtbox_password"</td>
						<td><input type="button" value="search" id="btn_purple" class="btn_search"></td>
					</tr>
				</table>
				<hr size="2" width="600px"></hr>
				<p class="contents_txtmenu">Search result > You have total 1,287 partners or friends</p>
				<br>
				<input class="contents_searchbar" type="search" name="search">
				<br>
				<table class="tbl2">
					<tr>
						<td><img src="./image/profile.png" class="profile_picture"></td>
						<td class="txt_name">Bobby S. Kim |  Jane Tour & DMC</td>
						<td><input type="button" value="ASK TO JOIN" id="btn_purple" class="btn_asktojoin"></td>
						<td><input type="button" value="Delete" id="btn_purple" class="btn_delete"></td>
					</tr>
					<tr>
						<td><img src="./image/profile.png" class="profile_picture"></td>
						<td class="txt_name">Bobby S. Kim |  Jane Tour & DMC</td>
						<td><input type="button" value="ASK TO JOIN" id="btn_purple" class="btn_asktojoin"></td>
						<td><input type="button" value="Delete" id="btn_purple" class="btn_delete"></td>
					</tr>
					<tr>
						<td><img src="./image/profile.png" class="profile_picture"></td>
						<td class="txt_name">Bobby S. Kim |  Jane Tour & DMC</td>
						<td><input type="button" value="ASK TO JOIN" id="btn_purple" class="btn_asktojoin"></td>
						<td><input type="button" value="Delete" id="btn_purple" class="btn_delete"></td>
					</tr>
				</table>
			</div>
			<div id="sidebar_ad">
				<p class="sidebar_ad_title">Note&Direction</p>
				<p class="sidebar_ad_content">1. Input his/her e-mail address & password.<br>
					2. When click the ‘search’ button, all list of friends or partners name with profile picture in each network will be shown automatically				(see the next page for the search result)
				</p>
			</div>
			<div id="footer">		
			</div>
		</div>
	</body>
</html>