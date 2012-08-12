<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
<!--	<link href="layout.css" rel="stylesheet" type="text/css" />-->
		<link href="20_create_event.css" rel="stylesheet" type="text/css" />
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
			<h3>STEP 1 > Create Event</h3>
			<br>
			
			<table class="create_event_table">
				<tr>
					<td class="create_event_name">Project Name</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Save Draft" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">Description</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Save Draft" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">Category</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Select" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">Sub Category</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Create New" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">Date</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Calendar" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">End</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Calendar" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">*City / Country</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Save Draft" class="create_event_button"></td>
				</tr>
				<tr>
					<td class="create_event_name">Venue</td>
					<td><input type="text" class="create_event_text"></td>
					<td><input type="button" value="Search Map" class="create_event_button"></td>
				</tr>
			</table>
			<div class="create_event_save_change">
				<input type="button" value="Save Change">
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
