{namespace name='themes/views/frontend/index/payment-info'}

{if $theme.payment_option_active==true}
    <div class="payment-info">
		{block name="frontend_index_footer_payment_info_title"}
			<div class="payment-info--title">
				{s name='sFooterPaymentInfoTitle'}{/s}
			</div>
		{/block}
        <ul class="list-inline">
            {block name="frontend_index_footer_payment_item_prepayment"}
                {if $theme.payment_option_prepayment}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/prepayment.png'}"
							 alt="{s name='sPaymentInfoPrepayment'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoPrepayment'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_bill"}
                {if $theme.payment_option_bill}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/bill.png'}"
							 alt="{s name='sPaymentInfoBill'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoBill'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_cash"}
                {if $theme.payment_option_cash}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/cash.png'}"
							 alt="{s name='sPaymentInfoCash'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoCash'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_cashondelievery"}
                {if $theme.payment_option_cashondelievery}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/cashondelievery.png'}"
							 alt="{s name='sPaymentInfoCashondelievery'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoCashondelievery'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_mastercard"}
                {if $theme.payment_option_mastercard}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/mastercard.png'}"
							 alt="{s name='sPaymentInfoMastercard'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoMastercard'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_visa"}
                {if $theme.payment_option_visa}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/visa.png'}"
							 alt="{s name='sPaymentInfoVisa'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoVisa'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_amex"}
                {if $theme.payment_option_amex}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/amex.png'}"
							 alt="{s name='sPaymentInfoAmex'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoAmex'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_paypal"}
                {if $theme.payment_option_paypal}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/paypal.png'}"
							 alt="{s name='sPaymentInfoPayPal'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoPayPal'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_stripe"}
                {if $theme.payment_option_stripe}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/stripe.png'}"
							 alt="{s name='sPaymentInfoStripe'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoStripe'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_amazon"}
                {if $theme.payment_option_amazon}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/amazonpay.png'}"
							 alt="{s name='sPaymentInfoAmazonPay'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoAmazonPay'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_sofort"}
                {if $theme.payment_option_sofort}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/sofort.png'}"
							 alt="{s name='sPaymentInfoSofort'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoSofort'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_bitcoin"}
                {if $theme.payment_option_bitcoin}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/bitcoin.png'}"
							 alt="{s name='sPaymentInfoBitcoin'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoBitcoin'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_klarna"}
                {if $theme.payment_option_klarna}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/klarna.png'}"
							 alt="{s name='sPaymentInfoKlarna'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoKlarna'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_skrill"}
                {if $theme.payment_option_skrill}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/skrill.png'}"
							 alt="{s name='sPaymentInfoSkrill'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoSkrill'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_giropay"}
                {if $theme.payment_option_giropay}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/giropay.png'}"
							 alt="{s name='sPaymentInfoGiropay'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoGiropay'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_paysafecard"}
                {if $theme.payment_option_paysafecard}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/payment/paysafecard.png'}"
							 alt="{s name='sPaymentInfoPaysafecard'}{/s}" 
							 title="{s name='sFooterPaymentInfoTitle'}{/s} {s name='sPaymentInfoPaysafecard'}{/s}" />
					</li>
                {/if}
            {/block}
        </ul>
    </div>
{/if}