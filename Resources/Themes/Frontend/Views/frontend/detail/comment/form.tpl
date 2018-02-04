{extends file="parent:frontend/detail/comment/form.tpl"}

{namespace name="frontend/detail/comment"}

{* Review Rating *}
{block name='frontend_detail_comment_input_rating'}
	<select name="sVoteStars">
		<option value="10">{s name="Rate10"}{/s}</option>
		<option value="9">{s name="Rate9"}{/s}</option>
		<option value="8">{s name="Rate8"}{/s}</option>
		<option value="7">{s name="Rate7"}{/s}</option>
		<option value="6">{s name="Rate6"}{/s}</option>
		<option value="5">{s name="Rate5"}{/s}</option>
		<option value="4">{s name="Rate4"}{/s}</option>
		<option value="3">{s name="Rate3"}{/s}</option>
		<option value="2">{s name="Rate2"}{/s}</option>
		<option value="1">{s name="Rate1"}{/s}</option>
	</select>
{/block}