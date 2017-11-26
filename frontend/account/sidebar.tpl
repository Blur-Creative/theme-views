{extends file="parent:frontend/account/sidebar.tpl"}

{* Link to the account overview page *}
{block name="frontend_account_menu_link_overview"}
	<li class="navigation--entry">
		<a href="{url controller='account'}" title="{s name="AccountLinkOverview"}{/s}" class="navigation--link{if {controllerName|lower} == 'account' && $sAction == 'index'} is--active{/if}">
			<span class="icon-node icon-th-steamed"></span>
			<span class="text-node">{s name="AccountLinkOverview"}{/s}</span>
		</a>
	</li>
{/block}

{* Link to the account overview page *}
{block name="frontend_account_menu_link_profile"}
	<li class="navigation--entry">
		<a href="{url controller='account' action=profile}" title="{s name="AccountLinkProfile"}{/s}" class="navigation--link{if {controllerName|lower} == 'account' && $sAction == 'profile'} is--active{/if}">
			<span class="icon-node icon-account-steamed"></span>
			<span class="text-node">{s name="AccountLinkProfile"}{/s}</span>
		</a>
	</li>
{/block}

{* Link to the user addresses *}
{block name="frontend_account_menu_link_addresses"}
	<li class="navigation--entry">
		<a href="{url controller='address' action='index'}" title="{s name="AccountLinkAddresses"}My addresses{/s}" class="navigation--link{if {controllerName} == 'address'} is--active{/if}">
			<span class="icon-node icon-mark"></span>
			<span class="text-node">{s name="AccountLinkAddresses"}My addresses{/s}</span>
		</a>
	</li>
{/block}

{* Link to the user payment method settings *}
{block name="frontend_account_menu_link_payment"}
	<li class="navigation--entry">
		<a href="{url controller='account' action='payment'}" title="{s name="AccountLinkPayment"}{/s}" class="navigation--link{if $sAction == 'payment'} is--active{/if}">
			<span class="icon-node icon-creditcard-steamed"></span>
			<span class="text-node">{s name="AccountLinkPayment"}{/s}</span>
		</a>
	</li>
{/block}

{* Link to the user orders *}
{block name="frontend_account_menu_link_orders"}
	<li class="navigation--entry">
		<a href="{url controller='account' action='orders'}" title="{s name="AccountLinkPreviousOrders"}{/s}" class="navigation--link{if $sAction == 'orders'} is--active{/if}">
			<span class="icon-node icon-package-steamed"></span>
			<span class="text-node">{s name="AccountLinkPreviousOrders"}{/s}</span>
		</a>
	</li>
{/block}

{* Link to the user downloads *}
{block name="frontend_account_menu_link_downloads"}
	{if {config name=showEsd}}
		<li class="navigation--entry">
			<a href="{url controller='account' action='downloads'}" title="{s name="AccountLinkDownloads"}{/s}" class="navigation--link{if $sAction == 'downloads'} is--active{/if}">
				<span class="icon-node icon-download-cloud"></span>
				<span class="text-node">{s name="AccountLinkDownloads"}{/s}</span>
			</a>
		</li>
	{/if}
{/block}

{* Link to the user product notes *}
{block name="frontend_account_menu_link_notes"}
	<li class="navigation--entry">
		<a href="{url controller='note'}" title="{s name="AccountLinkNotepad"}{/s}" class="navigation--link">
			<span class="icon-node icon-favorites-steamed"></span>
			<span class="text-node">{s name="AccountLinkNotepad"}{/s}</span>
		</a>
	</li>
{/block}

{* Logout action *}
{block name="frontend_account_menu_link_logout"}
	<li class="navigation--entry entry--logout">
		<a href="{url controller='account' action='logout'}" title="{s name="AccountLinkLogout2"}{/s}" class="btn is--small is--danger is--block link--logout">
			<i class="icon--logout"></i> {s name="AccountLinkLogout2"}{/s}
		</a>
	</li>
{/block}