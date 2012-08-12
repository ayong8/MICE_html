<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout.css" rel="stylesheet" type="text/css">
<link href="2.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="container">

	<?php include "header.html"; ?>
	
  <div id="right">
<p>Note & Direction</p>  
<p>1. Users  who has already have an ID and password can log-in when they input email address., and password</p> 

<p>2. If they do not have, users can access this networking when they synchronize with other social network .</p>

<p>When click the icons of social network, open API window appear and verify their ID and password</p>

<p>3. Users also can create his/her own ID here. When click, input filed will be shown to the next page. </p>

<p>4. For users conveniences, do not ask for double checking password, etc.</p>
  </div>
  <div id="main">
  	<div class="createID_name">
  		*Name<br><br>
  		*E-mail address<br><br>
  		*Password<br><br>
  		*Location<br><br>
  	</div>
  	<div class="createID_text_area">
  		<input type=text value="Input your actual name or nick name" class="createID_text"><br><br><br>
		<input type=email value="Input your actual e-mail address for verification" class="createID_text"><br><br><br>
		<input type=password class="createID_text"><br><br><br>
		<input type=text value="City and Country where you are staying now" class="createID_text"><br><br>
  	</div>

  	<input type=button class="createID_button" value="Create ID and Sign-in">
    </div>
  <div id="footer">bottom</div>
</div>
</body>
</html>