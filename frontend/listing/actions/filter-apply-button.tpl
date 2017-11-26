{extends file="parent:frontend/listing/actions/filter-apply-button.tpl"}

{namespace name="frontend/listing/listing_actions"}

{block name="frontend_listing_actions_filter_submit_button"}
    <div class="filter--actions{if $clsSuffix} {$clsSuffix}{/if}">
        <button type="submit"
                class="btn is--primary filter--btn-apply"
                disabled="disabled">
					<span class="icon-node icon-refresh"></span>
					<span class="filter--count"></span>
					<span class="text-node">{s name="ListingFilterApplyButton"}{/s}</span>
        </button>
    </div>
{/block}