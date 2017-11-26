{extends file='parent:frontend/checkout/cart.tpl'}

{block name='frontend_checkout_cart_table_actions'}
	<div class="table--actions">

		<div class="main--actions row">
			{* Continue shopping *}
			{block name="frontend_checkout_actions_link_last"}	
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-3">
					{if $sBasket.sLastActiveArticle.link}
							<a href="{$sBasket.sLastActiveArticle.link}"
							   title="{"{s name='CheckoutActionsLinkLast' namespace="frontend/checkout/actions"}{/s}"|escape}"
							   class="btn btn--checkout-continue is--default continue-shopping--action">
								{s name="CheckoutActionsLinkLast" namespace="frontend/checkout/actions"}{/s}
							</a>
					{/if}
				</div>
			{/block}

			{block name="frontend_checkout_actions_confirm"}
				<div class="grid-col-xs-12 grid-col-sm-6 grid-col-lg-3 pull-right">
			
				{* Forward to the checkout *}
				{if !$sMinimumSurcharge && !($sDispatchNoOrder && !$sDispatches)}
					{block name="frontend_checkout_actions_checkout"}
						<a href="{if {config name=always_select_payment}}{url controller='checkout' action='shippingPayment'}{else}{url controller='checkout' action='confirm'}{/if}"
						   title="{"{s name='CheckoutActionsLinkProceedShort' namespace="frontend/checkout/actions"}{/s}"|escape}"
						   class="btn btn--checkout-proceed is--success">
							{s name="CheckoutActionsLinkProceedShort" namespace="frontend/checkout/actions"}{/s}
						</a>
					{/block}
				{else}
					{block name="frontend_checkout_actions_checkout"}
						<span
						   title="{"{s name='CheckoutActionsLinkProceedShort' namespace="frontend/checkout/actions"}{/s}"|escape}"
						   class="btn is--disabled btn--checkout-proceed is--success">
							{s name="CheckoutActionsLinkProceedShort" namespace="frontend/checkout/actions"}{/s}
						</span>
					{/block}
				{/if}
				
				</div>	
			{/block}
			
		</div>
	</div>
{/block}


{block name="frontend_checkout_actions_confirm_bottom"}
	<div class="main--actions row">

		{* Contiune shopping *}
		{block name="frontend_checkout_actions_link_last_bottom"}
		{/block}
		
		{block name="frontend_checkout_actions_inquiry"}
			<div class="grid-col-xs-12 grid-col-sm-12 grid-col-lg-6">
				{if !$sMinimumSurcharge && ($sInquiry || $sDispatchNoOrder)}	
					<a href="{$sInquiryLink}"
					   title="{"{s name='CheckoutActionsLinkOffer' namespace="frontend/checkout/actions"}{/s}"|escape}"
					   class="btn btn--inquiry is--block is--primary">
						{s name="CheckoutActionsLinkOffer" namespace="frontend/checkout/actions"}{/s}
					</a>
				{/if}
			</div>
		{/block}

		{* Forward to the checkout *}
		<div class="grid-col-xs-12 grid-col-sm-12 grid-col-lg-6">
		{if !$sMinimumSurcharge && !($sDispatchNoOrder && !$sDispatches)}
			{block name="frontend_checkout_actions_confirm_bottom_checkout"}		
				<a href="{if {config name=always_select_payment}}{url controller='checkout' action='shippingPayment'}{else}{url controller='checkout' action='confirm'}{/if}"
				   title="{"{s name='CheckoutActionsLinkProceedShort' namespace="frontend/checkout/actions"}{/s}"|escape}"
				   class="btn btn--checkout-proceed is--block is--success">
					{s name="CheckoutActionsLinkProceedShort" namespace="frontend/checkout/actions"}{/s}
				</a>
			{/block}
		{else}
			{block name="frontend_checkout_actions_confirm_bottom_checkout"}		
				<span
				   title="{"{s name='CheckoutActionsLinkProceedShort' namespace="frontend/checkout/actions"}{/s}"|escape}"
				   class="btn is--disabled btn--checkout-proceed is--block is--success">
					{s name="CheckoutActionsLinkProceedShort" namespace="frontend/checkout/actions"}{/s}
				</span>
			{/block}
		{/if}
		</div>
		
	</div>
{/block}