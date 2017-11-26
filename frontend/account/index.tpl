{extends file='parent:frontend/account/index.tpl'}

{* Welcome text *}
{block name="frontend_account_index_welcome"}
	<div class="account--welcome">
		{block name="frontend_account_index_welcome_headline"}
			<h1 class="account--welcome-title">{s name='AccountHeaderWelcome'}{/s},
				{if {config name="displayprofiletitle"}}
					{$sUserData.additional.user.title}
				{/if}
				{$sUserData.additional.user.firstname}
				{$sUserData.additional.user.lastname}
			</h1>
		{/block}

		{block name="frontend_account_index_welcome_content"}
			<p class="account--welcome-text">{s name='AccountHeaderInfo'}{/s}</p>
		{/block}
	</div>
{/block}

{* General user informations *}
{block name="frontend_account_index_info"}
	<div class="account--info account--box panel">

		{block name="frontend_account_index_info_headline"}
			<h2 class="panel--title">{s name="AccountHeaderBasic"}{/s}</h2>
		{/block}

		{block name="frontend_account_index_info_content"}
			<div class="panel--body">
				<p>
					{$sUserData.additional.user.salutation|salutation}
					{if {config name="displayprofiletitle"}}
						{$sUserData.additional.user.title}<br/>
					{/if}
					{$sUserData.additional.user.firstname} {$sUserData.additional.user.lastname}<br />
					{if $sUserData.additional.user.birthday}
						{$sUserData.additional.user.birthday|date:'dd.MM.y'}<br />
					{/if}
					{$sUserData.additional.user.email}
				</p>
			</div>
		{/block}

		{block name="frontend_account_index_info_actions"}
			<div class="panel--footer">
				<div class="row">
					<div class="panel--action grid-col-xs-12">
						<a href="{url controller=account action=profile}" title="{s name='AccountLinkChangeProfile'}{/s}" class="btn is--block is--default is--small">
							{s name='AccountLinkChangeProfile'}{/s}
						</a>
					</div>
				</div>
			</div>
		{/block}
	</div>
{/block}

{* Payment information *}
{block name="frontend_account_index_payment_method"}
	<div class="account--payment account--box panel">

		{block name="frontend_account_index_payment_method_headline"}
			<h2 class="panel--title">{s name="AccountHeaderPayment"}{/s}</h2>
		{/block}

		{block name="frontend_account_index_payment_method_content"}
			<div class="panel--body">
				<p>
					<strong>{$sUserData.additional.payment.description}</strong><br />

					{if !$sUserData.additional.payment.esdactive && {config name="showEsd"}}
						{s name="AccountInfoInstantDownloads"}{/s}
					{/if}
				</p>
			</div>
		{/block}

		{block name="frontend_account_index_payment_method_actions"}
			{$paymentMethodTitle = {"{s name='AccountLinkChangePayment'}{/s}"|escape}}

			<div class="panel--footer">
				<div class="row">
					<div class="panel--action grid-col-xs-12">
						<a href="{url controller='account' action='payment'}"
						   title="{$paymentMethodTitle|escape}"
						   class="btn is--block is--default is--small">
							{s name='AccountLinkChangePayment'}{/s}
						</a>
					</div>
				</div>
			</div>
		{/block}
	</div>
{/block}

{* Billing addresses *}
{block name="frontend_account_index_primary_billing"}
	<div class="account--billing account--box panel">

		{block name="frontend_account_index_primary_billing_headline"}
			<h2 class="panel--title">{s name="AccountHeaderPrimaryBilling"}{/s}</h2>
		{/block}

		{block name="frontend_account_index_primary_billing_content"}
			<div class="panel--body">
				{if $sUserData.billingaddress.company}
					<p>
						<span class="address--company">{$sUserData.billingaddress.company}</span>{if $sUserData.billingaddress.department} - <span class="address--department">{$sUserData.billingaddress.department}</span>{/if}
					</p>
				{/if}
				<p>
					<span class="address--salutation">{$sUserData.billingaddress.salutation|salutation}</span>
					{if {config name="displayprofiletitle"}}
						<span class="address--title">{$sUserData.billingaddress.title}</span><br/>
					{/if}
					<span class="address--firstname">{$sUserData.billingaddress.firstname}</span> <span class="address--lastname">{$sUserData.billingaddress.lastname}</span><br />
					<span class="address--street">{$sUserData.billingaddress.street}</span><br />
					{if $sUserData.billingaddress.additional_address_line1}<span class="address--additional-one">{$sUserData.billingaddress.additional_address_line1}</span><br />{/if}
					{if $sUserData.billingaddress.additional_address_line2}<span class="address--additional-two">{$sUserData.billingaddress.additional_address_line2}</span><br />{/if}
					{if {config name=showZipBeforeCity}}
						<span class="address--zipcode">{$sUserData.billingaddress.zipcode}</span> <span class="address--city">{$sUserData.billingaddress.city}</span>
					{else}
						<span class="address--city">{$sUserData.billingaddress.city}</span> <span class="address--zipcode">{$sUserData.billingaddress.zipcode}</span>
					{/if}<br />
					{if $sUserData.additional.state.statename}<span class="address--statename">{$sUserData.additional.state.statename}</span><br />{/if}
					<span class="address--countryname">{$sUserData.additional.country.countryname}</span>
				</p>
			</div>
		{/block}

		{block name="frontend_account_index_primary_billing_actions"}
			<div class="panel--footer">
				<div class="row">
					<div class="panel--action grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-7">
						<a href="{url controller=address action=edit id=$sUserData.additional.user.default_billing_address_id sTarget=account}"
						   title="{s name='AccountLinkChangeBilling'}{/s}"
						   class="btn is--block is--default is--small">
							{s name="AccountLinkChangeBilling"}{/s}
						</a>
					</div>
					<div class="panel--action grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-5">
						<a href="{url controller=address}"
						   data-address-selection="true"
						   data-setDefaultBillingAddress="1"
						   data-id="{$sUserData.additional.user.default_billing_address_id}"
						   title="{s name='AccountLinkChangeBilling'}{/s}"
						   class="btn is--block is--link is--small">
							{s name="AccountLinkSelectBilling"}{/s}
						</a>
					</div>
				</div>
			</div>
		{/block}
	</div>
{/block}

{* Shipping addresses *}
{block name="frontend_account_index_primary_shipping"}
	<div class="account--shipping account--box panel">

		{block name="frontend_account_index_primary_shipping_headline"}
			<h2 class="panel--title">{s name="AccountHeaderPrimaryShipping"}{/s}</h2>
		{/block}

		{block name="frontend_account_index_primary_shipping_content"}
			<div class="panel--body">
				{if $sUserData.shippingaddress.company}
					<p>
						<span class="address--company">{$sUserData.shippingaddress.company}</span>{if $sUserData.shippingaddress.department} - <span class="address--department">{$sUserData.shippingaddress.department}</span>{/if}
					</p>
				{/if}
				<p>
					<span class="address--salutation">{$sUserData.shippingaddress.salutation|salutation}</span>
					{if {config name="displayprofiletitle"}}
						<span class="address--title">{$sUserData.shippingaddress.title}</span><br/>
					{/if}
					<span class="address--firstname">{$sUserData.shippingaddress.firstname}</span> <span class="address--lastname">{$sUserData.shippingaddress.lastname}</span><br />
					<span class="address--street">{$sUserData.shippingaddress.street}</span><br />
					{if $sUserData.shippingaddress.additional_address_line1}<span class="address--additional-one">{$sUserData.shippingaddress.additional_address_line1}</span><br />{/if}
					{if $sUserData.shippingaddress.additional_address_line2}<span class="address--additional-two">{$sUserData.shippingaddress.additional_address_line2}</span><br />{/if}
					{if {config name=showZipBeforeCity}}
						<span class="address--zipcode">{$sUserData.shippingaddress.zipcode}</span> <span class="address--city">{$sUserData.shippingaddress.city}</span>
					{else}
						<span class="address--city">{$sUserData.shippingaddress.city}</span> <span class="address--zipcode">{$sUserData.shippingaddress.zipcode}</span>
					{/if}<br />
					{if $sUserData.additional.stateShipping.statename}<span class="address--statename">{$sUserData.additional.stateShipping.statename}</span><br />{/if}
					<span class="address--countryname">{$sUserData.additional.countryShipping.countryname}</span>
				</p>
			</div>
		{/block}

		{block name="frontend_account_index_primary_shipping_actions"}
			<div class="panel--footer">
				<div class="row">
					<div class="panel--action grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-7">
						<a href="{url controller=address action=edit id=$sUserData.additional.user.default_shipping_address_id sTarget=account}"
						   title="{s name='AccountLinkChangeBilling'}{/s}"
						   class="btn is--block is--default is--small">
							{s name="AccountLinkChangeShipping"}{/s}
						</a>
					</div>
					<div class="panel--action grid-col-xs-12 grid-col-sm-6 grid-col-md-12 grid-col-lg-5">
						<a href="{url controller=address}"
						   data-address-selection="true"
						   data-setDefaultShippingAddress="1"
						   data-id="{$sUserData.additional.user.default_shipping_address_id}"
						   title="{s name='AccountLinkChangeBilling'}{/s}"
						   class="btn is--block is--link is--small">
							{s name="AccountLinkSelectBilling"}{/s}
						</a>
					</div>
				</div>
			</div>
		{/block}
	</div>
{/block}

{* Newsletter settings *}
{block name="frontend_account_index_newsletter_settings"}
	<div class="account--newsletter account--box panel newsletter">

		{block name="frontend_account_index_newsletter_settings_headline"}
		<h2 class="panel--title">{s name="AccountHeaderNewsletter"}{/s}</h2>
		{/block}

		{block name="frontend_account_index_newsletter_settings_content"}
			<div class="panel--body">
				<form name="frmRegister" method="post" action="{url action=saveNewsletter}">
					<fieldset>
						<div class="checkbox-label">
							<label for="newsletter">
								<input type="checkbox" name="newsletter" value="1" id="newsletter" data-auto-submit="true" {if $sUserData.additional.user.newsletter}checked="checked"{/if} />
								{s name="AccountLabelWantNewsletter"}{/s}
							</label>
						</div>
					</fieldset>
				</form>
			</div>
		{/block}
	</div>
{/block}