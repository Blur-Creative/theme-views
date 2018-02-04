{extends file="parent:widgets/emotion/index.tpl"}

{block name="widgets/emotion/index/config" append}
	{$baseWidth = 1260}
	{if $Controller == 'listing' && $theme.displaySidebar}
		{$baseWidth = 960}
	{/if}
{/block}