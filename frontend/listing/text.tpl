{extends file="parent:frontend/listing/text.tpl"}

{namespace name="frontend/listing/listing"}

{block name="frontend_listing_text"}
    {if $theme.header_listing_content_active}
        {$smarty.block.parent}
    {/if}
{/block}

{* Headline *}
{block name="frontend_listing_text_headline" prepend}
	{if $sCategoryContent.media.source}
		<div class="category--teaser-image">
			<img src="{$sCategoryContent.media.source}" />
		</div>
	{/if}
{/block}