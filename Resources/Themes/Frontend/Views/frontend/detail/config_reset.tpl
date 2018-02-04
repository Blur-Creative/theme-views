{block name='frontend_detail_configurator_reset'}
    {foreach $sArticle.sConfigurator as $sConfigurator}
        {if $sConfigurator.user_selected}
            {block name='frontend_detail_configurator_reset_button'}
				<div class="reset--configuration-action">
					<a class="btn is--block is--border is--danger is--small reset--configuration" href="{url sArticle=$sArticle.articleID sCategory=$sArticle.categoryID}">
						<i class="icon--cross"></i>
						{s name="DetailConfiguratorReset" namespace="frontend/detail/index"}Reset selection{/s}
					</a>
				</div>
            {/block}
            {break}
        {/if}
    {/foreach}
{/block}