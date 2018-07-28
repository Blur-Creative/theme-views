{extends file="parent:frontend/index/header.tpl"}

{*
	Discard Stylesheets above the fold
	Include it in the index.tpl
	block: frontend_index_header_javascript_jquery_lib
*}
{block name="frontend_index_header_css_screen"}
	{if $theme.page_preload_active}
		<style type="text/css">
			body.has--page-preload {ldelim}
				background-color: {$theme.page_preload_bg_color};
			{rdelim}
			body.has--page-preload .page-wrap {ldelim}
				opacity: 0;
				transition: opacity .1s;
			{rdelim}
		</style>
	{/if}
{/block}