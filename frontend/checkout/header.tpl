{extends file="parent:frontend/checkout/header.tpl"}

{* Logo container *}
{block name='frontend_index_logo_container'}
	<div class="logo-main block-group" role="banner">

		{* Main shop logo *}
		{block name='frontend_index_logo'}
			<div class="logo--shop">
				<a class="logo--link" href="{url controller='index'}" title="{"{config name=shopName}"|escapeHtml} - {"{s name='IndexLinkDefault' namespace="frontend/index/index"}{/s}"|escape}">
					<picture>
						<source srcset="{link file=$theme.desktopLogo}" media="(min-width: 78.75em)">
						<source srcset="{link file=$theme.tabletLandscapeLogo}" media="(min-width: 64em)">
						<source srcset="{link file=$theme.tabletLogo}" media="(min-width: 48em)">

						<img srcset="{link file=$theme.mobileLogo}" alt="{"{config name=shopName}"|escapeHtml} - {"{s name='IndexLinkDefault' namespace="frontend/index/index"}{/s}"|escape}" />
					</picture>
				</a>
			</div>
		{/block}

		{* Trusted Shops *}
		{block name='frontend_index_logo_trusted_shops'}

		{/block}
	</div>
	
	{* Support Info *}
	{block name='frontend_index_logo_supportinfo'}
		<div class="header--supportinfo">
			{s name='RegisterSupportInfo' namespace='frontend/register/index'}{/s}
		</div>
	{/block}
{/block}

