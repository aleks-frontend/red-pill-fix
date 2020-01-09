[MM_Form type='myaccount']
<div class="mm-myaccount">[MM_Form_Message type='error']
<div class="breadcrumb-block">
<div class="breadcrumb"><a href="https://redpillquants.com/member-home/">Member</a> &gt; My Account</div>
</div>
<div id="mm-services-section" class="mm-myaccount-module">
<div id="mm-services-header" class="mm-myaccount-module-header"><i class="icon-upper_sigma_icon mm-icon gray" aria-hidden="true" data-icon=""></i>Membership <span id="mm-account-membership-plan">[MM_Form_Data name='membershipLevelName']</span> [MM_Member_Decision status='!pending_cancel']
<a class="mm-cancel-membership-button" href="[MM_Form_Button type='cancelMembership']">Cancel</a> [/MM_Member_Decision]</div>
<div class="mm-myaccount-content-wrapper">
<div id="mm-account-details-body" class="mm-myaccount-block">
<p id="mm-element-membership-desc" class="mm-myaccount-element"><span id="mm-label-first-name" class="mm-myaccount-label"> Description: </span></p>

<div id="member-info-section">[MM_Member_Decision membershipId='1']FREE membership level.[/MM_Member_Decision][MM_Member_Decision membershipId='2']<em>[MM_Product_Data id='1' name='description']</em>[/MM_Member_Decision]
[MM_Member_Decision membershipId='3']<em>[MM_Product_Data id='2' name='description']</em>[/MM_Member_Decision]</div>
[MM_Member_Decision isMember='false']You're not logged in - Please login <a href="[MM_CorePage_Link type='login']">here</a>.[/MM_Member_Decision]

</div>
<div id="mm-account-profile-body" class="mm-myaccount-block">[MM_Form_Data name='customFields']</div>
</div>
</div>
<div id="mm-account-details-section" class="mm-myaccount-module">
<div id="mm-account-details-header" class="mm-myaccount-module-header"><i class="fa fa-user mm-icon gray"></i>Account Details
<a id="mm-account-details-update-button" class="mm-update-button" href="[MM_Form_Button type='updateAccountDetails']">update</a></div>
<div class="mm-myaccount-content-wrapper">
<div id="mm-account-details-body" class="mm-myaccount-block">
<p id="mm-element-first-name" class="mm-myaccount-element"><span id="mm-label-first-name" class="mm-myaccount-label"> First Name: </span> <span id="mm-data-first-name" class="mm-myaccount-data"> [MM_Form_Data name='firstName'] </span></p>
<p id="mm-element-last-name" class="mm-myaccount-element"><span id="mm-label-last-name" class="mm-myaccount-label"> Last Name: </span> <span id="mm-data-last-name" class="mm-myaccount-data"> [MM_Form_Data name='lastName'] </span></p>
<p id="mm-element-phone" class="mm-myaccount-element"><span id="mm-label-phone" class="mm-myaccount-label"> Phone: </span> <span id="mm-data-phone" class="mm-myaccount-data"> [MM_Form_Data name='phone'] </span></p>
<p id="mm-element-email" class="mm-myaccount-element"><span id="mm-label-email" class="mm-myaccount-label"> Email: </span> <span id="mm-data-email" class="mm-myaccount-data"> [MM_Form_Data name='email'] </span></p>
<p id="mm-element-username" class="mm-myaccount-element"><span id="mm-label-username" class="mm-myaccount-label"> Username: </span> <span id="mm-data-username" class="mm-myaccount-data"> [MM_Form_Data name='username'] </span></p>
<p id="mm-element-password" class="mm-myaccount-element"><span id="mm-label-password" class="mm-myaccount-label"> Password: </span> <span id="mm-data-password" class="mm-myaccount-data"> [MM_Form_Data name='password'] </span></p>
<p id="mm-element-registration" class="mm-myaccount-element"><span id="mm-label-registration" class="mm-myaccount-label"> Member Since: </span> <span id="mm-data-registration" class="mm-myaccount-data"> [MM_Form_Data name='registrationDate'] </span></p>
[MM_Member_Decision status='pending_cancel']
<p id="mm-element-pending-cancellation" class="mm-myaccount-element"><span id="mm-label-pending-cancellation" class="mm-myaccount-label"> Account will cancel on [MM_Member_Data name='cancellationDate' dateFormat='M j, Y'] </span></p>
[/MM_Member_Decision]

</div>
<div id="mm-account-profile-body" class="mm-myaccount-block">[MM_Form_Data name='customFields']</div>
</div>
</div>
<div id="mm-billing-shipping-info-section" class="mm-myaccount-module">
<div id="mm-billing-info-container" class="mm-myaccount-block">
<div id="mm-billing-info-header" class="mm-myaccount-module-header"><i class="fa fa-credit-card mm-icon gray"></i>Billing Address
<a id="mm-billing-info-update-button" class="mm-update-button" href="[MM_Form_Button type='updateBillingInfo']">update</a></div>
<div class="mm-myaccount-content-wrapper">
<div id="mm-billing-info-body">
<p id="mm-element-billing-address" class="mm-myaccount-element"><span id="mm-label-billing-address" class="mm-myaccount-label"> Address: </span> <span id="mm-data-billing-address" class="mm-myaccount-data"> [MM_Form_Data name='billingAddress'] </span></p>
<p id="mm-element-billing-city" class="mm-myaccount-element"><span id="mm-label-billing-city" class="mm-myaccount-label"> City: </span> <span id="mm-data-billing-city" class="mm-myaccount-data"> [MM_Form_Data name='billingCity'] </span></p>
<p id="mm-element-billing-state" class="mm-myaccount-element"><span id="mm-label-billing-state" class="mm-myaccount-label"> State: </span> <span id="mm-data-billing-state" class="mm-myaccount-data"> [MM_Form_Data name='billingState'] </span></p>
<p id="mm-element-billing-zip-code" class="mm-myaccount-element"><span id="mm-label-billing-zip-code" class="mm-myaccount-label"> Zip Code: </span> <span id="mm-data-billing-zip-code" class="mm-myaccount-data"> [MM_Form_Data name='billingZipCode'] </span></p>
<p id="mm-element-billing-country" class="mm-myaccount-element"><span id="mm-label-billing-country" class="mm-myaccount-label"> Country: </span> <span id="mm-data-billing-country" class="mm-myaccount-data"> [MM_Form_Data name='billingCountry'] </span></p>

</div>
</div>
</div>
<div class="mm-myaccount-content-wrapper"></div>
</div>
</div>
<div id="mm-order-history-section" class="mm-myaccount-module">
<div id="mm-order-history-header" class="mm-myaccount-module-header"><i class="fa fa-shopping-cart mm-icon gray"></i>Order History
<a id="mm-order-history-view-all-button" class="mm-update-button" href="[MM_Form_Button type='viewOrderHistory']">view all</a></div>
<div id="mm-order-history-body" class="mm-myaccount-content-wrapper">[MM_Form_Data name='orderHistory']</div>
</div>
[MM_Form_Section type='gifts']
<div id="mm-gifts-section" class="mm-myaccount-module">
<div id="mm-gifts-header" class="mm-myaccount-module-header"><i class="fa fa-gift mm-icon purple"></i> Gifts Purchased (most recent gifts) <a id="mm-gifts-view-all-button" class="mm-update-button" href="[MM_Form_Button type='viewGiftHistory']">view all</a></div>
<div id="mm-gifts-body" class="mm-myaccount-content-wrapper">[MM_Form_Data name='gifts']</div>
</div>
[/MM_Form_Section] [MM_Form_Section type='socialLogin']
<div id="mm-social-login-section" class="mm-myaccount-module">
<div id="mm-social-login-header" class="mm-myaccount-module-header">Social Networks</div>
<div class="mm-myaccount-content-wrapper">
<div id="mm-social-login-body">[MM_Form_Data name='socialLogin']</div>
</div>
</div>
[/MM_Form_Section]

[/MM_Form]