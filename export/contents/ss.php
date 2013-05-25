<?php
require_once('../include/database.php');
require_once 'helper.php';
?>

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
            $project_id = 1;
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
                            James hardle
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
            <div class="ui-block-a"> <a id="finish" href="reporting.php" data-role="button"data-rel="back" data-theme="b"  >Finish And Submit</a></div>
            <div class="ui-block-b"><a id="edit"href="#" data-role="button"  data-theme="c">Edit Sample Request</a></div>
        </div>

        <div id="se" data-role="content" data-theme="c">
            <?php include 'sr.php'; ?>

        </div>

    </div>
</div>
<script>
    $(document).on("pageinit", function() {

        $("#se").hide();
        $("#add").click(function(e){
            e.preventDefault();
            var con=$("#sri").clone().html();
            //$(con).attr('id', 'saveold')
            $('#inputdata').append(con);
            return false;
        });
                 
        $("#edit").click(function(e){
            e.preventDefault();
            $("#se").show();
            $("#sc").hide();
            $("#finish").hide();
            $(this).hide();
                   
        });
    });

</script>
