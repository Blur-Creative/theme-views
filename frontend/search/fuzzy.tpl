{extends file="parent:frontend/search/fuzzy.tpl"}

{block name="frontend_search_results"}
    <div class="search--results">
        {include file='frontend/listing/listing.tpl' productBoxLayout=$theme.search_layout_product_box}
    </div>
{/block}