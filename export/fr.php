<div data-role="header" data-theme="d">
    <h1>Product Sample</h1>
</div

<button  type="button" data-icon="gear" data-theme="b" data-iconpos="right" data-mini="true" data-inline="true" id="add"><a data-mini="true" data-icon="gear"  data-theme="b" data-iconpos="right" id='add' data-role="button" href="#aaa" data-rel="dialog" data-transition="pop" >Add Product Sample</a></button>

<div id="set" data-role="collapsible-set" data-content-theme="d" style="text-align: center">
    <div class="ui-grid-b">
        <div class="ui-block-a" ><h4>Product</h4></div>
        <div class="ui-block-b"><h4>Colour</h4></div>
        <div class="ui-block-c"><h4>Finish</h4></div>
    </div>
</div>
<script>
    $(document).on("pageinit", function() {
        var nextId=0;
        $("#add").click(function(e){
            e.preventDefault();
            var content1= "<div  ><div  data-role='content' id='set" + nextId + "'><div class='ui-grid-b'><div class='ui-block-a'><input  type='text' name='sproduct[]' placeholder='product'  /></div>";
            content1+="<div  class='ui-block-b' row='"+nextId+"'><?php echo coloue_input_html(0) ?></div>";
            content1+="<div class='ui-block-c'><input  class='finish_"+nextId+"' type='text' name='finish[]'  placeholder='Finish' /></div></div></div></div>";
            $('#set').append(content1).trigger('create');
            nextId++;
            return false;
        }); 
    });
    $(document).on( "change", ".colorbox", function(){
        var id=$(this).parent().parent().parent().attr( 'row' );
        var value=$(this).attr( 'value' );
        // alert( value);
        if(value==0||value==1){
            $('.finish_'+id).attr('value',"Satin");
        }else{
            $('.finish_'+id).attr('value',"Gloss");
        }
    } );
</script>


