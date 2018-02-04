{extends file="parent:frontend/detail/tabs.tpl"}


{block name="frontend_detail_tabs_navigation_rating_count"}
	<span class="badge product--rating-count">{$sArticle.sVoteAverage.count}</span>
{/block}

{block name="frontend_detail_tabs_rating_title_count"}
	<span class="badge product--rating-count">{$sArticle.sVoteAverage.count}</span>
{/block}