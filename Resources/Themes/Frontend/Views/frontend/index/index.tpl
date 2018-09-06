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
	
	{block name="frontend_index_body_has_page_preload"}
		{if $theme.page_preload_active} has--page-preload{/if}
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

{block name='frontend_index_after_body'}
	{$smarty.block.parent}
	
	{*block name='frontend_index_body_page_preloader'}
		{if $theme.page_preload_active}
			<style type="text/css">
				@keyframes spin {
					0% { transform: rotate(0deg); }
					100% { transform: rotate(360deg); }
				}
				
				.page-preloader {
					position: absolute;
					top: 50%;
					left: 50%;
					margin-left: -50px;
					margin-top: -50px;
					border: 3px solid rgba(255,255,255,.42); /* Light grey */
					border-top: 3px solid #ffffff; /* Blue */
					border-radius: 50%;
					width: 100px;
					height: 100px;
					animation: spin 2s linear infinite;
				}
			</style>
			<div class="page-preloader"></div>
		{/if}
	{/block*}
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

							{block name='frontend_index_shop_control_search_entry'}
								<div class="entry--search" role="menuitem" data-search="true" aria-haspopup="true"{if $theme.focusSearch && {controllerName|lower} == 'index'} data-activeOnStart="true"{/if}>
									{include file="frontend/index/search.tpl"}
								</div>
							{/block}
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
                                    {include file="frontend/index/payment-info.tpl"}
								{/block}
							</div>
							<div class="grid-col-sm-6">
								{block name="frontend_index_footer_shipping_infos"}
									{include file="frontend/index/shipping-info.tpl"}
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

{* Librarys *}

{*
	Include jQuery and all other javascript files at the bottom of the page
	Include it with type text/javascript for GZIP comression
*}
{block name="frontend_index_header_javascript_jquery_lib"}
	{block name="frontend_index_footer_css_screen"}
		{{compileLess timestamp={themeTimestamp} output="lessFiles"}}
		{foreach $lessFiles as $stylesheet}
			<link href="{$stylesheet}" media="all" rel="stylesheet" type="text/css" />
		{/foreach}
	
		{if $theme.additionalCssData}
			{$theme.additionalCssData}
		{/if}
	{/block}
	
	{* Include Google Fonts through CDN *}
    {* $theme.fontBaseStack *}
    {block name="frontend_index_header_google_fonts_base_stack"}
        {if $theme.fontBaseStack=="Open Sans"}
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Ubuntu'}
            <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Raleway'}
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Oswald'}
            <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Lato'}
            <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Patua One'}
            <link href="https://fonts.googleapis.com/css?family=Patua+One:400" rel="stylesheet">
        {/if}
    {/block}

    {block name="frontend_index_header_google_fonts_headline_stack"}
        {if $theme.fontHeadlineStack!=$theme.fontBaseStack}
            {if $theme.fontHeadlineStack=="Open Sans"}
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Ubuntu'}
                <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Raleway'}
                <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Oswald'}
                <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Lato'}
                <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Patua One'}
                <link href="https://fonts.googleapis.com/css?family=Patua+One:400" rel="stylesheet">
            {/if}
        {/if}
    {/block}

	{$smarty.block.parent}
{/block}