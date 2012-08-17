<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="26_share_event.css" rel="stylesheet" type="text/css" />
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
				<p class="contents_txtmenu">Meetings > Invite Friends</p>
				<hr size="2" width="600px"></hr>
				<p class="txt_share_friends">Share Friends</p>
				<br>
				<p class="txt_people">People <br>who<br> shared this</p>
				 
					<ul class="ul_friend">
					<li>
						<p><img src="./image/profile.png" class="img_profile">
							Bobby S. Kim</p>
						
					</li>
					<li>
						<p><img src="./image/profile.png" class="img_profile">
							Bobby S. Kim</p>
						
					</li>
					<li>
						<p><img src="./image/profile.png" class="img_profile">
							Bobby S. Kim</p>
						
					</li>
					<li>
						<p><img src="./image/profile.png" class="img_profile">
							Bobby S. Kim</p>
						
					</li>
				</ul>
				<br>
				<hr size="1" width="100%"></hr>
				<ul class="ul_sns">
					<li><input type="checkbox" class="chkbox1">
						<img src="./image/google.png">
					</li>
					<li><input type="checkbox" class="chkbox1">
						<img src="./image/facebook.png">
					</li>
					<li><input type="checkbox" class="chkbox1">
						<img src="./image/twitter.png">
					</li>
					<li><input type="checkbox" class="chkbox1">
						<img src="./image/linkedin.png">
					</li>
				</ul>
				<br>
				<ul class="ul_event_field">
					<li>Project</li>
					<li>Site Link</li>
					<li>Message</li>
				</ul>
				<ul class="ul_event_txt">
					<li>1</li>
					<li>1</li>
					<li>1</li>
				</ul>
				<div class="bottom">
					<input type="button" id="btn_purple" value="Save&Share">  
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