{extends file="parent:frontend/detail/tabs/comment.tpl"}

{* Review title *}
{block name="frontend_detail_tabs_rating_title"}
	{if $sArticle.sVoteComments}
		<div class="content--title">
			{s name="DetailCommentHeader" namespace="frontend/detail/comment"}{/s} "{$sArticle.articleName}"
		</div>
	{/if}
{/block}

{* Review answer *}
{block name="frontend_detail_answer_block"}
{/block}

