<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>div 태그</title>
			<link href="layout.css" rel="stylesheet" type="text/css" />
			<link href="32_select_module_program.css" rel="stylesheet" type="text/css" />
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
				<p class="contents_textmenu">Incentive>create program>select module>Flight</p>
				<hr size="2" width="600px"></hr>
				<h3>STEP 2 > Select Module to Organize</h3>
				<hr size="1" width="100%"></hr>
				
				<?php include('contents_submenubar.html'); ?>
				<hr size="1" width="100%"></hr>
				<p class="p_">
					<span class="span_day">Day 5</span>
					<span class="span_drag_module">
						<span class="span_module">program</span>
						<span><i>Drag and put a module here</i></span>
					</span>
				</p>
				<br>
	
				<table class="tbl1">
					<tr>
						<td class="table_td1"> *ProjectName </td>
						<td class="table_td2"> Input ur project name </td>
						<td> <input type="button" id="btn_green" class="btn1" value="Save Draft"> </td>
					</tr>
					<tr>
						<td> *Description </td>
						<td> Explain ur events </td>
						<td> <input type="button" id="btn_green" class="btn1" value="Save Draft"> </td>
					</tr>
					<tr>
						<td> *Main Category </td>
						<td> Main category automatically shown </td>
						<td> <input type="button" id="btn_green" class="btn1" value="Select"> </td>
					</tr>
					<tr>
						<td> Sub Category </td>
						<td> Create sub-category </td>
						<td> <input type="button" id="btn_green" class="btn1" value="Create New"> </td>
					</tr>
					<tr>
						<td> 
							<table>
								<tr>
									<td> *Date </td>
									<td> Start </td>
								</tr>
							</table>
						<td>
							<table>
								<tr>
									<td> MM/DD/???? </td>
									<td> Time </td>
								</tr>
							</table>
						<td> <input type="button" id="btn_green" class="btn1" value="Calendar"> </td>
					</tr>
					<tr>
						<td> 
							<table>
								<tr>
									<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
									<td> End </td>
								</tr>
							</table>
						<td>
							<table>
								<tr>
									<td> MM/DD/???? </td>
									<td> Time </td>
								</tr>
							</table>
						<td> <input type="button" id="btn_green" class="btn1" value="Calendar"> </td>
					</tr>
				</table>
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