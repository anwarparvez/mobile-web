<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Halifax</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--calender-->
		
		<link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" /> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="jquerymobile/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<!-- Optional Mousewheel support: http://brandonaaron.net/code/mousewheel/docs -->
		<script type="text/javascript" src="PATH/TO/YOUR/COPY/OF/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
		<!--/calender-->
		<link rel="stylesheet" href="include/stylesheet.css" />
		<script src="include/script.js"></script>
	</head>
	<body>
	
	<div data-role="page">

	<div data-role="header">
		<h1>Halifax</h1>
	</div><!-- /header -->
	
	<div data-role = "content">
	<?php require_once("contents/fields.php"); ?>
		<form id="mainform" onSubmit="submitForm()">
			<table border="1" cellspacing="0" cellpadding="0" bordercolor="#EAEAEA">
				<tr><td>Note:All fields are mandaory</td><td><input type="text" name="project_status" id="project_name" placeholder="Project status" rowId="0" class="ajax3" /></td></tr>
				<tr><td><input type="text" name="originator" id="originator" placeholder="Originator" rowId="0"class="ajax3" /></td><td><input type="email" name="originator_email" id="originator_email" placeholder="Originator email" rowId="0" class="ajax3" /></td></tr>
				<tr><td><input type="text" name="project_name" id="project_name" placeholder="Project Name"rowId="0" class="ajax3" /></td><td><input type="text" name="site_address" id="site_address" placeholder="Site Address" rowId="0" class="ajax3" /></td></tr>
				<tr><td rowspan="2"><textarea name="project_description" placeholder="Project Description" rowId="0" ></textarea></td><td><input type="text" name="suburb" id="suburb" placeholder="Suburb" rowId="0" class="ajax3" /></td></tr>
				<tr><td><input type="number" name="postcode" id="postcode" placeholder="Postcode" rowId="0" class="ajax3" /></td></tr>
				</table>
				<hr/>
				<table border="1" cellspacing="0" cellpadding="0" bordercolor="#EAEAEA">
				<tr><td>
				
				<select name="source" class="dropfield ajax3" id="source" rowId="0" >
					<option value="-1">Select a source</option>
					<option value="Accel">Accel</option>
					<option value="BCI">BCI</option>
					<option value="Cold call">Cold call</option>
					<option value="Cordell">Cordell</option>
					<option value="Customer Link">Customer Link</option>
					<option value="Marketting">Marketting</option>
					<option value="Others">Others</option>
					<option value="Species">Species</option>
					<option value="Web site">Web site</option>
				</select>
				
				</td><td rowspan="2" colspan="2"><table border="1" cellspacing="0" cellpadding="0" bordercolor="#EAEAEA"><tr><td>Follow up date:<input type="text" name="follow_up_date" id="follow_up_date" placeholder="dd/mm/yyyy" value="" rowId="0" class="ajax3" data-role="datebox"
   data-options='{"mode": "calbox"}' /></td><td rowspan="2">Est. project run:<input type="number" name="est_project_run" id="est_project_run" placeholder="Est. project run" rowId="0" class="ajax3" />mths</td></tr><tr><td>Est. Delivery:<input type="text" name="est_delivery" id="est_delivery" placeholder="dd/mm/yyyy" value="" rowId="0" class="ajax3" /></td></tr></table>
				</td></tr>
				<tr><td>
				
				<select name="segment" class="dropfield ajax3" id="segment" rowId="0" >
					<option value="-1">Select a segement</option>
					<option value="Commercial">Commercial</option>
					<option value="Custom build house">Custom Build House</option>
					<option value="Home Improvement">Home Improvement</option>
					<option value="Medium Density">Medium Density</option>
					<option value="Project Housing">Project Housing</option>
				</select>
				
				</td></tr>
				<tr><td>
				
				<select name="category" class="dropfield ajax3" id="category" rowId="0" >
					<option value="-1">Select a category</option>
					<option value="Aged Care & Retired Departments">Aged Care & Retired Departments</option>
					<option value="Civil Engineering">Civil Engineering</option>
					<option value="Commercial Premises">Commercial Premises</option>
					<option value="Defence & Military">Defence & Military</option>
					<option value="Education">Education</option>
					<option value="Entertainment">Entertainment</option>
					<option value="Hospitality">Hospitality</option>
					<option value="Insdustrial">Industrial</option>
					<option value="Medical">Medical</option>
					<option value="Public Building & Facilities">Public Building & Facilities</option>
					<option value="Residential">Residential</option>
					<option value="Retail">Retail</option>
					<option value="Social">Social</option>
					<option value="Sports">Sports</option>
					<option value="Tourism">Tourism</option>
				</select>
				
				</td><td rowspan="2" colspan="2"><table border="1" cellspacing="0" cellpadding="0" bordercolor="#EAEAEA"><tr><td>Project Area:<input type="number" name="project_area" id="project_area" placeholder="Project Area" rowId="0" class="ajax3" />m<sup>2</sup></td><td rowspan="2">Cost per m<sup>2</sup>:$<input type="number" name="cost_per_m2" id="cost_per_m2" placeholder="Cost per m2" rowId="0" class="ajax3" /></td></tr><tr><td>Estimated value:$<input type="number" name="estimated_value" id="estimated_value" placeholder="Estimated value" rowId="0" class="ajax3" /></td></tr></table>
				</td></tr>
				<tr><td>
				
				<select name="type" class="dropfield ajax3" id="type" rowId="0" >
					<option value="-1">Select a project types</option>
					<option value="Extension & Addition">Extension & Addition</option>
					<option value="New Construction">New Construction</option>
					<option value="Repair, Renovation, Refurbishment">Repair, Renovation, Refurbishment</option>
				</select>
				
				</td></tr>
			</table>
			<hr/>
			<table border="1" cellspacing="0" cellpadding="0" bordercolor="#EAEAEA">
			<tr><td colspan="3"><input type="text" name="product" id="product" placeholder="Product"rowId="0" class="ajax3" /></td></tr>
			<tr><td>
			
				<select name="colour" class="dropfield ajax3" id="colour" onChange="finishChange()" rowId="0" >
					<option value="-1">Select a colour</option>
					<option value="Blanc ChromaShield™ 201">Blanc ChromaShield™ 201</option>
					<option value="Blanc ChromaShield™ 201 ">Blanc ChromaShield™ 201</option>
					<option value="Ebony ChromaShield™  202">Ebony ChromaShield™  202</option>
					<option value="Ebony ChromaShield™  202 ">Ebony ChromaShield™  202</option>
					<option value="Rawform ChromaShield™ 203">Rawform ChromaShield™ 203</option>
					<option value="Rawform ChromaShield™ 203 ">Rawform ChromaShield™ 203</option>
					<option value="Stone ChromaShield™ 204">Stone ChromaShield™ 204</option>
					<option value="Stone ChromaShield™ 204 ">Stone ChromaShield™ 204</option>
					<option value="Toast ChromaShield™ 205">Toast ChromaShield™ 205</option>
					<option value="Toast ChromaShield™ 205 ">Toast ChromaShield™ 205</option>
					<option value="Pewter ChromaShield™ 206">Pewter ChromaShield™ 206</option>
					<option value="Pewter ChromaShield™ 206 ">Pewter ChromaShield™ 206</option>
					<option value="Greige ChromaShield™ 207">Greige ChromaShield™ 207</option>
					<option value="Greige ChromaShield™ 207 ">Greige ChromaShield™ 207</option>
					<option value="Coco ChromaShield™ 208">Coco ChromaShield™ 208</option>
					<option value="Coco ChromaShield™ 208 ">Coco ChromaShield™ 208</option>
					<option value="Flannel ChromaShield™ 209">Flannel ChromaShield™ 209</option>
					<option value="Flannel ChromaShield™ 209 ">Flannel ChromaShield™ 209</option>
					<option value="Spring ChromaShield™ 210">Spring ChromaShield™ 210</option>
					<option value="Spring ChromaShield™ 210 ">Spring ChromaShield™ 210</option>
					<option value="Russet ChromaShield™ 211">Russet ChromaShield™ 211</option>
					<option value="Russet ChromaShield™ 211 ">Russet ChromaShield™ 211</option>
					<option value="Rouge ChromaShield™ 212">Rouge ChromaShield™ 212</option>
					<option value="Rouge ChromaShield™ 212 ">Rouge ChromaShield™ 212</option>
					<option value="Turquoise ChromaShield™ 213">Turquoise ChromaShield™ 213</option>
					<option value="Turquoise ChromaShield™ 213 ">Turquoise ChromaShield™ 213</option>
				</select>
			
			</td><td><input type="text" name="finish" id="finish" placeholder="Finish" value=""rowId="0" class="ajax3" /></td></tr>
			<tr><td rowspan="2" colspan="3"><textarea name="remarks" placeholder="Remarks" rowId="0" ></textarea></td></tr>
			<tr></tr>
			</table>
			
			<table>
			<tr><td><input type="submit" value="Save & Close" name="save & close" rowId="0" class="ajax4" /></td><td><input type="submit" value="Save" name="save" rowId="0"  class="ajax4" /></td></tr><tr><td><input type="submit" value="Reporting" name="reporting" rowId="0"  class="ajax4" /></td><td><input type="submit" value="Close" name="close" rowId="0"  class="ajax4" /></td></tr></table>
		</form>
	
	</div><!-- /content -->
	</body>
</html>