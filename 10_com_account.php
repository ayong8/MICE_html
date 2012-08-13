<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="10_com_account.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
		    <p class="txt_notice">MICE STAR will help your company/organization to create & manage your MICE related activities and promote your services, share your events, and easy to synchronize with your smart phone, table PC and even Smart TV!
			</p>
			<hr size="2"></hr>
			<img src="./image/box.png" class="img_com">
			<table class="tbl1">
				<tr>
					<td class="txt_field">Name of Company</td>
					<td><input type="text" class="txtbox1"></td>
				</tr>
				<tr>
					<td class="txt_field">Business Category</td>
					<td>
						<select class="select_business">
							<option>Travel Agent</option>
							<option>Accommodation</option>
							<option>Food&Beverage</option>
							<option>Transportation</option>
							<option>MICE</option>
							<option>Education</option>
							<option>Research</option>
							<option>Media</option>
							<option>Government</option>
							<option>Association/Org.</option>
							<option>Etc.</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="txt_field">User Name</td>
					<td><input type="text" class="txtbox1"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">E-mail</td>
					<td><input type="email" class="txtbox1"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Password</td>
					<td><input type="password" class="txtbox1"></td>	
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Company Location</td>
					<td><input type="text" class="txtbox1"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Phone Number</td>
					<td><input type="text" class="txtbox1"></td>
					<td></td>
				</tr>
				<tr>
					<td class="txt_field">Colleagues(optional)</td>
					<td><input type="text" class="txtbox1"></td>
					<td><img src="./image/addmore.png"></td>
				</tr>
			</table>
			<div class="bottom_btn">
				<input type="button" value="Create My Account" class="btn_create">
				<input type="button" value="Cancel" class="btn_cancel">
			</div>
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>