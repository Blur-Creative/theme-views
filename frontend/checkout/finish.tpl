{extends file="parent:frontend/checkout/finish.tpl"}

{* Back to the shop button *}
{block name='frontend_index_shop_navigation' append}
	{block name='frontend_index_minimal_header_elements'}
		{if $theme.checkoutHeader && $sTarget != "account"}
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