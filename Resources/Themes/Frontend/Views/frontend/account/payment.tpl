{extends file='parent:frontend/account/payment.tpl'}


{* Payment headline *}
{block name="frontend_account_payment_headline"}
	<div class="account--welcome">
		<h1 class="account--welcome-title">{s name="PaymentHeadline"}{/s}</h1>
	</div>
{/block}

{* Payment form *}
{block name="frontend_account_payment_content"}

		{* Error messages *}
		{block name="frontend_account_error_messages"}
			{include file="frontend/register/error_message.tpl" error_messages=$sErrorMessages}
		{/block}

		{* Payment form *}
		{block name="frontend_account_payment_form"}
			<div class="account--payment-form">
				<form name="frmRegister" method="post" action="{url action=savePayment sTarget=$sTarget sTargetAction=$sTargetAction|default:"index"}" class="payment">
					
					<div class="panel">
						{* Payment fieldset *}
						{block name="frontend_account_payment_form_content"}
							{include file='frontend/register/payment_fieldset.tpl' form_data=$sFormData error_flags=$sErrorFlag payment_means=$sPaymentMeans}
						{/block}

						{* Payment actions *}
						{block name="frontend_account_payment_action_buttons"}
							<div class="panel--footer account--actions">
								{block name="frontend_account_payment_action_button_back"}
									{if $sTarget}
										<a class="btn is--secondary left" href="{url controller=$sTarget action=$sTargetAction|default:"index"}" title="{"{s name='PaymentLinkBack'}{/s}"|escape}">
											{s name="PaymentLinkBack"}{/s}
										</a>
									{/if}
								{/block}
								{block name="frontend_account_payment_action_button_send"}
									<input type="submit" value="{s name='PaymentLinkSend'}{/s}" class="btn is--primary register--submit right" />
								{/block}
							</div>
						{/block}
					</div>

				</form>
			</div>
		{/block}


{/block}