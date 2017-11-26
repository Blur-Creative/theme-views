{extends file="parent:frontend/custom/index.tpl"}


{* Custom page tab inner content *}
{block name="frontend_custom_article_content"}
	{if $sCustomPage.tpl1path}
		{$path = "frontend/_content/"|cat:$sCustomPage.tpl1path}
		
		{include file=$path}
	{else}
		{$sContent}
	{/if}
{/block}