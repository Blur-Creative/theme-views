{extends file="parent:frontend/listing/product-box/button-detail.tpl"}

{block name="frontend_listing_product_box_button_detail_anchor"}
	<a href="{$url}" class="buybox--button btn is--primary is--small" title="{$label} - {$title}">
		{block name="frontend_listing_product_box_button_detail_text"}
			<span class="text-node">{$label}</span>
		{/block}
	</a>
{/block}