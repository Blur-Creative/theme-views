{extends file="parent:frontend/register/login.tpl"}

{namespace name="frontend/account/login"}

{* New customer *}
{block name='frontend_register_login_newcustomer'}
	<div class="register--new-customer">
		<a href="#registration"
		   class="new-customer-btn btn is--info is--icon-right"
		   id="new-customer-action"
		   data-collapseTarget="#registration">
			{s name="LoginLinkRegister2"}{/s}
		</a>
	</div>
{/block}

{* Existing customer *}
{block name='frontend_register_login_customer'}

	<div class="register--existing-customer">
		<form name="sLogin" method="post" action="{$url}" class="panel">
	
		<div class="panel--title">
			{s name="LoginHeaderExistingCustomer"}{/s}
		</div>
		
		<div class="panel--body">
			{block name='frontend_register_login_form'}
				{if $sValidation}
					{$url = {url controller=account action=login sTarget=$sTarget sTargetAction=$sTargetAction sValidation=$sValidation} }
				{else}
					{$url = {url controller=account action=login sTarget=$sTarget sTargetAction=$sTargetAction} }
				{/if}

				
					{if $sTarget}<input name="sTarget" type="hidden" value="{$sTarget|escape}" />{/if}

					{block name='frontend_register_login_description'}
						<div class="register--login-description">{s name="LoginHeaderFields"}{/s}</div>
					{/block}

					{block name='frontend_register_login_input_email'}
						<div class="register--login-email">
							<input name="email" placeholder="{s name="LoginPlaceholderMail"}{/s}" type="email" tabindex="1" value="{$sFormData.email|escape}" id="email" class="register--login-field{if $sErrorFlag.email} has--error{/if}" />
						</div>
					{/block}

					{block name='frontend_register_login_input_password'}
						<div class="register--login-password">
							<input name="password" placeholder="{s name="LoginPlaceholderPassword"}{/s}" type="password" tabindex="2" id="passwort" class="register--login-field{if $sErrorFlag.password} has--error{/if}" />
						</div>
					{/block}
				
			{/block}
		</div>
		
		<div class="panel--footer">
			{block name='frontend_register_login_input_form_submit'}
				<div class="register--login-action">
					<button type="submit" class="register--login-btn btn is--block is--primary is--icon-right" name="Submit">{s name="LoginLinkLogon"}{/s} <i class="icon--arrow-right"></i></button>
				</div>
			{/block}		
			
			{block name='frontend_register_login_input_lostpassword'}
				<div class="register--login-lostpassword">
					<a href="{url controller=account action=password}" title="{"{s name="LoginLinkLostPassword"}{/s}"|escape}">
						{s name="LoginLinkLostPassword"}{/s}
					</a>
				</div>
			{/block}
		</div>

		</form>
	</div>

{/block}