{extends file="parent:frontend/listing/product-box/box-basic.tpl"}

{namespace name="frontend/listing/box_article"}

{* Variant description *}
{block name='frontend_listing_box_variant_description'}
    {if $sArticle.attributes.swagVariantConfiguration}
        <div class="variant--description">
        
            <span title="
                {foreach $sArticle.attributes.swagVariantConfiguration->get('value') as $group}
                        {$group.groupName}: {$group.optionName}
                {/foreach}
                ">
                {foreach $sArticle.attributes.swagVariantConfiguration->get('value') as $group}
                    <span class="variant--description--line">
                        <span class="variant--groupName">{$group.groupName}:</span> {$group.optionName} {if !$group@last}|{/if}
                    </span>
                {/foreach}
            </span>
        </div>
    {/if}
{/block}

{* Customer rating for the product *}
{block name='frontend_listing_box_article_rating'}
{/block}

{block name='frontend_listing_box_article_price_info'}
	<div class="product--price-info">

		{* Product price - Default and discount price *}
		{block name='frontend_listing_box_article_price'}
			{include file="frontend/listing/product-box/product-price.tpl"}
		{/block}
		
		{* Product price - Unit price *}
		{block name='frontend_listing_box_article_unit'}
			{include file="frontend/listing/product-box/product-price-unit.tpl"}
		{/block}
	</div>
{/block}

{* Product box badges - highlight, newcomer, ESD product and discount *}
{block name='frontend_listing_box_article_badges'}
{/block}