{extends file="parent:frontend/register/index.tpl"}

{* Back to the shop button *}
{block name='frontend_index_shop_navigation' append}
	{block name='frontend_index_minimal_header_elements'}
		{if $theme.checkoutHeader}
			{* Support Info *}
			{block name='frontend_index_minimal_header_supportinfo'}
				<div class="header--supportinfo">
					{s name='RegisterSupportInfo' namespace='frontend/register/index'}{/s}
				</div>
			{/block}
			
			{block name='frontend_index_minimal_header_button'}
				<a href="{url controller='index'}"
				   class="btn is--border is--primary is--small btn--back-top-shop"
				   title="{"{s name='FinishButtonBackToShop' namespace='frontend/checkout/finish'}{/s}"|escape}"
				   xmlns="http://www.w3.org/1999/html">
					<i class="icon--arrow-left"></i>
					{s name="FinishButtonBackToShop" namespace="frontend/checkout/finish"}{/s}
				</a>
			{/block}
		{/if}
	{/block}
{/block}

{block name='frontend_register_index_registration'}
	<div class="register--content content{if $errors.occurred} is--collapsed{/if}" id="registration" data-register="true">

		{block name='frontend_register_index_dealer_register'}
			{* Included for compatibility reasons *}
		{/block}

		{block name='frontend_register_index_cgroup_header'}
			{if $register.personal.sValidation}
				{* Include information related to registration for other customergroups then guest, this block get overridden by b2b essentials plugin *}
				<div class="panel register--supplier">
					<h2 class="panel--title is--underline">{$sShopname|escapeHtml} {s name='RegisterHeadlineSupplier' namespace='frontend/register/index'}{/s}</h2>

					<div class="panel--body is--wide">
						<p class="is--bold">{s name='RegisterInfoSupplier3' namespace='frontend/register/index'}{/s}</p>

						<h3 class="is--bold">{s name='RegisterInfoSupplier4' namespace='frontend/register/index'}{/s}</h3>
						<p>{s name='RegisterInfoSupplier5' namespace='frontend/register/index'}{/s}</p>

						<h3 class="is--bold">{s name='RegisterInfoSupplier6' namespace='frontend/register/index'}{/s}</h3>
						<p>{s name='RegisterInfoSupplier7' namespace='frontend/register/index'}{/s}</p>
					</div>
				</div>
			{/if}
		{/block}

		{block name='frontend_register_index_form'}
			<form method="post" action="{url action=saveRegister sTarget=$sTarget sTargetAction=$sTargetAction}" class="register--form panel">

				<div class="panel--title">{s name="SignUpTitle" namespace="frontend/register/index"}Registrieren{/s}</div>
				{block name='frontend_register_index_form_personal_fieldset'}
					{include file="frontend/register/error_message.tpl" error_messages=$errors.personal}
					{include file="frontend/register/personal_fieldset.tpl" form_data=$register.personal error_flags=$errors.personal}
				{/block}

				{block name='frontend_register_index_form_billing_fieldset'}
					{include file="frontend/register/error_message.tpl" error_messages=$errors.billing}
					{include file="frontend/register/billing_fieldset.tpl" form_data=$register.billing error_flags=$errors.billing country_list=$countryList}
				{/block}

				{block name='frontend_register_index_form_shipping_fieldset'}
					{include file="frontend/register/error_message.tpl" error_messages=$errors.shipping}
					{include file="frontend/register/shipping_fieldset.tpl" form_data=$register.shipping error_flags=$errors.shipping country_list=$countryList}
				{/block}

				{* Privacy checkbox *}
				{if !$update}
					{if {config name=ACTDPRCHECK}}
						{block name='frontend_register_index_input_privacy'}
							<div class="register--privacy">
								<input name="register[personal][dpacheckbox]" type="checkbox" id="dpacheckbox"{if $form_data.dpacheckbox} checked="checked"{/if} required="required" aria-required="true" value="1" class="chkbox is--required" />
								<label for="dpacheckbox" class="chklabel{if isset($errors.personal.dpacheckbox)} has--error{/if}">{s name='RegisterLabelDataCheckbox'}{/s}</label>
							</div>
						{/block}
					{/if}
				{/if}

				<div class="panel--footer">
					{block name='frontend_register_index_form_required'}
						{* Required fields hint *}
						<div class="register--required-info required_fields">
							{s name='RegisterPersonalRequiredText' namespace='frontend/register/personal_fieldset'}{/s}
						</div>
					{/block}

					{block name='frontend_register_index_form_submit'}
						{* Submit button *}
						<div class="register--action">
							<button type="submit" class="register--submit btn is--success is--icon-right" name="Submit">{s name="SignUpTitle" namespace="frontend/register/index"}Registrieren{/s} <i class="icon--arrow-right"></i></button>
						</div>
					{/block}
				</div>
			</form>
		{/block}
	</div>
{/block}

    {* Register advantages *}
    {block name='frontend_register_index_advantages'}
        <div class="register--advantages block">
            <h3>{s name='RegisterInfoAdvantagesTitle'}{/s}</h2>
            {block name='frontend_index_content_advantages_list'}
                <ul class="list--unordered is--checked register--advantages-list">
                    {block name='frontend_index_content_advantages_entry1'}
                        <li class="register--advantages-entry">
                            {s name='RegisterInfoAdvantagesEntry1'}{/s}
                        </li>
                    {/block}

                    {block name='frontend_index_content_advantages_entry2'}
                        <li class="register--advantages-entry">
                            {s name='RegisterInfoAdvantagesEntry2'}{/s}
                        </li>
                    {/block}

                    {block name='frontend_index_content_advantages_entry3'}
                        <li class="register--advantages-entry">
                            {s name='RegisterInfoAdvantagesEntry3'}{/s}
                        </li>
                    {/block}

                    {block name='frontend_index_content_advantages_entry4'}
                        <li class="register--advantages-entry">
                            {s name='RegisterInfoAdvantagesEntry4'}{/s}
                        </li>
                    {/block}
                </ul>
            {/block}
        </div>
    {/block}