{extends file="parent:frontend/register/login.tpl"}

{namespace name="frontend/account/login"}

{block name='frontend_register_login_input_lostpassword'}
{/block}

{block name='frontend_register_login_input_form_submit'}
	<div class="register--loginbox-footer panel--footer">
		<div class="register--login-action">
			<button type="submit" class="register--login-btn btn is--primary is--block is--icon-right" name="Submit">
				{s name="LoginLinkLogon"}{/s}
				<i class="icon--arrow-right"></i>
			</button>
		</div>
		<div class="register--login-lostpassword">
			<a href="{url controller=account action=password}" title="{"{s name="LoginLinkLostPassword"}{/s}"|escape}">
				{s name="LoginLinkLostPassword"}{/s}
			</a>
		</div>
	</div>
{/block}