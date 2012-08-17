<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="23_preview.css" rel="stylesheet" type="text/css" />
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
				<p>Meetings > Create Events > Preview</p>
				<hr size="2" width="600px"></hr>
				<br>
				
				<table class="tbl1">
					<tr>
						<td class="txt_field">Organizer</td>
						<td><input type="text" class="txtbox3">
							<input type="button" class="btn_email" value="E-mail">
							<input type="button" class="btn_phone" value="Phone"></td>
					</tr>
					<tr>
						<td class="txt_field">*Project Name</td>
						<td><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">*Description</td>
						<td><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">*Category</td>
						<td><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">Sub Category</td>
						<td><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">*Date&Time</td>
						<td><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">*City / Country</td>
						<td><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">Staffs</td>
						<td><input type="text" class="txtbox2">
							<input type="button" class="btn_map" value="map"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" class="txtbox3">
							<input type="button" class="btn_email" value="E-mail">
							<input type="button" class="btn_phone" value="Phone"></td>
					</tr>
				</table>
				<div class="bottom">
					<input type="button" value="Apply to this event">  
					<input type="button" value="Invite friends">  
					<input type="button" value="Share this event">
				</div>
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