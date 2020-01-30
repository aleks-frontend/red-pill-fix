<style>
    /* Custom Login Lightbox Sigup Form Styling */
    .inputsContainer__input {
        display: block;
    }

    .footer-contact-form .submitButton {
        max-width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .footer-contact-form {
            display: flex;
            flex-direction: column;
            align-items: center;
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
            margin-left: 5px;
            margin-right: 5px;
            max-width: 50%;
            box-sizing: border-box;
        }

        .footer-contact-form .submitButton {
            margin: 0 !important;
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
    }

    /* Additional style to hide the g-recaptcha on load - this should be removed when this page goes live */
    .grecaptcha-badge {
        visibility: hidden;
        opacity: 0;
        transition: linear opacity 1s;
    }

    .grecaptcha-badge.showgr {
        visibility: visible;
        opacity: 1;
        transition: linear opacity 1s;
    }
</style>
<div id="optin-newsletter-form-thrive-footer">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <form id="lead-gen-form-footer" class="footer-contact-form" action="https://sendy.redpillquants.com/subscribe" method="POST"
        accept-charset="utf-8">
        <div class="inputsContainer">
        <input
            style="width: 300px;border-radius: 25px; overflow: hidden; font-family: FaktPro-Blond; font-size: 17px; padding-top: 15px !important; margin-top: 13px !important; padding-left: 29px !important; padding-bottom: 15px !important; border: 0px"
            type="text" name="name" placeholder="Your Name"><br><input
            style="width: 300px;border-radius: 25px; overflow: hidden; font-family: FaktPro-Blond; font-size: 17px; padding-top: 15px !important; margin-top: 13px !important; padding-left: 29px !important; padding-bottom: 15px !important; border:0px"
            type="email" name="email" placeholder="Your Email"><br>
        <div style="display:none;">
            <label for="hp">HP</label><br>
            <input type="text" name="hp">
        </div>
        <input type="hidden" name="subform" value="yes">
        <input type="hidden" name="list" value="7QHnJzbdbxYPtJjqkMZU5w">
        </div>
        <button id="captcha3"
            style="width: 330px; border: none; border-radius: 25px; overflow: hidden; font-size: 19px; font-family: FaktPro-Medium; font-weight: 400; padding-top: 11px; padding-bottom: 11px; margin-top: 13px; margin-bottom: 10px; color: rgb(255, 255, 255); background-color: rgb(224, 56, 74);"
            onmouseover="this.style.backgroundColor='#000000'" onmouseout="this.style.backgroundColor='#e0384a'"
            class="g-recaptcha" data-sitekey="6Lf3y8IUAAAAAEE0pMTHZjRT4DKc-RPolb1Gyjbn"
            data-callback="onSubmitLeadGenFooter">Sign Up Now!</button>
    </form>
</div>