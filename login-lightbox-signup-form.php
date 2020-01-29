<style>
/* Custom Login Lightbox Sigup Form Styling */
.lead-gen-form-lightbox .submitButton { max-width: 100%; }

@media only screen and (max-width: 768px) {
  .lead-gen-form-lightbox  {
    flex-direction: column;
  }

  .inputsContainer {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    max-width: 100%;
    margin-bottom: 14px;
  }

  .inputsContainer__input {
    box-sizing: border-box;
    max-width: 50%;
  }
}

@media only screen and (max-width: 360px) {
  .inputsContainer {
    flex-direction: column;
  }

  .inputsContainer__input {
    display: block;
    margin: 10px 0 !important;
    width: 100% !important;
    max-width: 100%;
  }

  .lead-gen-form-lightbox .submitButton { margin-left: 0 !important; }
}
</style>
<div id="optin-newsletter-form-lightbox" style="white-space: nowrap;">
<script src="https://www.google.com/recaptcha/api.js"></script>
<form id="lead-gen-form-lightbox" class="lead-gen-form-lightbox" action="https://sendy.redpillquants.com/subscribe" 
    method="POST" 
    accept-charset="utf-8"
    style="display: flex; align-items: center;">
	<div class="inputsContainer">
	<input class="inputsContainer__input" style="width: 175px;
		background-color : #e1e1e1; 
		border-radius: 25px;
    overflow: hidden;
    font-family: FaktPro-Blond;
    font-size: 17px;
    padding-top: 13px !important;
    margin-top: -10px;
    padding-left: 29px !important;
    padding-bottom: 13px !important;
    border:0px;" type="text" name="name" id="name" placeholder="Your Name">
	<input class="inputsContainer__input" style="width: 175px;
		background-color : #e1e1e1; 						
		border-radius: 25px;
    overflow: hidden;
    font-family: FaktPro-Blond;
    font-size: 17px;
    padding-top: 13px !important;
    margin-top: -10px;
		margin-left: 10px;
    padding-left: 29px !important;
    padding-bottom: 13px !important;
    border: 0px;" type="email" name="email" id="email" placeholder="Your Email">
	<div style="display:none;">
	<label for="hp">HP</label><br>
	<input type="text" name="hp" id="hp">
	</div>
	<input type="hidden" name="subform" value="yes">
	<input type="hidden" id="list" name="list" value="7QHnJzbdbxYPtJjqkMZU5w">
	</div>
	<button id="captcha4" style="width: 205px; border: medium none; border-radius: 25px; overflow: hidden; font-size: 29px; font-family: FaktPro-Medium; font-weight: 400; padding-top: 5px; padding-bottom: 5px; margin-top: 0px; margin-bottom: 10px; margin-left: 10px; color: rgb(255, 255, 255); background-color: rgb(224, 56, 74);" onmouseover="this.style.backgroundColor='#000000'" onmouseout="this.style.backgroundColor='#e0384a'" class="g-recaptcha submitButton" data-sitekey="6Lf3y8IUAAAAAEE0pMTHZjRT4DKc-RPolb1Gyjbn" data-callback="onSubmitLeadGenLightbox">Get It Now!</button>
</form>
</div>