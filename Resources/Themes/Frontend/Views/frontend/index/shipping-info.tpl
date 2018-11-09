{namespace name='themes/views/frontend/index/shipping-info'}

{if $theme.shipping_option_active==true}
    <div class="shipping-info">
		{block name="frontend_index_footer_shipping_info_title"}
			<div class="shipping-info--title">
				{s name='sFooterShippingInfoTitle'}{/s}
			</div>
		{/block}
        <ul class="list-inline">
            {block name="frontend_index_footer_shipping_item_dpd"}
                {if $theme.shipping_option_dpd}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/dpd.png'}"
							 alt="{s name='sShippingInfoDPD'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoDPD'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_dhl"}
                {if $theme.shipping_option_dhl}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/dhl.png'}"
							 alt="{s name='sShippingInfoDHL'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoDHL'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_hermes"}
                {if $theme.shipping_option_hermes}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/hermes.png'}"
							 alt="{s name='sShippingInfoHermes'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoHermes'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_gls"}
                {if $theme.shipping_option_gls}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/gls.png'}"
							 alt="{s name='sShippingInfoGLS'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoGLS'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_ups"}
                {if $theme.shipping_option_ups}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/ups.png'}"
							 alt="{s name='sShippingInfoUPS'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoUPS'}"{/s} />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_fedex"}
                {if $theme.shipping_option_fedex}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/fedex.png'}"
							 alt="{s name='sShippingInfoFedEx'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoFedEx'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_austriamail"}
                {if $theme.shipping_option_austriamail}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/austria-mail.png'}"
							 alt="{s name='sShippingInfoAustriaMail'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoAustriaMail'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_swissmail"}
                {if $theme.shipping_option_swissmail}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/swiss-mail.png'}"
							 alt="{s name='sShippingInfoSwissMail'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoSwissMail'}{/s}" />
					</li>
                {/if}
            {/block}
            {block name="frontend_index_footer_shipping_item_liefery"}    
                {if $theme.shipping_option_liefery}
                    <li>
						<img src="{link file='frontend/_public/src/img/icons/shipping/liefery.png'}"
							 alt="{s name='sShippingInfoLiefery'}{/s}"
							 title="{s name='sFooterShippingInfoTitle'}{/s} {s name='sShippingInfoLiefery'}{/s}" />
					</li>
                {/if}
            {/block}
        </ul>
    </div>
{/if}