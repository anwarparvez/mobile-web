<?php
	if(isset($_POST['rowId'])) {
	$name=$_POST['name'];
	$value=$_POST['value'];
	$rowId=$_POST['rowId'];
	
	if(($name == 'source' || $name == 'segment' || $name == 'category' || $name == 'type') && $value == -1) {
		$value=0;
	} elseif($name == 'follow_up_date' || $name == 'est_delivery' || $name == 'est_delivery' || $name == 'job_entered') {
		$value =str_replace('-', '/', $value);
		$value =str_replace('.', '/', $value);
	} //if($name)
	
	} //if isset
	else {
	$rowId=0;
	
	$filters = array
  		(
  		"project_status" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"originator" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"originator_email" =>FILTER_VALIDATE_EMAIL,
		"project_name" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"site_address" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"project_description" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"suburb" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"postcode" => array
    		(
    		"filter"=>FILTER_VALIDATE_INT,
    		"options"=>array
      			(
      			"min_range"=>0,
      			"max_range"=>900000
      			)
    		),
		"source" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"follow_up_date" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"est_project_run" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"est_delivery" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"segment" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"category" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"project_area" => array
    		(
    		"filter"=>FILTER_VALIDATE_INT,
    		"options"=>array
      			(
      			"min_range"=>0
      			)
    		),
		"cost_per_m2" => array
    		(
    		"filter"=>FILTER_VALIDATE_INT,
    		"options"=>array
      			(
      			"min_range"=>0
      			)
    		),
		"estimated_value" => array
    		(
    		"filter"=>FILTER_VALIDATE_INT
    		),
		"type" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"product" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"colour" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"finish" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		),
		"remarks" => array
    		(
    		"filter"=>FILTER_SANITIZE_STRING
    		)
  		);
	$result = filter_input_array(INPUT_POST, $filters);
	
	$project_status = $result['project_status'];
		$originator = $result['originator'];
		$state = $_POST['state'];
		$originator_email = $result['originator_email'];
		$project_name = $result['project_name'];
		$site_address = $result['site_address'];
		$project_description = $result['project_description'];
		$suburb = $result['suburb'];
		$postcode = $result['postcode'];
	
		//Second table fields
		$source = $result['source'];
		$follow_up_date = $result['follow_up_date'];
		$est_project_run = $result['est_project_run'];
		$est_delivery = $result['est_delivery'];
		$segment = $result['segment'];
	
		$category = $result['category'];
		$project_area = $result['project_area'];
		$cost_per_m2 = $result['cost_per_m2'];
		$estimated_value = $result['estimated_value'];
		$type = $result['type'];
	
		//Third table fields
		$product = $result['product'];
		$colour = $result['colour'];
		$finish = $result['finish'];
		$remarks = $result['remarks'];
		$job_entered = $_POST['job_entered'];
		$job_entered =str_replace('-', '/', $job_entered);
		$job_entered =str_replace('.', '/', $job_entered);
		$follow_up_date =str_replace('-', '/', $follow_up_date);
		$follow_up_date =str_replace('.', '/', $follow_up_date);
		$est_delivery =str_replace('-', '/', $est_delivery);
		$est_delivery =str_replace('.', '/', $est_delivery);
		
	}


?>