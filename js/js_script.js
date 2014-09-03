$( document ).ready(function() {
  // Handler for .ready() called.

 
 $('.addbtn').click(function(){
/*  alert('Вы нажали на элемент "foo"');*/
  	var clone = jQuery('.prod:last').clone(true);
	 $( "#cont" ).append(clone);
	var a=$('[name*="Quantity"]:last').attr("name")+"1";
	$('[name*="Quantity"]:last').attr("name",a);
	var b=$('[name*="Product"]:last').attr("name")+"1";
	$('[name*="Product"]:last').attr("name",b);
	
}); 
  

  
  
  
});