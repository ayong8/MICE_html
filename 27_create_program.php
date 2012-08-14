<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="27_create_program.css" rel="stylesheet" type="text/css" />
			<link href="header.css "rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div id="wrap">
			<div id="header">
				<div class="title2">
			  		<h2>MICE Star</h2>
			  		<p>Organize & Manage your MICE smart!</p>
			  	</div>
			  	<input type="search" class="searchbar2" name="search">
			  	<p class="login_window2">Welcome Bobby Kim<br>Messages | Settings | Sign Out</p>
			  	<br><br>
			  	<hr size="2" width="100%"></hr>
			  	<table class="menubar2" frame="void">
					<tr>
						<td><input type="button" value="News" class="menubar2_button" style="background-color:red"> </td>
						<td><input type="button" value="Application" class="menubar2_button" style="background-color:orange"></td>
						<td><input type="button" value="Meetings" class="menubar2_button" style="background-color:yellow"></td>
						<td><input type="button" value="Incentive" class="menubar2_button" style="background-color:green"></td>
						<td><input type="button" value="Convention" class="menubar2_button" style="background-color:green"></td>
						<td><input type="button" value="Exhibition" class="menubar2_button" style="background-color:skyblue"></td>
						<td><input type="button" value="Festivals" class="menubar2_button" style="background-color:blue"></td>
						<td><input type="button" value="Events" class="menubar2_button" style="background-color:purple"></td>
						<td><input type="button" value="Travel Operator" class="menubar2_button" style="background-color:yellow"></td>
						<td><input type="button" value="Recruiting" class="menubar2_button" style="background-color:blue"></td>
						<td><input type="button" value="Destination" class="menubar2_button" style="background-color:red"></td>
					</tr>
				</table>
			  	<hr size="2" width="100%"></hr>
			</div>
			<div id="sidebar">
				<img src="./image/profile.png" class="img_profile"><br>
				<p class="txt_name">Bobby S, Kim</p>
				<hr size="2" width="100px"></hr>
				<p class="txt_partners">Partners&Friends</p>
			</div>
			<div id="contents">
				<p>partners&Friends > Search</p>
				<hr size="2" width="600px"></hr>
				<h3>STEP 1 > Create Event</h3>
				<br>				
				<table class="tbl1">
					<tr>
						<td class="txt_field">Project Name</td>
						<td><input type="text" id="txtbox2" class="txtbox1"></td>
						<td><input type="button" value="Save Draft" id="btn_green" class="btn1"></td>
					</tr>
					<tr>
						<td class="txt_field">Description</td>
						<td><input type="text" id="txtbox2" class="txtbox1"></td>
						<td><input type="button" value="Save Draft" id="btn_green" class="btn1"></td>
					</tr>
					<tr>
						<td class="txt_field">Category</td>
						<td><input type="text" id="txtbox2" class="txtbox1"></td>
						<td><input type="button" value="Select" id="btn_green" class="btn1"></td>
					</tr>
					<tr>
						<td class="txt_field">Sub Category</td>
						<td><input type="text" id="txtbox2" class="txtbox1"></td>
						<td><input type="button" value="Create New" id="btn_green" class="btn1"></td>
					</tr>
					<tr>
						<td class="txt_field">Date</td>
						<td><input type="text" id="txtbox2" class="txtbox2">
							<input type="text" id="txtbox2" class="txtbox3"></td>
						<td><input type="button" value="Calendar" id="btn_green" class="btn1"></td>
					</tr>
					<tr>
						<td class="txt_field">End</td>
						<td><input type="text" id="txtbox2" class="txtbox2">
							<input type="text" id="txtbox2" class="txtbox3"></td>
						<td><input type="button" value="Calendar" id="btn_green" class="btn1"></td>
					</tr>
				</table>
				<br>
				<input type="button" value="Go to Step" id="btn_purple" class="btn_save">
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