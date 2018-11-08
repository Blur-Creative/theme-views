{extends file="parent:frontend/detail/buy.tpl"}

{* Quantity selection *}
{block name='frontend_detail_buy_quantity'}
	{$smarty.block.parent}
{/block}

{* "Buy now" button *}
{block name="frontend_detail_buy_button"}
	<div class="buybox--button-block">
		{if $sArticle.sConfigurator && !$activeConfiguratorSelection}
			<button class="buybox--button is--block btn is--success btn is--disabled is--large" disabled="disabled" aria-disabled="true" name="{s name="DetailBuyActionAddName"}{/s}"{if $buy_box_display} style="{$buy_box_display}"{/if}>
				<span class="icon-node icon-cart-steamed"></span>
				<span class="text-node">{s name="DetailBuyActionAdd"}{/s}</span>
			</button>
		{else}
			<button class="buybox--button is--block btn is--success is--center is--large" name="{s name="DetailBuyActionAddName"}{/s}"{if $buy_box_display} style="{$buy_box_display}"{/if}>
				<span class="icon-node icon-cart-steamed"></span>
				<span class="text-node">{s name="DetailBuyActionAdd"}{/s}</span>
			</button>
		{/if}
	</div>
{/block}


{block name="frontend_detail_buy_button_container_outer"}
	{$smarty.block.parent}
	
    {block name='frontend_detail_buy_button_paypal_unified_installments'}
        {if !($sArticle.sConfigurator && !$activeConfiguratorSelection) && $paypalUnifiedEcDetailActive}
            {include file='frontend/paypal_unified/express_checkout/button_detail.tpl'}
        {/if}
    {/block}
	
	{block name="frontend_detail_buy_button_soldout"}
		{if !$sArticle.isAvailable}
			<div class="buybox--button-soldout">
				{s namespace="themes/views/frontend/listing/product-box/product-badges" name="productBadgeSoldOut"}{/s}
			</div>
		{/if}
	{/block}
{/block}