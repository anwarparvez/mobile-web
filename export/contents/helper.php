<?php

function coloue_input_html($selcted=0) {
    $colour_input=array(
        'Select a colour',
        'Blanc ChromaShield&trade; 201',
        'Blanc ChromaShield&trade; 201',
        'Ebony ChromaShield&trade;  202',
        'Ebony ChromaShield&trade;  202',
        'Rawform ChromaShield&trade; 203',
        'Rawform ChromaShield&trade; 203',
        'Stone ChromaShield&trade; 204',
        'Stone ChromaShield&trade; 204',
        'Toast ChromaShield&trade; 205',
        'Toast ChromaShield&trade; 205',
        'Pewter ChromaShield&trade; 206',
        'Pewter ChromaShield&trade; 206',
        'Greige ChromaShield&trade; 207',
        'Greige ChromaShield&trade; 207',
        'Coco ChromaShield&trade; 208',
        'Coco ChromaShield&trade; 208',
        'Flannel ChromaShield&trade; 209',
        'Flannel ChromaShield&trade; 209',
        'Spring ChromaShield&trade; 210',
        'Spring ChromaShield&trade; 210',
        'Russet ChromaShield&trade; 211',
        'Russet ChromaShield&trade; 211',
        'Rouge ChromaShield&trade; 212',
        'Rouge ChromaShield&trade; 212',
        'Turquoise ChromaShield&trade; 213',
        'Turquoise ChromaShield&trade; 213');
    $html="<select name='colour[]' class='dropfield' >";
    $i=0;
    foreach ($colour_input as $value) {
        if($i==$selcted)
            $html.="<option selected value='$i'>$value</option>";
        else
            $html.="<option  value='$i'>$value</option>";
        $i++;
    }
    $html.="</select>";
    return $html;

}


?>

