<!-- Facebook Purchase Tracking -->
<!--
<script>
fbq('track', 'Purchase', {value: [MM_Order_Data name='total'], currency: 'USD'});
</script>
-->
<!-- End Facebook Purchase Tracking -->

<!-- Event snippet for Google Adwords - RPQ Sale Adwords conversion page -->
<!-- 
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-728598392/9vL1CJ-krrYBEPiOttsC',
      'value': '[MM_Order_Data name='total']',
      'currency': 'USD',
      'transaction_id': '[MM_Order_Data name='id']'
  });
</script>
-->
<!-- End Adwords Conversion Tracking -->

<!-- Conversion tracking for Google Analytics -->
<!-- 
<script>
ga('require', 'ecommerce');
ga('ecommerce:addTransaction', {
'id': '[MM_Order_Data name='id']', // Transaction ID. Required.
'affiliation': 'RPQ Website', // Affiliation or store name.
'revenue': '[MM_Order_Data name='total']', // Grand Total.
'shipping': '0', // Shipping.
'tax': '0' // Tax.
});

_gaq.push(['_trackTrans']);


// add item might be called for every item in the shopping cart
// where your ecommerce engine loops through each item in the cart and
// prints out _addItem for each
_gaq.push(['_addItem',
'[MM_Order_Data name='id']', // transaction ID – required 
'Foundations', // SKU/code - required
'[MM_Order_Data name='total']',// unit price - required
'1' // quantity - required
]);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

_gaq.push(['_trackTrans']); //submits transaction to the Analytics servers

ga('ecommerce:send');
</script> 
-->
<!-- End Google Analytics tracking -->

<!-- Bing Conversion Tracking begin -->
<!--
<script>
   function GetRevenueValue()
      {
         return '[MM_Order_Data name='total']';
      }
</script>
<script>
   window.uetq = window.uetq || [];
   window.uetq.push('event', '', {'revenue_value': '[MM_Order_Data name='total']', 'currency': 'USD'});  
</script>
-->
<!-- Bing Conversion Tracking end -->


<!-- GTM Data Layer eCommerce -->
<script>
window.dataLayer = window.dataLayer || []
dataLayer.push({
 'event': 'gtm_transaction',
  'ecommerce':{
    'purchase': {
      'actionField': {
        'id': '[MM_Order_Data name="id"]',                        
        'affiliation': "redpillquants",
        'revenue': [MM_Order_Data name="total"],
        'tax': 0.00,
        'shipping': 0.00
      },
      'products': [{
        'name': '[MM_Order_Data name="productName"]',
        'id': '[MM_Order_Data name='productId']',
        'price':  [MM_Order_Data name="subtotal"],
        'quantity': 1
       }]
    }
  }
});
</script>
<!-- GTM Data Layer eCommerce end-->


<div id="thank-you-page-form"><div class="zig-zag-bottom zig-zag-top"><img id="login-page-logo-img" draggable="false" src="https://redpillquants.com/wp-content/uploads/2019/11/RPQ_sideways_F_logo_60h.png" alt="RedPillQuants Logo">
<div id=thank-you-page-content>
<h3 id="login-page-form-title">Thank you for your order, [MM_Member_Data name='firstName']!</h3>

<p>
<strong>Your login credentials are:</strong><br/>
Username: [MM_Member_Data name='username']<br/>
Password: <em>Hidden for security purposes</em>
</p>

[MM_Order_Decision isGift='true']
<p>
This item was purchased as a gift. The following link can be used to redeem the gift:<br/>
[MM_Order_Data name='giftLink']
</p>
[/MM_Order_Decision]

<p>
<strong>Here are your order details:</strong><br/>
Name: [MM_Member_Data name='firstName'] [MM_Member_Data name='lastName']<br/>
Email: [MM_Member_Data name='email']
</p>

[MM_Order_Decision isFree='false']
<p>
Order ID: [MM_Order_Data name='id']<br/>
Subtotal: [MM_Order_Data name='subtotal' doFormat='true']<br/>
[MM_Order_Subdecision isDiscounted='true']
Discount: [MM_Order_Data name='discount' doFormat='true']<br/>
[/MM_Order_Subdecision]
[MM_Order_Subdecision isShippable='true']
Shipping: [MM_Order_Data name='shipping' doFormat='true']<br/>
[/MM_Order_Subdecision]
Order Total: [MM_Order_Data name='total' doFormat='true']
</p>

<p class="u-hide">
Billing Address:<br/>
[MM_Order_Data name='billingAddress']<br/>
[MM_Order_Data name='billingCity'], [MM_Order_Data name='billingState'] [MM_Order_Data name='billingZipCode']<br/>
[MM_Order_Data name='billingCountry']<br/>
</p>
[/MM_Order_Decision]

[MM_Order_Decision isShippable='true']
<p>
Shipping Address:<br/>
[MM_Order_Data name='shippingAddress']<br/>
[MM_Order_Data name='shippingCity'], [MM_Order_Data name='shippingState'] [MM_Order_Data name='shippingZipCode']<br/>
[MM_Order_Data name='shippingCountry']<br/><br/>

Shipping Method: [MM_Order_Data name='shippingMethod']
</p>
[/MM_Order_Decision]
<p>You can access your purchase directly on your <a href="https://redpillquants.com/member-home/">RPQ Member Home page</a>. Please bookmark it for future reference.</p>
<p>If you have any questions concerning your order, feel free to contact us at <a href="mailto:[MM_Employee_Data name='email']">[MM_Employee_Data name='email']</a>.</p>

</div> </div> </div>