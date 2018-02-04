{extends file="parent:frontend/address/index.tpl"}


{* Addresses headline *}
{block name="frontend_address_headline"}
	<div class="account--welcome">
		<h1 class="account--welcome-title">{s name="AddressesTitle"}My addresses{/s}</h1>
	</div>
{/block}


{block name="frontend_address_item_content"}
	<div class="address--item-content address--box">
		<div class="panel has--border is--rounded block">
			{block name="frontend_address_item_content_title"}
				{if $sUserData.additional.user.default_shipping_address_id == $address.id || $sUserData.additional.user.default_billing_address_id == $address.id}
					<div class="panel--title">
						{if $sUserData.additional.user.default_shipping_address_id == $address.id}
							<div>{s name="AddressesTitleDefaultShippingAddress"}Default shipping address{/s}</div>
						{/if}
						{if $sUserData.additional.user.default_billing_address_id == $address.id}
							<div>{s name="AddressesTitleDefaultBillingAddress"}Default billing address{/s}</div>
						{/if}
					</div>
				{/if}
			{/block}
			<div class="panel--body is--wide">
				{block name="frontend_address_item_content_body"}
					<div class="address--item-body">
						{block name="frontend_address_item_content_inner"}
							{if $address.company}
								<p><span class="address--company">{$address.company}</span>{if $address.department} - <span class="address--department">{$address.department}</span>{/if}</p>
							{/if}
							<span class="address--salutation">{$address.salutation|salutation}</span>
							{if {config name="displayprofiletitle"}}
								<span class="address--title">{$address.title}</span><br/>
							{/if}
							<span class="address--firstname">{$address.firstname}</span> <span class="address--lastname">{$address.lastname}</span><br />
							<span class="address--street">{$address.street}</span><br />
							{if $address.additionalAddressLine1}<span class="address--additional-one">{$address.additionalAddressLine1}</span><br />{/if}
							{if $address.additionalAddressLine2}<span class="address--additional-two">{$address.additionalAddressLine2}</span><br />{/if}
							{if {config name=showZipBeforeCity}}
								<span class="address--zipcode">{$address.zipcode}</span> <span class="address--city">{$address.city}</span>
							{else}
								<span class="address--city">{$address.city}</span> <span class="address--zipcode">{$address.zipcode}</span>
							{/if}<br />
							{if $address.state.name}<span class="address--statename">{$address.state.name}</span><br />{/if}
							<span class="address--countryname">{$address.country.name}</span>
						{/block}
					</div>
				{/block}
			</div>

			{block name="frontend_address_item_content_actions"}
			<div class="panel--footer">
				<div class="address--item-actions panel--actions is--wide">

						{block name="frontend_address_item_content_actions_change"}
							<a href="{url controller=address action=edit id=$address.id}" title="{s name="AddressesContentItemActionEdit"}Change{/s}" class="btn is--small">
								{s name="AddressesContentItemActionEdit"}Change{/s}
							</a>
						{/block}

						{block name="frontend_address_item_content_actions_delete"}
							{if $sUserData.additional.user.default_shipping_address_id != $address.id && $sUserData.additional.user.default_billing_address_id != $address.id}
								<a href="{url controller=address action=delete id=$address.id}" title="{s name="AddressesContentItemActionDelete"}Delete{/s}" class="btn is--small is--danger">
									{s name="AddressesContentItemActionDelete"}Delete{/s}
								</a>
							{/if}
						{/block}
						
						{block name="frontend_address_item_content_set_default"}
							{if $sUserData.additional.user.default_shipping_address_id != $address.id}
								<div class="address--actions-set-defaults">

									{block name="frontend_address_item_content_set_default_shipping"}
										{if $sUserData.additional.user.default_shipping_address_id != $address.id}
												<form action="{url controller="address" action="setDefaultShippingAddress"}" method="post">
													<input type="hidden" name="addressId" value="{$address.id}" />
													<button type="submit" class="btn is--link is--small is--block">{s name="AddressesSetAsDefaultShippingAction"}{/s}</button>
												</form>
										{/if}
									{/block}

									{block name="frontend_address_item_content_set_default_billing"}
										{if $sUserData.additional.user.default_billing_address_id != $address.id}
												<form action="{url controller="address" action="setDefaultBillingAddress"}" method="post">
													<input type="hidden" name="addressId" value="{$address.id}" />
													<button type="submit" class="btn is--link is--small is--block">{s name="AddressesSetAsDefaultBillingAction"}{/s}</button>
												</form>
										{/if}
									{/block}

								</div>
							{/if}
						{/block}
					

				</div>
			</div>
			{/block}

		</div>
	</div>
	
{/block}
