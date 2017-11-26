{namespace name="frontend/listing/box_article"}

{* Small product badges on the left *}
{block name="frontend_box_article_badges"}
    <span class="product--badges">

        {* Discount badge *}
        {block name='frontend_listing_box_article_discount'}
			{if $sArticle.isAvailable==true}
				{if $sArticle.has_pseudoprice}
					<span class="product--badge badge--discount">
						- {$sArticle.pseudopricePercent.float|number_format} %
					</span>
				{/if}
			{/if}
        {/block}
		
        {* Sold Out badge *}
        {block name='frontend_listing_box_article_soldout'}
            {if $sArticle.isAvailable==false and $sArticle.instock==0}
                <span class="product--badge badge--soldout">
					{s namespace="themes/views/frontend/listing/product-box/product-badges" name="productBadgeSoldOut"}{/s}
                </span>
            {/if}
        {/block}

        {* Newcomer badge *}
        {block name='frontend_listing_box_article_new'}
            {if $sArticle.newArticle}
                <span class="product--badge badge--newcomer">
                    {s name="ListingBoxNew"}{/s}
                </span>
            {/if}
        {/block}
		
        {* Highlight badge *}
        {block name='frontend_listing_box_article_hint'}
            {if $sArticle.highlight}
                <span class="product--badge badge--recommend">
                    {s name="ListingBoxTip"}{/s}
                </span>
            {/if}
        {/block}

    </span>
	
	{* ESD product badge *}
	{block name='frontend_listing_box_article_esd'}
		{if $sArticle.esd}
			<span class="product--badge badge--esd">
				<span class="icon-node icon-download-cloud"></span>
			</span>
		{/if}
	{/block}
{/block}






