jQuery(document).ready(function() {
	
	// vider les champs formulaire au focus
	jQuery(".need")
    	.focus(function(){
    	    if( this.value == this.defaultValue ) { 
    	        // Select input field contents
    	        this.value = "";
    	    }
    	})
    	.blur(function() {
		if( !this.value.length ) {
			this.value = this.defaultValue;
		}
	});
	
	jQuery(".code").click(function() {
	   $(this).select();
	});
	
	//hide optin step
	jQuery(".step2").addClass("hidden");


   jQuery(".submit").click(function(){
        valid("petition");
		return false;
   });



   var origine = jQuery("#petition .origin").val();

   jQuery(".optin-oui").click(function(){
	
		var emailInputValue = jQuery('#petition #email').val();
		jQuery("#do_redirect").val( $("#do_redirect").val() + "?mail="+ emailInputValue );
		
		var origineOptin = origine.substring(3, origine.length);
	   jQuery("#petition .origin").val(origineOptin);

	   plusUn(true);
       return false;
   });
   jQuery(".optin-non").click(function(){
       plusUn(false);
       return false;
   });
	
function plusUn(optin){
	
	var emailInputValue = jQuery('#petition #email').val();
	var nomInputValue = jQuery('#petition #lastname').val();
	var prenomInputValue = jQuery('#petition #firstname').val();

	var langue2 = "en";	
	var bodylang = jQuery('body').attr("id");
	
	switch(bodylang){
		
		case "lang-fr":
		langue2 = "fr";
		break;
		case "lang-en":
		langue2 = "en";
		break;
		case "lang-vi":
		langue2 = "vi";
		break;
		case "lang-ch":
		langue2 = "ch";
		break;
		
	}
	
	
	jQuery.ajax({
		url: 'plusun.php',
		type: "POST",
		data: "nom="+nomInputValue+"&prenom="+prenomInputValue+"&email="+emailInputValue+"&langue="+langue2+"&optin="+optin,
		success: function(data) {
		      jQuery("#petition").submit();
		}
	});
}


// anti cache pour toujours avoir le compteur à jour
var date = new Date();
var time = date.getMonth()+date.getHours()+date.getMinutes()+date.getSeconds();


getSignataires = jQuery.ajax({
  url: '.compteur.txt?time='+time,
  success: function(data) {
	jQuery("#compteur").html(data);
	
	var percent = data*100/goal;
	
	jQuery("#jauge div").css("width", percent+"%")
  }

});




	
	

}); //fin jQuery


