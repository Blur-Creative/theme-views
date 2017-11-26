{extends file="parent:frontend/index/header.tpl"}

{* add google fonts CDN *}
{block name="frontend_index_header_css_screen" prepend}

    {*$theme.fontBaseStack*}
    {block name="frontend_index_header_google_fonts_base_stack"}
        {if $theme.fontBaseStack=="Open Sans"}
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Ubuntu'}
            <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Raleway'}
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Lato'}
            <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        {elseif $theme.fontBaseStack=='Patua One'}
            <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
        {/if}
    {/block}

    {block name="frontend_index_header_google_fonts_headline_stack"}
        {if $theme.fontHeadlineStack!=$theme.fontBaseStack}
            {if $theme.fontHeadlineStack=="Open Sans"}
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Ubuntu'}
                <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Raleway'}
                <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Lato'}
                <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
            {elseif $theme.fontHeadlineStack=='Patua One'}
                <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
            {/if}
        {/if}
    {/block}
{/block}