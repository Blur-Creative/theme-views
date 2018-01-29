{extends file="parent:frontend/index/index.tpl"}

{block name="frontend_index_body_classes" append}
{strip}
	{block name="frontend_index_page_wrap_layout_class"}
		{if $theme.page_wrap_layout=='boxedWidth'} page--boxed-width{/if}
	{/block}
	
	{block name="frontend_index_body_background_image"}
		{if $theme.body_background_image} has--background-image{/if}
	{/block}
    
	{block name="frontend_index_body_has_breadcrumb"}
		{if count($sBreadcrumb)} has--breadcrumb{/if}
	{/block}
{/strip}
{/block}

{block name="frontend_index_body_attributes" append}
{strip}
	{block name="frontend_index_body_background_image"}
		{if $theme.body_background_image}
			style="background-image: url('{$theme.body_background_image}');"
		{/if}
	{/block}
{/strip}
{/block}

{* Shop header *}
{block name='frontend_index_navigation'}

	{block name='frontend_index_usp_bar_header_top'}
		{if $theme.usp_bar_header_active}
			{include file="frontend/index/usp-bar.tpl"}
		{/if}
	{/block}

    {block name='frontend_index_header_listing_category_teaser_flag'}
        {if ($theme.header_listing_active==='all' and ($Controller=='index' or $Controller=='listing')) || ($theme.header_listing_active==='listing' and $Controller=='listing')}
            {$headerListingCategoryTeaser = 'true'}
        {/if}
    {/block}
	
	<header class="header-main{if $headerListingCategoryTeaser} has--header-category-teaser{/if}"{if $headerListingCategoryTeaser && $sCategoryContent.media.source} style="background-image: url('{$sCategoryContent.media.source}');"{/if}>
		<div class="container">
			{* Include the top bar navigation *}
			{block name='frontend_index_top_bar_container'}
				{include file="frontend/index/topbar-navigation.tpl"}
			{/block}

			{block name='frontend_index_header_navigation'}
				<div class="header--navigation">

					{* Shop navigation *}
					{block name='frontend_index_shop_control'}				
                        <div class="shop--control">
                            {* Menu (Off canvas left) trigger *}
                            {block name='frontend_index_offcanvas_left_trigger'}
                                <a class="entry--link entry--trigger entry--menu-icon" href="#offcanvas--left" data-offcanvas="true" data-offCanvasSelector=".sidebar-main">
                                    <span class="icon-node icon-menu"></span><span class="text-node">{s namespace='frontend/index/menu_left' name="IndexLinkMenu"}{/s}</span>
                                </a>
                            {/block}

                            <div class="entry--search" role="menuitem" data-search="true" aria-haspopup="true"{if $theme.focusSearch && {controllerName|lower} == 'index'} data-activeOnStart="true"{/if}>
                                {include file="frontend/index/search.tpl"}
                            </div>
                        </div>
					{/block}
					
					{* Logo container *}
					{block name='frontend_index_logo_container'}
						{include file="frontend/index/logo-container.tpl"}
					{/block}

					{* Shop navigation *}
					{block name='frontend_index_shop_navigation'}
						{include file="frontend/index/shop-navigation.tpl"}
					{/block}

					{block name='frontend_index_container_ajax_cart'}
						<div class="container--ajax-cart" data-collapse-cart="true"{if $theme.offcanvasCart} data-displayMode="offcanvas"{/if}></div>
					{/block}
				</div>
			{/block}
			
			{* Search form *}
			{block name='frontend_index_search'}
				<div class="mobile--search" role="menuitem" data-search="true" aria-haspopup="true"{if $theme.focusSearch && {controllerName|lower} == 'index'} data-activeOnStart="true"{/if}>
					{* Include of the search form *}
					{block name='frontend_index_search_include'}
						{include file="frontend/index/search.tpl"}
					{/block}
				</div>
			{/block}
					
		</div>
		
		{* Maincategories navigation top *}
		{block name='frontend_index_navigation_categories_top'}
			<nav class="navigation-main{if $theme.mainNavigationAlignment} navigation-align-{$theme.mainNavigationAlignment}{/if}"{if  $theme.mainNavigationSticky} data-sticky-navigation="true"{/if}>
				<div class="container" data-menu-scroller="true" data-listSelector=".navigation--list" data-viewPortSelector=".navigation--list-wrapper">
					{block name="frontend_index_navigation_categories_top_include"}
						{include file='frontend/index/main-navigation.tpl'}
					{/block}
				</div>
			</nav>
		{/block}
        
	{block name='frontend_index_header_listing_category_teaser'}
		{if $headerListingCategoryTeaser}
            {include file="frontend/index/header-category-teaser.tpl"}
        {/if}
	{/block}

				
	</header>
	
	{* Breadcrumb *}
	{block name='frontend_index_breadcrumb'}
		{if count($sBreadcrumb)}
			<div class="container">
				<nav class="content--breadcrumb">
					{block name='frontend_index_breadcrumb_inner'}
						{include file='frontend/index/breadcrumb.tpl'}
					{/block}
				</nav>
			</div>
		{/if}
	{/block}
{/block}

{block name='frontend_index_content_main'}
	<section class="content-main container">

		{* Content top container *}
		{block name="frontend_index_content_top"}{/block}

		<div class="content-main--inner">
			{* Sidebar left *}
			{block name='frontend_index_content_left'}
				{include file='frontend/index/sidebar.tpl'}
			{/block}

			{* Main content *}
			{block name='frontend_index_content_wrapper'}
				<div class="content--wrapper">
					{block name='frontend_index_content'}{/block}
				</div>
			{/block}

			{* Sidebar right *}
			{block name='frontend_index_content_right'}{/block}

		</div>
	</section>
	
	{* Last seen products *}
	{block name='frontend_index_left_last_articles'}
		{if $sLastArticlesShow && !$isEmotionLandingPage}
			{* Last seen products *}
			<div class="container-fluid last-seen-products-container">
				<div class="row">
					<div class="last-seen-products is--hidden container" data-last-seen-products="true">
						<div class="last-seen-products--title">
							{s namespace="frontend/plugins/index/viewlast" name='WidgetsRecentlyViewedHeadline'}{/s}
						</div>
						<div class="last-seen-products--slider product-slider" data-product-slider="true">
							<div class="last-seen-products--container product-slider--container"></div>
						</div>
					</div>
				</div>
			</div>
		{/if}
	{/block}
{/block}

{* Footer *}
{block name="frontend_index_footer"}

	{block name="frontend_index_footer_additional_infos"}
		{if $theme.shipping_option_active==true or $theme.payment_option_active==true}
			<div class="container-fluid footer-additional-infos">
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="grid-col-sm-6">
								{block name="frontend_index_footer_payment_infos"}
									{if $theme.payment_option_active==true}
										<div class="payment-info">
											<h2>
												{s name="sFooterPaymentInfoTitle"}Zahlen Sie mit{/s}
											</h2>
											<ul class="list-inline">
												{if $theme.payment_option_prepayment}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/prepayment.png'}" /></li>
												{/if}
												{if $theme.payment_option_bill}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/bill.png'}" /></li>
												{/if}
												{if $theme.payment_option_cashondelievery}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/cashondelievery.png'}" /></li>
												{/if}
												{if $theme.payment_option_mastercard}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/mastercard.png'}" /></li>
												{/if}
												{if $theme.payment_option_visa}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/visa.png'}" /></li>
												{/if}
												{if $theme.payment_option_amex}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/amex.png'}" /></li>
												{/if}
												{if $theme.payment_option_paypal}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/paypal.png'}" /></li>
												{/if}
												{if $theme.payment_option_stripe}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/stripe.png'}" /></li>
												{/if}
												{if $theme.payment_option_amazon}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/amazonpay.png'}" /></li>
												{/if}
												{if $theme.payment_option_sofort}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/sofort.png'}" /></li>
												{/if}
												{if $theme.payment_option_bitcoin}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/bitcoin.png'}" /></li>
												{/if}
												{if $theme.payment_option_klarna}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/klarna.png'}" /></li>
												{/if}
												{if $theme.payment_option_skrill}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/skrill.png'}" /></li>
												{/if}
												{if $theme.payment_option_giropay}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/giropay.png'}" /></li>
												{/if}
												{if $theme.payment_option_paysafecard}
													<li><img src="{link file='frontend/_public/src/img/icons/payment/paysafecard.png'}" /></li>
												{/if}
											</ul>
										</div>
									{/if}
								{/block}
							</div>
							<div class="grid-col-sm-6">
								{block name="frontend_index_footer_shipping_infos"}
									{if $theme.shipping_option_active==true}
										<div class="shipping-info">
											<h2>
												{s name="sFooterShippingInfoTitle"}Wir versenden mit{/s}
											</h2>
											<ul class="list-inline">
												{if $theme.shipping_option_dpd}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/dpd.png'}" /></li>
												{/if}
												{if $theme.shipping_option_dhl}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/dhl.png'}" /></li>
												{/if}
												{if $theme.shipping_option_hermes}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/hermes.png'}" /></li>
												{/if}
												{if $theme.shipping_option_gls}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/gls.png'}" /></li>
												{/if}
												{if $theme.shipping_option_ups}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/ups.png'}" /></li>
												{/if}
												{if $theme.shipping_option_fedex}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/fedex.png'}" /></li>
												{/if}
												{if $theme.shipping_option_austriamail}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/austria-mail.png'}" /></li>
												{/if}
												{if $theme.shipping_option_swissmail}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/swiss-mail.png'}" /></li>
												{/if}
												{if $theme.shipping_option_liefery}
													<li><img src="{link file='frontend/_public/src/img/icons/shipping/liefery.png'}" /></li>
												{/if}
											</ul>
										</div>
									{/if}
								{/block}
							</div>
						</div>
					</div>
				</div>
			</div>
		{/if}
	{/block}
	
	{block name='frontend_index_usp_bar_footer_top'}
		{if $theme.usp_bar_footer_active}
			{include file="frontend/index/usp-bar.tpl" uspBarPosition=footer}
		{/if}
	{/block}

	{block name="frontend_index_footer_container"}
		{include file='frontend/index/footer.tpl'}
	{/block}

{/block}

{block name="frontend_index_page_wrap" append}

	{block name="frontend_index_scroll_totop_button"}
		{if $theme.scroll_to_top_active}
			<span class="scroll-totop--button">
				<span class="icon-node icon-arrow-up"></span>
			</span>
		{/if}
	{/block}
{/block}