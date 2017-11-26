{extends file="parent:frontend/detail/image.tpl"}

{* Product image - Gallery *}
{block name="frontend_detail_image_box"}
	{strip}
	<div class="image-slider--container{if !$sArticle.image} no--image{/if}{if !count($sArticle.images)} no--thumbnails{/if}">
		
		{block name='frontend_detail_data_product_badges'}
			
			{* Percentage discount *}
			{block name='frontend_detail_data_pseudo_price_discount_content_percentage'}
				{if $sArticle.pseudopricePercent.float}
					<span class="product--badge badge--discount">
						- {$sArticle.pseudopricePercent.float|number_format}%
					</span>
				{/if}
			{/block}
			
			{* Sold Out badge *}
			{block name='frontend_detail_data_article_soldout'}
				{if $sArticle.isAvailable==false and $sArticle.instock==0}
					<span class="product--badge badge--soldout">
						{s namespace="themes/views/frontend/listing/product-box/product-badges" name="productBadgeSoldOut"}{/s}
					</span>
				{/if}
			{/block}
			
			{block name='frontend_detail_data_article_new'}
				{if $sArticle.newArticle}
					<span class="product--badge badge--newcomer">
						{s name="ListingBoxNew" namespace="frontend/listing/box_article"}{/s}
					</span>
				{/if}
			{/block}

			{* Highlight badge *}
			{block name='frontend_listing_box_article_hint'}
				{*if $sArticle.highlight*}
					<span class="product--badge badge--recommend">
						{s name="ListingBoxTip" namespace="frontend/listing/box_article"}{/s}
					</span>
				{*/if*}
			{/block}
	
			{* ESD product badge *}
			{block name='frontend_listing_box_article_esd'}
				{if $sArticle.esd}
					<span class="product--badge badge--esd">
						<span class="icon-node icon-download-cloud"></span>
					</span>
				{/if}
			{/block}
			
		{/block}	
		
           <div class="image-slider--slide">

                {block name='frontend_detail_image_default_image_slider_item'}
                    <div class="image--box image-slider--item">

                        {block name='frontend_detail_image_default_image_element'}

                            {$alt = $sArticle.articleName|escape}

                            {if $sArticle.image.description}
                                {$alt = $sArticle.image.description|escape}
                            {/if}

                            <span class="image--element"
                                  {if $sArticle.image}
                                   data-img-large="{$sArticle.image.thumbnails[2].source}"
                                   data-img-small="{$sArticle.image.thumbnails[0].source}"
                                   data-img-original="{$sArticle.image.source}"
                                  {/if}
                                   data-alt="{$alt}">

                                {block name='frontend_detail_image_default_image_media'}
                                    <span class="image--media">
                                        {if isset($sArticle.image.thumbnails)}
                                            {block name='frontend_detail_image_default_picture_element'}
                                                <img srcset="{$sArticle.image.thumbnails[1].sourceSet}"
                                                      src="{$sArticle.image.thumbnails[1].source}"
                                                      alt="{$alt}"
                                                      itemprop="image" />
                                            {/block}
                                        {else}
                                            {block name='frontend_detail_image_fallback'}
                                                <img src="{link file='frontend/_public/src/img/no-picture.jpg'}" alt="{$alt}" itemprop="image" />
                                            {/block}
                                        {/if}
                                    </span>
                                {/block}
                            </span>
                        {/block}
                    </div>
                {/block}

                {foreach $sArticle.images as $image}
                    {block name='frontend_detail_images_image_slider_item'}
                        <div class="image--box image-slider--item">

                            {block name='frontend_detail_images_image_element'}

                                {$alt = $sArticle.articleName|escape}

                                {if $image.description}
                                    {$alt = $image.description|escape}
                                {/if}

                                <span class="image--element"
                                      data-img-large="{$image.thumbnails[2].source}"
                                      data-img-small="{$image.thumbnails[0].source}"
                                      data-img-original="{$image.source}"
                                      data-alt="{$alt}">

                                    {block name='frontend_detail_images_image_media'}
                                        <span class="image--media">
                                            {if isset($image.thumbnails)}
                                                {block name='frontend_detail_images_picture_element'}
                                                    <img srcset="{$image.thumbnails[1].sourceSet}" alt="{$alt}" itemprop="image" />
                                                {/block}
                                            {else}
                                                {block name='frontend_detail_images_fallback'}
                                                    <img src="{link file='frontend/_public/src/img/no-picture.jpg'}" alt="{$alt}" itemprop="image" />
                                                {/block}
                                            {/if}
                                        </span>
                                    {/block}
                                </span>
                            {/block}
                        </div>
                    {/block}
                {/foreach}
            </div>
	</div>
	{/strip}
{/block}