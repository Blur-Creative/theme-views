{extends file="parent:frontend/checkout/confirm.tpl"}

{* Equal Address Panel Footer *}
{block name='frontend_checkout_confirm_information_addresses_equal_panel_actions'}
	<div class="panel--actions panel--footer">
		{block name="frontend_checkout_confirm_information_addresses_equal_panel_actions_change"}
			<div class="address--actions-change">
				<div class="row">
					{block name='frontend_checkout_confirm_information_addresses_equal_panel_shipping_change_address'}
						<div class="grid-col-xs-12 grid-col-md-6 panel--action">
							<a href="{url controller=address action=edit id=$activeBillingAddressId sTarget=checkout sTargetAction=confirm}"
							   data-address-editor="true"
							   data-id="{$activeBillingAddressId}"
							   data-sessionKey="checkoutBillingAddressId,checkoutShippingAddressId"
							   data-title="{s name="ConfirmAddressSelectButton"}Change address{/s}"
							   title="{s name="ConfirmAddressSelectButton"}Change address{/s}"
							   class="btn is--block is--small">
								{s name="ConfirmAddressSelectButton"}Change address{/s}
							</a>
						</div>
					{/block}
					
					{block name="frontend_checkout_confirm_information_addresses_equal_panel_actions_select_address"}
						<div class="grid-col-xs-12 grid-col-md-6 panel--action">
							<a href="{url controller=address}"
							   title="{s name='ConfirmAddressSelectLink'}{/s}"
							   class="btn is--link is--block is--small"
							   data-address-selection="true"
							   data-sessionKey="checkoutBillingAddressId,checkoutShippingAddressId"
							   data-id="{$activeBillingAddressId}">
								{s name="ConfirmAddressSelectLink"}{/s}
							</a>
						</div>
					{/block}
				</div>
			</div>
		{/block}
	</div>
{/block}

{* Shipping Address Panel Footer *}
{block name="frontend_checkout_confirm_information_addresses_shipping_panel_actions"}
	<div class="panel--actions panel--footer">
		<div class="row">
			{block name="frontend_checkout_confirm_information_addresses_shipping_panel_actions_change"}
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-6 panel--action address--actions-change">
					{block name="frontend_checkout_confirm_information_addresses_shipping_panel_actions_change_address"}
						<a href="{url controller=address action=edit id=$activeShippingAddressId sTarget=checkout sTargetAction=confirm}"
						   title="{s name="ConfirmAddressSelectButton"}Change address{/s}"
						   data-title="{s name="ConfirmAddressSelectButton"}Change address{/s}"
						   data-address-editor="true"
						   data-id="{$activeShippingAddressId}"
						   data-sessionKey="checkoutShippingAddressId"
						   class="btn is--small is--block">
							{s name="ConfirmAddressSelectButton"}Change address{/s}
						</a>
					{/block}
				</div>
			{/block}
		
			{block name="frontend_checkout_confirm_information_addresses_shipping_panel_actions_select_address"}
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-6 panel--action">
					<a href="{url controller=address}"
					   data-address-selection="true"
					   data-sessionKey="checkoutShippingAddressId"
					   data-id="{$activeShippingAddressId}"
					   title="{s name='ConfirmAddressSelectLink'}{/s}"
					   class="btn is--small is--link is--block">
						{s name='ConfirmAddressSelectLink'}{/s}
					</a>
				</div>
			{/block}
		</div>
	</div>
{/block}

{* Billing Address Panel Footer *}
{block name="frontend_checkout_confirm_information_addresses_billing_panel_actions"}
	<div class="panel--actions panel--footer">
		<div class="row">
			{block name="frontend_checkout_confirm_information_addresses_billing_panel_actions_change"}
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-6 panel--action address--actions-change">
					{block name="frontend_checkout_confirm_information_addresses_billing_panel_actions_change_address"}
						<a href="{url controller=address action=edit id=$activeBillingAddressId sTarget=checkout sTargetAction=confirm}"
						   data-address-editor="true"
						   data-sessionKey="checkoutBillingAddressId"
						   data-id="{$activeBillingAddressId}"
						   data-title="{s name="ConfirmAddressSelectButton"}Change address{/s}"
						   title="{s name="ConfirmAddressSelectButton"}Change address{/s}"
						   class="btn is--small is--block">
							{s name="ConfirmAddressSelectButton"}Change address{/s}
						</a>
					{/block}
				</div>
			{/block}
			
			{block name="frontend_checkout_confirm_information_addresses_billing_panel_actions_select_address"}
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-6 panel--action">
					<a href="{url controller=address}"
					   data-address-selection="true"
					   data-sessionKey="checkoutBillingAddressId"
					   data-id="{$activeBillingAddressId}"
					   title="{s name='ConfirmAddressSelectLink'}{/s}"
					   class="btn is--small is--link is--block">
						{s name="ConfirmAddressSelectLink"}{/s}
					</a>
				</div>
			{/block}
		</div>
	</div>
{/block}

{* Additional feature - Add voucher *}
{block name="frontend_checkout_confirm_additional_features_add_voucher"}
	<div class="feature--group">
		<div class="feature--voucher">
			<form method="post" action="{url action='addVoucher' sTargetAction=$sTargetAction}" class="table--add-voucher add-voucher--form">
				{block name='frontend_checkout_table_footer_left_add_voucher_agb'}
					{if !{config name='IgnoreAGB'}}
						<input type="hidden" class="agb-checkbox" name="sAGB"
							   value="{if $sAGBChecked}1{else}0{/if}"/>
					{/if}
				{/block}

				<div class="input-group">
					{block name='frontend_checkout_confirm_add_voucher_field'}
						<input type="text" class="add-voucher--field form-control" name="sVoucher" placeholder="{"{s name='CheckoutFooterAddVoucherLabelInline' namespace='frontend/checkout/cart_footer'}{/s}"|escape}" />
					{/block}

					{block name='frontend_checkout_confirm_add_voucher_button'}
						<span class="input-group-btn">
							<button type="submit" class="add-voucher--button btn is--primary">
								<span class="icon-node icon-arrow-right"></span>
							</button>
						</span>
					{/block}
				</div>
			</form>
		</div>


		{* Additional feature - Add product using the sku *}
		{block name="frontend_checkout_confirm_additional_features_add_product"}
			<div class="feature--add-product">
				<form method="post" action="{url action='addArticle' sTargetAction=$sTargetAction}" class="table--add-product add-product--form block-group">

					<div class="input-group">
						{block name='frontend_checkout_confirm_add_product_field'}
							<input name="sAdd" class="add-product--field form-control" type="text" placeholder="{s name='CheckoutFooterAddProductPlaceholder' namespace='frontend/checkout/cart_footer_left'}{/s}" />
						{/block}

						{block name='frontend_checkout_confirm_add_product_button'}
						<span class="input-group-btn">
							<button type="submit" class="add-product--button btn is--primary">
								<span class="icon-node icon-arrow-right"></span>
							</button>
						</span>
						{/block}
					</div>
				</form>
			</div>
		{/block}
	</div>
{/block}