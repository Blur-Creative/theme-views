{extends file='parent:frontend/index/footer-navigation.tpl'}
{namespace name="frontend/index/menu_footer"}

{* Service hotline *}
{block name="frontend_index_footer_column_service_hotline"}
    <div class="footer--column column--hotline is--first block">
		{block name="frontend_index_footer_column_service_hotline_headline"}
            <div class="column--headline">{s name="sFooterServiceHotlineHead"}{/s}</div>
		{/block}

		{block name="frontend_index_footer_column_service_hotline_content"}
			<div class="column--content">
				<p class="column--desc">
					{s namespace="themes/views/frontend/index/footer-navigation" name="shopSupportContactDescription"}{/s}
				</p>
				<ul class="footer--contact-list">
					<li class="list--item item--telephone">
						<span class="icon-node icon-telephone-steamed-thin"></span>
						<span class="text-node">
							{s namespace="themes/views/frontend/index/footer-navigation" name="shopSupportTelephone"}{/s}
						</span>
					</li>
					<li class="list--item item--mail">
						<span class="icon-node icon-mail-steamed-thin"></span>
						<span class="text-node">
							{s namespace="themes/views/frontend/index/footer-navigation" name="shopSupportMail"}{/s}
						</span>
					</li>
				</ul>
			</div>
		{/block}
    </div>
{/block}

{block name="frontend_index_footer_column_newsletter"}
	<div class="footer--column column--newsletter is--last block">
		{block name="frontend_index_footer_column_newsletter_headline"}
			<div class="column--headline">{s name="sFooterNewsletterHead"}{/s}</div>
		{/block}

		{block name="frontend_index_footer_column_newsletter_content"}
			<div class="column--content">
				<p class="column--desc">
					{s name="sFooterNewsletter"}{/s}
				</p>

				{block name="frontend_index_footer_column_newsletter_form"}
					<form class="newsletter--form" action="{url controller='newsletter'}" method="post">
						<input type="hidden" value="1" name="subscribeToNewsletter" />

						<div class="input-group">			
							{block name="frontend_index_footer_column_newsletter_form_field"}
								<input type="email" name="newsletter" class="newsletter--field form-control" placeholder="{s name="IndexFooterNewsletterValue"}{/s}" />
							{/block}

							{block name="frontend_index_footer_column_newsletter_form_submit"}
								<span class="input-group-btn">
									<button type="submit" class="newsletter--button btn is--primary">
										<span class="icon-node icon-paperplane"></span>
										<span class="button--text">{s name='IndexFooterNewsletterSubmit'}{/s}</span>
									</button>
								</span>
							{/block}
						</div>
						
                        {* Data protection information *}
                        {block name="frontend_index_footer_column_newsletter_privacy"}
                            {if {config name=ACTDPRTEXT} || {config name=ACTDPRCHECK}}
                                {$hideCheckbox=false}

                                {* If a captcha is active, the user has to accept the privacy statement on the newsletter page *}
                                {if {config name=newsletterCaptcha} !== "nocaptcha"}
                                    {$hideCheckbox=true}
                                {/if}

                                {include file="frontend/_includes/privacy.tpl" hideCheckbox=$hideCheckbox}
                            {/if}
                        {/block}
						
					</form>
				{/block}
			</div>
		{/block}
	</div>
{/block}
