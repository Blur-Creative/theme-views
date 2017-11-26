{* Notepad entry *}
{block name="frontend_index_checkout_actions_notepad"}
	<li class="navigation--entry entry--notepad" role="menuitem">
		<a href="{url controller='note'}" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkNotepad'}{/s}"|escape}" class="entry--link">
			<span class="icon-node icon-favorites-steamed"></span>
			<span class="text-node">
				{s namespace='frontend/index/checkout_actions' name='IndexLinkNotepad'}{/s}
			</span>
			{if $sNotesQuantity > 0}
				<span class="badge notes--quantity">
					{$sNotesQuantity}
				</span>
			{/if}
		</a>
	</li>
{/block}

{* My account entry *}
{block name="frontend_index_checkout_actions_my_options"}
	<li class="navigation--entry entry--account" role="menuitem">
		{block name="frontend_index_checkout_actions_account"}
			<a href="{url controller='account'}" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}"|escape}" class="entry--link account--link">
				<span class="icon-node icon-account-steamed"></span>
				<span class="text-node account--display">
					{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
				</span>
			</a>
		{/block}
	</li>
{/block}

{* Cart entry *}
{block name="frontend_index_checkout_actions_cart"}
	<li class="navigation--entry entry--cart" role="menuitem">
		<a class="entry--link cart--link" href="{url controller='checkout' action='cart'}" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkCart'}{/s}"|escape}">
            <span class="badge is--primary cart--quantity{if $sBasketQuantity < 1} is--hidden{/if}">{$sBasketQuantity}</span>

			<span class="icon-node icon-cart-steamed"></span>
			
			<span class="text-node cart--display">
				{if $sUserLoggedIn}
					{s name='IndexLinkCheckout' namespace='frontend/index/checkout_actions'}{/s}
				{else}
					{s namespace='frontend/index/checkout_actions' name='IndexLinkCart'}{/s}
				{/if}
				<span class="cart--amount">
					{$sBasketAmount|currency} {s name="Star" namespace="frontend/listing/box_article"}{/s}
				</span>
				
			</span>

		</a>
		<div class="ajax-loader">&nbsp;</div>
	</li>
{/block}

{block name="frontend_index_checkout_actions_inner"}{/block}