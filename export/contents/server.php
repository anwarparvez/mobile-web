<?php

session_start();

require_once('filter.php');
require_once('../include/database.php');

//set value for table display
if (isset($project_status) && isset($originator) && isset($originator_email) && isset($project_name) && isset($site_address) && isset($project_description) && isset($suburb) && isset($postcode) && isset($source) && isset($follow_up_date)) {
    $mysql = "INSERT INTO halifax (project_status, originator, originator_email, project_name, site_address, project_description, suburb, state, postcode, source, job_entered, follow_up_date, est_project_run, est_delivery, segment, category, project_area, cost_per_m2, estimated_value, type, product, colour, finish, remarks)
VALUES ('$project_status', '$originator', '$originator_email', '$project_name', '$site_address', '$project_description', '$suburb', '$state', '$postcode', '$source', '$job_entered', '$follow_up_date', '$est_project_run', '$est_delivery', '$segment', '$category', '$project_area', '$cost_per_m2', '$estimated_value', '$type', '$product', '$colour', '$finish', '$remarks')";
} else {
    $mysql = "UPDATE halifax SET $name='$value' WHERE ID='$rowId'";
}

$database->query($mysql);


if (isset($_POST['rowId'])) {
    $project_id = $_POST['rowId'];
} else {
    $project_id = mysql_insert_id();
}
$product = $_POST['sproduct'];
$i = 0;

//print_r($product);
//if (isset($_POST['save'])) {
$dsql = "DELETE FROM sample_request where project_id = '$project_id' ";
$database->query($dsql);
//}
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
?>



<?php

echo '<script type="text/javascript">
		window.location="reporting.php";
		</script>"';
?>