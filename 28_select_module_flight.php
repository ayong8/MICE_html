<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="28_select_module_flight.css" rel="stylesheet" type="text/css" />
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
				<p class="contents_textmenu">Incentive>create program>select module>Flight</p>
				<hr size="2" width="600px"></hr>
				<h3>STEP 2 > Select Module to Organize</h3>
				<hr size="1" width="100%"></hr>
				
				<?php include('contents_submenubar.html'); ?>
				
				<hr size="1" width="100%"></hr>
				<p class="p_">
					<span class="span_day">Day 1</span>
					<span class="span_drag_module">
						<span class="span_module">Flight</span>
						<span><i>Drag and put a module here</i></span>
					</span>
				</p>
				<ul class="ul_field">
					<li>Departure</li>
					<li>Date & Time</li>
					<li>Flight No</li>
					<li>Arrival</li>
					<li>Date & Time</li>
				</ul>
				<ul class="ul_txtbox">
					<li><input type="text" id="txtbox1" class="txtbox_city"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><img src="./image/+.png"><img src="./image/-.png"></li>
				</ul>
				<input type="text" class="txtbox_description"><br>
				<ul class="ul_txtbox">
					<li><input type="text" id="txtbox1" class="txtbox_city"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><input type="text" id="txtbox1" class="txtbox"></li>
					<li><img src="./image/+.png"><img src="./image/-.png"></li>
				</ul>
				<div class="bottom_btn">
					<input type="button" class="btn_continue" value="Continue">
					<input type="button" class="btn_cancel" value="Cancel">
					<input type="button" class="btn_finish" value="Finish">
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