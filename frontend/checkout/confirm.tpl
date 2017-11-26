{extends file="parent:frontend/checkout/confirm.tpl"}

{* Back to the shop button *}
{block name='frontend_index_shop_navigation' append}
	{block name='frontend_index_minimal_header_elements'}
		{if $theme.checkoutHeader && $sTarget != "account"}
			{* Support Info *}
			{block name='frontend_index_minimal_header_supportinfo'}
				<div class="header--supportinfo">
					{s name='RegisterSupportInfo' namespace='frontend/register/index'}{/s}
				</div>
			{/block}
			
			{block name='frontend_index_minimal_header_button'}
				<a href="{url controller='index'}"
				   class="btn is--border is--primary is--small btn--back-top-shop"
				   title="{"{s name='FinishButtonBackToShop' namespace='frontend/checkout/finish'}{/s}"|escape}"
				   xmlns="http://www.w3.org/1999/html">
					<i class="icon--arrow-left"></i>
					{s name="FinishButtonBackToShop" namespace="frontend/checkout/finish"}{/s}
				</a>
			{/block}
		{/if}
	{/block}
{/block}

{* Equal Billing & Shipping *}
{block name='frontend_checkout_confirm_information_addresses_equal'}
	<div class="information--panel-item information--panel-address has--equal-address">

		{block name='frontend_checkout_confirm_information_addresses_equal_panel'}
			<div class="panel has--border is--rounded block information--panel">

				{block name='frontend_checkout_confirm_information_addresses_equal_panel_title'}
					<div class="panel--title is--underline">
						{s name='ConfirmAddressEqualTitle'}{/s}
					</div>
				{/block}

				{block name='frontend_checkout_confirm_information_addresses_equal_panel_body'}
					<div class="panel--body is--wide">

						{block name='frontend_checkout_confirm_information_addresses_equal_panel_billing'}
							<div class="billing--panel">
								{if $sUserData.billingaddress.company}
									<span class="address--company is--bold">{$sUserData.billingaddress.company}</span>{if $sUserData.billingaddress.department}<br /><span class="address--department is--bold">{$sUserData.billingaddress.department}</span>{/if}
									<br />
								{/if}

								<span class="address--salutation">{$sUserData.billingaddress.salutation|salutation}</span>
								{if {config name="displayprofiletitle"}}
									<span class="address--title">{$sUserData.billingaddress.title}</span><br/>
								{/if}
								<span class="address--firstname">{$sUserData.billingaddress.firstname}</span> <span class="address--lastname">{$sUserData.billingaddress.lastname}</span><br/>
								<span class="address--street">{$sUserData.billingaddress.street}</span><br />
								{if $sUserData.billingaddress.additional_address_line1}<span class="address--additional-one">{$sUserData.billingaddress.additional_address_line1}</span><br />{/if}
								{if $sUserData.billingaddress.additional_address_line2}<span class="address--additional-two">{$sUserData.billingaddress.additional_address_line2}</span><br />{/if}
								{if {config name=showZipBeforeCity}}
									<span class="address--zipcode">{$sUserData.billingaddress.zipcode}</span> <span class="address--city">{$sUserData.billingaddress.city}</span>
								{else}
									<span class="address--city">{$sUserData.billingaddress.city}</span> <span class="address--zipcode">{$sUserData.billingaddress.zipcode}</span>
								{/if}<br />
								{if $sUserData.additional.state.name}<span class="address--statename">{$sUserData.additional.state.name}</span><br />{/if}
								<span class="address--countryname">{$sUserData.additional.country.countryname}</span>

								{block name="frontend_checkout_confirm_information_addresses_equal_panel_billing_invalid_data"}
									{if $invalidBillingAddress}
										{include file='frontend/_includes/messages.tpl' type="warning" content="{s name='ConfirmAddressInvalidAddress'}{/s}"}
									{else}
										{block name="frontend_checkout_confirm_information_addresses_equal_panel_billing_set_as_default"}
											{if $activeBillingAddressId != $sUserData.additional.user.default_billing_address_id || $activeShippingAddressId != $sUserData.additional.user.default_shipping_address_id}
												<div class="set-default">
													<input type="checkbox" name="setAsDefaultAddress" id="set_as_default" value="1" /> <label for="set_as_default">{s name="ConfirmUseForFutureOrders"}{/s}</label>
												</div>
											{/if}
										{/block}
									{/if}
								{/block}
							</div>
						{/block}

						{block name='frontend_checkout_confirm_information_addresses_equal_panel_shipping'}
							<div class="shipping--panel">
								{block name='frontend_checkout_confirm_information_addresses_equal_panel_shipping_select_address'}
									<a href="{url controller=address}"
									   class="btn is--info choose-different-address"
									   data-address-selection="true"
									   data-sessionKey="checkoutShippingAddressId"
									   data-id="{$activeShippingAddressId}"
									   title="{s name="ConfirmAddressChooseDifferentShippingAddress"}{/s}">
										{s name="ConfirmAddressChooseDifferentShippingAddress"}{/s}
									</a>
								{/block}
							</div>
						{/block}
					</div>

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
					
				{/block}
			</div>
		{/block}
	</div>
{/block}


{* Payment method *}
{block name='frontend_checkout_confirm_information_payment'}
	<div class="information--panel-item information--panel-payment-method{if $activeBillingAddressId == $activeShippingAddressId} has--equal-address{/if}">
		{block name='frontend_checkout_confirm_payment_method_panel'}
			<div class="panel has--border block information--panel payment--panel">

				{block name='frontend_checkout_confirm_left_payment_method_headline'}
					<div class="panel--title is--underline payment--title">
						{s name="ConfirmHeaderPaymentShipping" namespace="frontend/checkout/confirm"}{/s}
					</div>
				{/block}

				{block name='frontend_checkout_confirm_left_payment_content'}
					<ul class="list--group payment--content">
						{block name='frontend_checkout_confirm_left_payment_method'}
							<li class="list--group-item payment--method">
								<div class="method--label payment--method-info">
									<strong class="payment--title">{s name="ConfirmInfoPaymentMethod" namespace="frontend/checkout/confirm"}{/s}</strong>
									<span class="payment--description">{$sUserData.additional.payment.description}</span>
								</div>

								{if $sUserData.additional.payment.additionaldescription}
								<div class="method--description">
									{$sUserData.additional.payment.additionaldescription|truncate:140:"...":true}
								</div>
								{/if}
								
								{if !$sUserData.additional.payment.esdactive && {config name="showEsd"}}
									<p class="payment--confirm-esd">{s name="ConfirmInfoInstantDownload" namespace="frontend/checkout/confirm"}{/s}</p>
								{/if}
							</li>
						{/block}

						{block name='frontend_checkout_confirm_left_shipping_method'}
							<li class="list--group-item shipping--method dispatch--method method--last">
								<div class="method--label shipping--method-info">
									<strong class="shipping--title">{s name="ConfirmHeadDispatch"}{/s}</strong>
									<span class="shipping--description" title="{$sDispatch.name}">{$sDispatch.name|truncate:25:"...":true}</span>
								</div>
								
								{if $sDispatch.description}
								<div class="method--description">
									{$sDispatch.description|truncate:140:"...":true}
								</div>
								{/if}
							</li>
						{/block}

					</ul>
				{/block}

				{block name='frontend_checkout_confirm_left_payment_method_actions'}
					<div class="panel--actions panel--footer">
						{* Action buttons *}
						<a href="{url controller=checkout action=shippingPayment sTarget=checkout}" class="btn is--small btn--change-payment">
							{s name="ConfirmLinkChangePayment" namespace="frontend/checkout/confirm"}{/s}
						</a>
					</div>
				{/block}
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

{* Additional customer comment for the order *}
{block name='frontend_checkout_confirm_comment'}
	<div class="feature--user-comment">
		<textarea class="user-comment--field" rows="5" cols="20" placeholder="{s name="ConfirmPlaceholderComment" namespace="frontend/checkout/confirm"}{/s}" data-pseudo-text="true" data-selector=".user-comment--hidden">{$sComment|escape}</textarea>
	</div>
{/block}

{block name='frontend_checkout_confirm_submit'}
	{* Submit order button *}
	{if $sPayment.embediframe || $sPayment.action}
		<button type="submit" class="submit-order--button btn is--success is--large" form="confirm--form" data-preloader-button="true">
			<span class="icon-node icon-check-thin"></span><span class="text-node">{s namespace="themes/views/frontend/checkout/confirm" name="ConfirmDoPayment"}{/s}</span>
		</button>
	{else}
		<button type="submit" class="submit-order--button btn is--success is--large right" form="confirm--form" data-preloader-button="true">
			<span class="icon-node icon-check-thin"></span><span class="text-node">{s namespace="themes/views/frontend/checkout/confirm" name="ConfirmActionSubmit"}{/s}</span>
		</button>
	{/if}
{/block}