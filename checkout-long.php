[MM_Custom_Decision tstmls='true']
<style>.testimonial {display: block;}</style>
<p>[/MM_Custom_Decision]<br />
[MM_Custom_Decision tstmls='false']</p>
<style>.testimonial {display: none;}</style>
<p>[/MM_Custom_Decision]</p>
<div class="mm-checkoutContainer">[MM_Form type='checkout']<br />
[MM_Form_Message type='error']</p>
<div class="mm_left_column">
<p>[MM_Form_Section type='accountInfo']</p>
<div id="mm-account-information-section" class="mm-checkoutInfoBlock">
<h3>Account Information</h3>
<p class="mm-formField"><label>Email:</label><br />
[MM_Form_Field type='input' name='email' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-left" class="mm-formField"><label>First Name:</label><br />
[MM_Form_Field type='input' name='firstName' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-right" class="mm-formField"><label>Last Name:</label><br />
[MM_Form_Field type='input' name='lastName' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-left" class="mm-formField"><label>Password:</label><br />
[MM_Form_Field type='input' name='password' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-right" class="mm-formField"><label>Phone:</label><br />
[MM_Form_Field type='input' name='phone' isRequired='false' customAttributes='placeholder=""']</p>
</div>
<p>[/MM_Form_Section]<br />
[MM_Form_Section type='billingInfo']</p>
<div id="mm-billing-information-section" class="mm-checkoutInfoBlock">
<h3>Billing Details</h3>
<p class="mm-ccLogos"><img src="https://redpillquants.com/wp-content/plugins/membermouse/resources/images/cclogos.gif" alt="Visa, Master Card, American Express, Discover" width="199" height="30" /></p>
<div id="mm-creditcard-field">
<p class="mm-formField"><label>Credit Card:</label><br />
[MM_Form_Field name='ccNumber' customAttributes='placeholder=""']</p>
</div>
<div id="mm-security-field">
<p class="mm-formField"><label>Security Code:</label><br />
[MM_Form_Field name='ccSecurityCode' customAttributes='placeholder=""']</p>
</div>
<div id="mm-exp-field">
<p id="mm-checkout-expiration-date" class="mm-checkout-expiration-date mm-formField"><label>Expiration Date: </label><br />
[MM_Form_Field name='ccExpirationDate']</p>
</div>
<h3 class="mm-hr">Billing Address</h3>
<p class="mm-formField"><label>Address:</label><br />
[MM_Form_Field name='billingAddress' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-left" class="mm-formField"><label>City:</label><br />
[MM_Form_Field name='billingCity' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-right" class="mm-formField"><label>State:</label><br />
[MM_Form_Field name='billingState' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-left" class="mm-formField"><label>Zip:</label><br />
[MM_Form_Field name='billingZipCode' customAttributes='placeholder=""']</p>
<p id="mm-formfield-width-right" class="mm-formField"><label>Country:</label><br />
[MM_Form_Field name='billingCountry']</p>
</div>
<p>[/MM_Form_Section]<br />
[MM_Form_Section type='shippingInfo']</p>
<div id="mm-shipping-information-section" class="mm-checkoutInfoBlock">
<h3>Shipping Address</h3>
<p id="mm-shipping-method-block" class="mm-formField"><label>Shipping Method:</label><br />
[MM_Form_Field name='shippingMethod']</p>
<p class="mm-formField">Shipping is the same as billing<br />
[MM_Form_Field name='shippingSameAsBilling']</p>
<p>[MM_Form_Subsection type='shippingAddress']</p>
<div>
<p class="mm-formField"><label>Address:</label><br />
[MM_Form_Field name='shippingAddress' customAttributes='placeholder=""']</p>
<p class="mm-formField"><label>City:</label><br />
[MM_Form_Field name='shippingCity' customAttributes='placeholder=""']</p>
<p class="mm-formField"><label>State:</label><br />
[MM_Form_Field name='shippingState' customAttributes='placeholder=""']</p>
<p class="mm-formField"><label>Zip :</label><br />
[MM_Form_Field name='shippingZipCode' customAttributes='placeholder=""']</p>
<p class="mm-formField"><label>Country:</label><br />
[MM_Form_Field name='shippingCountry']</p>
</div>
<p>[/MM_Form_Subsection]</p>
</div>
<p>[/MM_Form_Section]<br />
[MM_Form_Section type='coupon']</p>
<div id="mm-coupon-block" class="mm-couponSection mm-checkoutInfoBlock">
<h3>Coupons</h3>
<p class="mm-formField">[MM_Form_Field name='couponCode']<br />
<a class="mm-button" href="[MM_Form_Button type='applyCoupon']">Apply Coupon</a></p>
<p>[MM_Form_Message type='couponSuccess']<br />
[MM_Form_Message type='couponError']</p>
</div>
<p>[/MM_Form_Section]</p>
</div>
<div class="mm_right_column">
<div class="mm-checkoutSection2">
<h2>[MM_Form_Data name='productName' useAccessName='false']</h2>
<p class="mm-productDesc">[MM_Form_Data name='productDescription']</p>
<ul>
<li style="list-style-type: none;">
<ul>
<li><span class="mm-prices">Product Price:</span> [MM_Form_Data name='productPriceDescription']</li>
</ul>
</li>
</ul>
[MM_Order_Decision isShippable='true']
<ul>
<li style="list-style-type: none;">
<ul>
<li><span class="mm-prices">Shipping Price:</span> [MM_Form_Data name='shippingPrice']</li>
</ul>
</li>
</ul>
<p>[/MM_Order_Decision]<br />
[MM_Order_Decision isDiscounted='true']</p>
<ul>
<li style="list-style-type: none;">
<ul>
<li><span class="mm-prices">Discount:</span> [MM_Form_Data name='discount']</li>
</ul>
</li>
</ul>
<p>[/MM_Order_Decision]</p>
<ul>
<li><span class="mm-prices">Total Price:</span> [MM_Form_Data name='totalPrice']</li>
</ul>
</div>
<div class="mm-purchaseSection">
<div class="mm-paymentbuttons">[MM_Form_Button type='all' label='Submit Order' color='orange']</div>
</div>
<div class="testimonial">
<h3>What others are saying</h3>
[tvo_shortcode id=1512]
</div>
</div>
<p>[/MM_Form]</p>
</div>
