<script src='https://www.google.com/recaptcha/api.js?&render=explicit' async defer></script>

<script type="text/javascript">
  $(".g-recaptcha").each(function() {
    var object = $(this);
    grecaptcha.render(object.attr("id"), {
        "sitekey" : "6Lf3y8IUAAAAAEE0pMTHZjRT4DKc-RPolb1Gyjbn",
        "callback" : function(token) {
            object.parents('form').find(".g-recaptcha-response").val(token);
            object.parents('form').submit();
        }
    });
});

function onSubmitLeadGenFooter(token) {
  document.getElementById("lead-gen-form-footer").submit();
}

function onSubmitLeadGenMain(token) {   
    const captchaButton = $('#captcha4');
    const realSubmitButton = captchaButton.clone(false).removeClass('g-recaptcha');

    captchaButton.hide().after(realSubmitButton);
    realSubmitButton.trigger('click');
}

function onSubmitLeadGenLightbox(token) {
  document.getElementById("lead-gen-form-lightbox").submit();
}

function onSubmitContactForm(token) {
  document.getElementById("contact-form").submit();
}

</script>