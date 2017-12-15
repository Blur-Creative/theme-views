{extends file='parent:widgets/checkout/info.tpl'}

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

{* My account link *}
{block name="frontend_index_checkout_actions_account"}
    <a href="{url controller='account'}"
       title="{"{if $userInfo}{s name="AccountGreetingBefore" namespace="frontend/account/sidebar"}{/s}{$userInfo['firstname']}{s name="AccountGreetingAfter" namespace="frontend/account/sidebar"}{/s} - {/if}{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}"|escape}"
       class="entry--link account--link{if $userInfo} account--user-loggedin{/if}">
        <span class="icon-node icon-account-steamed"></span>
        <span class="text-node account--display">
            {s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
        </span>
        {if $userInfo}
            <span class="badge is--success user-loggedin--badge">
                <span class="icon-node icon-check-thin"></span>
            </span>
        {/if}
    </a>
{/block}

{block name="frontend_index_checkout_actions_account_navigation_smartphone"}
    <div class="navigation--smartphone">
        <ul class="navigation--list">
            <li class="navigation--entry entry--close-off-canvas">
                <a href="#close-account-menu"
                   class="navigation--link account--close-off-canvas"
                   title="{s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s}">
                    {s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s} <i class="icon--arrow-right"></i>
                </a>
            </li>
        </ul>
    </div>
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