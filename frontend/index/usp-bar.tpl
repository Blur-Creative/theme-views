{block name='frontend_index_usp_bar'}
	<div class="usp-bar{if $uspBarPosition} position--{$uspBarPosition}{/if}">
		<div class="container">
			{block name='frontend_index_usp_bar_trigger'}
				<div class="usp-bar--trigger">
					<span class="text-node">{s namespace="themes/views/frontend/index/usp-bar" name="uspBarTitle"}{/s}</span>
					<span class="icon-node trigger--icon"></span>
				</div>
			{/block}
			<div class="usp-bar--container">
				{block name='frontend_index_usp_bar_first_content'}
					{if $theme.usp_bar_first_content_active}
						<div class="usp-bar--content{if $theme.usp_bar_first_content_description} has--popover{/if}"{if $theme.usp_bar_first_content_description} data-popover="true" data-placement="bottom-right"{/if}>
							{if $theme.usp_bar_first_content_icon}
								<span class="usp--icon">
									<img src="{link file=$theme.usp_bar_first_content_icon fullPath}" alt="{$theme.usp_bar_first_content_text}"/>
								</span>
							{/if}
							{if $theme.usp_bar_first_content_text}
								<span class="usp--text">
									{$theme.usp_bar_first_content_text}
								</span>
							{/if}
						</div>
						{if $theme.usp_bar_first_content_description}
							<div class="popover-content usp-bar--popover-description">
							   {$theme.usp_bar_first_content_description}
							</div>
						{/if}
					{/if}
				{/block}
				{block name='frontend_index_usp_bar_second_content'}
					{if $theme.usp_bar_second_content_active}
						<div class="usp-bar--content{if $theme.usp_bar_first_content_description} has--popover{/if}"{if $theme.usp_bar_second_content_description} data-popover="true" data-placement="bottom-right"{/if}>
							{if $theme.usp_bar_second_content_icon}
								<span class="usp--icon">
									<img src="{link file=$theme.usp_bar_second_content_icon fullPath}" alt="{$theme.usp_bar_second_content_text}"/>
								</span>
							{/if}
							{if $theme.usp_bar_second_content_text}
								<span class="usp--text">
									{$theme.usp_bar_second_content_text}
								</span>
							{/if}
						</div>
						{if $theme.usp_bar_second_content_description}
							<div class="popover-content usp-bar--popover-description">
							   {$theme.usp_bar_second_content_description}
							</div>
						{/if}
					{/if}
				{/block}
				{block name='frontend_index_usp_bar_third_content'}
					{if $theme.usp_bar_third_content_active}
						<div class="usp-bar--content{if $theme.usp_bar_first_content_description} has--popover{/if}"{if $theme.usp_bar_third_content_description} data-popover="true" data-placement="bottom-right"{/if}>
							{if $theme.usp_bar_third_content_icon}
								<span class="usp--icon">
									<img src="{link file=$theme.usp_bar_third_content_icon fullPath}" alt="{$theme.usp_bar_third_content_text}"/>
								</span>
							{/if}
							{if $theme.usp_bar_third_content_text}
								<span class="usp--text">
									{$theme.usp_bar_third_content_text}
								</span>
							{/if}
						</div>
						{if $theme.usp_bar_third_content_description}
							<div class="popover-content usp-bar--popover-description">
							   {$theme.usp_bar_third_content_description}
							</div>
						{/if}
					{/if}
				{/block}
				{block name='frontend_index_usp_bar_fourth_content'}
					{if $theme.usp_bar_fourth_content_active}
						<div class="usp-bar--content{if $theme.usp_bar_first_content_description} has--popover{/if}"{if $theme.usp_bar_fourth_content_description} data-popover="true" data-placement="bottom-right"{/if}>
							{if $theme.usp_bar_fourth_content_icon}
								<span class="usp--icon">
									<img src="{link file=$theme.usp_bar_fourth_content_icon fullPath}" alt="{$theme.usp_bar_fourth_content_text}"/>
								</span>
							{/if}
							{if $theme.usp_bar_fourth_content_text}
								<span class="usp--text">
									{$theme.usp_bar_fourth_content_text}
								</span>
							{/if}
						</div>
						{if $theme.usp_bar_fourth_content_description}
							<div class="popover-content usp-bar--popover-description">
							   {$theme.usp_bar_fourth_content_description}
							</div>
						{/if}
					{/if}
				{/block}
			</div>
		</div>
	</div>
{/block}