{* Error messages *}
{block name='frontend_account_payment_error_messages'}
    {include file="frontend/register/error_message.tpl" error_messages=$sErrorMessages}
{/block}

<div class="confirm--outer-container">
    <form id="shippingPaymentForm" name="shippingPaymentForm" method="post" action="{url controller='checkout' action='saveShippingPayment' sTarget='checkout' sTargetAction='index'}" class="payment">

		{* Action top *}
		{block name='frontend_checkout_shipping_payment_core_buttons'}
			<div class="confirm--actions table--actions">
				<div class="row">
					<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-3 pull-right">
						<button type="submit" class="btn is--success is--icon-right is--block main--actions">{s namespace='frontend/checkout/shipping_payment' name='NextButton'}{/s}<i class="icon--arrow-right"></i></button>
					</div>
				</div>
			</div>
		{/block}

		{* Payment and shipping information *}
        <div class="shipping-payment--information row">

            {* Payment method *}
            <div data-match-height="true" class="confirm--inner-container grid-col-xs-12{if $sDispatches} grid-col-sm-6{/if}">
                {block name='frontend_checkout_shipping_payment_core_payment_fields'}
                    {include file='frontend/checkout/change_payment.tpl' form_data=$sFormData error_flags=$sErrorFlag payment_means=$sPaymentMeans}
                {/block}
            </div>

            {* Shipping method *}
            {if $sDispatches}
                <div data-match-height="true" class="confirm--inner-container grid-col-xs-12 grid-col-sm-6">
                    {block name='frontend_checkout_shipping_payment_core_shipping_fields'}
                        {include file="frontend/checkout/change_shipping.tpl"}
                    {/block}
                </div>
            {/if}
        </div>
    </form>

    {* Cart values *}
    <div class="confirm--inner-container">
        {block name='frontend_checkout_shipping_payment_core_footer'}
            {include file="frontend/checkout/cart_footer.tpl"}
        {/block}
    </div>

    {* Action bottom *}
    {block name='frontend_checkout_shipping_payment_core_buttons'}
        <div class="confirm--actions table--actions actions--bottom">
			<div class="row">
				<div class="grid-col-xs-12 grid-col-sm-12 grid-col-lg-6 pull-right">
					<button type="submit" form="shippingPaymentForm" class="btn is--success is--icon-right is--block main--actions">{s namespace='frontend/checkout/shipping_payment' name='NextButton'}{/s}<i class="icon--arrow-right"></i></button>
				</div>
			</div>
		</div>
    {/block}

	{* Benefit and services footer *}
	{block name="frontend_checkout_footer"}
		{include file="frontend/checkout/table_footer.tpl"}
	{/block}
</div>
