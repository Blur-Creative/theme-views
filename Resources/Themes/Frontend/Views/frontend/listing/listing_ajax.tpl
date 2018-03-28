{extends file='parent:frontend/listing/listing_ajax.tpl'}

{block name="frontend_listing_list_inline_ajax"}
	{if $sSearch}
		{foreach $sArticles as $sArticle}
			{include file="frontend/listing/box_article.tpl" productBoxLayout=$theme.search_layout_product_box}
		{/foreach}
	{else}
		{$smarty.block.parent}
	{/if}
{/block}