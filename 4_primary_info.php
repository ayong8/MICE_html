<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="4_primary_info.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
			<div class="div_profile">
				<img src="./image/box.png" class="img_profile">
				<table class="tbl1">
					<tr>
						<td class="txt_field">My Icon/Picture</td>
						<td><input type="text" id="txtbox1" class="txtbox1"></td>
						<td><input type="button" value="Upload" id="btn_purple" class="btn_upload"></td>
						<td></td>
					</tr>
					<tr>
						<td class="txt_field">User Name<br></td>
						<td><input type="text" id="txtbox1" class="txtbox1"><br></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="txt_field">Gender</td>
						<td>
							<select id="txtbox1" class="txtbox1">
								<option>Male</option>
								<option>Female</option>
							</select>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td id="txtbox1" class="txt_field">E-mail</td>
						<td><input type="email" class="txtbox1"></td>
						<td></td>
						<td><input type="button" value="Save" align="right" id="btn_purple" class="btn_save"></td>
					</tr>
				</table>
			</div>
			<br>
			<hr size="1" width="100%"></hr>
			<br>
			<div class="div_password">
				<img src="./image/box.png" class="img_password">
				<table class="tbl1">
					<tr>
						<td class="txt_field">Current Password</td>
						<td><input type="password" id="txtbox1" class="txtbox1"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="txt_field">New Password</td>
						<td><input type="password" id="txtbox1" class="txtbox1"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="txt_field">Re-enter New Password</td>
						<td><input type="password" id="txtbox1" class="txtbox1"></td>
						<td></td>
						<td><input type="button" value="Save" id="btn_purple" class="btn_save"></td>
					</tr>
				</table>
			</div>
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>