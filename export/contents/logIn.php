<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$a = array('<foo>', "'bar'", '"baz"', '&blong&', "\xc3\xa9");
//echo "message: ",  json_encode($a), "\n";
//echo json_encode($arr);
require_once ('helper.php');
?>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

<div data-role="content" data-theme="c">
    <div class="ui-grid-b">
        <label for="originator">Product</label><input type="text" name="product[]" id="product" placeholder="product" />
        <label for="Colour">Colour</label><?php echo coloue_input_html() ?>
        <label for="Finish">Finish</label><input type="text" name="product[]" id="finish" placeholder="finish" />
    </div>
    <input type="submit" value="save" name="save1"  />

    <a href="dialog/index.html" data-role="button" data-rel="back" data-theme="c">Cancel</a>
</div>