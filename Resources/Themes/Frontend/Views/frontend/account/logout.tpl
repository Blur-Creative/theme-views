{extends file='parent:frontend/account/logout.tpl'}

{namespace name="frontend/account/ajax_logout"}

{block name="frontend_account_logout_info_actions"}
    <div class="panel--footer">
        <div class="row">
            <div class="grid-col-xs-12 grid-col-sm-6">
                <a class="btn is--secondary is--block logout-action--back" href="{url controller='index'}" title="{"{s name='AccountLogoutButton'}{/s}"|escape}">
                    <span class="icon-node icon-arrow-left"></span><span class="text-node">{s name="AccountLogoutButton"}{/s}</span>
                </a>
            </div>
            <div class="grid-col-xs-12 grid-col-sm-6">
                <a class="btn is--primary is--block logout-action--login" href="{url controller='account'}" title="{"{s name='AccountLogoutAccountButton'}{/s}"|escape}">
                    <span class="icon-node icon-refresh"></span><span class="text-node">{s name="AccountLogoutAccountButton"}{/s}</span>
                </a>
            </div>
        </div>
    </div>
{/block}