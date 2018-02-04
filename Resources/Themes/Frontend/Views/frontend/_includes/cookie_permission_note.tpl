{extends file='parent:frontend/_includes/cookie_permission_note.tpl'}

{block name="cookie_permission_accept_button"}
    <div class="cookie-permission--button">
        <a href="#" class="btn cookie-permission--accept-button {strip}
                {if $theme.cookie_permission_button_state!=default}
                    is--{$theme.cookie_permission_button_state}
                {/if}
            {/strip}">
            {s namespace="frontend/cookiepermission/index" name="cookiePermission/buttonText"}{/s}
        </a>
    </div>
{/block}