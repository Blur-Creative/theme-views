{extends file="parent:frontend/address/ajax_form.tpl"}

{namespace name="frontend/address/index"}

{block name="frontend_address_action_buttons"}

    <div class="panel--footer panel--actions address--form-actions is--wide">

        {if $formData.id}
            {block name="frontend_address_action_button_send"}
                <button class="btn is--primary address--form-submit save-address" data-value="update" data-checkFormIsValid="false" data-preloader-button="true">{s name="AddressesActionButtonSend"}{/s}</button>
            {/block}
        {/if}

        {block name="frontend_address_action_button_save_as_new"}
            <button class="btn is--primary address--form-submit new-address" data-value="create" data-checkFormIsValid="false" data-preloader-button="true">{s name="AddressesActionButtonCreate"}{/s}</button>
        {/block}

        {block name="frontend_address_action_button_save_action"}
            <input type="hidden" name="saveAction" value="update" />
        {/block}
    </div>

{/block}