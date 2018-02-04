{if $sCategoryContent.cmsHeadline || $sCategoryContent.cmsText}
    <div class="container">
        <div class="header-category-teaser-container">

            <div class="header-category-teaser">
                {if $sCategoryContent.cmsHeadline}
                    <h1 class="teaser-title">{$sCategoryContent.cmsHeadline}</h1>
                {/if}

                {if $sCategoryContent.cmsText}
                    <div class="teaser-description">{$sCategoryContent.cmsText|strip_tags}</div>
                {/if}
            </div>

        </div>
    </div>
{/if}