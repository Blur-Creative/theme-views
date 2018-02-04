{extends file="parent:frontend/detail/content/buy_container.tpl"}

{block name='frontend_detail_buy_laststock' prepend}

	{* Product header *}
	{include file="frontend/detail/content/header.tpl"}
{/block}

{* Product - Base information *}
{block name='frontend_detail_index_buy_container_base_info'}

		{* Product SKU *}
		{block name='frontend_detail_data_ordernumber'}
		{/block}

		{* Product attributes fields *}
		{block name='frontend_detail_data_attributes'}
		{/block}

{/block}