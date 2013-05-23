function finishChange(){ 
    if(document.getElementById("colour").value=="Blanc ChromaShield™ 201" || document.getElementById("colour").value=="Ebony ChromaShield™  202" || document.getElementById("colour").value=="Rawform ChromaShield™ 203" || document.getElementById("colour").value=="Stone ChromaShield™ 204" || document.getElementById("colour").value=="Toast ChromaShield™ 205" || document.getElementById("colour").value=="Pewter ChromaShield™ 206" || document.getElementById("colour").value=="Greige ChromaShield™ 207" || document.getElementById("colour").value=="Coco ChromaShield™ 208" || document.getElementById("colour").value=="Flannel ChromaShield™ 209" || document.getElementById("colour").value=="pring ChromaShield™ 210" || document.getElementById("colour").value=="Russet ChromaShield™ 211" || document.getElementById("colour").value=="Rouge ChromaShield™ 212" || document.getElementById("colour").value=="Turquoise ChromaShield™ 213") 
    { 
        document.getElementById("finish").value="Satin";
    } 
    else
		document.getElementById("finish").value="Gloss";
}

//All the fields with blur.
//blur function is called when any field lost its focus. Then we will update the field with ajax.
	$(document).ready(function(){
	
	
  		$(".ajax2").find(":first-child").blur(function(){
										
			var nam = $(this).attr("name"), val = $(this).val(), row=$(this).attr("rowId");
			$(this).parent().prev().text(val);
			
    		$.post("../contents/server.php",
				{
      				name: nam,
					value:val,
					rowId:row
    			},
    		function(data,status){
				
    		}); //$.post
  		});  //blur function
		
		//for dropdown
		$(".drop").blur(function(){
			var nam = $(this).attr("name"), val = $(this).val(), row=$(this).attr("rowId");
    		$.post("../contents/server.php",
				{
      				name: nam,
					value:val,
					rowId:row
    			},
    		function(data, status){
				location.reload();
    		}); //$.post
  		});  //blur function
		
//input field to paragraph and paragraph to input field
	$(".ajax1").on("click", function() {
    $(this).hide();
	$(this).next().show();
	$(this).next().find(":first-child").focus();
  	});
	$(".ajax2").find(":first-child").blur(function(){
  	$(this).parent().hide();
    $(this).parent().prev().show();
	
	});
	
	/*
	$(".drop").blur(function(){
  	$(this).parent().hide();
    $(this).parent().prev().show();
	}); //input */
	
	$(".ajax5").on("click", function() {
    $(this).hide();
	$(this).next().show();
  	});
	$(".ajax6").find(":first-child").live("datebox", function(event, payload) {
	
  	if ( payload.method === "set" ) {
		$(this).val($(this).datebox("callFormat", "%d-%m-%Y", payload.date));
		$(this).parent().prev().text($(this).datebox("callFormat", "%d-%m-%Y", payload.date));
		$(this).parent().hide();
		$(".ajax5").show();
		$(this).trigger("datebox", {"method": "close"});
//save to db
		var nam = $(this).attr("name"), val = $(this).val(), row=$(this).attr("rowId");
		$(this).parent().prev().text(val);
		
    		$.post("../contents/server.php",
				{
      				name: nam,
					value:val,
					rowId:row
    			},
    		function(data, status){
				location.reload();
    		}); //$.post
		
  		}//set
	
	}); //ajax6
	
//The code below is for the browsers which does not support calendar. Android phones shows a text field instead of a calendar button. So we use blur to update it's data. It will not affect the one which support date beacuse it will not be focused.
	$(".ajax6").find(":first-child").blur(function(){
										
			var nam = $(this).attr("name"), val = $(this).val(), row=$(this).attr("rowId");
			$(this).parent().prev().text(val);
			
    		$.post("../contents/server.php",
				{
      				name: nam,
					value:val,
					rowId:row
    			},
    		function(data,status){
				
    		}); //$.post
  		});  //blur function
		
	
	
//form date
	$(".ajax3").live("datebox", function(event, payload) {
	if ( payload.method === "set" ) {
		
	$(this).val($(this).datebox("callFormat", "%d-%m-%Y", payload.date));
	}
	});
	});  // ready function

	
//The following function will be called when form data is submitted.
	function submitForm() {
    $.ajax({type:"POST", url: "../contents/server.php", data:$("#mainform").serialize(), success: function(response) {
		location.reload();
    }});
    return false;
	}
	
//To check all fields
		function checkForm(){
			textFields = $("#mainContent form input[type=text], #mainContent form select");
			f = 0;
			textFields.each(function(n){
				if ( jQuery.trim($(this).val()).length == 0 || $(this).val() == '-1' ){
					f++;		
					alert("All fields are required. Please fill.");
					return false;
				}
			});
	
			if ( f == 0 ){
				return true;
			}else{
				return false;
			}
		}

// Touch scrolling
	$(document).bind("mobileinit", function() {
  	$.support.touchOverflow = true;
  	$.mobile.touchOverflowEnabled = true;
	});