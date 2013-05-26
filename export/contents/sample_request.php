<!DOCTYPE html>
<?php
require_once('../include/database.php');
require_once ('../contents/helper.php');
if(isset ($_POST['save'])) {
    $product=$_POST['product'];
    $project_id=1;
    $i=0;
    $dsql="DELETE FROM sample_request where project_id = '$project_id' ";
    $database->query($dsql);
    foreach ($product as $value) {
        if($value!=NULL) {
        // echo $value;
            $colour=$_POST['colour'][$i];
            $finish=$_POST['finish'][$i];
            $sql="INSERT INTO sample_request (_id ,project_id ,product ,colour ,finish) VALUES (NULL , '$project_id', '$value', '$colour', '$finish');";
            //echo $sql;
            $database->query($sql);
            $i++;
        //echo "Found";
        }
    }
    echo '<script type="text/javascript">
		window.location="reporting.php";
		</script>"';
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
        <!--   <link rel="stylesheet" href="include/stylesheet.css" />
           <script src="include/script.js"></script>-->

    </head>
    <body>
        <div data-role="dialog">
            <form action="" method="post"  data-ajax="false" >
                <div  data-role = "content" id="productSample" style="max-width:700px" >

                    <div data-role="content">
                        <div data-role="header" data-theme="d">
                            <h1>Sample Request Summary</h1>

                        </div>

                        <button type="button" data-icon="gear" data-theme="b" data-iconpos="right" data-mini="true" data-inline="true" id="add">Add</button>

                        <div data-role="collapsible-set" data-content-theme="d" style="text-align: center" id="set">
                            <div class="ui-grid-b">
                                <div class="ui-block-a"><h4>Product</h4></div>
                                <div class="ui-block-b"><h4>Colour</h4></div>
                                <div class="ui-block-c"><h4>Finish</h4></div>
                            </div>
                                <?php
                              
                                $project_id=1;
                                $ssql="SELECT * FROM sample_request where project_id='$project_id'";
                                $content='';
                                $result = $database->query($ssql);
                                $nextId=1;
                                if($result) {
                                    while ($row = mysql_fetch_array($result)) {
                                        $value=$row['product'];
                                        $finish=$row['finish'];
                                        $colour=$row['colour'];
                                        // $content.= "<div data-role='content' id='set".nextId."'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product' value='".$value."' /></div><div class='ui-block-b'><input type='text' name='colour[]'  placeholder='colour' value='$colour' /></div><div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' value='$finish'/></div></div></div>";
                                        $content.= "<div data-role='content' id='set".nextId."'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product' value='".$value."' /></div>";
                                        $content.="<div class='ui-block-b'>".coloue_input_html($colour)."</div>";
                                        $content.="<div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' value='$finish'/></div></div></div>";
                                        $nextId++;
                                    }
                                }
                                ?>
                            </div>
                            <script>
                                $(document).on("pageinit", function() {
                                    var nextId = <?php echo $nextId?>;

                                    var scontent = "<?php echo $content ?>";
                                    $("#set").append( scontent ).collapsibleset('refresh').trigger('create');;
                                    $("#add").click(function() {
                                        nextId++;
                                        var content = "<div data-role='content' id='set" + nextId + "'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product'  /></div><div class='ui-block-b'><?php echo coloue_input_html()?></div><div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' /></div></div></div>";

                                        $("#set").append( content ).collapsibleset('refresh');
                                        history.back();
                                    });

                                    $

                                });
                            </script>

                    </div>
                    <input id="samplesave" type="submit" value="save" name="save"  />
                </div>

            </form>

        </div> <!--page -->


    </body>

</html>