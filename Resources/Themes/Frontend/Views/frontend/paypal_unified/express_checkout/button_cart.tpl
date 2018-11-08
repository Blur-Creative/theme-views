{extends file='parent:frontend/paypal_unified/express_checkout/button_cart.tpl'}

{block name='paypal_unified_ec_button_container_cart_inner'}
	<div class="paypal-unified-ec--button-container{*if $isLoginPage} left{else} right{/if*}"
		{if $paypalUnifiedUseInContext}
		 data-paypalUnifiedEcButtonInContext="true"
		{else}
		 data-paypalUnifiedEcButton="true"
		{/if}
		 data-paypalMode="{if $paypalUnifiedModeSandbox}sandbox{else}production{/if}"
		 data-createPaymentUrl="{url module=widgets controller=PaypalUnifiedExpressCheckout action=createPayment forceSecure}"
		 data-color="{$paypalUnifiedEcButtonStyleColor}"
		 data-shape="{$paypalUnifiedEcButtonStyleShape}"
		 data-size="{$paypalUnifiedEcButtonStyleSize}"
		 data-paypalLanguage="{$paypalUnifiedLanguageIso}"
		 data-cart="true"
		{block name='paypal_unified_ec_button_container_cart_data'}{/block}>
	</div>
{/block}