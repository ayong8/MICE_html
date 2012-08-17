<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div ??</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="34_select_module_apply.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<div id="wrap">
			<?php include('header2.html'); ?>
			<div id="sidebar">
				<img src="./image/profile.png" class="img_profile"><br>
				<p class="txt_name">Bobby S, Kim</p>
				<hr size="2" width="100px"></hr>
				<p class="txt_partners">Partners&Friends</p>
			</div>
			<div id="contents">
				<p class="contents_textmenu">Incentive>create program>select module>program>apply</p>
				<hr size="2" width="600px"></hr>
				<h3>STEP 2 > Select Module to Organize</h3>
				<hr size="1" width="100%"></hr>
				
				<?php include('contents_submenubar.html'); ?>
				<hr size="1" width="100%"></hr>
				<br>
	
				<table>
					<tr>
						<td class="table_td1"> Field Name </td>
						<td class="table_td2"> Name </td>
						<td> <input type="button" id="btn" class="btn_plus" value="+"> </td>
						<td> <input type="button" id="btn" class="btn_minus" value="-"> </td>
					</tr>
					<tr>
						<td class="table_td1"> Field Name </td>
						<td class="table_td2"> Gender </td>
						<td> <input type="button" id="btn" class="btn_plus" value="+"> </td>
						<td> <input type="button" id="btn" class="btn_minus" value="-"> </td>
					</tr>
					<tr>
						<td class="table_td1"> Field Name </td>
						<td class="table_td2"> Email address </td>
						<td> <input type="button" id="btn" class="btn_plus" value="+"> </td>
						<td> <input type="button" id="btn" class="btn_minus" value="-"> </td>
					</tr>
					<tr>
						<td class="table_td1"> Field Name </td>
						<td class="table_td2"> Telephone number </td>
						<td> <input type="button" id="btn" class="btn_plus" value="+"> </td>
						<td> <input type="button" id="btn" class="btn_minus" value="-"> </td>
					</tr>
					<tr>
						<td class="table_td1"> Field Name </td>
						<td class="table_td2"> Mobile Number </td>
						<td> <input type="button" id="btn" class="btn_plus" value="+"> </td>
						<td> <input type="button" id="btn" class="btn_minus" value="-"> </td>
					</tr>
				</table>
				<br>
				<div class="bottom_btn">
					<input type="button" class="btn_continue" value="Continue">
					<input type="button" class="btn_cancel" value="Cancel">
					<input type="button" class="btn_finish" value="Finish">
				</div>
			</div>
			<div id="sidebar_ad">
				<p class="sidebar_ad_title">Note&Direction</p>
				<p class="sidebar_ad_content">1. Input his/her e-mail address & password.<br>
					2. When click the ‘search’ button, all list of friends or partners name with profile picture in each network will be shown automatically				(see the next page for the search result)
				</p>
			</div>
			<div id="footer">		
			</div>
		</div>
	</body>
</html>
