<?php session_start(); ?>

<?php

require_once('include/database.php');
?>
<?php

$product=$_POST['product'];
$user_id=1;
$i=0;
//$dsql="DELETE FROM sample_request where user_id = '$user_id' ";
//$database->query($dsql);
foreach ($product as $value) {
    if($value!=NULL) {
    // echo $value;
        $colour=$_POST['colour'][$i];
        $finish=$_POST['finish'][$i];

        $sql="INSERT INTO sample_request (_id ,user_id ,product ,colour ,finish) VALUES (NULL , '$user_id', '$value', '$colour', '$finish');";

        //echo $sql;
        $database->query($sql);
        $i++;
    //echo "Found";
    }
}

?>