{extends file="parent:frontend/checkout/cart_footer.tpl"}

{* Add product using the sku *}
{block name='frontend_checkout_cart_footer_add_product'}
	<form method="post" action="{url action='addArticle' sTargetAction=$sTargetAction}" class="table--add-product add-product--form block-group">
		
		<div class="input-group">	
			{block name='frontend_checkout_cart_footer_add_product_field'}
				<input name="sAdd" class="add-product--field form-control" type="text" placeholder="{s name='CheckoutFooterAddProductPlaceholder' namespace='frontend/checkout/cart_footer_left'}{/s}" />
			{/block}

			{block name='frontend_checkout_cart_footer_add_product_button'}
				<span class="input-group-btn">
					<button type="submit" class="add-product--button btn is--primary is--center">
						<i class="icon--arrow-right"></i>
					</button>
				</span>
			{/block}
		</div>
		
	</form>
{/block}

{* Add product using a voucher *}
{block name='frontend_checkout_cart_footer_add_voucher'}
	<form method="post" action="{url action='addVoucher' sTargetAction=$sTargetAction}" class="table--add-voucher add-voucher--form">
		
		<button type="button" class="btn is--small is--border is--info is--block add-voucher--trigger-btn" data-button-toggle="true">
			{block name='frontend_checkout_cart_footer_add_voucher_trigger'}
				<input type="checkbox" id="add-voucher--trigger" class="add-voucher--checkbox">
			{/block}

			{block name='frontend_checkout_cart_footer_add_voucher_label'}
				<label for="add-voucher--trigger" class="add-voucher--label">{s name="CheckoutFooterVoucherTrigger"}{/s}</label>
			{/block}
		</button>

		<div class="add-voucher--panel is--hidden">
			<div class="input-group">
				{block name='frontend_checkout_cart_footer_add_voucher_field'}
					<input type="text" class="add-voucher--field form-control" name="sVoucher" placeholder="{"{s name='CheckoutFooterAddVoucherLabelInline'}{/s}"|escape}" />
				{/block}

				{block name='frontend_checkout_cart_footer_add_voucher_button'}
					<span class="input-group-btn">
						<button type="submit" class="add-voucher--button btn is--primary">
							<i class="icon--arrow-right"></i>
						</button>
					</span>
				{/block}
			</div>
		</div>
	</form>
{/block}

{block name='frontend_checkout_shipping_costs_country_trigger'}
	<a href="#show-hide--shipping-costs" class="btn is--small is--border is--primary is--block table--shipping-costs-trigger">
		{s name='CheckoutFooterEstimatedShippingCosts'}{/s} <i class="icon--arrow-right"></i>
	</a>
{/block}