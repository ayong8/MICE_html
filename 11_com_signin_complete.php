<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="3_signin_complete.css" rel="stylesheet" type="text/css">
	<link href="layout3.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrap">
			<? include('header.html'); ?>	
		<div id="contents">
			<h3 class="txt_welcome">Welcome to MICE STAR & Thanks for Joining us!</h3><br>
  			<hr size="2"></hr><br>
  			<ul class="ul_txt">
  				<li>Show good words weekly to everyone sign up finally (Related  to travel  & tourism) </li>
				<li style="font-size:20px">(Example)  Travel is one of the best way for your refreshment from your daily life! </li>
			</ul>
			<div class="img_travel">
				<img src="./image/box.png">
			</div>
			<table class="tbl1">
				<tr>
					<td class="txt_result_field">Company Name</td>
					<td class="txt_result_value">MICE STAR</td>
				</tr>
				<tr>
					<td class="txt_result_field">Business Category</td>
					<td class="txt_result_value">Organization</td>
				</tr>	
				<tr>
					<td class="txt_result_field">Your Name</td>
					<td class="txt_result_value">kimsik@mice.com</td>
				</tr>	
				<tr>
					<td class="txt_result_field">E-mail ID</td>
					<td class="txt_result_value">kimsik@gmail.com</td>
				</tr>	
				<tr>
					<td class="txt_result_field">Location</td>
					<td class="txt_result_value">L.A, USA</td>
				</tr>	
				<tr>
					<td class="txt_result_field">Phone Number</td>
					<td class="txt_result_value">+1) 213-666-7787</td>
				</tr>	
				<tr>
					<td class="txt_result_field">Colleagues</td>
					<td class="txt_result_value">Bobby Kim | bobby@mice.com</td>
				</tr>		
			</table>		
			<div class="bottom">
				<input type="button" value="Go Home" class="btn_gohome">
				<input type="button" value="Edit Profile Settings" class="btn_edit">
			</div>
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>