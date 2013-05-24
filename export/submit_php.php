<?php session_start(); ?>

<?php

require_once('include/database.php');
?>
<?php

$product=$_POST['product'];

$user_id=1;
$i=0;
$dsql="DELETE FROM sample_request where user_id = '$user_id' ";
$database->query($dsql);
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

    <?php
    $ssql="SELECT * FROM sample_request where user_id='$user_id'";

    $result = $database->query($ssql);
    $nextId=1;
    while ($row = mysql_fetch_array($result)) {
        $value=$row['product'];
        echo $colour;
        echo $value;
        $finish=$row['finish'];
        $colour=$row['colour'];
        ?>

<div data-role='content' id='set<?php echo $nextId?>'>
    <div class='ui-grid-b'>
        <div class='ui-block-a'
             ><input type='text' name='product[]' placeholder='product' value='<?php echo $value?>' />
        </div><div class='ui-block-b'><input type='text' name='colour[]' value='<?php echo $colour?>' placeholder='colour' />
        </div><div class='ui-block-c'><input type='text' name='finish[]' value='<?php echo $finish?>' placeholder='Finish' />
        </div>
    </div>
</div>
        <?php
        $nextId++;

    }





    ?>
