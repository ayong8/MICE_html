<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="13_com_contact_info.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
			<img src="./image/box.png" class="img_contact">
			<table class="tbl1">
				<tr>
					<td class="txt_field">E-mail</td>
					<td><input type="email" class="txtbox_email"></td>
					<td><img src="./image/addMore.png"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Profile</td>
					<td>
						<select class="select_phone">
							<option>office</option>
							<option>Home</option>
							<option>Mobile</option>
							<option>Others</option>
						</select> 
						<input type="text" class="txtbox_countrycode"> 
						<input type="text" class="txtbox_phonenum">
					</td>
					<td><img src="./image/addMore.png"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Address</td>
					<td><input type="text" class="txtbox_address"></td>
					<td><img src="./image/addMore.png"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Zip Code</td>
					<td><input type="text" class="txtbox_zipcode"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Fax</td>
					<td>
						<select class="select_fax">
							<option>office</option>
							<option>Home</option>
							<option>Mobile</option>
							<option>Others</option>
						</select> 
						<input type="text" class="txtbox_faxnum">
					</td>
					<td><img src="./image/addMore.png"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Company Media</td>
					<td>
						<select class="select_sns">
							<option>Google+</option>
							<option>Facebook</option>
							<option>Twitter</option>
							<option>Thumblr</option>
							<option>My Space</option>
							<option>Instagram</option>
							<option>Others</option>
						</select> 
						<input type="text" class="txtbox_sns">
					</td>
					<td><img src="./image/addMore.png"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" class="txtbox_homepage"></td>
					<td><img src="./image/addMore.png"></td>
					<td></td>
				</tr>
			</table>
			<input type="button" value="Save Changes" id="btn_purple" class="btn_save">
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>