<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="24_apply_event.css" rel="stylesheet" type="text/css" />
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
				<p>Meetings > Create Events > Apply to this event</p>
				<hr size="2" width="600px"></hr>
				<br>
				<input type="search" class="searchbar1">
				<table class="tbl1">
					<tr>
						<td colspan="2"><p class="txt_apply">Registration for this event</p>
						<input type="button" class="btn_apply" value="Apply"></td>
					</tr>
					<tr>
						<td class="txt_field">Name</td>
						<td ><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">Gender</td>
						<td ><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">E-mail</td>
						<td ><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">Telephone</td>
						<td ><input type="text" class="txtbox1"></td>
					</tr>
					<tr>
						<td class="txt_field">Mobile</td>
						<td ><input type="text" class="txtbox1"></td>
					</tr>
				</table>
				<div class="bottom">
					<input type="button" id="btn_purple" value="Submit">  
					<input type="button" id="btn_purple" value="Cancel">  
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