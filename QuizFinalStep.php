<div id="optin-newsletter-form-quiz" style="display: inline-block; position: relative">
<script src="https://www.google.com/recaptcha/api.js"></script>
<form id="lead-gen-form-main" name="lead-gen-form-main" action="https://redpillquants.com/recaptcha/quiz-results.php" method="POST" accept-charset="utf-8" onsubmit="return validate()" _lpchecked="1">
	<input style="width: 300px;
		border-radius: 25px;
    overflow: hidden;
    font-family: FaktPro-Blond;
    font-size: 17px;
    padding-top: 12px !important;
    margin-top: 13px !important;
    padding-left: 29px !important;
    padding-bottom: 12px !important;
    border: 0px" type="text" name="name" id="name" placeholder="Your Name"><br>
	<input style="width: 300px;
		border-radius: 25px;
    overflow: hidden;
    font-family: FaktPro-Blond;
    font-size: 17px;
    padding-top: 12px !important;
    margin-top: 13px !important;
    padding-left: 29px !important;
    padding-bottom: 12px !important;
    border: 0px" type="email" name="email" id="email" placeholder="Your Email"><br>
	<div style="display:none;">
	<label for="hp">HP</label><br>
	<input type="text" name="hp" id="hp">
	</div>
	<input type="hidden" name="subform" value="yes">
	<input type="hidden" id="list" name="list" value="892oc1le50VDvboMIhCczt9A">
	<button id="captcha4" style="width: 330px; border: none; border-radius: 25px; overflow: hidden; font-size: 29px; font-family: FaktPro-Medium; font-weight: 400; padding-top: 5px; padding-bottom: 5px; margin-top: 18px; margin-bottom: 10px; color: rgb(255, 255, 255); background-color: rgb(224, 56, 74);" onmouseover="this.style.backgroundColor='#000000'" onmouseout="this.style.backgroundColor='#e0384a'" class="g-recaptcha" data-sitekey="6Lf3y8IUAAAAAEE0pMTHZjRT4DKc-RPolb1Gyjbn" data-callback="onSubmitLeadGenMain">Get It Now!</button>
</form>
</div>

<script>
$(document).ready(function () {
	$("input[type=text],input[type=email], textarea").focus(function() {
		$(".grecaptcha-badge").addClass("showgr");
	});
});
	
function validate()                                    
{ 
	alert("hello!");
    var name = document.forms["lead-gen-form-main"]["name"];               
    var email = document.forms["lead-gen-form-main"]["email"];    
  
   
    if (name.value == "" || name.value == "Your Name")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "" || email.value == "Your Email")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    return true; 
}	
</script>