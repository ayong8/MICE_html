<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>div 태그</title>
	<link href="9_add_card.css" rel="stylesheet" type="text/css" />
	<link href="layout3.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">
			<? include('header.html'); ?>	
			<? include('menubar.html'); ?>
		<div id="contents">
			<p class="txt_notice1">I will pay or buy when the actual deal happens by the following payment methods; </p>
			<img src="./image/box.png" class="img_addcard">
			<br><br>
			<table class="tbl1">
				<tr>
					<td class="txt_field">Credit Card Type</td>
					<td class="txt_field">Credit Card Number<br>(*16 digit)</td>
					<td class="txt_field">Cardholder"s Name<br>(as it appear on the card)</td>
					<td class="txt_field">Expiration Date<br>(Month/Year)</td>
				</tr>
				<tr>
					<td>
						<select class="select_cardtype">
							<option>VISA</option>
							<option>Master Card</option>
							<option>American Express</option>
							<option>Diners Club</option>
							<option>JCB</option>
						</select>
					</td>
					<td><input type="text" id="txtbox1" class="txtbox_cardnum"></td>
					<td><input type="text" id="txtbox1" class="txtbox_name"></td>
					<td><input type="text" id="txtbox1" class="txtbox_date"></td>
				</tr>
			</table><br>
			<br>
			<input type="checkbox" class="chkbox_default"> Use this credit card as a default payment when the deal happens.
			<br><br><br>
			<p class="btn_addmorecard">Add More Credit Card! <img src="./image/addMoreCard.png"></p>
			<br><br>
			<input type="button" class="btn_save" value="Save Changes">
			<br><br><br>
			<p class="txt_notice2">*For security problem, payment system is<br> to be connected  with Pay Pal directly</p>
		</div>
		<div id="footer">bottom
		</div>
	</div>
</body>
</html>