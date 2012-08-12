
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout.css" rel="stylesheet" type="text/css">
<link href="11_com_signin_complete.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
  	<? include('header.html'); ?>	
  <div id="right">
<p>Note & Direction</p>  
<p>1. Users  who has already have an ID and password can log-in when they input email address., and password</p> 

<p>2. If they do not have, users can access this networking when they synchronize with other social network .</p>

<p>When click the icons of social network, open API window appear and verify their ID and password</p>

<p>3. Users also can create his/her own ID here. When click, input filed will be shown to the next page. </p>

<p>4. For users conveniences, do not ask for double checking password, etc.</p>
  </div>
  <div id="main">
  	<h3>Welcome to MICE STAR & Thanks for Joining us!</h3>
  	<hr size="2"></hr>
	<div class="com_signin_complete_image">
		<img src="./image/box.png">
	</div>
	<table class="com_signin_complete_table">
		<tr>
			<td class="com_signin_complete_name">Company Name</td>
			<td class="com_signin_complete_value">MICE STAR</td>
		</tr>
		<tr>
			<td class="com_signin_complete_name">Business<br>Category</td>
			<td class="com_signin_complete_value">Organization</td>
		</tr>
		<tr>
			<td class="com_signin_complete_name">Your Name</td>
			<td class="com_signin_complete_value">Bobby Kim</td>
		</tr>
		<tr>
			<td class="com_signin_complete_name">E-mail ID</td>
			<td class="com_signin_complete_value">kimsik@mice.com</td>
		</tr>
		<tr>
			<td class="com_signin_complete_name">Location</td>
			<td class="com_signin_complete_value">L.A, USA</td>
		</tr>
		<tr>
			<td class="com_signin_complete_name">Phone Number</td>
			<td class="com_signin_complete_value">+1)213-665</td>
		</tr>
		<tr>
			<td class="com_signin_complete_name">Colleagues</td>
			<td class="com_signin_complete_value">Bobby Kim</td>
		</tr>
	</table><br>
	<div class="com_signin_complete_button">
		<input type="button" value="Go Next Step">
		<input type="button" value="Home">
	</div>
  </div>
  <div id="footer">bottom</div>
</div>
</body>
</html>