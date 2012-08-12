<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
<!--	<link href="layout.css" rel="stylesheet" type="text/css" />-->
		<link href="22_create_event2.css" rel="stylesheet" type="text/css" />
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
			<p>partners&Friends > Search</p>
			<hr size="2" width="600px"></hr>
			<h3>STEP 2 ></h3>
			<br>
			
			<table class="create_event2_table">
				<tr>
					<td class="create_event2_name">Set Your Staffs</td>
					<td><input type="text" class="create_event2_text1"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text1"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text1"></td>
					<td><input type="button" class="create_event2_button2" value="calendar"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text1"></td>
					<td><input type="button" class="create_event2_button2" value="calendar"></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3" class="create_event2_create_field">Create field that you want to get information of participants</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text2">
						<input type="text" class="create_event2_text3"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text2">
						<input type="text" class="create_event2_text3"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text2">
						<input type="text" class="create_event2_text3"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text2">
						<input type="text" class="create_event2_text3"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="create_event2_text2">
						<input type="text" class="create_event2_text3"></td>
					<td><input type="button" class="create_event2_button1" value="+">
						<input type="button" class="create_event2_button1" value="-"></td>
				</tr>
			</table>
			<div class="create_event2_button_area">
				<input type="button" value="Save Change">  
				<img src="./image/gonext.png">  
				<input type="button" value="Finish">
			</div>
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
