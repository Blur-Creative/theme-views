{if $theme.payment_option_active==true}
    <div class="payment-info">
		{block name="frontend_index_footer_payment_info_title"}
			<h2>
				{s namespace="themes/views/frontend/index/payment-info" name="sFooterPaymentInfoTitle"}{/s}
			</h2>
		{/block}
        <ul class="list-inline">
            {block name="frontend_index_footer_payment_item_prepayment"}
                {if $theme.payment_option_prepayment}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/prepayment.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_bill"}
                {if $theme.payment_option_bill}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/bill.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_cash"}
                {if $theme.payment_option_cash}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/cash.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_cashondelievery"}
                {if $theme.payment_option_cashondelievery}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/cashondelievery.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_mastercard"}
                {if $theme.payment_option_mastercard}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/mastercard.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_visa"}
                {if $theme.payment_option_visa}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/visa.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_amex"}
                {if $theme.payment_option_amex}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/amex.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_paypal"}
                {if $theme.payment_option_paypal}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/paypal.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_stripe"}
                {if $theme.payment_option_stripe}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/stripe.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_amazon"}
                {if $theme.payment_option_amazon}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/amazonpay.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_sofort"}
                {if $theme.payment_option_sofort}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/sofort.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_bitcoin"}
                {if $theme.payment_option_bitcoin}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/bitcoin.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_klarna"}
                {if $theme.payment_option_klarna}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/klarna.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_skrill"}
                {if $theme.payment_option_skrill}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/skrill.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_giropay"}
                {if $theme.payment_option_giropay}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/giropay.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_payment_item_paysafecard"}
                {if $theme.payment_option_paysafecard}
                    <li><img src="{link file='frontend/_public/src/img/icons/payment/paysafecard.png'}" /></li>
                {/if}
            {/block}
        </ul>
    </div>
{/if}