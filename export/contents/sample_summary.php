<!DOCTYPE html>
<?php
require_once('../include/database.php');
require_once 'helper.php';
if (isset($_GET['pid'])) {
    $project_id = $_GET['pid'];
} else {
    $project_id = 1;
}
if (isset($_POST['save'])) {
    $product = $_POST['product'];
    $project_id = 1;
    $i = 0;
    $dsql = "DELETE FROM sample_request where project_id = '$project_id' ";
    $database->query($dsql);
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
    /* echo '<script type="text/javascript">
      window.location="reporting.php";
      </script>"'; */
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sample Request Summary</title>
        <!--jquery mobile -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

    </head>
    <body>
        <div id="dialog" data-role="dialog">
            <div data-role="header" data-theme="d">
                <h1>Sample Request Summary</h1>

            </div>

            <div  data-role="content" data-theme="c">
                <h1>Sample Request Summary</h1>
                <div></div>
                <div id="sc" data-role="content">
                    <?php
                    require_once('../include/database.php');
                    $originator = "anwar";

                    ;
                    ?>
                    <?php
                    $ssql = "SELECT * FROM sample_request where project_id='$project_id'";

                    $result = $database->query($ssql);
                    $nextId = 1;
                    ?><ol><?php
                    if ($result) {
                        while ($row = mysql_fetch_array($result)) {
                            $value = $row['product'];
                            $finish = $row['finish'];
                            $colour = $row['colour'];
                    ?>
                            <li>
                                <p>
                                <?php echo $_GET['name'] ?>
                                <?php echo $value ?>
                                <?php echo get_colour($colour) ?>
                                <?php echo $finish ?>
                            </p>
                        </li>
                        <?php
                                $nextId++;
                            }
                        }
                        ?>
                    </ol>

                </div>
                <div id="bt" class="ui-grid-a">
                    <div class="ui-block-a"> <a id="finish" href="reporting.php" data-role="button" data-ajax="false"  data-theme="b"  >Finish And Submit</a></div>
                    <div class="ui-block-b"><a id="edit"href="#" data-role="button"  data-theme="c">Edit Sample Request</a></div>
                </div>

                <div id="se" data-role="content" data-theme="c" style="display: none">
                    <?php include 'sr.php'; ?>

                </div>

            </div>
        </div>
        <script>
            $(document).on("pageinit", function() {

            var scontent = "<?php echo $content1 ?>";
                    $("#add").click(function(e){
                        e.preventDefault();
                        $('#inputdata').append(scontent).trigger('create');
                        return false;
                    });
                $("#se").hide();
  
                $("#edit").click(function(e){
                    e.preventDefault();
                    $("#se").show();
                    $("#sc").hide();
                    $("#finish").hide();
                    $(this).hide();
                   
                });
            });

        </script>
    </body>
</html>
