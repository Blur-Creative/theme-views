{extends file='parent:frontend/index/sidebar.tpl'}

{* Sidebar category tree *}
{block name='frontend_index_left_categories'}

	{* Actual include of the categories *}
	{block name='frontend_index_left_categories_inner'}
		<div class="sidebar--categories-navigation">
		
			{* Categories headline *}
			{block name="frontend_index_left_categories_headline"}
				<div class="categories--headline navigation--headline">
					{s namespace='frontend/index/menu_left' name="IndexSidebarCategoryHeadline"}{/s}
				</div>
			{/block}
		
			{include file='frontend/index/sidebar-categories.tpl'}
			
		</div>
	{/block}
	
{/block}