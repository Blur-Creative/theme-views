{extends file='parent:frontend/checkout/premiums.tpl'}

{block name='frontend_checkout_premium_info_button_small'}
    <button class="premium--button btn is--primary is--align-center" type="submit">
        <span class="icon-node icon-cart"></span>
    </button>
{/block}

{block name='frontend_checkout_premium_info_button'}
    <button class="btn is--primary is--align-center" type="submit">
        <span class="icon-node icon-cart"></span>
        <span class="text-node">{s name='PremiumActionAdd' namespace='frontend/checkout/premiums'}{/s}</span>
    </button>
{/block}