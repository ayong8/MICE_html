
3<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout.css" rel="stylesheet" type="text/css"
<link href="3_signin_complete.css" rel="stylesheet" type="text/css">
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
  	<h3>Welcome to MICE STAR & Thanks for Joining us!</h3><br>
  	<hr size="2"><br>
  	<li>Show good words weekly to everyone sign up finally (Related  to travel  & tourism) </li>
	<li style="font-size:20px">(Example)  Travel is one of the best way for your refreshment from your daily life! </li>
	<div class="signin_complete_image">
		<img src="./image/box.png">
	</div>
	<div class="signin_result">
		<p>Your Name    Bobby Kim<br>
		E-mail ID    kimsik@gmail.com<br>
		Location	 L.A, USA<br></p>
	</div>
		Profile creation is 25% done
		<progress value="22" max="100"></progress>
		<br>
		<input type="button" value="Go Next Step" class="signin_complete_button">
		<input type="button" value="Home" class="signin_complete_button">
  </div>
  <div id="footer">bottom</div>
</div>
</body>
</html>