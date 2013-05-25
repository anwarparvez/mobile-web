<!DOCTYPE html>
<?php
require_once 'include/database.php';
require_once ('contents/helper.php');
if (isset($_POST['save']) || isset($_POST['save1'])) {
    $product = $_POST['product'];
    $project_id = 1;
    $i = 0;
    if (isset($_POST['save'])) {
        $dsql = "DELETE FROM sample_request where project_id = '$project_id' ";
        $database->query($dsql);
    }
    foreach ($product as $value) {
        if ($value != NULL) {
            // echo $value;
            $colour = $_POST['colour'][$i];
            $finish = $_POST['finish'][$i];

            $sql = "INSERT INTO sample_request (_id ,project_id ,product ,colour ,finish) VALUES (NULL , '$project_id', '$value', '$colour', '$finish');";

            //echo $sql;
            $database->query($sql);
            $i++;
            //echo "Found";
        }
    }
}
?>
<html>
    <head>
        <title>Halifax</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!--jquery mobile -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

        <!-- Date Box-->
        <link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.min.css" />
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.core.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.en_US.utf8.js"></script>

        <!-- others -->
        <link rel="stylesheet" href="include/stylesheet.css" />
        <script src="include/script.js"></script>

    </head>
    <body>

        <div data-role="page">

            <div data-role="header">
                <h1>Halifax</h1>
            </div><!-- /header -->
            <?php
            $u_agent = $_SERVER['HTTP_USER_AGENT'];

            if (!preg_match('/MSIE/i', $u_agent)) {
            ?>

                <div data-role = "content" id="mainContent" >
                    <form action="contents/server.php" method="post" onSubmit="return checkForm()" data-ajax="false" >
                        <select class="dropfield ajax3" name="project_status" id="project_name" rowId="0" >
                            <option value="-1">Select a project status</option>
                            <option value="OPEN">OPEN</option>
                            <option value="CLOSED">CLOSED</option>
                        </select>
                        Job Entered:<input type="date" name="job_entered" id="job_entered" placeholder="dd/mm/yyyy" value="<?php echo date('d-m-Y'); ?>" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' />
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

                        <input type="submit" value="save" name="save" rowId="0"  class="ajax4" data-role="button" data-icon="plus" />
                        <a href="contents/reporting.php" target="_blank" data-ajax="false" data-role="button" data-icon="grid">Reporting</a>
                    </form>
                </div><!-- /content -->
            <?php } else {
 ?>
                <div data-role = "content" id="mainContent" >
                    <form action="contents/server.php" method="post" onSubmit="return checkForm()" data-ajax="false" >
                        <select class="dropfield ajax3" name="project_status" id="project_name" rowId="0" >
                            <option value="-1">Select a project status</option>
                            <option value="OPEN">OPEN</option>
                            <option value="CLOSED">CLOSED</option>
                        </select>

                        Job Entered:<input type="date" name="job_entered" id="job_entered" placeholder="dd/mm/yyyy" value="<?php echo date('d-m-Y'); ?>" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' />
                        <label for="originator">Originator</label><input type="text" name="originator" id="originator" placeholder="Originator" rowId="0" class="ajax3" />
                        <label for="originator_email">Originator email</label><input type="email" name="originator_email" id="originator_email" placeholder="Originator email" rowId="0" class="ajax3" />

                        <label for="project_name">Project name</label><input type="text" name="project_name" id="project_name" placeholder="Project Name" rowId="0" class="ajax3" />
                        <label for="site_address">Site address</label><input type="text" name="site_address" id="site_address" placeholder="Site Address" rowId="0" class="ajax3" />

                        <label for="project_description">Project description</label><textarea name="project_description" placeholder="Project Description" rowId="0" ></textarea>
                        <label for="suburb">Suburb</label><input type="text" name="suburb" id="suburb" placeholder="Suburb" rowId="0" class="ajax3" />


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


                        <label for="postcode">Postcode</label><input type="number" name="postcode" id="postcode" placeholder="Postcode" rowId="0" class="ajax3" />


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

                        <label for="follow_up_date">Follow up date:</label><input type="date" name="follow_up_date" id="follow_up_date" placeholder="dd/mm/yyyy" value="" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' />

                        <label for="est_project_run">Est. project run (mths)</label><input type="number" name="est_project_run" id="est_project_run" placeholder="Est. project run (mths)" rowId="0" class="ajax3" />

                        <label for="est_delivery">Est. Delivery:</label><input type="date" name="est_delivery" id="est_delivery" placeholder="dd/mm/yyyy" value="" rowId="0" class="ajax3" data-role="datebox" data-options='{"mode": "calbox"}' />



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

                        <label for="project_area">Project area</label><input type="number" name="project_area" id="project_area" placeholder="Project Area" rowId="0" class="ajax3" />

                        <label for="cost_per_m2">Cost per m2</label><input type="number" name="cost_per_m2" id="cost_per_m2" placeholder="Cost per m2" rowId="0" class="ajax3" />
                        <label for="estimated_value">Estimated value</label><input type="number" name="estimated_value" id="estimated_value" placeholder="Estimated value $" rowId="0" class="ajax3" />



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

                        <label for="finish">Finish</label><input type="text" name="finish" id="finish" placeholder="Finish" value=""rowId="0" class="ajax3" />

                        <label for="remarks">Remarks</label><textarea name="remarks" placeholder="Remarks" rowId="0" ></textarea>

                        <br/>
                        <hr/>
                        <br/>

                        <input type="submit" value="Save" name="save" rowId="0"  class="ajax4" data-role="button" data-icon="plus" />
                        <a href="contents/reporting_parvez.php" target="_blank" data-ajax="false" data-role="button" data-icon="grid">Reporting</a>
                    </form>

                </div><!-- /content -->
            <?php } ?>
            <div data-role="content">
                <form action="" method="post"  data-ajax="false" >
                    <div  data-role = "content" id="productSample" style="max-width:700px" >

                        <div data-role="content">
                            <div data-role="header" data-theme="d">
                                <h1>Product Sample</h1>

                            </div



                            <button  type="button" data-icon="gear" data-theme="b" data-iconpos="right" data-mini="true" data-inline="true" id="add"><a data-mini="true" data-icon="gear"  data-theme="b" data-iconpos="right" id='lnkDialog' data-role="button" href="#aaa" data-rel="dialog" data-transition="pop" >Add Product Sample</a></button>
             
                            <div data-role="collapsible-set" data-content-theme="d" id="set" style="text-align: center">
                                <div class="ui-grid-b">
                                    <div class="ui-block-a" ><h4>Product</h4></div>
                                    <div class="ui-block-b"><h4>Colour</h4></div>
                                    <div class="ui-block-c"><h4>Finish</h4></div>
                                </div>
                                <?php
                                $project_id = 1;
                                $ssql = "SELECT * FROM sample_request where project_id='$project_id'";
                                $content = '';
                                $result = $database->query($ssql);
                                $nextId = 1;
                                if ($result) {
                                    while ($row = mysql_fetch_array($result)) {
                                        $value = $row['product'];
                                        $finish = $row['finish'];
                                        $colour = $row['colour'];
                                        // $content.= "<div data-role='content' id='set".nextId."'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product' value='".$value."' /></div><div class='ui-block-b'><input type='text' name='colour[]'  placeholder='colour' value='$colour' /></div><div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' value='$finish'/></div></div></div>";
                                        $content.= "<div data-role='content' id='set" . nextId . "'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product' value='" . $value . "' /></div>";
                                        $content.="<div  class='ui-block-b'>" . coloue_input_html($colour) . "</div>";
                                        $content.="<div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' value='$finish'/></div></div></div>";
                                        $nextId++;
                                    }
                                }
                                $content1.= "<div data-role='content' id='set" . nextId . "'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product' value='" . "' /></div>";
                                $content1.="<div  class='ui-block-b'>" . coloue_input_html() . "</div>";
                                $content1.="<div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' value=''/></div></div></div>";
                                ?>
                                <?php echo $content ?>
                            </div>
                        </div>
                        <input type="submit" value="save" name="save"  />
                    </div>


                </form>


            </div> 
        </div> <!--page -->
        <div id="aaa" data-role="dialog">
            <form action="" method="post"  data-ajax="false" >
                <div data-role="header" data-theme="d">
                    <h1>Product sample</h1>

                </div>
                <div data-role="content" data-theme="c">
                    <div class="ui-grid-b">
                        <label for="originator">Product</label><input type="text" name="product[]" id="product" placeholder="product" />
                        <label for="Colour">Colour</label><?php echo coloue_input_html() ?>
                        <label for="Finish">Finish</label><input type="text" name="product[]" id="finish" placeholder="finish" />

                    </div>
                    <input type="submit" value="save" name="save1"  />

                    <a href="dialog/index.html" data-role="button" data-rel="back" data-theme="c">Cancel</a>
                </div>
            </form>
        </div>

    </body>

</html>