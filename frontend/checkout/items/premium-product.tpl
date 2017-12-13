{extends file="parent:frontend/checkout/items/premium-product.tpl"}

{* Remove product from basket *}
{block name='frontend_checkout_cart_item_premium_delete_article'}
    <div class="panel--td column--actions block">
        <div class="column--actions-quantity display--only">
            {$sBasketItem.quantity}
        </div>
		<div class="column--actions-delete">
			<a href="{url action='deleteArticle' sDelete=$sBasketItem.id sTargetAction=$sTargetAction}" class="btn is--danger is--small is--border is--block column--actions-link" title="{"{s name='CartItemLinkDelete '}{/s}"|escape}">
				{s name='CartItemLinkDelete' namespace='frontend/checkout/cart_item'}{/s}
			</a>
		</div>
    </div>
{/block}