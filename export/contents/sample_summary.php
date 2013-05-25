<!DOCTYPE html>
<?php require_once 'helper.php';;?>
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
        <div data-role="dialog">
            <div data-role="header" data-theme="d">
                <h1>Sample Request Summary</h1>

            </div>

            <div data-role="content" data-theme="c">

                <h1>Sample Request Summary</h1>
                <div data-role="content">
                    <?php

                    require_once('../include/database.php');
                    $originator="anwar";
                    $project_id=1;
                    ?>
                    <?php
                    $ssql="SELECT * FROM sample_request where project_id='$project_id'";

                    $result = $database->query($ssql);
                    $nextId=1;
                    ?><ol><?php
                        if($result) {
                            while ($row = mysql_fetch_array($result)) {
                                $value=$row['product'];
                                $finish=$row['finish'];
                                $colour=$row['colour'];
                                ?>
                        <li>
                            <p>
                                James hardle
                                        <?php echo $value?>
                                        <?php echo get_colour($colour)?>
                                        <?php echo $finish?>
                            </p>
                        </li>
                                <?php

                                $nextId++;}
                        }
                        ?>
                    </ol>
                </div>
                <div class="ui-grid-a">
                    <div class="ui-block-a"> <a href="reporting.php" data-role="button"data-rel="redirect" data-theme="b"  >Finish And Submit</a></div>
                    <div class="ui-block-b"><a href="sample_request.php" data-role="button"  data-theme="c">Edit Sample Request</a></div>
                </div>
            </div>
        </div>
    </body>
</html>
