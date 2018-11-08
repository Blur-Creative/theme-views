{extends file='parent:frontend/paypal_unified/express_checkout/button_detail.tpl'}

{block name='paypal_unified_ec_button_container_detail_inner'}
	<div class="paypal-unified-ec--button-container"
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
		 data-detailPage="true"
		{block name='paypal_unified_ec_button_container_detail_data'}{/block}>
	</div>
{/block}