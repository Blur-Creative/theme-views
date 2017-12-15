{extends file="parent:frontend/checkout/items/voucher.tpl"}

{* Remove voucher from basket *}
{block name='frontend_checkout_cart_item_voucher_delete_article'}
    <div class="panel--td column--actions block">
        <div class="column--actions-quantity display--only">
        </div>
		<div class="column--actions-delete">
			<a href="{url action='deleteArticle' sDelete=voucher sTargetAction=$sTargetAction}" class="btn is--danger is--small is--border is--block column--actions-link" title="{"{s name='CartItemLinkDelete '}{/s}"|escape}">
				{s name='CartItemLinkDelete' namespace='frontend/checkout/cart_item'}{/s}
			</a>
		</div>
    </div>
{/block}