<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="2_signin.css" rel="stylesheet" type="text/css">
	<link href="layout2.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrap">
			<? include('header.html'); ?>	
		<div id="contents">
			<ul class="ul_field">
  				<li>*Name</li>
  				<li>*E-mail address</li>
  				<li>*Password</li>
  				<li>*Location</li>
  			</ul>
  			<ul class="ul_txtbox">
  				<li><input type="text" value="Input your actual name or nick name" id="txtbox2" class="createID_text"></li>
				<li><input type="email" value="Input your actual e-mail address for verification" id="txtbox2" class="createID_text"></li>
				<li><input type="password" id="txtbox2" class="createID_text"></li>
				<li><input type="text" value="City and Country where you are staying now" id="txtbox2" class="createID_text"></li>
  			</ul><br><br>
  			<input type=button class="bottom_btn" value="Create ID and Sign-in">
		</div>
		<div id="sidebar">
			<p class="sidebar_title">Note & Direction</p>
			<p class="sidebar_content">
				1. Users  who has already have an ID and password can log-in when they input email address., and password
				<br><br>2. If they do not have, users can access this networking when they synchronize with other social network .
				<br><br>When click the icons of social network, open API window appear and verify their ID and password
				<br><br>3. Users also can create his/her own ID here. When click, input filed will be shown to the next page. 
				<br><br>4. For users conveniences, do not ask for double checking password, etc.
			</p>
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>