{extends file='parent:frontend/checkout/shipping_payment_core.tpl'}

{* Action top *}
{block name='frontend_checkout_shipping_payment_core_buttons_top'}
	{block name='frontend_checkout_shipping_payment_core_buttons'}
		<div class="confirm--actions table--actions block">
			<div class="row">
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-3 pull-right">
					<button type="submit" class="btn is--success is--icon-right is--block main--actions">{s namespace='frontend/checkout/shipping_payment' name='NextButton'}{/s}<i class="icon--arrow-right"></i></button>
				</div>
			</div>
		</div>
	{/block}
{/block}

{* Action bottom *}
{block name='frontend_checkout_shipping_payment_core_buttons_bottom'}
	{block name='frontend_checkout_shipping_payment_core_buttons'}
		<div class="confirm--actions table--actions block actions--bottom">
			<div class="row">
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-6 pull-right">
					<button type="submit" form="shippingPaymentForm"  class="btn is--success is--icon-right is--block main--actions">{s namespace='frontend/checkout/shipping_payment' name='NextButton'}{/s}<i class="icon--arrow-right"></i></button>
				</div>
			</div>
		</div>
	{/block}
{/block}