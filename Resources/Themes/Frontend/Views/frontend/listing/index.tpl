{extends file='parent:frontend/listing/index.tpl'}

{block name='frontend_index_content_left' prepend}
		{* Topseller *}
		{block name="frontend_listing_index_topseller"}
			{if !$hasEmotion && {config name=topSellerActive}}
				{action module=widgets controller=listing action=top_seller sCategory=$sCategoryContent.id}
			{/if}
		{/block}
{/block}


{* Main content *}
{block name='frontend_index_content'}
	<div class="content listing--content">

		{* Banner *}
		{block name="frontend_listing_index_banner"}
            {if !$hasEmotion}
			    {include file='frontend/listing/banner.tpl'}
			{/if}
		{/block}

		{* Category headline *}
		{block name="frontend_listing_index_text"}
			{if !$hasEmotion}
				{include file='frontend/listing/text.tpl'}
			{/if}
		{/block}

        {* Define all necessary template variables for the listing *}
        {block name="frontend_listing_index_layout_variables"}

            {$emotionViewports = [0 => 'xl', 1 => 'l', 2 => 'm', 3 => 's', 4 => 'xs']}

            {* Count of available product pages *}
            {$pages = 1}

            {if $criteria}
                {$pages = ceil($sNumberArticles / $criteria->getLimit())}
            {/if}

            {* Layout for the product boxes *}
            {$productBoxLayout = 'basic'}

            {if $sCategoryContent.productBoxLayout !== null && $sCategoryContent.productBoxLayout !== 'extend'}
                {$productBoxLayout = $sCategoryContent.productBoxLayout}
            {/if}
        {/block}

		{* Listing *}
		{block name="frontend_listing_index_listing"}
			{include file='frontend/listing/listing.tpl'}
		{/block}

		{* Tagcloud *}
		{block name="frontend_listing_index_tagcloud"}
			{if {config name=show namespace=TagCloud }}
				{action module=widgets controller=listing action=tag_cloud sController=listing sCategory=$sCategoryContent.id}
			{/if}
		{/block}
	</div>
{/block}