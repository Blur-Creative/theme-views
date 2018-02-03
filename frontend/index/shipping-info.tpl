{if $theme.shipping_option_active==true}
    <div class="shipping-info">
        <h2>
            {s namespace="themes/views/frontend/index/shipping-info" name="sFooterShippingInfoTitle"}{/s}
        </h2>
        <ul class="list-inline">
            {if $theme.shipping_option_dpd}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/dpd.png'}" /></li>
            {/if}
            {if $theme.shipping_option_dhl}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/dhl.png'}" /></li>
            {/if}
            {if $theme.shipping_option_hermes}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/hermes.png'}" /></li>
            {/if}
            {if $theme.shipping_option_gls}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/gls.png'}" /></li>
            {/if}
            {if $theme.shipping_option_ups}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/ups.png'}" /></li>
            {/if}
            {if $theme.shipping_option_fedex}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/fedex.png'}" /></li>
            {/if}
            {if $theme.shipping_option_austriamail}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/austria-mail.png'}" /></li>
            {/if}
            {if $theme.shipping_option_swissmail}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/swiss-mail.png'}" /></li>
            {/if}
            {if $theme.shipping_option_liefery}
                <li><img src="{link file='frontend/_public/src/img/icons/shipping/liefery.png'}" /></li>
            {/if}
        </ul>
    </div>
{/if}