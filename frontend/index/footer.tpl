{block name='frontend_index_footer_main'}
	<footer class="footer-main">
		<div class="container">
			{* Footer menu *}
			{block name='frontend_index_footer_menu'}
				<div class="footer--columns block-group">
					{include file='frontend/index/footer-navigation.tpl'}
				</div>
			{/block}
		</div>
	</footer>
{/block}

{* Copyright in the footer *}
{block name='frontend_index_footer_copyright'}
    <div class="footer--bottom">

		{block name='frontend_index_footer_social_media'}
			{if $theme.socials_option_facebook!="" or $theme.socials_option_instagram!="" or $theme.socials_option_twitter!="" or $theme.socials_option_youtube!="" or $theme.socials_option_googleplus!="" or $theme.socials_option_pinterest!="" or $theme.socials_option_xing!=""}
				<div class="footer--social-media container">
					<ul class="list-inline text--center">
						{if $theme.socials_option_facebook!=""}
							<li><a href="{$theme.socials_option_facebook}" target="_blank"><span class="icon-node icon-facebook"></span></a></li>
						{/if}
						{if $theme.socials_option_instagram!=""}
							<li><a href="{$theme.socials_option_instagram}" target="_blank"><span class="icon-node icon-instagram"></span></a></li>
						{/if}
						{if $theme.socials_option_twitter!=""}
							<li><a href="{$theme.socials_option_twitter}" target="_blank"><span class="icon-node icon-twitter"></span></a></li>
						{/if}
						{if $theme.socials_option_youtube!=""}
							<li><a href="{$theme.socials_option_youtube}" target="_blank"><span class="icon-node icon-youtube-new"></span></a></li>
						{/if}
						{if $theme.socials_option_googleplus!=""}
							<li><a href="{$theme.socials_option_googleplus}" target="_blank"><span class="icon-node icon-google-plus"></span></a></li>
						{/if}
						{if $theme.socials_option_pinterest!=""}
							<li><a href="{$theme.socials_option_pinterest}" target="_blank"><span class="icon-node icon-pinterest"></span></a></li>
						{/if}
						{if $theme.socials_option_xing!=""}
							<li><a href="{$theme.socials_option_xing}" target="_blank"><span class="icon-node icon-xing"></span></a></li>
						{/if}
					</ul>
				</div>
			{/if}
		{/block}
	
        {* Vat info *}
        {block name='frontend_index_footer_vatinfo'}
            <div class="footer--vat-info container">
                <p class="vat-info--text">
                    {if $sOutputNet}
                        {s name='FooterInfoExcludeVat' namespace="frontend/index/footer"}{/s}
                    {else}
                        {s name='FooterInfoIncludeVat' namespace="frontend/index/footer"}{/s}
                    {/if}
                </p>
            </div>
        {/block}

        {block name='frontend_index_footer_minimal'}
            {include file="frontend/index/footer_minimal.tpl" hideCopyrightNotice=true}
        {/block}

        {* Shopware footer *}
        {block name="frontend_index_shopware_footer"}

            {* Copyright *}
            {block name="frontend_index_shopware_footer_copyright"}
                <div class="footer--copyright container text--center">
					{s namespace="themes/views/frontend/index/footer" name="ThemeCopyright"}{/s}
                </div>
            {/block}

            {* Logo *}
            {block name="frontend_index_shopware_footer_logo"}
                <div class="footer--logo container  text--center">
                    <img src="{link file='frontend/_public/src/img/icons/blurcreative.png'}" />
                </div>
            {/block}
        {/block}
    </div>
{/block}
