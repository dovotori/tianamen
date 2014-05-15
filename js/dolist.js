

function verifMail(a){
testm = false;
reg = new RegExp("^[A-Za-z0-9]+([_\\.\\-\\+][A-Za-z0-9]*)*@[A-Za-z0-9]+([_\\.\\-][A-Za-z0-9]{1,})*\\.([A-Za-z]{2,}){1}$", "");
var ResultEmail = reg.test(a);
if (ResultEmail) testm=true;
return testm;
}

function valid(ab){
var collectElements=document.forms[ab].elements;
var MessErreur = "Veuillez corriger les problemes suivants : \n \n";
var testUtil = 1;
var emailInputValue = jQuery('#'+ab+' #email').val();

if(emailInputValue != ""){ 
if (verifMail(emailInputValue) == true) // à enlever si le champs n'est pas l'e-mail
testUtil = eval(testUtil&1); // Ne pas modifier
else {
MessErreur = MessErreur+"\t - Adresse E-mail invalide \n";
testUtil = eval(testUtil&0); //Ne pas modifier
}
}
else{
MessErreur = MessErreur+"\t - Remplir le champ Adresse E-mail \n";
testUtil = eval(testUtil&0); // Ne pas modifier
}

// --------- Verification de la syntaxe des champs date et des champs numeriques. -----------
// ------------------------------- NE PAS MODIFIER -----------------------------------------
for(i=0;i < collectElements.length;i++){
// Verification du contenu des champs numériques
if(collectElements[i].id.substr(0,9) == "customint"){
if(collectElements[i].value != ""){
if(isNaN(collectElements[i].value)){
MessErreur= MessErreur+"\t - "+collectElements[i].value+" n'est pas un chiffre. \n";
testUtil = eval(testUtil&0);
}
}
}

// Verification du contenu des champs date
if(collectElements[i].name.substr(0,10) == "customdate" || collectElements[i].name == "birthdate"){
if(collectElements[i].value != ""){
if(CheckDate(collectElements[i].value) == 0){
MessErreur= MessErreur+"\t - "+collectElements[i].value+" n'est pas sous la forme JJ/MM/AAAA. \n";
testUtil = eval(testUtil&0);
}
}
}
}
// -------- Fin vérification de la syntaxe des champs date et des champs numeriques. --------




// ----------------------- Ne pas modifier la partie ci-dessous ----------------------------
if(testUtil == 1){ $(".step1").addClass("hidden"); $(".step2").removeClass("hidden"); return false;}
else alert(MessErreur);
}