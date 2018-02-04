{extends file="parent:frontend/listing/actions/action-filter-button.tpl"}

{* Filter button which will be included in the "listing/listing_actions.tpl" *}
{namespace name="frontend/listing/listing_actions"}

{block name="frontend_listing_actions_filter_button"}
    {if $facets|count > 0}
        <div class="action--filter-btn">
            <a href="#"
               class="filter--trigger btn is--small"
               data-filter-trigger="true"
               data-offcanvas="true"
               data-offCanvasSelector=".action--filter-options"
               data-closeButtonSelector=".filter--close-btn">
                <span class="icon-node icon-filter"></span>
                <span class="text-node">{s name='ListingFilterButton'}{/s}</span>
                <span class="action--collapse-icon"></span>
            </a>
        </div>
    {/if}
{/block}
