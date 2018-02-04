{extends file="parent:frontend/detail/content/tab_navigation.tpl"}

{* Tab navigation - Accessory products *}
{block name="frontend_detail_tabs_entry_related"}
	{if $sArticle.sRelatedArticles && !$sArticle.crossbundlelook}
		<a href="#content--related-products" title="{s namespace="frontend/detail/tabs" name='DetailTabsAccessories'}{/s}" class="tab--link">
			{s namespace="frontend/detail/tabs" name='DetailTabsAccessories'}{/s}
			<span class="product--rating-count-wrapper">
				<span class="badge product--rating-count">{$sArticle.sRelatedArticles|@count}</span>
			</span>
		</a>
	{/if}
{/block}