
<!DOCTYPE html>
<html>
	<head>
		<title>Halifax</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<!--calender-->
		
		<link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" /> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="jquerymobile/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>
		<!--/calender-->
		
		<link rel="stylesheet" href="include/stylesheet.css" />
		
		<script src="include/script.js"></script>
		
		<style>

		</style>
	</head>
	<body>
	
	<div data-role="page">

	<div data-role="header">
		<h1>Halifax</h1>
	</div><!-- /header -->
		
	<div data-role = "content" id="mainContent" >
		<form action="contents/server.php" method="post" onSubmit="return checkForm()" data-ajax="false" >
				<select class="dropfield ajax3" name="project_status" id="project_name" rowId="0" >
					<option value="-1">Select a project status</option>
					<option value="OPEN">OPEN</option>
					<option value="CLOSED">CLOSED</option>
				</select>
				Job Entered:<input type="date" name="job_entered" id="job_entered" placeholder="dd/mm/yyyy" value="23-05-2013" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' />
				<input type="text" name="originator" id="originator" placeholder="Originator" rowId="0" class="ajax3" /><input type="email" name="originator_email" id="originator_email" placeholder="Originator email" rowId="0" class="ajax3" />
				<input type="text" name="project_name" id="project_name" placeholder="Project Name" rowId="0" class="ajax3" /><input type="text" name="site_address" id="site_address" placeholder="Site Address" rowId="0" class="ajax3" />
				<textarea name="project_description" placeholder="Project Description" rowId="0" ></textarea><input type="text" name="suburb" id="suburb" placeholder="Suburb" rowId="0" class="ajax3" />
				
					
						<select class="dropfield ajax3" name="state" id="state" rowId="0" >
							<option value="-1">Select state</option>
							<option value="NSW">NSW</option>
							<option value="VIC">VIC</option>
							<option value="QLD">QLD</option>
							<option value="ACT">ACT</option>
							<option value="WA">WA</option>
							<option value="SA">SA</option>
							<option value="TAS">TAS</option>
						</select>
					
								
				<input type="number" name="postcode" id="postcode" placeholder="Postcode" rowId="0" class="ajax3" />

				<br/>				
				<hr/>
				<br/>
			
				
				<select name="source" class="dropfield ajax3" id="source" rowId="0" >
					<option value="-1">Select a source</option>
					<option value="Accel">Accel</option>
					<option value="BCI">BCI</option>
					<option value="Cold call">Cold call</option>
					<option value="Cordell">Cordell</option>
					<option value="Customer Link">Customer Link</option>
					<option value="Marketting">Marketing</option>
					<option value="Others">Others</option>
					<option value="Specix">Specix</option>
					<option value="Web site">Web site</option>
				</select>
				
				Follow up date:<input type="date" name="follow_up_date" id="follow_up_date" placeholder="dd/mm/yyyy" value="" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' />
				<input type="number" name="est_project_run" id="est_project_run" placeholder="Est. project run (mths)" rowId="0" class="ajax3" />
				
				Est. Delivery:<input type="date" name="est_delivery" id="est_delivery" placeholder="dd/mm/yyyy" value="" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' /></table>
				
				
				
				<select name="segment" class="dropfield ajax3" id="segment" rowId="0" >
					<option value="-1">Select a segement</option>
					<option value="Commercial">Commercial</option>
					<option value="Custom build house">Custom Build House</option>
					<option value="Home Improvement">Home Improvement</option>
					<option value="Medium Density">Medium Density</option>
					<option value="Project Housing">Project Housing</option>
				</select>
				
				
				
				
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
				
				<input type="number" name="project_area" id="project_area" placeholder="Project Area" rowId="0" class="ajax3" />
				<input type="number" name="cost_per_m2" id="cost_per_m2" placeholder="Cost per m2" rowId="0" class="ajax3" />				<input type="number" name="estimated_value" id="estimated_value" placeholder="Estimated value $" rowId="0" class="ajax3" /></table>
			
				
				
				<select name="type" class="dropfield ajax3" id="type" rowId="0" >
					<option value="-1">Select a project types</option>
					<option value="Extension & Addition">Extension & Addition</option>
					<option value="New Construction">New Construction</option>
					<option value="Repair, Renovation, Refurbishment">Repair, Renovation, Refurbishment</option>
				</select>
				
				
				<br/>				
				<hr/>
				<br/>
				
			<input type="text" name="product" id="product" placeholder="Product"rowId="0" class="ajax3" />
			
			
				<select name="colour" class="dropfield ajax3" id="colour" onChange="finishChange()" rowId="0" >
					<option value="-1">Select a colour</option>
					<option value="Blanc ChromaShield&trade; 201">Blanc ChromaShield&trade; 201</option>
					<option value="Blanc ChromaShield&trade; 201 ">Blanc ChromaShield&trade; 201</option>
					<option value="Ebony ChromaShield&trade;  202">Ebony ChromaShield&trade;  202</option>
					<option value="Ebony ChromaShield&trade;  202 ">Ebony ChromaShield&trade;  202</option>
					<option value="Rawform ChromaShield&trade; 203">Rawform ChromaShield&trade; 203</option>
					<option value="Rawform ChromaShield&trade; 203 ">Rawform ChromaShield&trade; 203</option>
					<option value="Stone ChromaShield&trade; 204">Stone ChromaShield&trade; 204</option>
					<option value="Stone ChromaShield&trade; 204 ">Stone ChromaShield&trade; 204</option>
					<option value="Toast ChromaShield&trade; 205">Toast ChromaShield&trade; 205</option>
					<option value="Toast ChromaShield&trade; 205 ">Toast ChromaShield&trade; 205</option>
					<option value="Pewter ChromaShield&trade; 206">Pewter ChromaShield&trade; 206</option>
					<option value="Pewter ChromaShield&trade; 206 ">Pewter ChromaShield&trade; 206</option>
					<option value="Greige ChromaShield&trade; 207">Greige ChromaShield&trade; 207</option>
					<option value="Greige ChromaShield&trade; 207 ">Greige ChromaShield&trade; 207</option>
					<option value="Coco ChromaShield&trade; 208">Coco ChromaShield&trade; 208</option>
					<option value="Coco ChromaShield&trade; 208 ">Coco ChromaShield&trade; 208</option>
					<option value="Flannel ChromaShield&trade; 209">Flannel ChromaShield&trade; 209</option>
					<option value="Flannel ChromaShield&trade; 209 ">Flannel ChromaShield&trade; 209</option>
					<option value="Spring ChromaShield&trade; 210">Spring ChromaShield&trade; 210</option>
					<option value="Spring ChromaShield&trade; 210 ">Spring ChromaShield&trade; 210</option>
					<option value="Russet ChromaShield&trade; 211">Russet ChromaShield&trade; 211</option>
					<option value="Russet ChromaShield&trade; 211 ">Russet ChromaShield&trade; 211</option>
					<option value="Rouge ChromaShield&trade; 212">Rouge ChromaShield&trade; 212</option>
					<option value="Rouge ChromaShield&trade; 212 ">Rouge ChromaShield&trade; 212</option>
					<option value="Turquoise ChromaShield&trade; 213">Turquoise ChromaShield&trade; 213</option>
					<option value="Turquoise ChromaShield&trade; 213 ">Turquoise ChromaShield&trade; 213</option>
				</select>
			
			<input type="text" name="finish" id="finish" placeholder="Finish" value=""rowId="0" class="ajax3" />
			<textarea name="remarks" placeholder="Remarks" rowId="0" class="ajax3" ></textarea>

				<br/>				
				<hr/>
				<br/>
			
			<input type="submit" value="Save" name="save" rowId="0"  class="ajax4" data-role="button" data-icon="plus" />
			<a href="contents/reporting.php" target="_blank" data-ajax="false" data-role="button" data-icon="grid">Reporting</a>
		</form>
	</div><!-- /content -->
	
   
	</body>
</html>