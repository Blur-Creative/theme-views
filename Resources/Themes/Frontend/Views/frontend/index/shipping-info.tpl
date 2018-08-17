{if $theme.shipping_option_active==true}
    <div class="shipping-info">
		{block name="frontend_index_footer_shipping_info_title"}
			<h2>
				{s namespace="themes/views/frontend/index/shipping-info" name="sFooterShippingInfoTitle"}{/s}
			</h2>
		{/block}
        <ul class="list-inline">
            {block name="frontend_index_footer_shipping_item_dpd"}
                {if $theme.shipping_option_dpd}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/dpd.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_dhl"}
                {if $theme.shipping_option_dhl}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/dhl.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_hermes"}
                {if $theme.shipping_option_hermes}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/hermes.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_gls"}
                {if $theme.shipping_option_gls}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/gls.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_ups"}
                {if $theme.shipping_option_ups}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/ups.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_fedex"}
                {if $theme.shipping_option_fedex}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/fedex.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_austriamail"}
                {if $theme.shipping_option_austriamail}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/austria-mail.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_swissmail"}
                {if $theme.shipping_option_swissmail}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/swiss-mail.png'}" /></li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_liefery"}    
                {if $theme.shipping_option_liefery}
                    <li><img src="{link file='frontend/_public/src/img/icons/shipping/liefery.png'}" /></li>
                {/if}
            {/block}
        </ul>
    </div>
{/if}