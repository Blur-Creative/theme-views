<div class="dispatch--method-list panel has--border">

    {block name='frontend_checkout_shipping_headline'}
		<h3 class="dispatch--method-headline panel--title is--underline">{s namespace='frontend/checkout/shipping_payment' name='ChangeShippingTitle'}{/s}</h3>
	{/block}

	{block name='frontend_checkout_shipping_content'}
		<ul class="list--group">
			{foreach $sDispatches as $dispatch}
				{block name="frontend_checkout_dispatch_container"}
					<li class="list--group-item dispatch--method{if $dispatch@last} method_last{else} method{/if}">

						{* Radio Button *}
						{block name='frontend_checkout_dispatch_shipping_input_radio'}
							<div class="method--input">
								<input type="radio" id="confirm_dispatch{$dispatch.id}" class="radio auto_submit" value="{$dispatch.id}" name="sDispatch"{if $dispatch.id eq $sDispatch.id} checked="checked"{/if} />
							</div>
						{/block}

						{* Method Name *}
						{block name='frontend_checkout_dispatch_shipping_input_label'}
							<div class="method--label is--first">
								<label class="method--name is--strong" for="confirm_dispatch{$dispatch.id}">{$dispatch.name}</label>
							</div>
						{/block}

						{* Method Description *}
						{block name='frontend_checkout_shipping_fieldset_description'}
							{if $dispatch.description}
								<div class="method--description">
									{$dispatch.description}
								</div>
							{/if}
						{/block}
					</li>
				{/block}
			{/foreach}

			{* Actions *}
			{block name="frontend_checkout_shipping_action_buttons"}
				<input type="hidden" class="agb-checkbox" name="sAGB" value="{if $sAGBChecked}1{else}0{/if}" />
			{/block}
		</ul>
	{/block}
</div>