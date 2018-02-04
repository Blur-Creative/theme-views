{extends file="parent:frontend/listing/product-box/box-emotion.tpl"}

{* Product badges *}
{block name='frontend_listing_box_article_badges'}
{/block}

{block name='frontend_listing_box_article_image_element' prepend}

	{* Product box badges - highlight, newcomer, ESD product and discount *}
	{block name='frontend_listing_box_article_badges_renew'}
		{include file="frontend/listing/product-box/product-badges.tpl"}
	{/block}
	
	{* Product box badges - highlight, newcomer, ESD product and discount *}
	{block name='frontend_listing_box_article_soldout_overlay'}
		{if !$sArticle.isAvailable}
			<span class="soldout--overlay"></span>
		{/if}
	{/block}
    
    {* Delivery informations *}
    {if $theme.product_box_delivery_display_active}
        {if ($sArticle.sConfiguratorSettings.type != 1 && $sArticle.sConfiguratorSettings.type != 2) || $activeConfiguratorSelection == true}
            {include file="frontend/plugins/index/delivery_informations.tpl" sArticle=$sArticle productBox=true}
        {/if}
    {/if}
{/block}
