{extends file="parent:frontend/checkout/ajax_cart_item.tpl"}

{* Article actions *}
{block name='frontend_checkout_ajax_cart_actions'}
	<div class="action--container">
		{$deleteUrl = {url controller="checkout" action="ajaxDeleteArticleCart" sDelete=$basketItem.id}}

		{if $basketItem.modus == 2}
			{$deleteUrl = {url controller="checkout" action="ajaxDeleteArticleCart" sDelete="voucher"}}
		{/if}

		{if $basketItem.modus != 4}
			<a href="{$deleteUrl}" class="btn is--danger is--small is--small action--remove" title="{s name="AjaxCartRemoveArticle" namespace="frontend/checkout/ajax_cart"}{/s}">
				<i class="icon--cross"></i>
			</a>
		{/if}
	</div>
{/block}