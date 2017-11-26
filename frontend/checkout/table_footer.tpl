{extends file="parent:frontend/checkout/table_footer.tpl"}

{namespace name="frontend/checkout/cart"}

	{* Benefits *}
	{block name="frontend_checkout_footer_benefits"}
		<div class="panel footer--benefit">
			{block name="frontend_checkout_footer_headline_benefit"}
				<div class="panel--title">
					<h4 class="benefit--headline">{s namespace="frontend/checkout/cart" name="CheckoutFooterBenefitHeadlineForYou"}{/s}</h4>
				</div>
			{/block}

			{block name="frontend_checkout_footer_benefits_list"}
				<div class="panel--body">
					<ul class="list--unordered is--checked benefit--list">

						{block name="frontend_checkout_footer_benefits_list_entry_1"}
							<li class="list--entry">
								{s name='RegisterInfoAdvantagesEntry1' namespace="frontend/register/index"}{/s}
							</li>
						{/block}

						{block name="frontend_checkout_footer_benefits_list_entry_2"}
							<li class="list--entry">
								{s name='RegisterInfoAdvantagesEntry2' namespace="frontend/register/index"}{/s}
							</li>
						{/block}

						{block name="frontend_checkout_footer_benefits_list_entry_3"}
							<li class="list--entry">
								{s name='RegisterInfoAdvantagesEntry3' namespace="frontend/register/index"}{/s}
							</li>
						{/block}

						{block name="frontend_checkout_footer_benefits_list_entry_4"}
							<li class="list--entry">
								{s name='RegisterInfoAdvantagesEntry4' namespace="frontend/register/index"}{/s}
							</li>
						{/block}
					</ul>
				</div>
			{/block}
		</div>
	{/block}

	{* Supported dispatch services *}
	{block name="frontend_checkout_footer_dispatch"}
		{block name="frontend_checkout_footer_headline_dispatch"}
		{/block}

		{block name="frontend_checkout_footer_text_dispatch"}
		{/block}
	{/block}

	{* Supported payment services *}
	{block name="frontend_checkout_footer_payment"}
		{block name="frontend_checkout_footer_headline_payment"}
		{/block}

		{block name="frontend_checkout_footer_text_payment"}
		{/block}
	{/block}
