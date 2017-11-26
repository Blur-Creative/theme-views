{extends file="parent:frontend/detail/comment/entry.tpl"}

{* Review content - Title and content *}
{block name='frontend_detail_comment_text' append}

	{* Review answer *}
	{block name="frontend_detail_answer_block_renew"}
		{if $vote.answer}
			{include file="frontend/detail/comment/answer.tpl"}
		{/if}
	{/block}
{/block}