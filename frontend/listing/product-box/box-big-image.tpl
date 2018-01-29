{extends file="parent:frontend/listing/product-box/box-big-image.tpl"}

{namespace name="frontend/listing/box_article"}

{* Product image *}
{block name='frontend_listing_box_article_picture'}
	{include file="frontend/listing/product-box/product-image.tpl"}
{/block}

{block name='frontend_listing_box_article_info_container'}
	<div class="product--info">

		{* Product image *}
		{block name='frontend_listing_box_article_picture'}
		{/block}

		<div class="product--data">
		
			<div class="product--data-infos">
				{* Product name *}
				{block name='frontend_listing_box_article_name'}
					<a href="{$sArticle.linkDetails}"
					   class="product--title"
					   title="{$sArticle.articleName|escapeHtml}">
						{$sArticle.articleName|truncate:50|escapeHtml}
					</a>
				{/block}	

				{block name='frontend_listing_box_article_rating_image'}
					{if $sArticle.sVoteAverage.average}
						<div class="product--rating-container">
							{include file='frontend/_includes/rating.tpl' points=$sArticle.sVoteAverage.average type="aggregated" label=false microData=false}
						</div>
					{/if}
				{/block}
                
                {* Product price - Unit price *}
                {block name='frontend_listing_box_article_unit'}
                    {include file="frontend/listing/product-box/product-price-unit.tpl"}
                {/block}

                {* Product Action Button *}
				{block name="frontend_listing_box_article_buy"}
					{if {config name="displayListingBuyButton"}}
						<div class="product--btn-container">
							{if $sArticle.allowBuyInListing}
								{include file="frontend/listing/product-box/button-buy.tpl"}
							{else}
								{include file="frontend/listing/product-box/button-detail.tpl"}
							{/if}
						</div>
					{/if}
				{/block}				
				
				{* Product actions - Compare product, more information, buy now *}
				{block name='frontend_listing_box_article_actions'}
					{include file="frontend/listing/product-box/product-actions.tpl"}
				{/block}
						
			</div>

			{* Product description *}
			{block name='frontend_listing_box_article_description'}{/block}

			{block name='frontend_listing_box_article_price_info'}
				<div class="product--price-info">

					{* Product price - Default and discount price *}
					{block name='frontend_listing_box_article_price'}
						{include file="frontend/listing/product-box/product-price.tpl"}
					{/block}
				</div>
			{/block}
		</div>
		
	</div>
{/block}