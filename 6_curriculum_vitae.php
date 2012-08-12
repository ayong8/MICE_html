<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>div 태그</title>
<link href="layout2.css" rel="stylesheet" type="text/css" />
<link href="6_curriculum_vitae.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<?php include('header.html'); ?>
	<?php include('menubar.html'); ?>

    <div id="main">
	<div class="curriculum_vitae_manage">
		<img src="./image/box.png">
	</div>
	<table class="curriculum_vitae_table">
		<tr>
			<td class="curriculum_vitae_name">Introduction</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
		<tr>
			<td class="curriculum_vitae_name">Job Achievement<br>&Carrier History</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr><tr>
			<td class="curriculum_vitae_name">Education History</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr><tr>
			<td class="curriculum_vitae_name">Miscellaneous</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr><tr>
			<td class="curriculum_vitae_name">Language Availiable</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr><tr>
			<td class="curriculum_vitae_name">Qualification&Traning</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr><tr>
			<td class="curriculum_vitae_name">Skills</td>
			<td><input type="text" class="curriculum_vitae_text"></td>
			<td><img src="./image/addMore.png"></td>
		</tr>
	</table><br><br>
	<input type="button" value="Save Changes" class="curriculum_vitae_button">
	</div>
	
	<div id="footer">bottom</div>
</div>
</body>
</html>