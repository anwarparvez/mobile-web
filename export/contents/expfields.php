<?php
//This page will show all database information. It will be called before the input fields
require_once('../include/database.php');
?>
<table border="1" cellspacing="0" cellpadding="0" bordercolor="#EAEAEA" data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke">
    <tr class="small"><th><p class="hide printon">Status</p><a class="noprint" data-ajax="false" href="reporting.php?arrange_by=project_status">Status</a></th><th><p class="hide printon">Originator</p><a class = "noprint" data-ajax="false" href="reporting.php?arrange_by=originator">Originator</a></th><th>Project</th><th>Project Description</th><th>Value</th><th>Delivery</th><th>Follow up</th><th>Source</th><th>Segment</th><th>Product</th><th>Remarks</th><th>Job Created</th></tr>
    <?php
    if (!isset($_GET['arrange_by'])) {
        $column_name = 'ID';
    } else {
        $column_name = $_GET['arrange_by'];
    }
    $result = $database->query("SELECT * FROM halifax ORDER BY $column_name ASC");
    while ($row = mysql_fetch_array($result)) {
        echo '<tr class="small">';
        $u_agent = $_SERVER['HTTP_USER_AGENT'];

        if (!preg_match('/MSIE/i', $u_agent)) {
            echo '
			<td>
				<div class="ajax1 show">' . $row['project_status'] . '</div>
				<div class="ajax2 hide">
				<select class="drop" name="project_status" rowId="' . $row['ID'] . '" >
					<option value="-1">Select a project status</option>
					<option value="OPEN" ';
            if ($row['project_status'] == 'OPEN')
                echo 'selected'; echo '>OPEN</option>
					<option value="CLOSED" ';
            if ($row['project_status'] == 'CLOSED')
                echo 'selected'; echo '>CLOSED</option>
				</select>
				</div></td>
			
			<td>
				<div class="ajax1 show">' . $row['originator'] . '</div>
				<div class="ajax2 hide"><input type="text" name="originator" rowId="' . $row['ID'] . '" value="' . $row['originator'] . '" placeholder="Originator" /></div>
				<div class="ajax1 show">' . $row['originator_email'] . '</div>
				<div class="ajax2 hide"><input type="text" name="originator_email" rowId="' . $row['ID'] . '" value="' . $row['originator_email'] . '"  placeholder="Originator Email" /></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['project_name'] . '</div>
				<div class="ajax2 hide"><input type="text" name="project_name" rowId="' . $row['ID'] . '" value="' . $row['project_name'] . '"  placeholder="Project Name" /></div>
				<div class="ajax1 show">' . $row['site_address'] . '</div>
				<div class="ajax2 hide"><input type="text" name="site_address" rowId="' . $row['ID'] . '" value="' . $row['site_address'] . '"  placeholder="Site Address" /></div>
				<div class="ajax1 show">' . $row['suburb'] . '</div>
				<div class="ajax2 hide"><input type="text" name="suburb" rowId="' . $row['ID'] . '" value="' . $row['suburb'] . '" placeholder="Suburb" /></div>
				<div class="ajax1 show">' . $row['state'] . '</div>
				<div class="ajax2 hide">
				<select class="drop" name="state" rowId="' . $row['ID'] . '" >
							<option value="-1">Select state</option>
							<option value="NSW" ';
            if ($row['state'] == 'NSW')
                echo 'selected'; echo '>NSW</option>
							<option value="VIC" ';
            if ($row['state'] == 'VIC')
                echo 'selected'; echo '>VIC</option>
							<option value="QLD" ';
            if ($row['state'] == 'QLD')
                echo 'selected'; echo '>QLD</option>
							<option value="ACT" ';
            if ($row['state'] == 'ACT')
                echo 'selected'; echo '>ACT</option>
							<option value="WA" ';
            if ($row['state'] == 'WA')
                echo 'selected'; echo '>WA</option>
							<option value="SA" ';
            if ($row['state'] == 'SA')
                echo 'selected'; echo '>SA</option>
							<option value="TAS" ';
            if ($row['state'] == 'TAS')
                echo 'selected'; echo '>TAS</option>
				</select>
				</div>
				
				<div class="ajax1 show">' . $row['postcode'] . '</div>
				<div class="ajax2 hide"><input type="number" name="postcode" rowId="' . $row['ID'] . '" value="' . $row['postcode'] . '"  placeholder="Postcode" /></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['type'] . '</div>
				<div class="ajax2 hide"><select name="type" class="drop" rowId="' . $row['ID'] . '" >
					<option value="-1">Select a project types</option>
					<option value="Extension & Addition" ';
            if ($row['type'] == 'Extension & Addition')
                echo 'selected'; echo '>Extension & Addition</option>
					<option value="New Construction" ';
            if ($row['type'] == 'New Construction')
                echo 'selected'; echo '>New Construction</option>
					<option value="Repair, Renovation, Refurbishment" ';
            if ($row['type'] == 'Repair, Renovation, Refurbishment')
                echo 'selected'; echo '>Repair, Renovation, Refurbishment</option>
				</select></div>
				<div class="ajax1 show">' . $row['project_description'] . '</div>
				<div class="ajax2 hide"><textarea name="project_description" rowId="' . $row['ID'] . '"  placeholder="Project Description" >' . $row['project_description'] . '</textarea></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['estimated_value'] . '</div>
				<div class="ajax2 hide"><input type="number" name="estimated_value" rowId="' . $row['ID'] . '" value="' . $row['estimated_value'] . '"  placeholder="Estimated Value" /></div>
				<div class="ajax1 show">' . $row['cost_per_m2'] . '</div>
				<div class="ajax2 hide"><input type="number" name="cost_per_m2" rowId="' . $row['ID'] . '" value="' . $row['cost_per_m2'] . '"  placeholder="Cost Per m2" /></div>
				<div class="ajax1 show">' . $row['project_area'] . '</div>
				<div class="ajax2 hide"><input type="number" name="project_area" rowId="' . $row['ID'] . '" value="' . $row['project_area'] . '"  placeholder="Project Area" /></div></td>
				
			<td>
				<div class="ajax5 show">' . $row['est_delivery'] . '</div>
				<div class="ajax6 hide"><input type="text" name="est_delivery" rowId="' . $row['ID'] . '" value="' . $row['est_delivery'] . '"  placeholder="Est. Delivery" ';
            ?> data-role="datebox" data-options='{"mode": "calbox"}'<?php echo' /></div>
				<div class="ajax1 show">' . $row['est_project_run'] . '</div>
				<div class="ajax2 hide"><input type="number" name="est_project_run" rowId="' . $row['ID'] . '" value="' . $row['est_project_run'] . '"  placeholder="Est. Project Run" /></div></td>
				
			<td>
				<div class="ajax5 show" >' . $row['follow_up_date'] . '</div>
				<div class="ajax6 hide" ><input type="text" name="follow_up_date" rowId="' . $row['ID'] . '" value="' . $row['follow_up_date'] . '"  placeholder="Follow up Date" '; ?> data-role="datebox" data-options='{"mode": "calbox"}'<?php echo' /></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['source'] . '</div>
				<div class="ajax2 hide"><select name="source" class="drop" rowId="' . $row['ID'] . '" >
					<option value="-1">Select a source</option>
					<option value="Accel" ';
            if ($row['source'] == 'Accel') echo 'selected'; echo '>Accel</option>
					<option value="BCI" ';
            if ($row['source'] == 'BCI') echo 'selected'; echo '>BCI</option>
					<option value="Cold call" ';
            if ($row['source'] == 'Cold call') echo 'selected'; echo '>Cold call</option>
					<option value="Cordell" ';
            if ($row['source'] == 'Cordell') echo 'selected'; echo '>Cordell</option>
					<option value="Customer Link" ';
            if ($row['source'] == 'Customer Link') echo 'selected'; echo '>Customer Link</option>
					<option value="Marketting" ';
            if ($row['source'] == 'Marketting') echo 'selected'; echo '>Marketting</option>
					<option value="Others" ';
            if ($row['source'] == 'Others') echo 'selected'; echo '>Others</option>
					<option value="Species" ';
            if ($row['source'] == 'Species') echo 'selected'; echo '>Species</option>
					<option value="Web site" ';
            if ($row['source'] == 'Web site') echo 'selected'; echo '>Web site</option>
				</select></div>
			</td>
			<td>
				<div class="ajax1 show">' . $row['segment'] . '</div>
				<div class="ajax2 hide"><select name="segment" class="drop" rowId="' . $row['ID'] . '" >
					<option value="-1">Select a segement</option>
					<option value="Commercial" ';
            if ($row['segment'] == 'Commercial') echo 'selected'; echo '>Commercial</option>
					<option value="Custom build house" ';
            if ($row['segment'] == 'Custom build house') echo 'selected'; echo '>Custom Build House</option>
					<option value="Home Improvement" ';
            if ($row['segment'] == 'Home Improvement') echo 'selected'; echo '>Home Improvement</option>
					<option value="Medium Density" ';
            if ($row['segment'] == 'Medium Density') echo 'selected'; echo '>Medium Density</option>
					<option value="Project Housing" ';
            if ($row['segment'] == 'Project Housing') echo 'selected'; echo '>Project Housing</option>
				</select></div>
				<div class="ajax1 show">' . $row['category'] . '</div>
				<div class="ajax2 hide"><select name="category" class="drop" rowId="' . $row['ID'] . '" >
					<option value="-1">Select a category</option>
					<option value="Aged Care & Retired Departments" ';
            if ($row['category'] == '') echo 'selected'; echo '>Aged Care & Retired Departments</option>
					<option value="Civil Engineering" ';
            if ($row['category'] == 'Civil Engineering') echo 'selected'; echo '>Civil Engineering</option>
					<option value="Commercial Premises" ';
            if ($row['category'] == 'Commercial Premises') echo 'selected'; echo '>Commercial Premises</option>
					<option value="Defence & Military" ';
            if ($row['category'] == 'Defence & Military') echo 'selected'; echo '>Defence & Military</option>
					<option value="Education" ';
            if ($row['category'] == 'Education') echo 'selected'; echo '>Education</option>
					<option value="Entertainment" ';
            if ($row['category'] == 'Entertainment') echo 'selected'; echo '>Entertainment</option>
					<option value="Hospitality" ';
            if ($row['category'] == 'Hospitality') echo 'selected'; echo '>Hospitality</option>
					<option value="Insdustrial" ';
            if ($row['category'] == 'Insdustrial') echo 'selected'; echo '>Industrial</option>
					<option value="Medical" ';
            if ($row['category'] == 'Medical') echo 'selected'; echo '>Medical</option>
					<option value="Public Building & Facilities" ';
            if ($row['category'] == 'Public Building & Facilities') echo 'selected'; echo '>Public Building & Facilities</option>
					<option value="Residential" ';
            if ($row['category'] == 'Residential') echo 'selected'; echo '>Residential</option>
					<option value="Retail" ';
            if ($row['category'] == 'Retail') echo 'selected'; echo '>Retail</option>
					<option value="Social" ';
            if ($row['category'] == 'Social') echo 'selected'; echo '>Social</option>
					<option value="Sports" ';
            if ($row['category'] == 'Sports') echo 'selected'; echo '>Sports</option>
					<option value="Tourism" ';
            if ($row['category'] == 'Tourism') echo 'selected'; echo '>Tourism</option>
				</select></div></td>
			<td>
				<div class="ajax1 show">' . $row['product'] . '</div>
				<div class="ajax2 hide"><input type="text" name="product" rowId="' . $row['ID'] . '" value="' . $row['product'] . '"  placeholder="Product" /></div>
				<div class="ajax1 show">' . $row['colour'] . '</div>
				<div class="ajax2 hide"><select name="colour" class="drop" onChange="updateDate()" rowId="' . $row['ID'] . '" >
					<option value="-1"><p>Select a colour</p></option>
					<option value="Blanc ChromaShield&trade; 201" ';
            if ($row['colour'] == 'Blanc ChromaShield&trade; 201') echo 'selected'; echo '>Blanc ChromaShield&trade; 201</option>
					<option value="Blanc ChromaShield&trade; 201 " ';
            if ($row['colour'] == 'Blanc ChromaShield&trade; 201 ') echo 'selected'; echo '>Blanc ChromaShield&trade; 201</option>
					<option value="Ebony ChromaShield&trade; 202" ';
            if ($row['colour'] == 'Ebony ChromaShield&trade; 202') echo 'selected'; echo '>Ebony ChromaShield&trade; 202</option>
					<option value="Ebony ChromaShield&trade; 202 " ';
            if ($row['colour'] == 'Ebony ChromaShield&trade; 202 ') echo 'selected'; echo '>Ebony ChromaShield&trade; 202</option>
					<option value="Rawform ChromaShield&trade; 203" ';
            if ($row['colour'] == 'Rawform ChromaShield&trade; 203') echo 'selected'; echo '>Rawform ChromaShield&trade; 203</option>
					<option value="Rawform ChromaShield&trade; 203 " ';
            if ($row['colour'] == 'Rawform ChromaShield&trade; 203 ') echo 'selected'; echo '>Rawform ChromaShield&trade; 203</option>
					<option value="Stone ChromaShield&trade; 204" ';
            if ($row['colour'] == 'Stone ChromaShield&trade; 204') echo 'selected'; echo '>Stone ChromaShield&trade; 204</option>
					<option value="Stone ChromaShield&trade; 204 " ';
            if ($row['colour'] == 'Stone ChromaShield&trade; 204 ') echo 'selected'; echo '>Stone ChromaShield&trade; 204</option>
					<option value="Toast ChromaShield&trade; 205" ';
            if ($row['colour'] == 'Toast ChromaShield&trade; 205') echo 'selected'; echo '>Toast ChromaShield&trade; 205</option>
					<option value="Toast ChromaShield&trade; 205 " ';
            if ($row['colour'] == 'Toast ChromaShield&trade; 205 ') echo 'selected'; echo '>Toast ChromaShield&trade; 205</option>
					<option value="Pewter ChromaShield&trade; 206" ';
            if ($row['colour'] == 'Pewter ChromaShield&trade; 206') echo 'selected'; echo '>Pewter ChromaShield&trade; 206</option>
					<option value="Pewter ChromaShield&trade; 206 " ';
            if ($row['colour'] == 'Pewter ChromaShield&trade; 206 ') echo 'selected'; echo '>Pewter ChromaShield&trade; 206</option>
					<option value="Greige ChromaShield&trade; 207" ';
            if ($row['colour'] == 'Greige ChromaShield&trade; 207') echo 'selected'; echo '>Greige ChromaShield&trade; 207</option>
					<option value="Greige ChromaShield&trade; 207 " ';
            if ($row['colour'] == 'Greige ChromaShield&trade; 207 ') echo 'selected'; echo '>Greige ChromaShield&trade; 207</option>
					<option value="Coco ChromaShield&trade; 208" ';
            if ($row['colour'] == 'Coco ChromaShield&trade; 208') echo 'selected'; echo '>Coco ChromaShield&trade; 208</option>
					<option value="Coco ChromaShield&trade; 208 " ';
            if ($row['colour'] == 'Coco ChromaShield&trade; 208 ') echo 'selected'; echo '>Coco ChromaShield&trade; 208</option>
					<option value="Flannel ChromaShield&trade; 209" ';
            if ($row['colour'] == 'Flannel ChromaShield&trade; 209') echo 'selected'; echo '>Flannel ChromaShield&trade; 209</option>
					<option value="Flannel ChromaShield&trade; 209 " ';
            if ($row['colour'] == 'Flannel ChromaShield&trade; 209 ') echo 'selected'; echo '>Flannel ChromaShield&trade; 209</option>
					<option value="Spring ChromaShield&trade; 210" ';
            if ($row['colour'] == 'Spring ChromaShield&trade; 210') echo 'selected'; echo '>Spring ChromaShield&trade; 210</option>
					<option value="Spring ChromaShield&trade; 210 " ';
            if ($row['colour'] == 'Spring ChromaShield&trade; 210 ') echo 'selected'; echo '>Spring ChromaShield&trade; 210</option>
					<option value="Russet ChromaShield&trade; 211" ';
            if ($row['colour'] == 'Russet ChromaShield&trade; 211') echo 'selected'; echo '>Russet ChromaShield&trade; 211</option>
					<option value="Russet ChromaShield&trade; 211 " ';
            if ($row['colour'] == 'Russet ChromaShield&trade; 211 ') echo 'selected'; echo '>Russet ChromaShield&trade; 211</option>
					<option value="Rouge ChromaShield&trade; 212" ';
            if ($row['colour'] == 'Rouge ChromaShield&trade; 212') echo 'selected'; echo '>Rouge ChromaShield&trade; 212</option>
					<option value="Rouge ChromaShield&trade; 212 " ';
            if ($row['colour'] == 'Rouge ChromaShield&trade; 212 ') echo 'selected'; echo '>Rouge ChromaShield&trade; 212</option>
					<option value="Turquoise ChromaShield&trade; 213" ';
            if ($row['colour'] == 'Turquoise ChromaShield&trade; 213') echo 'selected'; echo '>Turquoise ChromaShield&trade; 213</option>
					<option value="Turquoise ChromaShield&trade; 213 " ';
            if ($row['colour'] == 'Turquoise ChromaShield&trade; 213 ') echo 'selected'; echo '>Turquoise ChromaShield&trade; 213</option>
				</select></div>
				<div class="ajax1 show">' . $row['finish'] . '</div>
				<div class="ajax2 hide"><input type="text" name="finish" rowId="' . $row['ID'] . '" value="' . $row['finish'] . '"  placeholder="Finish" /></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['remarks'] . '</div>
				<div class="ajax2 hide"><textarea name="remarks" rowId="' . $row['ID'] . '"  placeholder="Remarks" >' . $row['remarks'] . '</textarea></div></td>
			<td>
				<div class="ajax5 show">' . $row['job_entered'] . '</div>
				<div class="ajax6 hide"><input type="date" name="job_entered" placeholder="dd/mm/yyyy" value="' . $row['job_entered'] . '" rowId="' . $row['ID'] . '"  '; ?> data-role="datebox" data-options='{"mode": "calbox"}'<?php
            echo'/></div></td>
				';
        } else {

            echo '
			<td>
				<div class="hide printon">' . $row['project_status'] . '</div>
				<div class="IEDrop noprint">
				<select class="drop" name="project_status" rowId="' . $row['ID'] . '"  data-mini="true">
					<option value="-1">Select a project status</option>
					<option value="OPEN" ';
            if ($row['project_status'] == 'OPEN')
                echo 'selected'; echo '>OPEN</option>
					<option value="CLOSED" ';
            if ($row['project_status'] == 'CLOSED')
                echo 'selected'; echo '>CLOSED</option>
				</select>
				</div></td>
			
			<td>
				<div class="ajax1 show">' . $row['originator'] . '</div>
				<div class="ajax2 hide"><input type="text" name="originator" rowId="' . $row['ID'] . '" value="' . $row['originator'] . '" placeholder="Originator" /></div>
				<div class="ajax1 show">' . $row['originator_email'] . '</div>
				<div class="ajax2 hide"><input type="text" name="originator_email" rowId="' . $row['ID'] . '" value="' . $row['originator_email'] . '"  placeholder="Originator Email" /></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['project_name'] . '</div>
				<div class="ajax2 hide"><input type="text" name="project_name" rowId="' . $row['ID'] . '" value="' . $row['project_name'] . '"  placeholder="Project Name" /></div>
				<div class="ajax1 show">' . $row['site_address'] . '</div>
				<div class="ajax2 hide"><input type="text" name="site_address" rowId="' . $row['ID'] . '" value="' . $row['site_address'] . '"  placeholder="Site Address" /></div>
				<div class="ajax1 show">' . $row['suburb'] . '</div>
				<div class="ajax2 hide"><input type="text" name="suburb" rowId="' . $row['ID'] . '" value="' . $row['suburb'] . '" placeholder="Suburb" /></div>
				<div class="hide printon">' . $row['state'] . '</div>
				<div class="IEDrop noprint">
				<select class="drop" name="state" rowId="' . $row['ID'] . '"  data-mini="true">
							<option value="-1">Select state</option>
							<option value="NSW" ';
            if ($row['state'] == 'NSW')
                echo 'selected'; echo '>NSW</option>
							<option value="VIC" ';
            if ($row['state'] == 'VIC')
                echo 'selected'; echo '>VIC</option>
							<option value="QLD" ';
            if ($row['state'] == 'QLD')
                echo 'selected'; echo '>QLD</option>
							<option value="ACT" ';
            if ($row['state'] == 'ACT')
                echo 'selected'; echo '>ACT</option>
							<option value="WA" ';
            if ($row['state'] == 'WA')
                echo 'selected'; echo '>WA</option>
							<option value="SA" ';
            if ($row['state'] == 'SA')
                echo 'selected'; echo '>SA</option>
							<option value="TAS" ';
            if ($row['state'] == 'TAS')
                echo 'selected'; echo '>TAS</option>
				</select>
				</div>
				
				<div class="ajax1 show">' . $row['postcode'] . '</div>
				<div class="ajax2 hide"><input type="number" name="postcode" rowId="' . $row['ID'] . '" value="' . $row['postcode'] . '"  placeholder="Postcode" /></div></td>
				
			<td>
				<div class="hide printon">' . $row['type'] . '</div>
				<div class="IEDrop noprint"><select name="type" class="drop" rowId="' . $row['ID'] . '"  data-mini="true">
					<option value="-1">Select a project types</option>
					<option value="Extension & Addition" ';
            if ($row['type'] == 'Extension & Addition')
                echo 'selected'; echo '>Extension & Addition</option>
					<option value="New Construction" ';
            if ($row['type'] == 'New Construction')
                echo 'selected'; echo '>New Construction</option>
					<option value="Repair, Renovation, Refurbishment" ';
            if ($row['type'] == 'Repair, Renovation, Refurbishment')
                echo 'selected'; echo '>Repair, Renovation, Refurbishment</option>
				</select></div>
				<div class="ajax1 show">' . $row['project_description'] . '</div>
				<div class="ajax2 hide"><textarea name="project_description" rowId="' . $row['ID'] . '"  placeholder="Project Description" >' . $row['project_description'] . '</textarea></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['estimated_value'] . '</div>
				<div class="ajax2 hide"><input type="number" name="estimated_value" rowId="' . $row['ID'] . '" value="' . $row['estimated_value'] . '"  placeholder="Estimated Value" /></div>
				<div class="ajax1 show">' . $row['cost_per_m2'] . '</div>
				<div class="ajax2 hide"><input type="number" name="cost_per_m2" rowId="' . $row['ID'] . '" value="' . $row['cost_per_m2'] . '"  placeholder="Cost Per m2" /></div>
				<div class="ajax1 show">' . $row['project_area'] . '</div>
				<div class="ajax2 hide"><input type="number" name="project_area" rowId="' . $row['ID'] . '" value="' . $row['project_area'] . '"  placeholder="Project Area" /></div></td>
				
			<td>
				<div class="ajax5 show">' . $row['est_delivery'] . '</div>
				<div class="ajax6 hide"><input type="text" name="est_delivery" rowId="' . $row['ID'] . '" value="' . $row['est_delivery'] . '"  placeholder="Est. Delivery" ';
            ?> data-role="datebox" data-options='{"mode": "calbox"}'<?php echo' /></div>
				<div class="ajax1 show">' . $row['est_project_run'] . '</div>
				<div class="ajax2 hide"><input type="number" name="est_project_run" rowId="' . $row['ID'] . '" value="' . $row['est_project_run'] . '"  placeholder="Est. Project Run" /></div></td>
				
			<td>
				<div class="ajax5 show" >' . $row['follow_up_date'] . '</div>
				<div class="ajax6 hide" ><input type="text" name="follow_up_date" rowId="' . $row['ID'] . '" value="' . $row['follow_up_date'] . '"  placeholder="Follow up Date" '; ?> data-role="datebox" data-options='{"mode": "calbox"}'<?php echo' /></div></td>
				
			<td>
				<div class="hide printon">' . $row['source'] . '</div>
				<div class="IEDrop noprint"><select name="source" class="drop" rowId="' . $row['ID'] . '"  data-mini="true">
					<option value="-1">Select a source</option>
					<option value="Accel" ';
            if ($row['source'] == 'Accel') echo 'selected'; echo '>Accel</option>
					<option value="BCI" ';
            if ($row['source'] == 'BCI') echo 'selected'; echo '>BCI</option>
					<option value="Cold call" ';
            if ($row['source'] == 'Cold call') echo 'selected'; echo '>Cold call</option>
					<option value="Cordell" ';
            if ($row['source'] == 'Cordell') echo 'selected'; echo '>Cordell</option>
					<option value="Customer Link" ';
            if ($row['source'] == 'Customer Link') echo 'selected'; echo '>Customer Link</option>
					<option value="Marketting" ';
            if ($row['source'] == 'Marketting') echo 'selected'; echo '>Marketting</option>
					<option value="Others" ';
            if ($row['source'] == 'Others') echo 'selected'; echo '>Others</option>
					<option value="Species" ';
            if ($row['source'] == 'Species') echo 'selected'; echo '>Species</option>
					<option value="Web site" ';
            if ($row['source'] == 'Web site') echo 'selected'; echo '>Web site</option>
				</select></div>
			</td>
			<td>
				<div class="hide printon">' . $row['segment'] . '</div>
				<div class="IEDrop noprint"><select name="segment" class="drop" rowId="' . $row['ID'] . '"  data-mini="true">
					<option value="-1">Select a segement</option>
					<option value="Commercial" ';
            if ($row['segment'] == 'Commercial') echo 'selected'; echo '>Commercial</option>
					<option value="Custom build house" ';
            if ($row['segment'] == 'Custom build house') echo 'selected'; echo '>Custom Build House</option>
					<option value="Home Improvement" ';
            if ($row['segment'] == 'Home Improvement') echo 'selected'; echo '>Home Improvement</option>
					<option value="Medium Density" ';
            if ($row['segment'] == 'Medium Density') echo 'selected'; echo '>Medium Density</option>
					<option value="Project Housing" ';
            if ($row['segment'] == 'Project Housing') echo 'selected'; echo '>Project Housing</option>
				</select></div>
				<div class="hide printon">' . $row['category'] . '</div>
				<div class="IEDrop noprint"><select name="category" class="drop" rowId="' . $row['ID'] . '"  data-mini="true">
					<option value="-1">Select a category</option>
					<option value="Aged Care & Retired Departments" ';
            if ($row['category'] == '') echo 'selected'; echo '>Aged Care & Retired Departments</option>
					<option value="Civil Engineering" ';
            if ($row['category'] == 'Civil Engineering') echo 'selected'; echo '>Civil Engineering</option>
					<option value="Commercial Premises" ';
            if ($row['category'] == 'Commercial Premises') echo 'selected'; echo '>Commercial Premises</option>
					<option value="Defence & Military" ';
            if ($row['category'] == 'Defence & Military') echo 'selected'; echo '>Defence & Military</option>
					<option value="Education" ';
            if ($row['category'] == 'Education') echo 'selected'; echo '>Education</option>
					<option value="Entertainment" ';
            if ($row['category'] == 'Entertainment') echo 'selected'; echo '>Entertainment</option>
					<option value="Hospitality" ';
            if ($row['category'] == 'Hospitality') echo 'selected'; echo '>Hospitality</option>
					<option value="Insdustrial" ';
            if ($row['category'] == 'Insdustrial') echo 'selected'; echo '>Industrial</option>
					<option value="Medical" ';
            if ($row['category'] == 'Medical') echo 'selected'; echo '>Medical</option>
					<option value="Public Building & Facilities" ';
            if ($row['category'] == 'Public Building & Facilities') echo 'selected'; echo '>Public Building & Facilities</option>
					<option value="Residential" ';
            if ($row['category'] == 'Residential') echo 'selected'; echo '>Residential</option>
					<option value="Retail" ';
            if ($row['category'] == 'Retail') echo 'selected'; echo '>Retail</option>
					<option value="Social" ';
            if ($row['category'] == 'Social') echo 'selected'; echo '>Social</option>
					<option value="Sports" ';
            if ($row['category'] == 'Sports') echo 'selected'; echo '>Sports</option>
					<option value="Tourism" ';
            if ($row['category'] == 'Tourism') echo 'selected'; echo '>Tourism</option>
				</select></div></td>
			<td>
				<div class="ajax1 show">' . $row['product'] . '</div>
				<div class="ajax2 hide"><input type="text" name="product" rowId="' . $row['ID'] . '" value="' . $row['product'] . '"  placeholder="Product" /></div>
				<div class="hide printon">' . $row['colour'] . '</div>
				<div class="IEDrop noprint"><select name="colour" class="drop" rowId="' . $row['ID'] . '" data-mini="true">
					<option value="-1">Select a colour</option>
					<option value="Blanc ChromaShield&trade; 201" ';
            if (stristr($row['colour'], '201')) echo 'selected'; echo '>Blanc ChromaShield&trade; 201</option>
					<option value="Blanc ChromaShield&trade; 201 " ';
            if (stristr($row['colour'], '201 ')) echo 'selected'; echo '>Blanc ChromaShield&trade; 201</option>
					<option value="Ebony ChromaShield&trade; 202" ';
            if (stristr($row['colour'], '202')) echo 'selected'; echo '>Ebony ChromaShield&trade; 202</option>
					<option value="Ebony ChromaShield&trade; 202 " ';
            if (stristr($row['colour'], '202 ')) echo 'selected'; echo '>Ebony ChromaShield&trade; 202</option>
					<option value="Rawform ChromaShield&trade; 203" ';
            if (stristr($row['colour'], '203')) echo 'selected'; echo '>Rawform ChromaShield&trade; 203</option>
					<option value="Rawform ChromaShield&trade; 203 " ';
            if (stristr($row['colour'], '203 ')) echo 'selected'; echo '>Rawform ChromaShield&trade; 203</option>
					<option value="Stone ChromaShield&trade; 204" ';
            if (stristr($row['colour'], '204')) echo 'selected'; echo '>Stone ChromaShield&trade; 204</option>
					<option value="Stone ChromaShield&trade; 204 " ';
            if (stristr($row['colour'], '204 ')) echo 'selected'; echo '>Stone ChromaShield&trade; 204</option>
					<option value="Toast ChromaShield&trade; 205" ';
            if (stristr($row['colour'], '205')) echo 'selected'; echo '>Toast ChromaShield&trade; 205</option>
					<option value="Toast ChromaShield&trade; 205 " ';
            if (stristr($row['colour'], '205 ')) echo 'selected'; echo '>Toast ChromaShield&trade; 205</option>
					<option value="Pewter ChromaShield&trade; 206" ';
            if (stristr($row['colour'], '206')) echo 'selected'; echo '>Pewter ChromaShield&trade; 206</option>
					<option value="Pewter ChromaShield&trade; 206 " ';
            if (stristr($row['colour'], '206 ')) echo 'selected'; echo '>Pewter ChromaShield&trade; 206</option>
					<option value="Greige ChromaShield&trade; 207" ';
            if (stristr($row['colour'], '207')) echo 'selected'; echo '>Greige ChromaShield&trade; 207</option>
					<option value="Greige ChromaShield&trade; 207 " ';
            if (stristr($row['colour'], '207 ')) echo 'selected'; echo '>Greige ChromaShield&trade; 207</option>
					<option value="Coco ChromaShield&trade; 208" ';
            if (stristr($row['colour'], '208')) echo 'selected'; echo '>Coco ChromaShield&trade; 208</option>
					<option value="Coco ChromaShield&trade; 208 " ';
            if (stristr($row['colour'], '208 ')) echo 'selected'; echo '>Coco ChromaShield&trade; 208</option>
					<option value="Flannel ChromaShield&trade; 209" ';
            if (stristr($row['colour'], '209')) echo 'selected'; echo '>Flannel ChromaShield&trade; 209</option>
					<option value="Flannel ChromaShield&trade; 209 " ';
            if (stristr($row['colour'], '209 ')) echo 'selected'; echo '>Flannel ChromaShield&trade; 209</option>
					<option value="Spring ChromaShield&trade; 210" ';
            if (stristr($row['colour'], '210')) echo 'selected'; echo '>Spring ChromaShield&trade; 210</option>
					<option value="Spring ChromaShield&trade; 210 " ';
            if (stristr($row['colour'], '210 ')) echo 'selected'; echo '>Spring ChromaShield&trade; 210</option>
					<option value="Russet ChromaShield&trade; 211" ';
            if (stristr($row['colour'], '211')) echo 'selected'; echo '>Russet ChromaShield&trade; 211</option>
					<option value="Russet ChromaShield&trade; 211 " ';
            if (stristr($row['colour'], '211 ')) echo 'selected'; echo '>Russet ChromaShield&trade; 211</option>
					<option value="Rouge ChromaShield&trade; 212" ';
            if (stristr($row['colour'], '212')) echo 'selected'; echo '>Rouge ChromaShield&trade; 212</option>
					<option value="Rouge ChromaShield&trade; 212 " ';
            if (stristr($row['colour'], '212 ')) echo 'selected'; echo '>Rouge ChromaShield&trade; 212</option>
					<option value="Turquoise ChromaShield&trade; 213" ';
            if (stristr($row['colour'], '213')) echo 'selected'; echo '>Turquoise ChromaShield&trade; 213</option>
					<option value="Turquoise ChromaShield&trade; 213 " ';
            if (stristr($row['colour'], '213 ')) echo 'selected'; echo '>Turquoise ChromaShield&trade; 213</option>
				</select></div>
				<div class="ajax1 show">' . $row['finish'] . '</div>
				<div class="ajax2 hide"><input type="text" name="finish" rowId="' . $row['ID'] . '" value="' . $row['finish'] . '"  placeholder="Finish" /></div></td>
				
			<td>
				<div class="ajax1 show">' . $row['remarks'] . '</div>
				<div class="ajax2 hide"><textarea name="remarks" rowId="' . $row['ID'] . '"  placeholder="Remarks" >' . $row['remarks'] . '</textarea></div></td>
			<td>
				<div class="ajax5 show">' . $row['job_entered'] . '</div>
				<div class="ajax6 hide"><input type="date" name="job_entered" placeholder="dd/mm/yyyy" value="' . $row['job_entered'] . '" rowId="' . $row['ID'] . '"  '; ?> data-role="datebox" data-options='{"mode": "calbox"}'<?php
            echo'/></div></td>';
        }
        echo '<td> <a href="sample_summary.php?pid='.$row['ID'].'&name='.$row['originator'].'"  data-rel="dialog" data-ajax="false" data-role="button" >sample</a></td>';
        echo "</tr>";
        $project_id = $row['ID'];
    } // while $result
    ?>
</table>