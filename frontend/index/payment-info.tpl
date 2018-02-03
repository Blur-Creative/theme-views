{if $theme.payment_option_active==true}
    <div class="payment-info">
        <h2>
            {s namespace="themes/views/frontend/index/payment-info" name="sFooterPaymentInfoTitle"}{/s}
        </h2>
        <ul class="list-inline">
            {if $theme.payment_option_prepayment}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/prepayment.png'}" /></li>
            {/if}
            {if $theme.payment_option_bill}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/bill.png'}" /></li>
            {/if}
            {if $theme.payment_option_cashondelievery}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/cashondelievery.png'}" /></li>
            {/if}
            {if $theme.payment_option_mastercard}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/mastercard.png'}" /></li>
            {/if}
            {if $theme.payment_option_visa}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/visa.png'}" /></li>
            {/if}
            {if $theme.payment_option_amex}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/amex.png'}" /></li>
            {/if}
            {if $theme.payment_option_paypal}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/paypal.png'}" /></li>
            {/if}
            {if $theme.payment_option_stripe}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/stripe.png'}" /></li>
            {/if}
            {if $theme.payment_option_amazon}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/amazonpay.png'}" /></li>
            {/if}
            {if $theme.payment_option_sofort}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/sofort.png'}" /></li>
            {/if}
            {if $theme.payment_option_bitcoin}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/bitcoin.png'}" /></li>
            {/if}
            {if $theme.payment_option_klarna}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/klarna.png'}" /></li>
            {/if}
            {if $theme.payment_option_skrill}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/skrill.png'}" /></li>
            {/if}
            {if $theme.payment_option_giropay}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/giropay.png'}" /></li>
            {/if}
            {if $theme.payment_option_paysafecard}
                <li><img src="{link file='frontend/_public/src/img/icons/payment/paysafecard.png'}" /></li>
            {/if}
        </ul>
    </div>
{/if}