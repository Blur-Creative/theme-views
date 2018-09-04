{block name='frontend_detail_index_header'}
    <header class="product--header">
        {block name='frontend_detail_index_header_inner'}

			{block name='frontend_detail_index_product_info'}

				{* Product name *}
				{block name='frontend_detail_index_name'}
					<h1 class="product--title" itemprop="name">
						{$sArticle.articleName}
					</h1>
				{/block}

				<div class="product--info">
				
				{* Product - Supplier information *}
				{block name='frontend_detail_supplier_info'}
					{if $sArticle.supplierImg}
						<div class="product--info-item product--supplier">
							<label>
								{s name='DetailSupplierLabel'}von{/s}
							</label>
							<a href="{url controller='listing' action='manufacturer' sSupplier=$sArticle.supplierID}"
							   title="{"{s name="DetailDescriptionLinkInformation" namespace="frontend/detail/description"}{/s}"|escape}"
							   class="product--supplier-link">
								{$sArticle.supplierName|escape}
							</a>
						</div>
					{/if}
				{/block}
				
				{block name='frontend_detail_header_ordernumber'}
					<div class="product--info-item product--sku">
						<label>
							{s namespace="themes/views/frontend/detail/content/header" name="DetailHeaderOrdernumber"}{/s}
						</label>
						<meta itemprop="productID" content="{$sArticle.articleDetailsID}"/>
						<span class="entry--content product--sku-number" itemprop="sku">
							{$sArticle.ordernumber}
						</span>
					</div>
				{/block}

				{* Product rating *}
				{block name="frontend_detail_comments_overview"}
					{if !{config name=VoteDisable} && $sArticle.sVoteAverage.count > 0}
						<div class="product--info-item product--rating-container">
							<a href="#product--publish-comment" class="product--rating-link" rel="nofollow" title="{"{s namespace="frontend/detail/actions" name='DetailLinkReview'}{/s}"|escape}">
								{include file='frontend/_includes/rating.tpl' points=$sArticle.sVoteAverage.average type="aggregated" count=$sArticle.sVoteAverage.count}
							</a>
						</div>
					{/if}
				{/block}
				
				</div>
			{/block}

        {/block}
    </header>
{/block}
