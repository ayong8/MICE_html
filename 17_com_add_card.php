<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="17_com_add_card.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar_com.html'); ?>

  <div id="main">
	<div class="add_creditcard">
		<img src="./image/box.png">
	</div>
	
	<table>
		<tr>
			<td class="addcard_name">Credit Card Type</td>
			<td>Credit Card Number<br>(*16 digit)</td>
			<td>Cardholder"s Name<br>(as it appear on the card)</td>
			<td>Expiration Date<br>(Month/Year)</td>
		</tr>
		<tr>
			<td><select>
				<option>VISA</option>
				<option>Master Card</option>
				<option>American Express</option>
				<option>Diners Club</option>
				<option>JCB</option>
			</select></td>
			<td><input type="text" class="addcard_text_cardtype"></td>
			<td><input type="text" class="addcard_text_cardnumber"></td>
			<td><input type="text" class="addcard_text_name"></td>
			<td><input type="text" class="addcard_text_date"></td>
		</tr>
	</table><br>
	<p>
	<input type="checkbox" class="default_card_checkbox"> Use this credit card as a default payment when the deal happens.<p>
	<p class="add_morecard">Add More Credit Card! <img src="./image/addMoreCard.png"></p>
	<br><br>
	<div class="addcard_button">
		<input type="button" value="Save Changes">
	</div>
	<br><br>
  </div>
