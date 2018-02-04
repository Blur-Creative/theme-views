{extends file="parent:frontend/checkout/items/product.tpl"}

{namespace name="frontend/checkout/cart_item"}

{* Product quantity *}
{block name='frontend_checkout_cart_item_quantity'}
{/block}


{* Remove product from basket *}
{block name='frontend_checkout_cart_item_delete_article'}
	<div class="panel--td column--actions">
		<div class="column--actions-quantity">
			{block name='frontend_checkout_cart_item_quantity_selection'}
				{if !$sBasketItem.additional_details.laststock || ($sBasketItem.additional_details.laststock && $sBasketItem.additional_details.instock > 0)}
					<form name="basket_change_quantity{$sBasketItem.id}" method="post" action="{url action='changeQuantity' sTargetAction=$sTargetAction}">
						<select name="sQuantity" data-auto-submit="true">
							{section name="i" start=$sBasketItem.minpurchase loop=$sBasketItem.maxpurchase+1 step=$sBasketItem.purchasesteps}
								<option value="{$smarty.section.i.index}" {if $smarty.section.i.index==$sBasketItem.quantity}selected="selected"{/if}>
									{$smarty.section.i.index}
								</option>
							{/section}
						</select>
						<input type="hidden" name="sArticle" value="{$sBasketItem.id}" />
					</form>
				{else}
					{s name="CartColumnQuantityEmpty" namespace="frontend/checkout/cart_item"}{/s}
				{/if}
			{/block}
		</div>
		
		<div class="column--actions-delete">
			<a href="{url action='deleteArticle' sDelete=$sBasketItem.id sTargetAction=$sTargetAction}" class="btn is--danger is--small is--border is--block column--actions-link" title="{"{s name='CartItemLinkDelete '}{/s}"|escape}">
				{s name='CartItemLinkDelete '}{/s}
			</a>
		</div>
	</div>
{/block}
