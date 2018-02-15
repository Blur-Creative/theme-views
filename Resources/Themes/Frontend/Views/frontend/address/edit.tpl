{extends file="parent:frontend/address/edit.tpl"}

{namespace name="frontend/address/index"}

{* Address headline *}
{block name="frontend_address_form_headline"}
    <div class="account--welcome">
        <h1 class="account--welcome-title">
            {s name="AddressesTitleEdit"}Change address{/s}
        </h1>
    </div>
{/block}

{block name="frontend_address_form_content"}
    {if $sTarget}
        {$url={url controller=address action=edit id=$formData.id sTarget=$sTarget sTargetAction=$sTargetAction}}
    {else}
        {$url={url controller=address action=edit id=$formData.id}}
    {/if}
    <form name="frmAddresses" method="post" action="{$url}">
        {include file="frontend/address/form.tpl" formAction="{$url}"}
    </form>
{/block}