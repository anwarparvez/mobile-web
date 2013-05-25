<?php session_start(); ?>

<?php

require_once('filter.php');
require_once('../include/database.php');
?>

<?php

//set value for table display
if (isset($project_status) && isset($originator) && isset($originator_email) && isset($project_name) && isset($site_address) && isset($project_description) && isset($suburb) && isset($postcode) && isset($source) && isset($follow_up_date)) {
    $mysql = "INSERT INTO halifax (project_status, originator, originator_email, project_name, site_address, project_description, suburb, state, postcode, source, job_entered, follow_up_date, est_project_run, est_delivery, segment, category, project_area, cost_per_m2, estimated_value, type, product, colour, finish, remarks)
VALUES ('$project_status', '$originator', '$originator_email', '$project_name', '$site_address', '$project_description', '$suburb', '$state', '$postcode', '$source', '$job_entered', '$follow_up_date', '$est_project_run', '$est_delivery', '$segment', '$category', '$project_area', '$cost_per_m2', '$estimated_value', '$type', '$product', '$colour', '$finish', '$remarks')";
} else {
    $mysql = "UPDATE halifax SET $name='$value' WHERE ID='$rowId'";
}

$database->query($mysql);
echo '<script type="text/javascript">
		window.location="reporting.php";
		</script>"';
?>