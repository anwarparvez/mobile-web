<?php
require_once('helper.php');
require_once('../include/database.php');
?>
<form action="sample_summary.php" method="post"  data-ajax="false" >
<a data-mini="true" data-icon="gear"  data-theme="b" data-iconpos="right" id='add' data-role="button" href="#aaa" data-rel="dialog" data-transition="pop" >Add Product Sample</a>

<div id="inputdata" data-role="collapsible-set" data-content-theme="b" style="text-align: center" id="set">
    <div class="ui-grid-b">
        <div class="ui-block-a"><h4>Product</h4></div>
        <div class="ui-block-b"><h4>Colour</h4></div>
        <div class="ui-block-c"><h4>Finish</h4></div>
    </div>
    <?php
    //$project_id = 1;
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
    $content1.= "<div id='sri'><div  data-role='content' id='set" . nextId . "'><div class='ui-grid-b'><div class='ui-block-a'><input type='text' name='product[]' placeholder='product' value='" . "' /></div>";
    $content1.="<div  class='ui-block-b'>" . coloue_input_html() . "</div>";
    $content1.="<div class='ui-block-c'><input type='text' name='finish[]'  placeholder='Finish' value=''/></div></div></div></div>";
    ?>
    <?php echo $content ?>
    <?php //echo $content1 ?>
</div>
  <input type="submit" value="save" name="save"  />
</form>

