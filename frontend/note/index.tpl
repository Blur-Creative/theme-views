{extends file='parent:frontend/note/index.tpl'}

{* Main content *}
{block name="frontend_index_content"}
	<div class="content{if $sUserLoggedIn} account--content{else} note--content{/if}" data-compare-ajax="true">

		{* Infotext *}
		{block name="frontend_note_index_welcome"}
			<div class="account--welcome">
				{block name="frontend_note_index_welcome_headline"}
					<h1 class="account--welcome-title">{s name="NoteHeadline"}{/s}</h1>
				{/block}

				{block name="frontend_note_index_welcome_content"}
					<div class="account--welcome-text">
						<p>{s name="NoteText"}{/s}</p>
						<p>{s name="NoteText2"}{/s}</p>
					</div>
				{/block}
			</div>
		{/block}

		{block name="frontend_note_index_overview"}
			<div class="note--overview">
				{if $sNotes}
					{block name="frontend_note_index_table"}
						<div class="panel--table is--rounded">

							{block name="frontend_note_index_table_items"}
								{foreach $sNotes as $sBasketItem}
									{include file="frontend/note/item.tpl"}
								{/foreach}
							{/block}
						</div>
					{/block}
				{/if}
			</div>
		{/block}

	</div>
{/block}