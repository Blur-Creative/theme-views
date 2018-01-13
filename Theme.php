<?php

namespace Shopware\Themes\Views;

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Form as Form;
use Shopware\Components\Theme\ConfigSet;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Views
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Views- Shopware 5 Theme
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
BlurCreative
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
property
SHOPWARE_EOD;

    /**
     * Javascript files which will be used in the theme
     *
     * @var array
     */
    protected $javascript = [
        // Third party plugins / libraries
        'vendors/js/jquery.dotdotdot.min.js',
		'vendors/js/jquery.webui-popover.js',
		'vendors/js/jquery.matchHeight-min.js',
        
		'src/js/jquery.button-toggle.js',
		'src/js/jquery.panel-auto-resizer.js',
		'src/js/jquery.bc.sticky-nav.js',
		'src/js/jquery.bc.drop-down.js',
		'src/js/jquery.shopware-responsive.js'
    ];
	
	protected $inheritanceConfig = false;

    private $fieldSetDefaults = [
		'layout' => 'column',
		'flex' => 0,
		'autoScroll' => true,
		'defaults' => array(
			'columnWidth' => 0.5,
			'labelWidth' => 200,
			'margin' => '2 15 2 0'
		)
    ];
	
    private $themeColorDefaults = [
		//base colors
        'brand-primary' => 'rgba(255,255,255,0.62)',
        'brand-primary-light' => 'rgba(255,255,255,1)',
		'brand-primary-dark' => 'rgba(255,255,255,0.42)',
        'brand-secondary' => '#292e33',
		'brand-secondary-light' => '#3c434a',
        'brand-secondary-dark' => '#1c1f22',
        'gray' => '#F5F5F8',
        'gray-light' => 'lighten(@gray, 1%)',
        'gray-dark' => 'darken(@gray-light, 10%)',		
		//border style
        'border-color' => 'rgba(255,255,255,0.42)',
		'border-color-light' => 'rgba(255,255,255,0.15)',
		'border-color-dark' => 'rgba(255,255,255,0.62)',
		'border-radius-base' => '5',
		'border-radius-sm' => '3',
		'border-radius-lg' => '8',
		//highlight-colors
        'highlight-success' => '#2ECC71',
        'highlight-error' => '#E74C3C',
        'highlight-notice' => '#F1C40F',
        'highlight-info' => '#4AA3DF',
		//scaffolding
		'rating-star-color' => '#ecc42b',
		//padding
		'padding-base-vertical' => '10',
		'padding-base-horizontal' => '15',
		'padding-xs-vertical' => '3',
		'padding-xs-horizontal' => '5',		
		'padding-sm-vertical' => '5',
		'padding-sm-horizontal' => '10',				
		'padding-md-vertical' => '15',
		'padding-md-horizontal' => '20',	
		'padding-lg-vertical' => '20',
		'padding-lg-horizontal' => '25',	
		'padding-xl-vertical' => '25',
		'padding-xl-horizontal' => '30',
		//generel scaffolding 
		'body-bg' => '@brand-secondary',
		'page-wrap-bg' => 'transparent',
		'page-wrap-shadow' => 'none',
        'overlay-bg' => '#000000',
        'overlay-opacity' => '0.7',
		//header scaffolding
		'header-bg' => 'transparent',
		'header-icon-color' => '@icon-color-base',
		'search-bg' => 'transparent',
		'search-border-color' => '@border-color',
		'search-icon-color' => '@icon-color-base',
		'search-icon-size' => '@icon-size-xs',
		'breadcrumb-border-color' => '@border-color-light',
		'breadcrumb-link-color' => '@text-color',
		'breadcrumb-link-active-color' => '@link-color',
		'breadcrumb-separator-color' => '@icon-color-base',
		//main navigation scaffolding
		'main-navigation-bg' => '@brand-secondary-light',
		'main-navigation-sticky-bg' => '@main-navigation-bg',
		'main-navigation-button-bg' => 'transparent',
		'main-navigation-button-color' => '@text-color',
		'main-navigation-button-active-bg' => '@button-primary-bg',
		'main-navigation-button-active-color' => '@text-color-light',
		'main-navigation-button-hover-bg' => 'transparent',
		'main-navigation-button-hover-color' => '@text-color-light',
		'advanced-menu-bg' => '@brand-secondary-dark',
		'advanced-menu-header-bg' => 'transparent',
		//sidebar scaffolding
		'sidebar-box-bg' => 'rgba(255,255,255,0.03)',
		'sidebar-box-border-color' => '@border-color-light',
		'sidebar-box-title-color' => '@text-color-light',
		'sidebar-box-link-color' => '@text-color-light',
		'sidebar-box-link-active-color' => '@text-color-light',
		'sidebar-box-link-active-bg' => '@brand-secondary-light',
		'sidebar-box-icon-color' => '@icon-color-base',
		'sidebar-account-box-icon-color' => '@text-color-info',
		'sidebar-width-tablet' => '205',
		'sidebar-width-desktop' => '270',
		//footer scaffolding
		'footer-bg' => '@brand-secondary-dark',
		'footer-title-color' => '@text-color-secondary',
		'footer-title-size' => '@font-size-h6',
		'footer-text-color' => '@text-color',
		'footer-link-color' => '@text-color',
		'footer-link-active-color' => '@text-color-light',
        //listing filter
        'listing-filter-bg' => '@brand-secondary-light',
        'listing-filter-shadow' => '@box-base-shadow',
        'listing-filter-arrow-shadow' => '-2px 2px 4px 0 rgba(0, 0, 0, 0.2)',
        'listing-filter-panel-bg' => '@brand-secondary-light',
        'listing-filter-panel-shadow' => '@button-box-shadow',
        //product box basic
        'product-box-basic-bg' => '@brand-secondary-light',
        'product-box-basic-shadow' => '0 0 10px rgba(0,0,0,0.1)',
        //product box minimal
        'product-box-minimal-bg' => 'transparent',
        'product-box-minimal-shadow' => 'none',
        //detail product navigation
        'product-navigation-button-bg' => '@button-default-bg',
        'product-navigation-button-color' => '@text-color-light',
        'product-navigation-button-shadow' => '0 0 5px rgba(0,0,0,0.5)',
        //detail configurator
        'product-configurator-bg' => '@brand-secondary-dark',
        'product-configurator-border-color' => '@border-color-light',
		//font base
		'fontBaseStack' => 'Open Sans',	
		'fontHeadlineStack' => 'Open Sans',	
		'font-base-weight' => '400',	
		'font-light-weight' => '300',	
		'font-semibold-weight' => '600',	
		'font-bold-weight' => '800',	
		'line-height-base' => '1.428571429',	
		'line-height-sm' => '1.3333333',	
		'line-height-lg' => '1.5',	
		//font size
		'font-size-base' => '14',
		'font-size-sm' => '12',
		'font-size-lg' => '16',
		'font-size-h1' => '32',
		'font-size-h2' => '28',
		'font-size-h3' => '24',
		'font-size-h4' => '22',
		'font-size-h5' => '20',
		'font-size-h6' => '18',
		//text colors
        'text-color' => 'rgba(255,255,255,.62)',
		'text-color-light' => 'rgba(255,255,255,1)',
        'text-color-dark' => 'rgba(255,255,255,.42)',
        'text-color-info' => '#00bbb9',
		'text-color-success' => '#37c100',
		'text-color-warning' => '#d0ae30',
		'text-color-danger' => '#ec5114',
		'link-color' => '#a3c1e0',
		'text-color-secondary' => '#607891',
		//icon sizes
		'icon-size-base' => '20',
		'icon-size-xxs' => '10',
		'icon-size-xs' => '12',
		'icon-size-sm' => '16',
		'icon-size-lg' => '24',
		'icon-size-xl' => '32',
		//icon colors
		'icon-color-base' => 'rgba(255,255,255,0.42)',
		'icon-color-light' => 'rgba(255,255,255,1)',
		'icon-color-dark' => 'rgba(255,255,255,0.15)',
		'icon-color-info' => '@text-color-info',
		'icon-color-success' => '@text-color-success',
		'icon-color-warning' => '@text-color-warning',
		'icon-color-danger' => '@text-color-danger',
		//button general
		'button-box-shadow' => '0 0 5px rgba(0, 0, 0, 0.3), inset 1px -2px 0 rgba(255,255,255,.15)',
		'button-box-shadow-active' => 'inset 5px 5px 8px rgba(0, 0, 0, 0.2), inset -1px 2px 0 rgba(255, 255, 255, 0.15), inset 1px -1px 0 rgba(255, 255, 255, 0.08)',
		'button-text-shadow' => '1px 1px 0 rgba(0,0,0,.5)',
		//button size base
		'button-base-font-size' => '@font-size-lg',
		'button-base-line-height' => '@line-height-base',
		'button-base-padding-vertical' => '10',
		'button-base-padding-horizontal' => '18',
		'button-base-border-radius' => '@border-radius-sm',
		'button-base-border-size' => '2',
		'button-base-font-weight' => '@font-semibold-weight',
		//button size small
		'button-sm-font-size' => '@font-size-base',
		'button-sm-line-height' => '@line-height-sm',
		'button-sm-padding-vertical' => '6',
		'button-sm-padding-horizontal' => '18',
		'button-sm-border-radius' => '1',
		'button-sm-border-size' => '1',
		'button-sm-font-weight' => '@font-base-weight',
		//button size large
		'button-lg-font-size' => '@font-size-h5',
		'button-lg-line-height' => '@line-height-lg',
		'button-lg-padding-vertical' => '14',
		'button-lg-padding-horizontal' => '18',
		'button-lg-border-radius' => '@border-radius-base',
		'button-lg-border-size' => '2',
		'button-lg-font-weight' => '@font-bold-weight',		
		//button primary
		'button-primary-bg' => '#195088',	
		'button-primary-color' => '@text-color-light',	
		'button-primary-gardient-start' => 'rgba(255,255,255,0.1)',	
		'button-primary-gardient-end' => 'rgba(255,255,255,0)',	
		//button secondary
		'button-secondary-bg' => '@brand-secondary-light',	
		'button-secondary-color' => '@text-color-light',	
		'button-secondary-gardient-start' => '@button-primary-gardient-start',	
		'button-secondary-gardient-end' => '@button-primary-gardient-end',	
		//button danger
		'button-danger-bg' => '#b0310e',	
		'button-danger-color' => '@text-color-light',	
		'button-danger-gardient-start' => '@button-primary-gardient-start',	
		'button-danger-gardient-end' => '@button-primary-gardient-end',	
		//button warning
		'button-warning-bg' => '#ae7300',	
		'button-warning-color' => '@text-color-light',	
		'button-warning-gardient-start' => '@button-primary-gardient-start',	
		'button-warning-gardient-end' => '@button-primary-gardient-end',	
		//button success
		'button-success-bg' => '#207100',	
		'button-success-color' => '@text-color-light',	
		'button-success-gardient-start' => '@button-primary-gardient-start',	
		'button-success-gardient-end' => '@button-primary-gardient-end',	
		//button info
		'button-info-bg' => '#007c7b',	
		'button-info-color' => '@text-color-light',	
		'button-info-gardient-start' => '@button-primary-gardient-start',	
		'button-info-gardient-end' => '@button-primary-gardient-end',	
		//button default
		'button-default-bg' => '@brand-secondary-light',	
		'button-default-color' => '@text-color-light',	
		'button-default-gardient-start' => '@button-primary-gardient-start',	
		'button-default-gardient-end' => '@button-primary-gardient-end',	
		//panel color
		'panel-bg' => '@brand-secondary',
		'panel-border-color' => '@border-color-light',
		'panel-header-bg' => '@brand-secondary-light',
		'panel-header-gardient-start' => 'rgba(255,255,255,0.04)',
		'panel-header-gardient-end' => 'rgba(0,0,0,0.04)',
		'panel-header-color' => '@text-color-light',
		'panel-footer-bg' => '@brand-secondary-dark',
        //panel color primary
        'panel-primary-title-bg' => '@button-primary-bg',
        'panel-primary-title-color' => '@button-primary-color',
        'panel-primary-title-gardient-start' => '@button-primary-gardient-start',
        'panel-primary-title-gardient-end' => '@button-primary-gardient-end',
        'panel-primary-title-border-color' => '@border-color-light',
        'panel-primary-border-color' => '@button-primary-bg',
        //panel color danger
        'panel-danger-title-bg' => '@button-danger-bg',
        'panel-danger-title-color' => '@button-danger-color',
        'panel-danger-title-gardient-start' => '@button-danger-gardient-start',
        'panel-danger-title-gardient-end' => '@button-danger-gardient-end',
        'panel-danger-title-border-color' => '@border-color-light',
        'panel-danger-border-color' => '@button-danger-bg',
        //panel color warning
        'panel-warning-title-bg' => '@button-warning-bg',
        'panel-warning-title-color' => '@button-warning-color',
        'panel-warning-title-gardient-start' => '@button-warning-gardient-start',
        'panel-warning-title-gardient-end' => '@button-warning-gardient-end',
        'panel-warning-title-border-color' => '@border-color-light',
        'panel-warning-border-color' => '@button-warning-bg',
        //panel color success
        'panel-success-title-bg' => '@button-success-bg',
        'panel-success-title-color' => '@button-success-color',
        'panel-success-title-gardient-start' => '@button-success-gardient-start',
        'panel-success-title-gardient-end' => '@button-success-gardient-end',
        'panel-success-title-border-color' => '@border-color-light',
        'panel-success-border-color' => '@button-success-bg', 
        //panel structure
		'panel-border-size' => '1',
		'panel-border-radius' => '@border-radius-sm',
		'panel-header-font-size' => '@font-size-lg',
		'panel-header-line-height' => '@line-height-base',
		'panel-header-padding-vertical' => '@padding-base-vertical',
		'panel-header-padding-horizontal' => '@padding-base-horizontal',
		'panel-body-padding-vertical' => '15',
		'panel-body-padding-horizontal' => '15',
		'panel-footer-padding-vertical' => '@panel-header-padding-vertical',
		'panel-footer-padding-horizontal' => '@panel-header-padding-horizontal',
        //panel structure small
		'panel-sm-border-size' => '1',
		'panel-sm-border-radius' => '@border-radius-base',
		'panel-sm-header-font-size' => '@font-size-base',
		'panel-sm-header-line-height' => '@line-height-sm',
		'panel-sm-header-padding-vertical' => '@padding-sm-vertical',
		'panel-sm-header-padding-horizontal' => '@padding-sm-horizontal',
		'panel-sm-body-padding-vertical' => '@padding-sm-horizontal',
		'panel-sm-body-padding-horizontal' => '@padding-sm-horizontal',
		'panel-sm-footer-padding-vertical' => '@panel-sm-header-padding-vertical',
		'panel-sm-footer-padding-horizontal' => '@panel-sm-header-padding-horizontal',
        //panel structure large
		'panel-lg-border-size' => '2',
		'panel-lg-border-radius' => '@border-radius-lg',
		'panel-lg-header-font-size' => '@font-size-h5',
		'panel-lg-header-line-height' => '@line-height-lg',
		'panel-lg-header-padding-vertical' => '@padding-lg-vertical',
		'panel-lg-header-padding-horizontal' => '@padding-lg-horizontal',
		'panel-lg-body-padding-vertical' => '@padding-lg-horizontal',
		'panel-lg-body-padding-horizontal' => '@padding-lg-horizontal',
		'panel-lg-footer-padding-vertical' => '@panel-lg-header-padding-vertical',
		'panel-lg-footer-padding-horizontal' => '@panel-lg-header-padding-horizontal',
		//form label
		'label-font-size' => '@font-size-base',
		'label-color' => '@text-color-light',
		//form base style
		'input-font-size' => '@font-size-base',
		'input-bg' => 'transparent',
		'input-color' => '@text-color-light',
		'input-placeholder-color' => '@text-color',
		'input-border-color' => '@border-color',
		'input-border-radius' => '@border-radius-sm',
		'input-height-base' => '36',
		'input-line-height-base' => '@line-height-base',
		'select-bg' => 'transparent',
		'select-hover-bg' => '@select-bg',
		'select-height-base' => '@input-height-base',
		'select-line-height-base' => '@select-height-base',
		'input-padding-base-vertical' => '@padding-base-vertical',
		'input-padding-base-horizontal' => '@padding-base-horizontal',
		'input-shadow' => 'inset -1px -1px 0px rgba(255, 255, 255, 0.2)',
		'input-gardient' => 'rgba(255,255,255,0), rgba(255,255,255,0.05)',
		//form states
		'input-focus-bg' => 'transparent',
		'input-focus-border' => '@border-color-dark',
		'input-focus-color' => '@text-color-light',
		'input-error-bg' => 'transparent',
		'input-error-border' => '@text-color-danger',
		'input-error-color' => '@text-color-danger',
		'input-success-bg' => 'transparent',
		'input-success-border' => '@text-color-success',
		'input-success-color' => '@text-color-success',
		//table styles
		'panel-table-header-bg' => '@panel-bg',
		'panel-table-header-color' => '@text-color-dark',
		'table-row-bg' => 'transparent',
		'table-row-color' => '@text-color',
		'table-row-highlight-bg' => '@brand-secondary-light',
		'table-header-bg' => '@brand-secondary-dark',
		'table-header-color' => '@text-color-light',
		//badge sizes
		'badge-size-base' => '20',
		'badge-size-sm' => '16',
		'badge-size-lg' => '32',
		//badge colors
		'badge-primary-bg' => '@button-primary-bg',
		'badge-primary-color' => '@text-color-light',
		'badge-secondary-bg' => '@button-secondary-bg',
		'badge-secondary-color' => '@text-color-light',
		'badge-danger-bg' => '@button-danger-bg',
		'badge-danger-color' => '@text-color-light',
		'badge-warning-bg' => '@button-warning-bg',
		'badge-warning-color' => '@text-color-light',
		'badge-success-bg' => '@button-success-bg',
		'badge-success-color' => '@text-color-light',
		'badge-info-bg' => '@button-info-bg',
		'badge-info-color' => '@text-color-light',
		'badge-default-bg' => '@button-default-bg',
		'badge-default-color' => '@text-color-light',
		//product picture background
		'image-background-color' => '#ffffff',
		'manufacturer-background-color' => '#ffffff',
		//product badges
		'product-badge-discount-bg' => '#e65f5f',
		'product-badge-discount-color' => '@text-color-light',
		'product-badge-newcomer-bg' => '#292e33',
		'product-badge-newcomer-color' => '@text-color-light',
		'product-badge-recommend-bg' => '#73b353',
		'product-badge-recommend-color' => '@text-color-light',
		'product-badge-download-bg' => 'transparent',
		'product-badge-download-color' => '#2685c5',
		'product-badge-soldout-bg' => '#eeeeee',
		'product-badge-soldout-color' => '#666666',
		//product box minimal image height
		'product-box-minimal-image-height-phone' => '200',
		'product-box-minimal-image-height-phone-landscape' => '200',
		'product-box-minimal-image-height-tablet' => '200',
		'product-box-minimal-image-height-tablet-landscape' => '320',
		'product-box-minimal-image-height-desktop' => '300',
		//product box big image height
		'product-box-big-image-height-phone' => '400',
		'product-box-big-image-height-phone-landscape' => '300',
		'product-box-big-image-height-tablet' => '330',
		'product-box-big-image-height-tablet-landscape' => '500',
		'product-box-big-image-height-desktop' => '420',
		//product box slider image height
		'product-box-slider-image-height-phone' => '235',
		'product-box-slider-image-height-phone-landscape' => '350',
		'product-box-slider-image-height-tablet' => '260',
		'product-box-slider-image-height-tablet-landscape' => '275',
		'product-box-slider-image-height-desktop' => '275',
		//product detail image sizes
		'detail-main-image-height-phone' => '400',
		'detail-main-image-height-phone-landscape' => '600',
		'detail-main-image-height-tablet' => '1000',
		'detail-main-image-height-tablet-landscape' => '460',
		'detail-main-image-height-desktop' => '460',
		'detail-image-thumbnails-height' => '70',
		'detail-image-thumbnails-width' => '70',
		//box shadows
		'box-base-shadow' => '0 0 10px rgba(0,0,0,.15)',
		'offcanvas-shadow' => '0 0 10px rgba(0,0,0,.15)',
		'main-navigation-shadow' => '@box-base-shadow',
		'search-result-shadow' => '@box-base-shadow',
		'product-box-basic-shadow' => '0 0 10px rgba(0,0,0,.1)',
		'step-container-icon-shadow' => '0 0 5px rgba(0,0,0,0.3)',
		'badge-shadow' => '0 0 5px rgba(0,0,0,.30)',
		//usb bar
		'usp-bar-bg' => '@brand-secondary-dark',
		'usp-bar-text-color' => '@text-color-light',
		'usp-bar-icon-size' => '@icon-size-lg',
		//scroll to top button
		'scroll-totop-button-size' => '45',
		'scroll-totop-button-icon-size' => '14',
		'scroll-totop-button-bg' => '@button-primary-bg',
		'scroll-totop-button-color' => '@text-color-light',
		'scroll-totop-button-radius' => '@border-radius-base',
		'scroll-totop-position-bottom' => '30',
		'scroll-totop-position-right' => '30',
		'scroll-totop-button-shadow' => '0 0 10px rgba(0,0,0,.5)',
        //cookie permission
        'cookie-permission-bg' => '@brand-secondary-light',
        'cookie-permission-shadow' => '0 0 15px rgba(0,0,0,0.5)',
        'cookie-permission-border-color' => '@border-color-light',
        'cookie-permission-color' => '@text-color'
    ];
	
    private $themeConfigDefaults = [
        'mobileLogo' => 'frontend/_public/src/img/logos/logo--shop.png',
        'tabletLogo' => 'frontend/_public/src/img/logos/logo--shop.png',
        'tabletLandscapeLogo' => 'frontend/_public/src/img/logos/logo--shop.png',
        'desktopLogo' => 'frontend/_public/src/img/logos/logo--shop.png',
        'mainNavigationAlignment' => 'left',
        //header logo settings
        'header-logo-width-phone' => '100',
        'header-logo-height-phone' => '32',
        'header-logo-width-tablet' => '170',
        'header-logo-height-tablet' => '80',
        'header-logo-width-tablet-landscape' => '170',
        'header-logo-height-tablet-landscape' => '80',
        'header-logo-width-desktop' => '220',
        'header-logo-height-desktop' => '150',       
        //header listing settings
        'header_listing_active' => 'disabled',
        'header_listing_content_active' => true,
        'header-listing-image-position-horizontal' => 'center',
        'header-listing-image-position-vertical' => 'center',
        'header-listing-category-teaser-headline-size' => '@font-size-h1',
        'header-listing-category-teaser-headline-color' => '@text-color-light',
        'header-listing-category-teaser-text-size' => '@font-size-lg',
        'header-listing-category-teaser-text-color' => '@text-color',
        'header-listing-category-teaser-height-phone' => '350',
        'header-listing-category-teaser-height-phone-landscape' => '350',
        'header-listing-category-teaser-height-tablet' => '400',
        'header-listing-category-teaser-height-tablet-landscape' => '400',
        'header-listing-category-teaser-height-desktop' => '500'
    ];
    
	/**
	 * @param Form\Container\TabContainer $container
		Creates Views config main tabs
	 */
	 
	public function createConfig(Form\Container\TabContainer $container)
	{
		//creates logo icons tab
        $container->addTab($this->createLogoIconTab());
		$container->addTab($this->createMainConfigTab());
		$container->addTab($this->createColorConfigTab());
		
		// Create the tab which will be named "My custom colors"
		$tab = $this->createTab(
			'custom_theme_options',
			'__custom_tab_options_label__'
		);

		// ...add the fieldset to the tab
		//$tab->addElement($fieldset);

		// ...last but not least add the tab to the container, which is a tab panel.
		$container->addTab($tab);
		//$container->addTab($tabLogoIcons);
		
		$tab->addElement($this->createCustomTabPanel());
	}
	
    private function createColorConfigTab()
    {
        $tab = $this->createTab(
            'color_config_tab',
            '__color_config_tab__'
        );
		
        $tab->addElement($this->createColorTabPanel());

        return $tab;
    }
	
    private function createColorTabPanel()
    {
        $tabPanel = $this->createTabPanel(
            'color_config_tab_panel',
            [
                'attributes' => [
                    'plain' => true
                ]
            ]
        );

        $tabPanel->addTab($this->createColorGeneralTab());
		$tabPanel->addTab($this->createColorScaffoldingTab());
		$tabPanel->addTab($this->createListingStyleTab());
        $tabPanel->addTab($this->createDetailStyleTab());
		$tabPanel->addTab($this->createFontsTab());
		$tabPanel->addTab($this->createIconsTab());
		$tabPanel->addTab($this->createButtonsTab());
		$tabPanel->addTab($this->createPanelTab());
		$tabPanel->addTab($this->createFormsTab());
		$tabPanel->addTab($this->createTablesTab());
		$tabPanel->addTab($this->createBadgesTab());
		$tabPanel->addTab($this->createMiscTab());

        return $tabPanel;
    }
	
   /**
     * Helper function to create the tab ("Color General")
     * @return Form\Container\Tab
     */
    private function createColorGeneralTab()
    {
        $tab = $this->createTab(
            'color_general_tab',
            '__color_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );

        $tab->addElement($this->createColorBasicFieldSet());
		$tab->addElement($this->createColorBorderFieldSet());
		$tab->addElement($this->createColorHighlightFieldSet());
		$tab->addElement($this->createScaffoldingPaddingFieldSet());

        return $tab;
    }
	
    private function createColorBasicFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'color_basic_field_set',
            '__color_basic_field_set__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'brand-primary',
                '__brand-primary__',
				$this->themeColorDefaults['brand-primary'],
                [
                    'attributes' => 
                        ['supportText' => '@brand-primary']
                ]  
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'brand-secondary',
                '__brand-secondary__',
                $this->themeColorDefaults['brand-secondary'],
                [
                    'attributes' => 
                        ['supportText' => '@brand-secondary']
                ]  
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'brand-primary-light',
                '__brand-primary-light__',
                $this->themeColorDefaults['brand-primary-light'],
                [
                    'attributes' => 
                        ['supportText' => '@brand-primary-light']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'brand-secondary-light',
                '__brand-secondary-light__',
                $this->themeColorDefaults['brand-secondary-light'],
                [
                    'attributes' => 
                        ['supportText' => '@brand-secondary-light']
                ] 
            )
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'brand-primary-dark',
                '__brand-primary-dark__',
                $this->themeColorDefaults['brand-primary-dark'],
                [
                    'attributes' => 
                        ['supportText' => '@brand-primary-dark']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'brand-secondary-dark',
                '__brand-secondary-dark__',
                $this->themeColorDefaults['brand-secondary-dark'],
                [
                    'attributes' => 
                        ['supportText' => '@brand-secondary-dark']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'gray',
                '__gray__',
                $this->themeColorDefaults['gray'],
                [
                    'attributes' => 
                        ['supportText' => '@gray']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'gray-light',
                '__gray-light__',
                $this->themeColorDefaults['gray-light'],
                [
                    'attributes' => 
                        ['supportText' => '@gray-light']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'gray-dark',
                '__gray-dark__',
                $this->themeColorDefaults['gray-dark'],
                [
                    'attributes' => 
                        ['supportText' => '@gray-dark']
                ]   
            )
        );

        return $fieldSet;
    }
	
    private function createColorBorderFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'border_style_field_set',
            '__border_style_field_set__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'border-color',
                '__border-color__',
                $this->themeColorDefaults['border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@border-color']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'border-color-light',
                '__border-color-light__',
                $this->themeColorDefaults['border-color-light'],
                [
                    'attributes' => 
                        ['supportText' => '@border-color-light']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'border-color-dark',
                '__border-color-dark__',
                $this->themeColorDefaults['border-color-dark'],
                [
                    'attributes' => 
                        ['supportText' => '@border-color-dark']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'border-radius-base',
                '__border-radius-base__',
                $this->themeColorDefaults['border-radius-base'],
                [
                    'attributes' => 
                        ['supportText' => '@border-radius-base']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'border-radius-sm',
                '__border-radius-sm__',
                $this->themeColorDefaults['border-radius-sm'],
                [
                    'attributes' => 
                        ['supportText' => '@border-radius-sm']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'border-radius-lg',
                '__border-radius-lg__',
                $this->themeColorDefaults['border-radius-lg'],
                [
                    'attributes' => 
                        ['supportText' => '@border-radius-lg']
                ]  
            )
        );
		
        return $fieldSet;
    }
	
    private function createColorHighlightFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'color_highlight_field_set',
            '__color_highlight_field_set__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'highlight-success',
                '__highlight-success__',
                $this->themeColorDefaults['highlight-success'],
                [
                    'attributes' => 
                        ['supportText' => '@highlight-success']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'highlight-error',
                '__highlight-error__',
                $this->themeColorDefaults['highlight-error'],
                [
                    'attributes' => 
                        ['supportText' => '@highlight-error']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'highlight-notice',
                '__highlight-notice__',
                $this->themeColorDefaults['highlight-notice'],
                [
                    'attributes' => 
                        ['supportText' => '@highlight-notice']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'highlight-info',
                '__highlight-info__',
                $this->themeColorDefaults['highlight-info'],
                [
                    'attributes' => 
                        ['supportText' => '@highlight-info']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createScaffoldingPaddingFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'scaffolding_padding_field_set',
            '__scaffolding_padding_field_set__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldSet->addElement(
            $this->createTextField(
                'padding-base-vertical',
                '__padding-base-vertical__',
                $this->themeColorDefaults['padding-base-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-base-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'padding-base-horizontal',
                '__padding-base-horizontal__',
                $this->themeColorDefaults['padding-base-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-base-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'padding-xs-vertical',
                '__padding-xs-vertical__',
                $this->themeColorDefaults['padding-xs-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-xs-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'padding-xs-horizontal',
                '__padding-xs-horizontal__',
                $this->themeColorDefaults['padding-xs-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-xs-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'padding-sm-vertical',
                '__padding-sm-vertical__',
                $this->themeColorDefaults['padding-sm-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-sm-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'padding-sm-horizontal',
                '__padding-sm-horizontal__',
                $this->themeColorDefaults['padding-sm-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-sm-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'padding-md-vertical',
                '__padding-md-vertical__',
                $this->themeColorDefaults['padding-md-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-md-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'padding-md-horizontal',
                '__padding-md-horizontal__',
                $this->themeColorDefaults['padding-md-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-md-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'padding-lg-vertical',
                '__padding-lg-vertical__',
                $this->themeColorDefaults['padding-lg-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-lg-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'padding-lg-horizontal',
                '__padding-lg-horizontal__',
                $this->themeColorDefaults['padding-lg-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-lg-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'padding-xl-vertical',
                '__padding-xl-vertical__',
                $this->themeColorDefaults['padding-xl-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-xl-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'padding-xl-horizontal',
                '__padding-xl-horizontal__',
                $this->themeColorDefaults['padding-xl-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@padding-xl-horizontal']
                ] 
            )
        );
		
        return $fieldSet;
    }

	private function createColorScaffoldingTab()
    {
        $tab = $this->createTab(
            'scaffolding_tab',
            '__scaffolding_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );

		$tab->addElement($this->createScaffoldingGeneralFieldset());
		$tab->addElement($this->createScaffoldingHeaderFieldset());
		$tab->addElement($this->createScaffoldingMainNavigationFieldset());
		$tab->addElement($this->createScaffoldingSidebarFieldset());
		$tab->addElement($this->createScaffoldingFooterFieldset());

        return $tab;
    }
	
	public function createScaffoldingGeneralFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'scaffolding_generel_fieldset',
			'__scaffolding_generel_fieldset__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 200,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
            $this->createColorPickerField(
                'body-bg',
                '__body-bg__',
                $this->themeColorDefaults['body-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@body-bg']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createColorPickerField(
                'page-wrap-bg',
                '__page-wrap-bg__',
                $this->themeColorDefaults['page-wrap-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@page-wrap-bg']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createTextField(
                'page-wrap-shadow',
                '__page-wrap-shadow__',
                $this->themeColorDefaults['page-wrap-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@page-wrap-shadow']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'overlay-bg',
                '__overlay-bg__',
                $this->themeColorDefaults['overlay-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@overlay-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'overlay-opacity',
                '__overlay-opacity__',
                $this->themeColorDefaults['overlay-opacity'],
                [
                    'attributes' => 
                        ['supportText' => '@overlay-opacity']
                ] 
            )
        );
		
		return $fieldset;
	}
	
	public function createScaffoldingHeaderFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'scaffolding_header_fieldset',
			'__scaffolding_header_fieldset__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 200,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
            $this->createColorPickerField(
                'header-bg',
                '__header-bg__',
                $this->themeColorDefaults['header-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@header-bg']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createColorPickerField(
                'header-icon-color',
                '__header-icon-color__',
                $this->themeColorDefaults['header-icon-color'],
                [
                    'attributes' => 
                        ['supportText' => '@header-icon-color']
                ] 
            )
        );
		
		$fieldset->addElement(
            $this->createColorPickerField(
                'search-bg',
                '__search-bg__',
                $this->themeColorDefaults['search-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@search-bg']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createColorPickerField(
                'search-border-color',
                '__search-border-color__',
                $this->themeColorDefaults['search-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@search-border-color']
                ] 
            )
        );
		
		$fieldset->addElement(
            $this->createColorPickerField(
                'search-icon-color',
                '__search-icon-color__',
                $this->themeColorDefaults['search-icon-color'],
                [
                    'attributes' => 
                        ['supportText' => '@search-icon-color']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createTextField(
                'search-icon-size',
                '__search-icon-size__',
                $this->themeColorDefaults['search-icon-size'],
                [
                    'attributes' => 
                        ['supportText' => '@search-icon-size']
                ] 
            )
        );
		
		$fieldset->addElement(
            $this->createTextField(
                'breadcrumb-border-color',
                '__breadcrumb-border-color__',
                $this->themeColorDefaults['breadcrumb-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@breadcrumb-border-color']
                ] 
            )
        );
		
		$fieldset->addElement(
            $this->createTextField(
                'breadcrumb-link-color',
                '__breadcrumb-link-color__',
                $this->themeColorDefaults['breadcrumb-link-color'],
                [
                    'attributes' => 
                        ['supportText' => '@breadcrumb-link-color']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createTextField(
                'breadcrumb-link-active-color',
                '__breadcrumb-link-active-color__',
                $this->themeColorDefaults['breadcrumb-link-active-color'],
                [
                    'attributes' => 
                        ['supportText' => '@breadcrumb-link-active-color']
                ] 
            )
        );
		$fieldset->addElement(
            $this->createTextField(
                'breadcrumb-separator-color',
                '__breadcrumb-separator-color__',
                $this->themeColorDefaults['breadcrumb-separator-color'],
                [
                    'attributes' => 
                        ['supportText' => '@breadcrumb-link-active-color']
                ] 
            )
        );
		
		return $fieldset;
	}
	
	public function createScaffoldingMainNavigationFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'scaffolding_main_navigation_fieldset',
			'__scaffolding_main_navigation_fieldset__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 200,
						'margin' => '5 15 5 0'
					)
				)
			)
		);
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-bg',
                '__main-navigation-bg__',
                $this->themeColorDefaults['main-navigation-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-sticky-bg',
                '__main-navigation-sticky-bg__',
                $this->themeColorDefaults['main-navigation-sticky-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-sticky-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-button-bg',
                '__main-navigation-button-bg__',
                $this->themeColorDefaults['main-navigation-button-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-button-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-button-color',
                '__main-navigation-button-color__',
                $this->themeColorDefaults['main-navigation-button-color'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-button-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-button-active-bg',
                '__main-navigation-button-active-bg__',
                $this->themeColorDefaults['main-navigation-button-active-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-button-active-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-button-active-color',
                '__main-navigation-button-active-color__',
                $this->themeColorDefaults['main-navigation-button-active-color'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-button-active-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-button-hover-bg',
                '__main-navigation-button-hover-bg__',
                $this->themeColorDefaults['main-navigation-button-hover-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-button-hover-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'main-navigation-button-hover-color',
                '__main-navigation-button-hover-color__',
                $this->themeColorDefaults['main-navigation-button-hover-color'],
                [
                    'attributes' => 
                        ['supportText' => '@main-navigation-button-hover-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'advanced-menu-bg',
                '__advanced-menu-bg__',
                $this->themeColorDefaults['advanced-menu-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@advanced-menu-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'advanced-menu-header-bg',
                '__advanced-menu-header-bg__',
                $this->themeColorDefaults['advanced-menu-header-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@advanced-menu-header-bg']
                ] 
            )
        );
		
		return $fieldset;
	}
	
	public function createScaffoldingSidebarFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'scaffolding_sidebar_fieldset',
			'__scaffolding_sidebar_fieldset__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 200,
						'margin' => '5 15 5 0'
					)
				)
			)
		);
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-bg',
                '__sidebar-box-bg__',
                $this->themeColorDefaults['sidebar-box-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-border-color',
                '__sidebar-box-border-color__',
                $this->themeColorDefaults['sidebar-box-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-border-color']
                ] 
            )
        );
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-title-color',
                '__sidebar-box-title-color__',
                $this->themeColorDefaults['sidebar-box-title-color'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-title-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-link-color',
                '__sidebar-box-link-color__',
                $this->themeColorDefaults['sidebar-box-link-color'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-link-color']
                ] 
            )
        );
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-link-active-color',
                '__sidebar-box-link-active-color__',
                $this->themeColorDefaults['sidebar-box-link-active-color'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-link-active-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-link-active-bg',
                '__sidebar-box-link-active-bg__',
                $this->themeColorDefaults['sidebar-box-link-active-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-link-active-bg']
                ] 
            )
        );
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-box-icon-color',
                '__sidebar-box-icon-color__',
                $this->themeColorDefaults['sidebar-box-icon-color'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-box-icon-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'sidebar-account-box-icon-color',
                '__sidebar-account-box-icon-color__',
                $this->themeColorDefaults['sidebar-account-box-icon-color'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-account-box-icon-color']
                ] 
            )
        );
		
        $fieldset->addElement(
            $this->createTextField(
                'sidebar-width-tablet',
                '__sidebar-width-tablet__',
                $this->themeColorDefaults['sidebar-width-tablet'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-width-tablet']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'sidebar-width-desktop',
                '__sidebar-width-desktop__',
                $this->themeColorDefaults['sidebar-width-desktop'],
                [
                    'attributes' => 
                        ['supportText' => '@sidebar-width-desktop']
                ] 
            )
        );
		
		return $fieldset;
	}
	
	public function createScaffoldingFooterFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'scaffolding_footer_fieldset',
			'__scaffolding_footer_fieldset__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 200,
						'margin' => '5 15 5 0'
					)
				)
			)
		);
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'footer-bg',
                '__footer-bg__',
                $this->themeColorDefaults['footer-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@footer-bg']
                ] 
            )
        );
		
        $fieldset->addElement(
            $this->createColorPickerField(
                'footer-title-color',
                '__footer-title-color__',
                $this->themeColorDefaults['footer-title-color'],
                [
                    'attributes' => 
                        ['supportText' => '@footer-title-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'footer-title-size',
                '__footer-title-size__',
                $this->themeColorDefaults['footer-title-size'],
                [
                    'attributes' => 
                        ['supportText' => '@footer-title-size']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'footer-text-color',
                '__footer-text-color__',
                $this->themeColorDefaults['footer-text-color'],
                [
                    'attributes' => 
                        ['supportText' => '@footer-text-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'footer-link-color',
                '__footer-link-color__',
                $this->themeColorDefaults['footer-link-color'],
                [
                    'attributes' => 
                        ['supportText' => '@footer-link-color']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'footer-link-active-color',
                '__footer-link-active-color__',
                $this->themeColorDefaults['footer-link-active-color'],
                [
                    'attributes' => 
                        ['supportText' => '@footer-link-active-color']
                ] 
            )
        );
		
		return $fieldset;
	}
	
	private function createListingStyleTab()
    {
        $tab = $this->createTab(
            'listing_style_tab',
            '__listing_style_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );

		$tab->addElement($this->createFilterListingFieldset());
        $tab->addElement($this->createProductImageBackgroundFieldSet());
		$tab->addElement($this->createProductBoxBasicFieldset());
		$tab->addElement($this->createProductBoxMinimalFieldset());
        $tab->addElement($this->createProductBoxImageFieldset());
        $tab->addElement($this->createProductBoxSliderFieldset());

        return $tab;
    }

    public function createFilterListingFieldset()
    {

        // Create the fieldset which is the container of our field
        $fieldset = $this->createFieldSet(
            'listing_filter_style_fieldset',
            '__listing_filter_style_fieldset__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createColorPickerField(
                'listing-filter-bg',
                '__listing-filter-bg__',
                $this->themeColorDefaults['listing-filter-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@listing-filter-bg']
                ]    
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'listing-filter-shadow',
                '__listing-filter-shadow__',
                $this->themeColorDefaults['listing-filter-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@listing-filter-shadow']
                ]    
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'listing-filter-arrow-shadow',
                '__listing-filter-arrow-shadow__',
                $this->themeColorDefaults['listing-filter-arrow-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@listing-filter-arrow-shadow']
                ]    
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'listing-filter-panel-bg',
                '__listing-filter-panel-bg__',
                $this->themeColorDefaults['listing-filter-panel-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@listing-filter-panel-bg']
                ]     
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'listing-filter-panel-shadow',
                '__listing-filter-panel-shadow__',
                $this->themeColorDefaults['listing-filter-panel-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@listing-filter-panel-shadow']
                ]                
            )
        );

        return $fieldset;
    }
    
    private function createProductImageBackgroundFieldSet()
    {
        $fieldSet = $this->createFieldSet(
            'product_image_background_field_set',
            '__product_image_background_field_set__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'image-background-color',
                '__image-background-color__',
                $this->themeColorDefaults['image-background-color'],
                [
                    'attributes' => 
                        ['supportText' => '@image-background-color']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createColorPickerField(
                'manufacturer-background-color',
                '__manufacturer-background-color__',
                $this->themeColorDefaults['manufacturer-background-color'],
                [
                    'attributes' => 
                        ['supportText' => '@manufacturer-background-color']
                ] 
            )
        );

        return $fieldSet;
    }
    
    public function createProductBoxBasicFieldset()
    {

        // Create the fieldset which is the container of our field
        $fieldset = $this->createFieldSet(
            'product_box_basic_fieldset',
            '__product_box_basic_fieldset__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );
        
        $fieldset->addElement(
            $this->createColorPickerField(
                'product-box-basic-bg',
                '__product-box-basic-bg__',
                $this->themeColorDefaults['product-box-basic-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-basic-bg']
                ] 
            )
        );

        $fieldset->addElement(
            $this->createTextField(
                'product-box-basic-shadow',
                '__product-box-basic-shadow__',
                $this->themeColorDefaults['product-box-basic-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-basic-shadow']
                ] 
            )
        );

        return $fieldset;
    }
    
    public function createProductBoxMinimalFieldset()
    {

        // Create the fieldset which is the container of our field
        $fieldset = $this->createFieldSet(
            'product_box_minimal_fieldset',
            '__product_box_minimal_fieldset__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );
        
        $fieldset->addElement(
            $this->createColorPickerField(
                'product-box-minimal-bg',
                '__product-box-minimal-bg__',
                $this->themeColorDefaults['product-box-minimal-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-bg']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'product-box-minimal-shadow',
                '__product-box-minimal-shadow__',
                $this->themeColorDefaults['product-box-minimal-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-shadow']
                ] 
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'product-box-minimal-image-height-phone',
                '__product-box-minimal-image-height-phone__',
                $this->themeColorDefaults['product-box-minimal-image-height-phone'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-image-height-phone']
                ] 
            )
        );	
        $fieldset->addElement(
            $this->createTextField(
                'product-box-minimal-image-height-phone-landscape',
                '__product-box-minimal-image-height-phone-landscape__',
                $this->themeColorDefaults['product-box-minimal-image-height-phone-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-image-height-phone-landscape']
                ] 
            )
        );

        $fieldset->addElement(
            $this->createTextField(
                'product-box-minimal-image-height-tablet',
                '__product-box-minimal-image-height-tablet__',
                $this->themeColorDefaults['product-box-minimal-image-height-tablet'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-image-height-tablet']
                ] 
            )
        );	
        $fieldset->addElement(
            $this->createTextField(
                'product-box-minimal-image-height-tablet-landscape',
                '__product-box-minimal-image-height-tablet-landscape__',
                $this->themeColorDefaults['product-box-minimal-image-height-tablet-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-image-height-tablet-landscape']
                ] 
            )
        );		
		
        $fieldset->addElement(
            $this->createTextField(
                'product-box-minimal-image-height-desktop',
                '__product-box-minimal-image-height-desktop__',
                $this->themeColorDefaults['product-box-minimal-image-height-desktop'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-minimal-image-height-desktop']
                ] 
            )
        );	

        return $fieldset;
    }
    
    public function createProductBoxImageFieldset()
    {

        // Create the fieldset which is the container of our field
        $fieldset = $this->createFieldSet(
            'product_box_image_fieldset',
            '__product_box_image_fieldset__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createTextField(
                'product-box-big-image-height-phone',
                '__product-box-big-image-height-phone__',
                $this->themeColorDefaults['product-box-big-image-height-phone'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-big-image-height-phone']
                ] 
            )
        );	
        $fieldset->addElement(
            $this->createTextField(
                'product-box-big-image-height-phone-landscape',
                '__product-box-big-image-height-phone-landscape__',
                $this->themeColorDefaults['product-box-big-image-height-phone-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-big-image-height-phone-landscape']
                ] 
            )
        );

        $fieldset->addElement(
            $this->createTextField(
                'product-box-big-image-height-tablet',
                '__product-box-big-image-height-tablet__',
                $this->themeColorDefaults['product-box-big-image-height-tablet'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-big-image-height-tablet']
                ] 
            )
        );	
        $fieldset->addElement(
            $this->createTextField(
                'product-box-big-image-height-tablet-landscape',
                '__product-box-big-image-height-tablet-landscape__',
                $this->themeColorDefaults['product-box-big-image-height-tablet-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-big-image-height-tablet-landscape']
                ] 
            )
        );		

        $fieldset->addElement(
            $this->createTextField(
                'product-box-big-image-height-desktop',
                '__product-box-big-image-height-desktop__',
                $this->themeColorDefaults['product-box-big-image-height-desktop'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-big-image-height-desktop']
                ] 
            )
        );	

        return $fieldset;
    }
    
    public function createProductBoxSliderFieldset()
    {

        // Create the fieldset which is the container of our field
        $fieldset = $this->createFieldSet(
            'product_box_slider_fieldset',
            '__product_box_slider_fieldset__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );
        
        $fieldset->addElement(
            $this->createTextField(
                'product-box-slider-image-height-phone',
                '__product-box-slider-image-height-phone__',
                $this->themeColorDefaults['product-box-slider-image-height-phone'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-slider-image-height-phone']
                ] 
            )
        );	
        $fieldset->addElement(
            $this->createTextField(
                'product-box-slider-image-height-phone-landscape',
                '__product-box-slider-image-height-phone-landscape__',
                $this->themeColorDefaults['product-box-slider-image-height-phone-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-slider-image-height-phone-landscape']
                ] 
            )
        );

        $fieldset->addElement(
            $this->createTextField(
                'product-box-slider-image-height-tablet',
                '__product-box-slider-image-height-tablet__',
                $this->themeColorDefaults['product-box-slider-image-height-tablet'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-slider-image-height-tablet']
                ] 
            )
        );	
        $fieldset->addElement(
            $this->createTextField(
                'product-box-slider-image-height-tablet-landscape',
                '__product-box-slider-image-height-tablet-landscape__',
                $this->themeColorDefaults['product-box-slider-image-height-tablet-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-slider-image-height-tablet-landscape']
                ] 
            )
        );		
		
        $fieldset->addElement(
            $this->createTextField(
                'product-box-slider-image-height-desktop',
                '__product-box-slider-image-height-desktop__',
                $this->themeColorDefaults['product-box-slider-image-height-desktop'],
                [
                    'attributes' => 
                        ['supportText' => '@product-box-slider-image-height-desktop']
                ] 
            )
        );
        
        return $fieldset;
    }
	
	private function createDetailStyleTab()
    {
        $tab = $this->createTab(
            'detail_style_tab',
            '__detail_style_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
        
        $tab->addElement($this->createProductNavigationFieldSet());
        $tab->addElement($this->createProductConfiguratorStyleFieldSet());
        $tab->addElement($this->createProductDetailImageHeightFieldSet());

        return $tab;
    }
    
    private function createProductNavigationFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'product_navigation_style_field_set',
            '__product_navigation_style_field_set__',
            ['attributes' => $attributes]
        );			
        
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-navigation-button-bg',
                '__product-navigation-button-bg__',
                $this->themeColorDefaults['product-navigation-button-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-navigation-button-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-navigation-button-color',
                '__product-navigation-button-color__',
                $this->themeColorDefaults['product-navigation-button-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-navigation-button-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'product-navigation-button-shadow',
                '__product-navigation-button-shadow__',
                $this->themeColorDefaults['product-navigation-button-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@product-navigation-button-shadow']
                ] 
            )
        );
		
        return $fieldSet;
    }
    
    private function createProductConfiguratorStyleFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'product_configurator_style_field_set',
            '__product_configurator_style_field_set__',
            ['attributes' => $attributes]
        );			
        
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-configurator-bg',
                '__product-configurator-bg__',
                $this->themeColorDefaults['product-configurator-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-configurator-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-configurator-border-color',
                '__product-configurator-border-color__',
                $this->themeColorDefaults['product-configurator-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-configurator-border-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
    
    private function createProductDetailImageHeightFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'product_detail_image_sizes_field_set',
            '__product_detail_image_sizes_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'detail-main-image-height-phone',
                '__detail-main-image-height-phone__',
                $this->themeColorDefaults['detail-main-image-height-phone'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-main-image-height-phone']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createTextField(
                'detail-main-image-height-phone-landscape',
                '__detail-main-image-height-phone-landscape__',
                $this->themeColorDefaults['detail-main-image-height-phone-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-main-image-height-phone-landscape']
                ] 
            )
        );

        $fieldSet->addElement(
            $this->createTextField(
                'detail-main-image-height-tablet',
                '__detail-main-image-height-tablet__',
                $this->themeColorDefaults['detail-main-image-height-tablet'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-main-image-height-tablet']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createTextField(
                'detail-main-image-height-tablet-landscape',
                '__detail-main-image-height-tablet-landscape__',
                $this->themeColorDefaults['detail-main-image-height-tablet-landscape'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-main-image-height-tablet-landscape']
                ] 
            )
        );		
		
        $fieldSet->addElement(
            $this->createTextField(
                'detail-main-image-height-desktop',
                '__detail-main-image-height-desktop__',
                $this->themeColorDefaults['detail-main-image-height-desktop'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-main-image-height-desktop']
                ] 
            )
        );		
        $fieldSet->addElement(
            $this->createTextField(
                'detail-image-thumbnails-height',
                '__detail-image-thumbnails-height__',
                $this->themeColorDefaults['detail-image-thumbnails-height'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-image-thumbnails-height']
                ] 
            )
        );	
		
        $fieldSet->addElement(
            $this->createTextField(
                'detail-image-thumbnails-width',
                '__detail-image-thumbnails-width__',
                $this->themeColorDefaults['detail-image-thumbnails-width'],
                [
                    'attributes' => 
                        ['supportText' => '@detail-image-thumbnails-width']
                ] 
            )
        );			
		
        return $fieldSet;
    }
    
    private function createFontsTab()
    {
        $tab = $this->createTab(
            'fonts_general_tab',
            '__fonts_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$fontBasicFieldSet = $this->createFontBasicFieldSet();
		$fontSizeFieldSet = $this->createFontSizeFieldSet();
		$fontColorFieldSet = $this->createFontColorFieldSet();
        $tab->addElement($fontBasicFieldSet);
		$tab->addElement($fontSizeFieldSet);
		$tab->addElement($fontColorFieldSet);

        return $tab;
    }
	
    private function createFontBasicFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'fonts_basic_field_set',
            '__fonts_basic_field_set__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 0.5,
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

		$fieldSet->addElement(
			$this->createSelectField(
				'fontBaseStack',
				'__fontBaseStack__',
				$this->themeColorDefaults['fontBaseStack'],
				[
					['value' => 'Open Sans', 'text' => 'Open Sans'],
					['value' => 'Ubuntu', 'text' => 'Ubuntu'],
					['value' => 'Raleway', 'text' => 'Raleway'],
					['value' => 'Patua One', 'text' => 'Patua One'],
					['value' => 'Lato', 'text' => 'Lato']
				],
                [
                    'attributes' => 
                        ['supportText' => '@fontBaseStack']
                ]   
			)
		);	
		$fieldSet->addElement(
			$this->createSelectField(
				'fontHeadlineStack',
				'__fontHeadlineStack__',
				$this->themeColorDefaults['fontHeadlineStack'],
				[
					['value' => 'Open Sans', 'text' => 'Open Sans'],
					['value' => 'Ubuntu', 'text' => 'Ubuntu'],
					['value' => 'Raleway', 'text' => 'Raleway'],
					['value' => 'Patua One', 'text' => 'Patua One'],
					['value' => 'Lato', 'text' => 'Lato']
				],
                [
                    'attributes' => 
                        ['supportText' => '@fontHeadlineStack']
                ]   
			)
		);	
        $fieldSet->addElement(
            $this->createTextField(
                'font-base-weight',
                '__font-base-weight__',
                $this->themeColorDefaults['font-base-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@font-base-weight']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-light-weight',
                '__font-light-weight__',
                $this->themeColorDefaults['font-light-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@font-light-weight']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-semibold-weight',
                '__font-semibold-weight__',
                $this->themeColorDefaults['font-semibold-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@font-semibold-weight']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-bold-weight',
                '__font-bold-weight__',
                $this->themeColorDefaults['font-bold-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@font-bold-weight']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'line-height-base',
                '__line-height-base__',
                $this->themeColorDefaults['line-height-base'],
                [
                    'attributes' => 
                        ['supportText' => '@line-height-base']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'line-height-sm',
                '__line-height-sm__',
                $this->themeColorDefaults['line-height-sm'],
                [
                    'attributes' => 
                        ['supportText' => '@line-height-sm']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'line-height-lg',
                '__line-height-lg__',
                $this->themeColorDefaults['line-height-lg'],
                [
                    'attributes' => 
                        ['supportText' => '@line-height-lg']
                ]   
            )
        );
		
        return $fieldSet;
    }
	
    private function createFontSizeFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'fonts_size_field_set',
            '__fonts_size_field_set__',
            ['attributes' => $attributes]
        );

        $fieldSet->addElement(
            $this->createTextField(
                'font-size-base',
                '__font-size-base__',
                $this->themeColorDefaults['font-size-base'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-base']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-sm',
                '__font-size-sm__',
                $this->themeColorDefaults['font-size-sm'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-sm']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-lg',
                '__font-size-lg__',
                $this->themeColorDefaults['font-size-lg'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-lg']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-h1',
                '__font-size-h1__',
                $this->themeColorDefaults['font-size-h1'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-h1']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-h2',
                '__font-size-h2__',
                $this->themeColorDefaults['font-size-h2'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-h2']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-h3',
                '__font-size-h3__',
                $this->themeColorDefaults['font-size-h3'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-h3']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-h4',
                '__font-size-h4__',
                $this->themeColorDefaults['font-size-h4'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-h4']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-h5',
                '__font-size-h5__',
                $this->themeColorDefaults['font-size-h5'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-h5']
                ]   
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'font-size-h6',
                '__font-size-h6__',
                $this->themeColorDefaults['font-size-h6'],
                [
                    'attributes' => 
                        ['supportText' => '@font-size-h6']
                ]   
            )
        );
		
        return $fieldSet;
    }

    private function createFontColorFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'fonts_color_field_set',
            '__fonts_color_field_set__',
            ['attributes' => $attributes]
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color',
                '__text-color__',
                $this->themeColorDefaults['text-color'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-light',
                '__text-color-light__',
                $this->themeColorDefaults['text-color-light'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-light']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-dark',
                '__text-color-dark__',
                $this->themeColorDefaults['text-color-dark'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-dark']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-secondary',
                '__text-color-secondary__',
                $this->themeColorDefaults['text-color-secondary'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-secondary']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-info',
                '__text-color-info__',
                $this->themeColorDefaults['text-color-info'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-info']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-success',
                '__text-color-success__',
                $this->themeColorDefaults['text-color-success'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-success']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-warning',
                '__text-color-warning__',
                $this->themeColorDefaults['text-color-warning'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-warning']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'text-color-danger',
                '__text-color-danger__',
                $this->themeColorDefaults['text-color-danger'],
                [
                    'attributes' => 
                        ['supportText' => '@text-color-danger']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'link-color',
                '__link-color__',
                $this->themeColorDefaults['link-color'],
                [
                    'attributes' => 
                        ['supportText' => '@link-color']
                ]  
            )
        );
		
        return $fieldSet;
    }
	
    private function createIconsTab()
    {
        $tab = $this->createTab(
            'icons_general_tab',
            '__icons_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$iconSizeFieldSet = $this->createiconSizeFieldSet();
		$iconColorFieldSet = $this->createiconColorFieldSet();
        $tab->addElement($iconSizeFieldSet);
		$tab->addElement($iconColorFieldSet);

        return $tab;
    }
	
    private function createiconSizeFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'icons_size_field_set',
            '__icons_size_field_set__',
            ['attributes' => $attributes]
        );

        $fieldSet->addElement(
            $this->createTextField(
                'icon-size-base',
                '__icon-size-base__',
                $this->themeColorDefaults['icon-size-base'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-size-base']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'icon-size-xxs',
                '__icon-size-xxs__',
                $this->themeColorDefaults['icon-size-xxs'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-size-xxs']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'icon-size-xs',
                '__icon-size-xs__',
                $this->themeColorDefaults['icon-size-xs'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-size-xs']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'icon-size-sm',
                '__icon-size-sm__',
                $this->themeColorDefaults['icon-size-sm'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-size-sm']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'icon-size-lg',
                '__icon-size-lg__',
                $this->themeColorDefaults['icon-size-lg'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-size-lg']
                ]  
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'icon-size-xl',
                '__icon-size-xl__',
                $this->themeColorDefaults['icon-size-xl'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-size-xl']
                ]  
            )
        );
		
        return $fieldSet;
    }
	
    private function createiconColorFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'icons_color_field_set',
            '__icons_color_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-base',
                '__icon-color-base__',
                $this->themeColorDefaults['icon-color-base'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-base']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-light',
                '__icon-color-light__',
                $this->themeColorDefaults['icon-color-light'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-light']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-dark',
                '__icon-color-dark__',
                $this->themeColorDefaults['icon-color-dark'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-dark']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-info',
                '__icon-color-info__',
                $this->themeColorDefaults['icon-color-info'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-info']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-success',
                '__icon-color-success__',
                $this->themeColorDefaults['icon-color-success'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-success']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-warning',
                '__icon-color-warning__',
                $this->themeColorDefaults['icon-color-warning'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-warning']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'icon-color-danger',
                '__icon-color-danger__',
                $this->themeColorDefaults['icon-color-danger'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-danger']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'rating-star-color',
                '__rating-star-color__',
                $this->themeColorDefaults['rating-star-color'],
                [
                    'attributes' => 
                        ['supportText' => '@icon-color-color']
                ] 
            )
        );
	
		
        return $fieldSet;
    }

    private function createButtonsTab()
    {
        $tab = $this->createTab(
            'buttons_general_tab',
            '__buttons_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$buttonGeneralFieldSet = $this->createButtonGeneralFieldSet();
		$buttonSizeBaseFieldSet = $this->createButtonSizeBaseFieldSet();
		$buttonSizeSmallFieldSet = $this->createButtonSizeSmallFieldSet();
		$buttonSizeLargeFieldSet = $this->createButtonSizeLargeFieldSet();
		$buttonColorPrimaryFieldSet = $this->createButtonColorPrimaryFieldSet();
		$buttonColorSecondaryFieldSet = $this->createButtonColorSecondaryFieldSet();
		$buttonColorDangerFieldSet = $this->createButtonColorDangerFieldSet();
		$buttonColorWarningFieldSet = $this->createButtonColorWarningFieldSet();
		$buttonColorSuccessFieldSet = $this->createButtonColorSuccessFieldSet();
		$buttonColorInfoFieldSet = $this->createButtonColorInfoFieldSet();
		$buttonColorDefaultFieldSet = $this->createButtonColorDefaultFieldSet();
		$tab->addElement($buttonGeneralFieldSet);
        $tab->addElement($buttonSizeBaseFieldSet);
		$tab->addElement($buttonSizeSmallFieldSet);
		$tab->addElement($buttonSizeLargeFieldSet);
		$tab->addElement($buttonColorPrimaryFieldSet);
		$tab->addElement($buttonColorSecondaryFieldSet);
		$tab->addElement($buttonColorDangerFieldSet);
		$tab->addElement($buttonColorWarningFieldSet);
		$tab->addElement($buttonColorSuccessFieldSet);
		$tab->addElement($buttonColorInfoFieldSet);
		$tab->addElement($buttonColorDefaultFieldSet);

        return $tab;
    }
	
    private function createButtonGeneralFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_general_field_set',
            '__buttons_general_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'button-box-shadow',
                '__button-box-shadow__',
                $this->themeColorDefaults['button-box-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@button-box-shadow']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-box-shadow-active',
                '__button-box-shadow-active__',
                $this->themeColorDefaults['button-box-shadow-active'],
                [
                    'attributes' => 
                        ['supportText' => '@button-box-shadow-active']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-text-shadow',
                '__button-text-shadow__',
                $this->themeColorDefaults['button-text-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@button-text-shadow']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createButtonSizeBaseFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_size_base_field_set',
            '__buttons_size_base_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-font-size',
                '__button-base-font-size__',
                $this->themeColorDefaults['button-base-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-line-height',
                '__button-base-line-height__',
                $this->themeColorDefaults['button-base-line-height'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-line-height']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-padding-vertical',
                '__button-base-padding-vertical__',
                $this->themeColorDefaults['button-base-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-padding-horizontal',
                '__button-base-padding-horizontal__',
                $this->themeColorDefaults['button-base-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-padding-horizontal']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-border-radius',
                '__button-base-border-radius__',
                $this->themeColorDefaults['button-base-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-border-radius']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-border-size',
                '__button-base-border-size__',
                $this->themeColorDefaults['button-base-border-size'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-border-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-base-font-weight',
                '__button-base-font-weight__',
                $this->themeColorDefaults['button-base-font-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@button-base-font-weight']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createButtonSizeSmallFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_size_small_field_set',
            '__buttons_size_small_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-font-size',
                '__button-sm-font-size__',
                $this->themeColorDefaults['button-sm-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-line-height',
                '__button-sm-line-height__',
                $this->themeColorDefaults['button-sm-line-height'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-line-height']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-padding-vertical',
                '__button-sm-padding-vertical__',
                $this->themeColorDefaults['button-sm-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-padding-horizontal',
                '__button-sm-padding-horizontal__',
                $this->themeColorDefaults['button-sm-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-padding-horizontal']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-border-radius',
                '__button-sm-border-radius__',
                $this->themeColorDefaults['button-sm-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-border-radius']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-border-size',
                '__button-sm-border-size__',
                $this->themeColorDefaults['button-sm-border-size'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-border-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-sm-font-weight',
                '__button-sm-font-weight__',
                $this->themeColorDefaults['button-sm-font-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@button-sm-font-weight']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createButtonSizeLargeFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_size_large_field_set',
            '__buttons_size_large_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-font-size',
                '__button-lg-font-size__',
                $this->themeColorDefaults['button-lg-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-line-height',
                '__button-lg-line-height__',
                $this->themeColorDefaults['button-lg-line-height'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-line-height']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-padding-vertical',
                '__button-lg-padding-vertical__',
                $this->themeColorDefaults['button-lg-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-padding-horizontal',
                '__button-lg-padding-horizontal__',
                $this->themeColorDefaults['button-lg-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-padding-horizontal']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-border-radius',
                '__button-lg-border-radius__',
                $this->themeColorDefaults['button-lg-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-border-radius']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-border-size',
                '__button-lg-border-size__',
                $this->themeColorDefaults['button-lg-border-size'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-border-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'button-lg-font-weight',
                '__button-lg-font-weight__',
                $this->themeColorDefaults['button-lg-font-weight'],
                [
                    'attributes' => 
                        ['supportText' => '@button-lg-font-weight']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createButtonColorPrimaryFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_primary_field_set',
            '__buttons_color_primary_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-primary-bg',
                '__button-primary-bg__',
                $this->themeColorDefaults['button-primary-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-primary-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-primary-gardient-start',
                '__button-primary-gardient-start__',
                $this->themeColorDefaults['button-primary-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-primary-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-primary-color',
                '__button-primary-color__',
                $this->themeColorDefaults['button-primary-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-primary-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-primary-gardient-end',
                '__button-primary-gardient-end__',
                $this->themeColorDefaults['button-primary-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-primary-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createButtonColorSecondaryFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_secondary_field_set',
            '__buttons_color_secondary_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-secondary-bg',
                '__button-secondary-bg__',
                $this->themeColorDefaults['button-secondary-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-secondary-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-secondary-gardient-start',
                '__button-secondary-gardient-start__',
                $this->themeColorDefaults['button-secondary-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-secondary-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-secondary-color',
                '__button-secondary-color__',
                $this->themeColorDefaults['button-secondary-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-secondary-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-secondary-gardient-end',
                '__button-secondary-gardient-end__',
                $this->themeColorDefaults['button-secondary-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-secondary-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createButtonColorDangerFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_danger_field_set',
            '__buttons_color_danger_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-danger-bg',
                '__button-danger-bg__',
                $this->themeColorDefaults['button-danger-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-danger-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-danger-gardient-start',
                '__button-danger-gardient-start__',
                $this->themeColorDefaults['button-danger-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-danger-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-danger-color',
                '__button-danger-color__',
                $this->themeColorDefaults['button-danger-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-danger-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-danger-gardient-end',
                '__button-danger-gardient-end__',
                $this->themeColorDefaults['button-danger-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-danger-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createButtonColorWarningFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_warning_field_set',
            '__buttons_color_warning_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-warning-bg',
                '__button-warning-bg__',
                $this->themeColorDefaults['button-warning-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-warning-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-warning-gardient-start',
                '__button-warning-gardient-start__',
                $this->themeColorDefaults['button-warning-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-warning-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-warning-color',
                '__button-warning-color__',
                $this->themeColorDefaults['button-warning-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-warning-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-warning-gardient-end',
                '__button-warning-gardient-end__',
                $this->themeColorDefaults['button-warning-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-warning-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createButtonColorSuccessFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_success_field_set',
            '__buttons_color_success_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-success-bg',
                '__button-success-bg__',
                $this->themeColorDefaults['button-success-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-success-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-success-gardient-start',
                '__button-success-gardient-start__',
                $this->themeColorDefaults['button-success-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-success-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-success-color',
                '__button-success-color__',
                $this->themeColorDefaults['button-success-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-success-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-success-gardient-end',
                '__button-success-gardient-end__',
                $this->themeColorDefaults['button-success-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-success-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createButtonColorInfoFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_info_field_set',
            '__buttons_color_info_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-info-bg',
                '__button-info-bg__',
                $this->themeColorDefaults['button-info-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-info-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-info-gardient-start',
                '__button-info-gardient-start__',
                $this->themeColorDefaults['button-info-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-info-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-info-color',
                '__button-info-color__',
                $this->themeColorDefaults['button-info-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-info-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-info-gardient-end',
                '__button-info-gardient-end__',
                $this->themeColorDefaults['button-info-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-info-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createButtonColorDefaultFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'buttons_color_default_field_set',
            '__buttons_color_default_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-default-bg',
                '__button-default-bg__',
                $this->themeColorDefaults['button-default-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@button-default-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-default-gardient-start',
                '__button-default-gardient-start__',
                $this->themeColorDefaults['button-default-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@button-default-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-default-color',
                '__button-default-color__',
                $this->themeColorDefaults['button-default-color'],
                [
                    'attributes' => 
                        ['supportText' => '@button-default-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'button-default-gardient-end',
                '__button-default-gardient-end__',
                $this->themeColorDefaults['button-default-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@button-default-gardient-end']
                ] 
            )
        );

        return $fieldSet;
    }
	
    private function createPanelTab()
    {
        $tab = $this->createTab(
            'panel_general_tab',
            '__panel_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
        $tab->addElement($this->createPanelColorFieldSet());
        $tab->addElement($this->createPanelColorPrimaryFieldSet());
        $tab->addElement($this->createPanelColorDangerFieldSet());
        $tab->addElement($this->createPanelColorWarningFieldSet());
        $tab->addElement($this->createPanelColorSuccessFieldSet());
		$tab->addElement($this->createPanelStructureFieldSet());
        $tab->addElement($this->createPanelSizeSmallFieldSet());
        $tab->addElement($this->createPanelSizeLargeFieldSet());

        return $tab;
    }
	
    private function createPanelColorFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_color_field_set',
            '__panel_color_default_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-bg',
                '__panel-bg__',
                $this->themeColorDefaults['panel-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-border-color',
                '__panel-border-color__',
                $this->themeColorDefaults['panel-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-border-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-header-bg',
                '__panel-header-bg__',
                $this->themeColorDefaults['panel-header-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-header-gardient-start',
                '__panel-header-gardient-start__',
                $this->themeColorDefaults['panel-header-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-header-gardient-end',
                '__panel-header-gardient-end__',
                $this->themeColorDefaults['panel-header-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-gardient-end']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-header-color',
                '__panel-header-color__',
                $this->themeColorDefaults['panel-header-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-footer-bg',
                '__panel-footer-bg__',
                $this->themeColorDefaults['panel-footer-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-footer-bg']
                ] 
            )
        );
		
        return $fieldSet;
    }
    
    private function createPanelColorPrimaryFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_color_primary_field_set',
            '__panel_color_primary_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-primary-title-bg',
                '__panel-primary-title-bg__',
                $this->themeColorDefaults['panel-primary-title-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-primary-title-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-primary-title-color',
                '__panel-primary-title-color__',
                $this->themeColorDefaults['panel-primary-title-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-primary-title-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-primary-title-gardient-start',
                '__panel-primary-title-gardient-start__',
                $this->themeColorDefaults['panel-primary-title-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-primary-title-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-primary-title-gardient-end',
                '__panel-primary-title-gardient-end__',
                $this->themeColorDefaults['panel-primary-title-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-primary-title-gardient-end']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-primary-title-border-color',
                '__panel-primary-title-border-color__',
                $this->themeColorDefaults['panel-primary-title-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-primary-title-border-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-primary-border-color',
                '__panel-primary-border-color__',
                $this->themeColorDefaults['panel-primary-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-primary-border-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
    
    private function createPanelColorDangerFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_color_danger_field_set',
            '__panel_color_danger_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-danger-title-bg',
                '__panel-danger-title-bg__',
                $this->themeColorDefaults['panel-danger-title-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-danger-title-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-danger-title-color',
                '__panel-danger-title-color__',
                $this->themeColorDefaults['panel-danger-title-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-danger-title-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-danger-title-gardient-start',
                '__panel-danger-title-gardient-start__',
                $this->themeColorDefaults['panel-danger-title-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-danger-title-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-danger-title-gardient-end',
                '__panel-danger-title-gardient-end__',
                $this->themeColorDefaults['panel-danger-title-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-danger-title-gardient-end']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-danger-title-border-color',
                '__panel-danger-title-border-color__',
                $this->themeColorDefaults['panel-danger-title-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-danger-title-border-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-danger-border-color',
                '__panel-danger-border-color__',
                $this->themeColorDefaults['panel-danger-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-danger-border-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
    
    private function createPanelColorWarningFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_color_warning_field_set',
            '__panel_color_warning_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-warning-title-bg',
                '__panel-warning-title-bg__',
                $this->themeColorDefaults['panel-warning-title-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-warning-title-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-warning-title-color',
                '__panel-warning-title-color__',
                $this->themeColorDefaults['panel-warning-title-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-warning-title-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-warning-title-gardient-start',
                '__panel-warning-title-gardient-start__',
                $this->themeColorDefaults['panel-warning-title-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-warning-title-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-warning-title-gardient-end',
                '__panel-warning-title-gardient-end__',
                $this->themeColorDefaults['panel-warning-title-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-warning-title-gardient-end']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-warning-title-border-color',
                '__panel-warning-title-border-color__',
                $this->themeColorDefaults['panel-warning-title-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-warning-title-border-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-warning-border-color',
                '__panel-warning-border-color__',
                $this->themeColorDefaults['panel-warning-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-warning-border-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
    
    private function createPanelColorSuccessFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_color_success_field_set',
            '__panel_color_success_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-success-title-bg',
                '__panel-success-title-bg__',
                $this->themeColorDefaults['panel-success-title-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-success-title-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-success-title-color',
                '__panel-success-title-color__',
                $this->themeColorDefaults['panel-success-title-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-success-title-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-success-title-gardient-start',
                '__panel-success-title-gardient-start__',
                $this->themeColorDefaults['panel-success-title-gardient-start'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-success-title-gardient-start']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-success-title-gardient-end',
                '__panel-success-title-gardient-end__',
                $this->themeColorDefaults['panel-success-title-gardient-end'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-success-title-gardient-end']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-success-title-border-color',
                '__panel-success-title-border-color__',
                $this->themeColorDefaults['panel-success-title-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-success-title-border-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-success-border-color',
                '__panel-success-border-color__',
                $this->themeColorDefaults['panel-success-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-success-border-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createPanelStructureFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_structure_field_set',
            '__panel_structure_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-border-size',
                '__panel-border-size__',
                $this->themeColorDefaults['panel-border-size'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-border-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-border-radius',
                '__panel-border-radius__',
                $this->themeColorDefaults['panel-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-border-radius']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-header-font-size',
                '__panel-header-font-size__',
                $this->themeColorDefaults['panel-header-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-header-line-height',
                '__panel-header-line-height__',
                $this->themeColorDefaults['panel-header-line-height'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-line-height']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-header-padding-vertical',
                '__panel-header-padding-vertical__',
                $this->themeColorDefaults['panel-header-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-header-padding-horizontal',
                '__panel-header-padding-horizontal__',
                $this->themeColorDefaults['panel-header-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-header-padding-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-body-padding-vertical',
                '__panel-body-padding-vertical__',
                $this->themeColorDefaults['panel-body-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-body-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-body-padding-horizontal',
                '__panel-body-padding-horizontal__',
                $this->themeColorDefaults['panel-body-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-body-padding-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-footer-padding-vertical',
                '__panel-footer-padding-vertical__',
                $this->themeColorDefaults['panel-footer-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-footer-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-footer-padding-horizontal',
                '__panel-footer-padding-horizontal__',
                $this->themeColorDefaults['panel-footer-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-footer-padding-horizontal']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createPanelSizeSmallFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_small_size_field_set',
            '__panel_small_size_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-border-size',
                '__panel-sm-border-size__',
                $this->themeColorDefaults['panel-sm-border-size'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-border-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-border-radius',
                '__panel-sm-border-radius__',
                $this->themeColorDefaults['panel-sm-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-border-radius']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-header-font-size',
                '__panel-sm-header-font-size__',
                $this->themeColorDefaults['panel-sm-header-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-header-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-header-line-height',
                '__panel-sm-header-line-height__',
                $this->themeColorDefaults['panel-sm-header-line-height'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-header-line-height']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-header-padding-vertical',
                '__panel-sm-header-padding-vertical__',
                $this->themeColorDefaults['panel-sm-header-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-header-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-header-padding-horizontal',
                '__panel-sm-header-padding-horizontal__',
                $this->themeColorDefaults['panel-sm-header-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-header-padding-horizontal']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-body-padding-vertical',
                '__panel-sm-body-padding-vertical__',
                $this->themeColorDefaults['panel-sm-body-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-body-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-body-padding-horizontal',
                '__panel-sm-body-padding-horizontal__',
                $this->themeColorDefaults['panel-sm-body-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-body-padding-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-footer-padding-vertical',
                '__panel-sm-footer-padding-vertical__',
                $this->themeColorDefaults['panel-sm-footer-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-footer-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-sm-footer-padding-horizontal',
                '__panel-sm-footer-padding-horizontal__',
                $this->themeColorDefaults['panel-sm-footer-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-sm-footer-padding-horizontal']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createPanelSizeLargeFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'panel_large_size_field_set',
            '__panel_large_size_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-border-size',
                '__panel-lg-border-size__',
                $this->themeColorDefaults['panel-lg-border-size'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-border-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-border-radius',
                '__panel-lg-border-radius__',
                $this->themeColorDefaults['panel-lg-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-border-radius']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-header-font-size',
                '__panel-lg-header-font-size__',
                $this->themeColorDefaults['panel-lg-header-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-header-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-header-line-height',
                '__panel-lg-header-line-height__',
                $this->themeColorDefaults['panel-lg-header-line-height'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-header-line-height']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-header-padding-vertical',
                '__panel-lg-header-padding-vertical__',
                $this->themeColorDefaults['panel-lg-header-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-header-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-header-padding-horizontal',
                '__panel-lg-header-padding-horizontal__',
                $this->themeColorDefaults['panel-lg-header-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-header-padding-horizontal']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-body-padding-vertical',
                '__panel-lg-body-padding-vertical__',
                $this->themeColorDefaults['panel-lg-body-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-body-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-body-padding-horizontal',
                '__panel-lg-body-padding-horizontal__',
                $this->themeColorDefaults['panel-lg-body-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-body-padding-horizontal']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-footer-padding-vertical',
                '__panel-lg-footer-padding-vertical__',
                $this->themeColorDefaults['panel-lg-footer-padding-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-footer-padding-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'panel-lg-footer-padding-horizontal',
                '__panel-lg-footer-padding-horizontal__',
                $this->themeColorDefaults['panel-lg-footer-padding-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-lg-footer-padding-horizontal']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createFormsTab()
    {
        $tab = $this->createTab(
            'forms_general_tab',
            '__forms_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$formLabelsFieldSet = $this->createFormLabelsFieldSet();
		$formGlobalFieldSet = $this->createFormGlobalFieldSet();
		$formStateFieldSet = $this->createFormStateFieldSet();
        $tab->addElement($formLabelsFieldSet);
		$tab->addElement($formGlobalFieldSet);
		$tab->addElement($formStateFieldSet);

        return $tab;
    }
	
    private function createFormLabelsFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'form_labels_field_set',
            '__form_labels_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'label-font-size',
                '__label-font-size__',
                $this->themeColorDefaults['label-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@label-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'label-color',
                '__label-color__',
                $this->themeColorDefaults['label-color'],
                [
                    'attributes' => 
                        ['supportText' => '@label-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createFormGlobalFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'form_global_field_set',
            '__form_global_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'input-font-size',
                '__input-font-size__',
                $this->themeColorDefaults['input-font-size'],
                [
                    'attributes' => 
                        ['supportText' => '@input-font-size']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-bg',
                '__input-bg__',
                $this->themeColorDefaults['input-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@input-bg']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-color',
                '__input-color__',
                $this->themeColorDefaults['input-color'],
                [
                    'attributes' => 
                        ['supportText' => '@input-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-placeholder-color',
                '__input-placeholder-color__',
                $this->themeColorDefaults['input-placeholder-color'],
                [
                    'attributes' => 
                        ['supportText' => '@input-placeholder-color']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'input-shadow',
                '__input-shadow__',
                $this->themeColorDefaults['input-shadow'],
                [
                    'attributes' => 
                        ['supportText' => '@input-shadow']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'input-gardient',
                '__input-gardient__',
                $this->themeColorDefaults['input-gardient'],
                [
                    'attributes' => 
                        ['supportText' => '@input-gardient']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-border-color',
                '__input-border-color__',
                $this->themeColorDefaults['input-border-color'],
                [
                    'attributes' => 
                        ['supportText' => '@input-border-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'input-border-radius',
                '__input-border-radius__',
                $this->themeColorDefaults['input-border-radius'],
                [
                    'attributes' => 
                        ['supportText' => '@input-border-radius']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'input-height-base',
                '__input-height-base__',
                $this->themeColorDefaults['input-height-base'],
                [
                    'attributes' => 
                        ['supportText' => '@input-height-base']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'input-line-height-base',
                '__input-line-height-base__',
                $this->themeColorDefaults['input-line-height-base'],
                [
                    'attributes' => 
                        ['supportText' => '@input-line-height-base']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'input-padding-base-vertical',
                '__input-padding-base-vertical__',
                $this->themeColorDefaults['input-padding-base-vertical'],
                [
                    'attributes' => 
                        ['supportText' => '@input-padding-base-vertical']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'input-padding-base-horizontal',
                '__input-padding-base-horizontal__',
                $this->themeColorDefaults['input-padding-base-horizontal'],
                [
                    'attributes' => 
                        ['supportText' => '@input-padding-base-horizontal']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'select-bg',
                '__select-bg__',
                $this->themeColorDefaults['select-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@select-bg']
                ] 
            )
        );		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'select-hover-bg',
                '__select-hover-bg__',
                $this->themeColorDefaults['select-hover-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@select-hover-bg']
                ] 
            )
        );		
        $fieldSet->addElement(
            $this->createTextField(
                'select-height-base',
                '__select-height-base__',
                $this->themeColorDefaults['select-height-base'],
                [
                    'attributes' => 
                        ['supportText' => '@select-height-base']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'select-line-height-base',
                '__select-line-height-base__',
                $this->themeColorDefaults['select-line-height-base'],
                [
                    'attributes' => 
                        ['supportText' => '@select-line-height-base']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createFormStateFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'form_state_field_set',
            '__form_state_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-focus-bg',
                '__input-focus-bg__',
                $this->themeColorDefaults['input-focus-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@input-focus-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-focus-border',
                '__input-focus-border__',
                $this->themeColorDefaults['input-focus-border'],
                [
                    'attributes' => 
                        ['supportText' => '@input-focus-border']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-focus-color',
                '__input-focus-color__',
                $this->themeColorDefaults['input-focus-color'],
                [
                    'attributes' => 
                        ['supportText' => '@input-focus-color']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-error-bg',
                '__input-error-bg__',
                $this->themeColorDefaults['input-error-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@input-error-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-error-border',
                '__input-error-border__',
                $this->themeColorDefaults['input-error-border'],
                [
                    'attributes' => 
                        ['supportText' => '@input-error-border']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-error-color',
                '__input-error-color__',
                $this->themeColorDefaults['input-error-color'],
                [
                    'attributes' => 
                        ['supportText' => '@input-error-color']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-success-bg',
                '__input-success-bg__',
                $this->themeColorDefaults['input-success-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@input-success-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-success-border',
                '__input-success-border__',
                $this->themeColorDefaults['input-success-border'],
                [
                    'attributes' => 
                        ['supportText' => '@input-success-border']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'input-success-color',
                '__input-success-color__',
                $this->themeColorDefaults['input-success-color'],
                [
                    'attributes' => 
                        ['supportText' => '@input-success-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createTablesTab()
    {
        $tab = $this->createTab(
            'tables_general_tab',
            '__tables_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$tablesFieldSet = $this->createTablesFieldSet();
		$tab->addElement($tablesFieldSet);

        return $tab;
    }
	
    private function createTablesFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'tables_field_set',
            '__tables_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-table-header-bg',
                '__panel-table-header-bg__',
                $this->themeColorDefaults['panel-table-header-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-table-header-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'panel-table-header-color',
                '__panel-table-header-color__',
                $this->themeColorDefaults['panel-table-header-color'],
                [
                    'attributes' => 
                        ['supportText' => '@panel-table-header-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'table-row-bg',
                '__table-row-bg__',
                $this->themeColorDefaults['table-row-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@table-row-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'table-row-color',
                '__table-row-color__',
                $this->themeColorDefaults['table-row-color'],
                [
                    'attributes' => 
                        ['supportText' => '@table-row-color']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'table-row-highlight-bg',
                '__table-row-highlight-bg__',
                $this->themeColorDefaults['table-row-highlight-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@table-row-highlight-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'table-header-bg',
                '__table-header-bg__',
                $this->themeColorDefaults['table-header-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@table-header-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'table-header-color',
                '__table-header-color__',
                $this->themeColorDefaults['table-header-color'],
                [
                    'attributes' => 
                        ['supportText' => '@table-header-color']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createBadgesTab()
    {
        $tab = $this->createTab(
            'badges_general_tab',
            '__badges_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$tab->addElement($this->createBadgesSizeFieldSet());
		$tab->addElement($this->createBadgesColorFieldSet());
		$tab->addElement($this->createProductBadgesFieldSet());

        return $tab;
    }
	
    private function createBadgesSizeFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'badges_size_field_set',
            '__badges_size_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'badge-size-base',
                '__badge-size-base__',
                $this->themeColorDefaults['badge-size-base'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-size-base']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'badge-size-sm',
                '__badge-size-sm__',
                $this->themeColorDefaults['badge-size-sm'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-size-sm']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'badge-size-lg',
                '__badge-size-lg__',
                $this->themeColorDefaults['badge-size-lg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-size-lg']
                ] 
            )
        );
		
        return $fieldSet;
    }
	
    private function createBadgesColorFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'badges_color_field_set',
            '__badges_color_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-primary-bg',
                '__badge-primary-bg__',
                $this->themeColorDefaults['badge-primary-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-primary-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-primary-color',
                '__badge-primary-color__',
                $this->themeColorDefaults['badge-primary-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-primary-color']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-secondary-bg',
                '__badge-secondary-bg__',
                $this->themeColorDefaults['badge-secondary-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-secondary-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-secondary-color',
                '__badge-secondary-color__',
                $this->themeColorDefaults['badge-secondary-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-secondary-color']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-danger-bg',
                '__badge-danger-bg__',
                $this->themeColorDefaults['badge-danger-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-danger-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-danger-color',
                '__badge-danger-color__',
                $this->themeColorDefaults['badge-danger-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-danger-color']
                ] 
            )
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-warning-bg',
                '__badge-warning-bg__',
                $this->themeColorDefaults['badge-warning-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-warning-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-warning-color',
                '__badge-warning-color__',
                $this->themeColorDefaults['badge-warning-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-warning-color']
                ] 
            )
        );		
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-success-bg',
                '__badge-success-bg__',
                $this->themeColorDefaults['badge-success-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-success-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-success-color',
                '__badge-success-color__',
                $this->themeColorDefaults['badge-success-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-success-color']
                ] 
            )
        );			
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-info-bg',
                '__badge-info-bg__',
                $this->themeColorDefaults['badge-info-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-info-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-info-color',
                '__badge-info-color__',
                $this->themeColorDefaults['badge-info-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-info-color']
                ] 
            )
        );			
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-default-bg',
                '__badge-default-bg__',
                $this->themeColorDefaults['badge-default-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-default-bg']
                ] 
            )
        );
        $fieldSet->addElement(
            $this->createColorPickerField(
                'badge-default-color',
                '__badge-default-color__',
                $this->themeColorDefaults['badge-default-color'],
                [
                    'attributes' => 
                        ['supportText' => '@badge-default-color']
                ] 
            )
        );	
		
        return $fieldSet;
    }

    private function createProductBadgesFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'product_badges_field_set',
            '__product_badges_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-discount-bg',
                '__product-badge-discount-bg__',
                $this->themeColorDefaults['product-badge-discount-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-discount-bg']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-discount-color',
                '__product-badge-discount-color__',
                $this->themeColorDefaults['product-badge-discount-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-discount-color']
                ] 
            )
        );	
		
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-newcomer-bg',
                '__product-badge-newcomer-bg__',
                $this->themeColorDefaults['product-badge-newcomer-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-newcomer-bg']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-newcomer-color',
                '__product-badge-newcomer-color__',
                $this->themeColorDefaults['product-badge-newcomer-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-newcomer-color']
                ] 
            )
        );

        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-recommend-bg',
                '__product-badge-recommend-bg__',
                $this->themeColorDefaults['product-badge-recommend-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-recommend-bg']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-recommend-color',
                '__product-badge-recommend-color__',
                $this->themeColorDefaults['product-badge-recommend-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-recommend-color']
                ] 
            )
        );	

        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-download-bg',
                '__product-badge-download-bg__',
                $this->themeColorDefaults['product-badge-download-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-download-bg']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-download-color',
                '__product-badge-download-color__',
                $this->themeColorDefaults['product-badge-download-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-download-color']
                ] 
            )
        );	

        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-soldout-bg',
                '__product-badge-soldout-bg__',
                $this->themeColorDefaults['product-badge-soldout-bg'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-soldout-bg']
                ] 
            )
        );	
        $fieldSet->addElement(
            $this->createColorPickerField(
                'product-badge-soldout-color',
                '__product-badge-soldout-color__',
                $this->themeColorDefaults['product-badge-soldout-color'],
                [
                    'attributes' => 
                        ['supportText' => '@product-badge-soldout-color']
                ] 
            )
        );			
		
        return $fieldSet;
    }
	
    private function createMiscTab()
    {
        $tab = $this->createTab(
            'misc_general_tab',
            '__misc_general_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );
		
		$boxShadowsFieldSet = $this->createBoxShadowsFieldSet();
		$tab->addElement($boxShadowsFieldSet);

        return $tab;
    }
	
    private function createBoxShadowsFieldSet()
    {
        $attributes = array_merge($this->fieldSetDefaults);
        $fieldSet = $this->createFieldSet(
            'box_shadows_field_set',
            '__box_shadows_field_set__',
            ['attributes' => $attributes]
        );
		
        $fieldSet->addElement(
            $this->createTextField(
                'box-base-shadow',
                '@box-base-shadow',
                $this->themeColorDefaults['box-base-shadow'],
				[
				    'attributes' => [
						'columnWidth' => 1
					]
				]
            )
        );	
		
        $fieldSet->addElement(
            $this->createTextField(
                'offcanvas-shadow',
                '@offcanvas-shadow',
                $this->themeColorDefaults['offcanvas-shadow']
            )
        );	
        $fieldSet->addElement(
            $this->createTextField(
                'main-navigation-shadow',
                '@main-navigation-shadow',
                $this->themeColorDefaults['main-navigation-shadow']
            )
        );	

        $fieldSet->addElement(
            $this->createTextField(
                'search-result-shadow',
                '@search-result-shadow',
                $this->themeColorDefaults['search-result-shadow']
            )
        );	
        $fieldSet->addElement(
            $this->createTextField(
                'step-container-icon-shadow',
                '@step-container-icon-shadow',
                $this->themeColorDefaults['step-container-icon-shadow']
            )
        );	
		
        $fieldSet->addElement(
            $this->createTextField(
                'badge-shadow',
                '@badge-shadow',
                $this->themeColorDefaults['badge-shadow']
            )
        );	

		
        return $fieldSet;
    }
	
    private function createMainConfigTab()
    {
        $tab = $this->createTab(
            'responsiveMain',
            '__responsive_tab_header__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0',
                    'defaults' => ['anchor' => '100%']
                ]
            ]
        );

        $fieldSet = $this->createFieldSet(
            'bareGlobal',
            '__global_configuration__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin' => '5',
                    'layout' => 'anchor',
                    'defaults' => ['labelWidth' => 155, 'anchor' => '100%']
                ]
            ]
        );
		
        $fieldSet->addElement(
            $this->createCheckboxField(
                'offcanvasCart',
                '__offcanvas_cart__',
                true,      
				[
					'attributes' => 
						$this->getLabelAttribute('offcanvas_cart_description')
				]				
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'offcanvasOverlayPage',
                '__offcanvas_move_method__',
                true,
				[
					'attributes' => 
						$this->getLabelAttribute('offcanvas_move_method_description')
				]
            )
        );
		
        $fieldSet->addElement(
            $this->createSelectField(
                'mainNavigationAlignment',
                '__main_navigation_align__',
                $this->themeConfigDefaults['mainNavigationAlignment'],
                [
                    ['value' => 'left', 'text' => '__main_navigation_align_left__'],
                    ['value' => 'center', 'text' => '__main_navigation_align_center__'],
                    ['value' => 'right', 'text' => '__main_navigation_align_right__']
                ],
				[
					'attributes' => 
						$this->getLabelAttribute('main_navigation_align_description', 'supportText')
				]
            )
        );		

        $fieldSet->addElement(
            $this->createCheckboxField(
                'mainNavigationSticky',
                '__sticky_main_navigation_active__',
                false,
				[
					'attributes' => 
						$this->getLabelAttribute('sticky_main_navigation_description')
				]
            )
        );		

        $fieldSet->addElement(
            $this->createCheckboxField(
                'showHomeLink',
                '__show_home_link__',
                true,
				[
					'attributes' => 
						$this->getLabelAttribute('show_home_link_description')
				]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'displaySidebar',
                '__display_sidebar__',
                true,
				[
					'attributes' => 
						$this->getLabelAttribute('display_sidebar_description')
				]
            )
        );
	
        $fieldSet->addElement(
            $this->createCheckboxField(
                'sidebarFilter',
                '__show_filter_in_sidebar__',
                false,
				[
					'attributes' => 
						$this->getLabelAttribute('show_filter_in_sidebar_description')
				]
            )
        );
		
        $fieldSet->addElement(
            $this->createCheckboxField(
                'checkoutHeader',
                '__checkout_header__',
                false,
				[
					'attributes' => 
						$this->getLabelAttribute('checkout_header_description')
				]
            )
        );
		

        $fieldSet->addElement(
            $this->createCheckboxField(
                'checkoutFooter',
                '__checkout_footer__',
                false,
				[
					'attributes' => 
						$this->getLabelAttribute('checkout_footer_description')
				]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'infiniteScrolling',
                '__enable_infinite_scrolling__',
                true,
				[
					'attributes' => 
						$this->getLabelAttribute('enable_infinite_scrolling_description')
				]
            )
        );

        $fieldSet->addElement(
            $this->createNumberField(
                'infiniteThreshold',
                '__infinite_threshold__',
                4,
				[
					'attributes' => 
						$this->getLabelAttribute('infinite_threshold_description', 'supportText')
				]
            )
        );

        $fieldSet->addElement(
            $this->createSelectField(
                'lightboxZoomFactor',
                '__lightbox_zoom_factor__',
                0,
                [
                    ['value' => 0, 'text' => '__lightbox_zoom_factor_auto__'],
                    ['value' => 1, 'text' => '__lightbox_zoom_factor_none__'],
                    ['value' => 2, 'text' => '__lightbox_zoom_factor_2x__'],
                    ['value' => 3, 'text' => '__lightbox_zoom_factor_3x__'],
                    ['value' => 5, 'text' => '__lightbox_zoom_factor_5x__']
                ],
				[
					'attributes' => 
						$this->getLabelAttribute('lightbox_zoom_factor_description', 'supportText')
				]
            )
        );

        $fieldSet->addElement(
            $this->createTextField(
                'appleWebAppTitle',
                '__apple_web_app_title__',
                '',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'ajaxVariantSwitch',
                '__ajax_variant_switch__',
                true,
                ['attributes' => [
                    'lessCompatible' => false,
                    'boxLabel' => Shopware()->Snippets()->getNamespace('themes/views/backend/config')->get('ajax_variant_switch_description')
                ]]
            )
        );
		
        $fieldSet->addElement(
            $this->createCheckboxField(
                'asyncJavascriptLoading',
                '__async_javascript_loading__',
                true,
                ['attributes' => [
                    'lessCompatible' => false,
                    'boxLabel' => Shopware()->Snippets()->getNamespace('themes/views/backend/config')->get('async_javascript_loading_description'),
                ]]
            )
        );		

        $tab->addElement($fieldSet);

        $fieldSet = $this->createFieldSet(
            'responsiveGlobal',
            '__advanced_settings__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin' => '5',
                    'layout' => 'anchor',
                    'defaults' => ['anchor' => '100%', 'labelWidth' => 155]
                ]
            ]
        );

        $fieldSet->addElement(
            $this->createTextAreaField(
                'additionalCssData',
                '__additional_css_data__',
                '',
                ['attributes' => ['xtype' => 'textarea', 'lessCompatible' => false], 'help' => '__additional_css_data_description__']
            )
        );

        $fieldSet->addElement(
            $this->createTextAreaField(
                'additionalJsLibraries',
                '__additional_js_libraries__',
                '',
                ['attributes' => ['xtype' => 'textarea', 'lessCompatible' => false], 'help' => '__additional_js_libraries_description__']
            )
        );

        $tab->addElement($fieldSet);

        return $tab;
    }
	
    /**
     * Helper function to create the logo and icon tab ("Icons & Logos")
     * @return Form\Container\Tab
     */
    private function createLogoIconTab()
    {
        $tab = $this->createTab(
            'bareMain',
            '__logo_favicon_tab__',
            [
                'attributes' => [
                    'layout' => 'anchor',
                    'autoScroll' => true,
                    'padding' => '0'
                ]
            ]
        );

        $fieldSet = $this->createFieldSet(
            'bareLogos',
            '__logos__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'mobileLogo',
                '__smartphone__',
                $this->themeConfigDefaults['mobileLogo'],
                ['attributes' => ['lessCompatible' => false]]
            )
        );
        
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-width-phone',
                '__header-logo-width-phone__',
                $this->themeConfigDefaults['header-logo-width-phone'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-height-phone',
                '__header-logo-height-phone__',
                $this->themeConfigDefaults['header-logo-height-phone'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'tabletLogo',
                '__tablet__',
                $this->themeConfigDefaults['tabletLogo'],
                ['attributes' => ['lessCompatible' => false, 'margin' => '30 15 5 0']]
            )
        );
        
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-width-tablet',
                '__header-logo-width-tablet__',
                $this->themeConfigDefaults['header-logo-width-tablet'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-height-tablet',
                '__header-logo-height-tablet__',
                $this->themeConfigDefaults['header-logo-height-tablet'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );        

        $fieldSet->addElement(
            $this->createMediaField(
                'tabletLandscapeLogo',
                '__tablet_landscape__',
                $this->themeConfigDefaults['tabletLandscapeLogo'],
                ['attributes' => ['lessCompatible' => false, 'margin' => '30 15 5 0']]
            )
        );
        
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-width-tablet-landscape',
                '__header-logo-width-tablet-landscape__',
                $this->themeConfigDefaults['header-logo-width-tablet-landscape'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-height-tablet-landscape',
                '__header-logo-height-tablet-landscape__',
                $this->themeConfigDefaults['header-logo-height-tablet-landscape'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );        
        
        $fieldSet->addElement(
            $this->createMediaField(
                'desktopLogo',
                '__desktop__',
                $this->themeConfigDefaults['desktopLogo'],
                ['attributes' => ['lessCompatible' => false, 'margin' => '30 15 5 0']]
            )
        );
        
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-width-desktop',
                '__header-logo-width-desktop__',
                $this->themeConfigDefaults['header-logo-width-desktop'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldSet->addElement(
            $this->createTextField(
                'header-logo-height-desktop',
                '__header-logo-height-desktop__',
                $this->themeConfigDefaults['header-logo-height-desktop'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );         

        $tab->addElement($fieldSet);

        $fieldSet = $this->createFieldSet(
            'Icons',
            '__icons__',
            [
                'attributes' => [
                    'padding' => '10',
                    'margin'=> '5',
                    'layout' => 'anchor',
                    'defaults' => ['labelWidth' => 155, 'anchor' => '100%']
                ]
            ]
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'appleTouchIcon',
                '__apple_touch_icon__',
                'frontend/_public/src/img/apple-touch-icon-precomposed.png',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createCheckboxField(
                'setPrecomposed',
                'Precomposed Icon',
                true,
				[
					'attributes' =>
						$this->getLabelAttribute('apple_touch_icon_precomposed')
				]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'win8TileImage',
                '__win8_tile_image__',
                'frontend/_public/src/img/win-tile-image.png',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $fieldSet->addElement(
            $this->createMediaField(
                'favicon',
                '__favicon__',
                'frontend/_public/src/img/favicon.ico',
                ['attributes' => ['lessCompatible' => false]]
            )
        );

        $tab->addElement($fieldSet);

        return $tab;
    }
	
    public function createCustomTabPanel()
    {
        $tabPanel = $this->createTabPanel(
            'custom_theme_tab_panel',
            [
                'attributes' => [
                    'plain' => true
                ]
            ]
        );

		//Creates the Tabs inside the Tab Panel
        $tabPanel->addTab($this->createHeaderOptionsTab());
		$tabPanel->addTab($this->createLayoutOptionsTab());
		$tabPanel->addTab($this->createPaymentShippingOptionsTab());
		$tabPanel->addTab($this->createSocialsOptionsTab());
		$tabPanel->addTab($this->createUspBarTab());
		$tabPanel->addTab($this->createScrollToTopTab());
		$tabPanel->addTab($this->createCookiePermissionTab());
		
        return $tabPanel;
    }
	
    public function createHeaderOptionsTab()
    {
		
		// Create the Tab
		$tab = $this->createTab(
			'header_options_tab',
			'__header_options_tab__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
        $tab->addElement($this->createHeaderListingOptionsFieldset());
        
		return $tab;
	}
    
    public function createHeaderListingOptionsFieldset()
    {

        // Create the fieldset which is the container of our field
        $fieldset = $this->createFieldSet(
            'header_listing_options_fieldset',
            '__header_listing_options_fieldset__',
            array(
                'attributes' => array(
                    'layout' => 'column',
                    'flex' => 0,
                    'autoScroll' => true,
                    'defaults' => array(
                        'columnWidth' => 1,
                        'labelWidth' => 150,
                        'margin' => '5 15 5 0'
                    )
                )
            )
        );
        
        $fieldset->addElement(
            $this->createSelectField(
                'header_listing_active',
                '__header_listing_active__',
                $this->themeConfigDefaults['header_listing_active'],
                [
                    ['value' => 'disabled', 'text' => '__header-listing-active-false__'],
                    ['value' => 'all', 'text' => '__header-listing-active-true__'],
                    ['value' => 'listing', 'text' => '__header-listing-active-listing__']
                ],
                ['attributes' => 
                    [
                        'lessCompatible' => false, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        
        $fieldset->addElement(
            $this->createCheckboxField(
                'header_listing_content_active',
                '__header_listing_content_active__',
                $this->themeConfigDefaults['header_listing_content_active'],
                ['attributes' => 
                    [
                        'lessCompatible' => false, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        
        $fieldset->addElement(
            $this->createMediaField(
                'header-listing-default-image',
                '__header-listing-default-image__',
                '',
                ['attributes' => 
                    [
                        'lessCompatible' => true,
                        'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        
        $fieldset->addElement(
            $this->createSelectField(
                'header-listing-image-position-horizontal',
                '__header-listing-image-position-horizontal__',
                $this->themeConfigDefaults['header-listing-image-position-horizontal'],
                [
                    ['value' => 'left', 'text' => '__header-listing-image-position-horizontal-left__'],
                    ['value' => 'center', 'text' => '__header-listing-image-position-horizontal-center__'],
                    ['value' => 'right', 'text' => '__header-listing-image-position-horizontal-right__']
                ],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        
        $fieldset->addElement(
            $this->createSelectField(
                'header-listing-image-position-vertical',
                '__header-listing-image-position-vertical__',
                $this->themeConfigDefaults['header-listing-image-position-vertical'],
                [
                    ['value' => 'top', 'text' => '__header-listing-image-position-vertical-top__'],
                    ['value' => 'center', 'text' => '__header-listing-image-position-vertical-center__'],
                    ['value' => 'bottom', 'text' => '__header-listing-image-position-vertical-bottom__']
                ],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-headline-size',
                '__header-listing-category-teaser-headline-size__',
                $this->themeConfigDefaults['header-listing-category-teaser-headline-size'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'header-listing-category-teaser-headline-color',
                '__header-listing-category-teaser-headline-color__',
                $this->themeConfigDefaults['header-listing-category-teaser-headline-color'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-text-size',
                '__header-listing-category-teaser-text-size__',
                $this->themeConfigDefaults['header-listing-category-teaser-text-size'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createColorPickerField(
                'header-listing-category-teaser-text-color',
                '__header-listing-category-teaser-text-color__',
                $this->themeConfigDefaults['header-listing-category-teaser-text-color'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-height-phone',
                '__header-listing-category-teaser-height-phone__',
                $this->themeConfigDefaults['header-listing-category-teaser-height-phone'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-height-phone-landscape',
                '__header-listing-category-teaser-height-phone-landscape__',
                $this->themeConfigDefaults['header-listing-category-teaser-height-phone-landscape'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-height-tablet',
                '__header-listing-category-teaser-height-tablet__',
                $this->themeConfigDefaults['header-listing-category-teaser-height-tablet'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-height-tablet-landscape',
                '__header-listing-category-teaser-height-tablet-landscape__',
                $this->themeConfigDefaults['header-listing-category-teaser-height-tablet-landscape'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );
        $fieldset->addElement(
            $this->createTextField(
                'header-listing-category-teaser-height-desktop',
                '__header-listing-category-teaser-height-desktop__',
                $this->themeConfigDefaults['header-listing-category-teaser-height-desktop'],
                ['attributes' => 
                    [
                        'lessCompatible' => true, 'columnWidth' => 0.5
                        //'helpText' => '__header-listing-default-image-description__'
                    ]
                ]
            )
        );        


        return $fieldset;
    }
    
    public function createPaymentShippingOptionsTab()
    {
		
		// Create the Tab
		$tab = $this->createTab(
			'payment_shipping_options_tab',
			'__payment_shipping_options_tab_label__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
		
		$tab->addElement($this->createPaymentOptionsFieldset());
		$tab->addElement($this->createShippingOptionsFieldset());
		
		return $tab;
	}
	
    public function createPaymentOptionsFieldset()
    {
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'payment_options',
			'__payment_options_label__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.25,
						'labelWidth' => 120,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		// Create Sofort Überweisung checkbkox
		$paymentsActiveCheckbox = $this->createCheckboxField(
			'payment_option_active',
			'__payment_options_active_label__',
			false,
			[
				'attributes' => 
					[
						'lessCompatible' => false,
						'columnWidth' => 1
					]
			]
		);
		
		// Create Sofort Überweisung checkbkox
		$prepayCheckbox = $this->createCheckboxField(
			'payment_option_prepayment',
			'__payment_options_prepayment_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$cashCheckbox = $this->createCheckboxField(
			'payment_option_cash',
			'__payment_options_cash_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$cashondelieveryCheckbox = $this->createCheckboxField(
			'payment_option_cashondelievery',
			'__payment_options_cashondelievery_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$billCheckbox = $this->createCheckboxField(
			'payment_option_bill',
			'__payment_options_bill_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	
		
		// Create Sofort Überweisung checkbkox
		$visaCheckbox = $this->createCheckboxField(
			'payment_option_visa',
			'__payment_options_visa_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);

		// Create Sofort Überweisung checkbkox
		$mastercardCheckbox = $this->createCheckboxField(
			'payment_option_mastercard',
			'__payment_options_mastercard_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);
		
		// Create Sofort Überweisung checkbkox
		$amexCheckbox = $this->createCheckboxField(
			'payment_option_amex',
			'__payment_options_amex_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);
		
		// Create PayPal checkbkox
		$paypalCheckbox = $this->createCheckboxField(
			'payment_option_paypal',
			'__payment_options_paypal_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);

		// Create Amazon checkbkox
		$amznpayCheckbox = $this->createCheckboxField(
			'payment_option_amazon',
			'__payment_options_amazon_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$sofortpayCheckbox = $this->createCheckboxField(
			'payment_option_sofort',
			'__payment_options_sofort_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);		

		// Create Sofort Überweisung checkbkox
		$bitcoinCheckbox = $this->createCheckboxField(
			'payment_option_bitcoin',
			'__payment_options_bitcoin_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);				
		
		// Adding the fields to the fieldset
		$fieldset->addElement($paymentsActiveCheckbox);
		$fieldset->addElement($prepayCheckbox);
		$fieldset->addElement($cashCheckbox);
		$fieldset->addElement($cashondelieveryCheckbox);
		$fieldset->addElement($billCheckbox);
		$fieldset->addElement($visaCheckbox);
		$fieldset->addElement($mastercardCheckbox);
		$fieldset->addElement($amexCheckbox);
		$fieldset->addElement($paypalCheckbox);
		$fieldset->addElement($amznpayCheckbox);
		$fieldset->addElement($sofortpayCheckbox);
		$fieldset->addElement($bitcoinCheckbox);

		return $fieldset;
	}
	
    public function createShippingOptionsFieldset()
    {
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'shipping_options',
			'__shipping_options_label__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.25,
						'labelWidth' => 120,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		// Create Sofort Überweisung checkbkox
		$shippingsActiveCheckbox = $this->createCheckboxField(
			'shipping_option_active',
			'__shipping_options_active_label__',
			false,
			['attributes' => ['lessCompatible' => false, 'columnWidth' => 1]]
		);
		
		// Create Sofort Überweisung checkbkox
		$dhlCheckbox = $this->createCheckboxField(
			'shipping_option_dhl',
			'__shipping_options_dhl_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$dpdCheckbox = $this->createCheckboxField(
			'shipping_option_dpd',
			'__shipping_options_dpd_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$hermesCheckbox = $this->createCheckboxField(
			'shipping_option_hermes',
			'__shipping_options_hermes_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	

		// Create Sofort Überweisung checkbkox
		$glsCheckbox = $this->createCheckboxField(
			'shipping_option_gls',
			'__shipping_options_gls_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);	
		
		// Create Sofort Überweisung checkbkox
		$upsCheckbox = $this->createCheckboxField(
			'shipping_option_ups',
			'__shipping_options_ups_label__',
			false,
			['attributes' => ['lessCompatible' => false]]
		);
	
		
		// Adding the fields to the fieldset
		$fieldset->addElement($shippingsActiveCheckbox);
		$fieldset->addElement($dhlCheckbox);
		$fieldset->addElement($dpdCheckbox);
		$fieldset->addElement($hermesCheckbox);
		$fieldset->addElement($glsCheckbox);
		$fieldset->addElement($upsCheckbox);

		return $fieldset;
	}
	
    public function createSocialsOptionsTab()
    {
		
		// Create the Tab
		$tab = $this->createTab(
			'socials_options_tab',
			'__socials_options_tab_label__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
		
		$tab->addElement($this->createSocialsOptionsFieldset());
		
		return $tab;
	}
	
    public function createSocialsOptionsFieldset()
    {
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'socials_options',
			'__socials_options_label__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 1,
						'labelWidth' => 120,
						'margin' => '2 15 2 0'
					)
				)
			)
		);

		// Create Sofort Überweisung checkbkox
		$socialsFacebookUrl = $this->createTextField(
			"socials_option_facebook",
			"__socials_option_facebook_label__",
			'',
			['attributes' => ['lessCompatible' => false]]
		);	
		
		// Create Sofort Überweisung checkbkox
		$socialsTwitterUrl = $this->createTextField(
			"socials_option_twitter",
			"__socials_option_twitter_label__",
			'',
			['attributes' => ['lessCompatible' => false]]
		);	
		
		// Create Sofort Überweisung checkbkox
		$socialsInstagramUrl = $this->createTextField(
			"socials_option_instagram",
			"__socials_option_instagram_label__",
			'',
			['attributes' => ['lessCompatible' => false]]
		);	
		
		// Create Sofort Überweisung checkbkox
		$socialsYoutubeUrl = $this->createTextField(
			"socials_option_youtube",
			"__socials_option_youtube_label__",
			'',
			['attributes' => ['lessCompatible' => false]]
		);	
		
		// Adding the fields to the fieldset
		$fieldset->addElement($socialsFacebookUrl);
		$fieldset->addElement($socialsTwitterUrl);
		$fieldset->addElement($socialsInstagramUrl);
		$fieldset->addElement($socialsYoutubeUrl);

		return $fieldset;
	}
	
    public function createUspBarTab()
    {
		
		// Create the Tab
		$tab = $this->createTab(
			'usb_bar_tab',
			'__usb_bar_tab_label__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
        $tab->addElement($this->createUspBarDisplayFieldset());
		$tab->addElement($this->createUspBarFirstContentFieldset());
		$tab->addElement($this->createUspBarSecondContentFieldset());
		$tab->addElement($this->createUspBarThirdContentFieldset());
		$tab->addElement($this->createUspBarFourthContentFieldset());
		
		return $tab;
	}
	
	public function createUspBarDisplayFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'usp_bar_display_options',
			'__usp_bar_display_options__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createCheckboxField(
				'usp_bar_header_active',
				'__usp_bar_header_active_label__',
				false,
				['attributes' => ['lessCompatible' => false, 'columnWidth' => 1]]
			)
		);
		
		$fieldset->addElement(
			$this->createCheckboxField(
				'usp_bar_footer_active',
				'__usp_bar_footer_active_label__',
				false,
				['attributes' => ['lessCompatible' => false, 'columnWidth' => 1]]
			)
		);

		$fieldset->addElement(
            $this->createColorPickerField(
                'usp-bar-bg',
                '__usp_bar_bg__',
				$this->themeColorDefaults['usp-bar-bg']
            )
        );
		
		$fieldset->addElement(
            $this->createColorPickerField(
                'usp-bar-text-color',
                '__usp_bar_color__',
				$this->themeColorDefaults['usp-bar-text-color']
            )
        );
		
		$fieldset->addElement(
            $this->createTextField(
                'usp-bar-icon-size',
                '__usp_bar_icon_size__',
				$this->themeColorDefaults['usp-bar-icon-size']
            )
        );
		
		return $fieldset;
	}
	
	public function createUspBarFirstContentFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'usp_bar_first_content',
			'__usp_bar_first_content__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 1,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createCheckboxField(
				'usp_bar_first_content_active',
				'__usp_bar_content_active__',
				false,
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextField(
				'usp_bar_first_content_text',
				'__usp_bar_content_text__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createMediaField(
				'usp_bar_first_content_icon',
				'__usp_bar_content_icon__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextAreaField(
				'usp_bar_first_content_description',
				'__usp_bar_content_description__',
				'',
				['attributes' => ['xtype' => 'textarea','height' => 100,'lessCompatible' => false]]
			)
		);
		
		return $fieldset;
	}
	
	public function createUspBarSecondContentFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'usp_bar_second_content',
			'__usp_bar_second_content__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 1,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createCheckboxField(
				'usp_bar_second_content_active',
				'__usp_bar_content_active__',
				false,
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextField(
				'usp_bar_second_content_text',
				'__usp_bar_content_text__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createMediaField(
				'usp_bar_second_content_icon',
				'__usp_bar_content_icon__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextAreaField(
				'usp_bar_second_content_description',
				'__usp_bar_content_description__',
				'',
				['attributes' => ['xtype' => 'textarea','height' => 100,'lessCompatible' => false]]
			)
		);
		
		return $fieldset;
	}
	
	public function createUspBarThirdContentFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'usp_bar_third_content',
			'__usp_bar_third_content__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 1,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createCheckboxField(
				'usp_bar_third_content_active',
				'__usp_bar_content_active__',
				false,
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextField(
				'usp_bar_third_content_text',
				'__usp_bar_content_text__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createMediaField(
				'usp_bar_third_content_icon',
				'__usp_bar_content_icon__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextAreaField(
				'usp_bar_third_content_description',
				'__usp_bar_content_description__',
				'',
				['attributes' => ['xtype' => 'textarea','height' => 100,'lessCompatible' => false]]
			)
		);
		
		return $fieldset;
	}
	
	public function createUspBarFourthContentFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'usp_bar_fourth_content',
			'__usp_bar_fourth_content__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 1,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createCheckboxField(
				'usp_bar_fourth_content_active',
				'__usp_bar_content_active__',
				false,
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextField(
				'usp_bar_fourth_content_text',
				'__usp_bar_content_text__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createMediaField(
				'usp_bar_fourth_content_icon',
				'__usp_bar_content_icon__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		$fieldset->addElement(
			$this->createTextAreaField(
				'usp_bar_fourth_content_description',
				'__usp_bar_content_description__',
				'',
				['attributes' => ['xtype' => 'textarea','height' => 100,'lessCompatible' => false]]
			)
		);
		
		return $fieldset;
	}
	
	public function createScrollToTopTab()
	{
		
		// Create the Tab
		$tab = $this->createTab(
			'scroll_to_top_tab',
			'__scroll_to_top_tab_label__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
		$tab->addElement($this->createScrollToTopDisplayFieldset());

		return $tab;
	}
		
	public function createScrollToTopDisplayFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'scroll_to_top_display_options',
			'__scroll_to_top_display_options__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createCheckboxField(
				'scroll_to_top_active',
				'__scroll_to_top_active__',
				false,      
				['attributes' => ['columnWidth' => 1,'lessCompatible' => false]]				
			)
		);
		
		$fieldset->addElement(
            $this->createTextField(
                'scroll-totop-button-size',
                '__scroll-totop-button-size__',
				$this->themeColorDefaults['scroll-totop-button-size']
            )
        );		
		$fieldset->addElement(
            $this->createTextField(
                'scroll-totop-button-icon-size',
                '__scroll-totop-button-icon-size__',
				$this->themeColorDefaults['scroll-totop-button-icon-size']
            )
        );		
		
		$fieldset->addElement(
            $this->createColorPickerField(
                'scroll-totop-button-bg',
                '__scroll-totop-button-bg__',
				$this->themeColorDefaults['scroll-totop-button-bg']
            )
        );
		$fieldset->addElement(
            $this->createColorPickerField(
                'scroll-totop-button-color',
                '__scroll-totop-button-color__',
				$this->themeColorDefaults['scroll-totop-button-color']
            )
        );
		
		$fieldset->addElement(
            $this->createTextField(
                'scroll-totop-position-bottom',
                '__scroll-totop-position-bottom__',
				$this->themeColorDefaults['scroll-totop-position-bottom']
            )
        );	
		$fieldset->addElement(
            $this->createTextField(
                'scroll-totop-position-right',
                '__scroll-totop-position-right__',
				$this->themeColorDefaults['scroll-totop-position-right']
            )
        );	
		
		$fieldset->addElement(
            $this->createTextField(
                'scroll-totop-button-radius',
                '__scroll-totop-button-radius__',
				$this->themeColorDefaults['scroll-totop-button-radius']
            )
        );	
		$fieldset->addElement(
            $this->createTextField(
                'scroll-totop-button-shadow',
                '__scroll-totop-button-shadow__',
				$this->themeColorDefaults['scroll-totop-button-shadow']
            )
        );	
		
		return $fieldset;
	}
    
	public function createCookiePermissionTab()
	{
		
		// Create the Tab
		$tab = $this->createTab(
			'cookie_permission_tab',
			'__cookie_permission_tab__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
		$tab->addElement($this->createCookiePermissionDisplayFieldset());

		return $tab;
	}
	
	public function createCookiePermissionDisplayFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'cookie_permission_display_options',
			'__cookie_permission_display_options__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 0.5,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createSelectField(
				'cookie_permission_button_state',
				'__cookie_permission_button_state__',
                'default',
                [
                    ['value' => 'default', 'text' => '__cookie_permission_button_state_default__'],
                    ['value' => 'primary', 'text' => '__cookie_permission_button_state_primary__'],
                    ['value' => 'secondary', 'text' => '__cookie_permission_button_state_secondary__'],
                    ['value' => 'success', 'text' => '__cookie_permission_button_state_success__'],
                    ['value' => 'warning', 'text' => '__cookie_permission_button_state_warning__'],
                    ['value' => 'danger', 'text' => '__cookie_permission_button_state_danger__'],
                ]			
			)
		);        
		$fieldset->addElement(
            $this->createColorPickerField(
                'cookie-permission-bg',
                '__cookie-permission-bg__',
				$this->themeColorDefaults['cookie-permission-bg']
            )
        );
		$fieldset->addElement(
            $this->createTextField(
                'cookie-permission-shadow',
                '__cookie-permission-shadow__',
				$this->themeColorDefaults['cookie-permission-shadow']
            )
        );
		$fieldset->addElement(
            $this->createColorPickerField(
                'cookie-permission-border-color',
                '__cookie-permission-border-color__',
				$this->themeColorDefaults['cookie-permission-border-color']
            )
        );
		$fieldset->addElement(
            $this->createColorPickerField(
                'cookie-permission-color',
                '__cookie-permission-color__',
				$this->themeColorDefaults['cookie-permission-color']
            )
        );
		
		return $fieldset;
	}
    
	public function createLayoutOptionsTab()
	{
		
		// Create the Tab
		$tab = $this->createTab(
			'layout_options_tab',
			'__layout_options_tab_label__',
			array(
				'attributes' => array(
					'layout' => 'anchor',
					'flex' => 1,
					'autoScroll' => true,
				)
			)
		);	
		
		$tab->addElement($this->createLayoutGeneralOptionsFieldset());

		return $tab;
	}
	
	public function createLayoutGeneralOptionsFieldset()
	{
		
		// Create the fieldset which is the container of our field
		$fieldset = $this->createFieldSet(
			'layout_options_general',
			'__layout_options_general__',
			array(
				'attributes' => array(
					'layout' => 'column',
					'flex' => 0,
					'autoScroll' => true,
					'defaults' => array(
						'columnWidth' => 1,
						'labelWidth' => 150,
						'margin' => '5 15 5 0'
					)
				)
			)
		);

		$fieldset->addElement(
			$this->createSelectField(
				'page_wrap_layout',
				'__page_wrap_layout__',
                'fullWidth',
                [
                    ['value' => 'fullWidth', 'text' => '__page_wrap_layout_full_width__'],
                    ['value' => 'boxedWidth', 'text' => '__page_wrap_layout_boxed_width__']
                    //['value' => 'fluidWidth', 'text' => '__main_navigation_align_right__']
                ]			
			)
		);
		
		$fieldset->addElement(
			$this->createMediaField(
				'body_background_image',
				'__body_background_image__',
				'',
				['attributes' => ['lessCompatible' => false]]
			)
		);
		
		return $fieldset;
	}
		
	    /**
     * Helper function to get the attribute of a checkbox field which shows a description label
     * @param $snippetName
     * @return array
     */
    private function getLabelAttribute($snippetName, $labelType = 'boxLabel')
    {
        $description = Shopware()->Snippets()->getNamespace('themes/views/backend/config')->get($snippetName);
        return [$labelType => $description];
    }
	
    /**
     * Helper function to merge default theme colors with color schemes
     * @param ArrayCollection $collection
     */
    public function createConfigSets(ArrayCollection $collection)
    {
        $set = new ConfigSet();
        $set->setName('__theme_views_scheme_blue_magic__')->setDescription(
            '__theme_views_scheme_blue_magic_description__'
        )->setValues(
            array_merge(
                $this->themeColorDefaults,
                $this->themeConfigDefaults
            )
        );
        $collection->add($set);
        
        $set = new ConfigSet();
        $set->setName('__theme_views_scheme_red_magic__')->setDescription(
            '__theme_views_scheme_red_magic_description__'
        )->setValues(
            array_merge(
                $this->themeColorDefaults,
                [
					//base colors
                    'brand-secondary' => '#332a29',
                    'brand-secondary-light' => '#4a3c3b',
                    'brand-secondary-dark' => '#211b1b',
					//button coiors
					'button-primary-bg' => '#8c231a',
                    'button-info-bg' => '#d6620d',
					//text colors
					'text-color-secondary' => '#99534c',
					'text-color-info' => '#d6620d',
					'link-color' => '#e08e87'
					
                ],
                $this->themeConfigDefaults
            )
        );
        $collection->add($set);

        $set = new ConfigSet();
        $set->setName('__theme_views_scheme_purple_magic__')->setDescription(
            '__theme_views_scheme_purple_magic_description__'
        )->setValues(
            array_merge(
                $this->themeColorDefaults,
                [
					//base colors
                    'brand-secondary' => '#322933',
                    'brand-secondary-light' => '#473c4a',
                    'brand-secondary-dark' => '#201b21',
					//button coiors
					'button-primary-bg' => '#761b8c',
                    //'button-info-bg' => '#d6620d',
					//text colors
					'text-color-secondary' => '#7f4c99',
					//'text-color-info' => '#d6620d',
					'link-color' => '#c287e0'
					
                ],
                $this->themeConfigDefaults
            )
        );
        $collection->add($set);
		
        $set = new ConfigSet();
        $set->setName('__theme_views_scheme_graphit_green__')->setDescription(
            '__theme_views_scheme_graphit_green_description__'
        )->setValues(
            array_merge(
                $this->themeColorDefaults,
                [
					//base colors
                    'brand-primary' => '#1db954',
                    'brand-primary-light' => '#1cd85e',
                    'brand-primary-dark' => '#15a147',
                    'brand-secondary' => '#181818',
                    'brand-secondary-light' => '#282828',
                    'brand-secondary-dark' => '#121212',
					//button coiors
					'button-primary-bg' => '@brand-primary',
					//text colors
					'text-color-secondary' => '@brand-primary-dark',
					'link-color' => '@brand-primary-light'
					
                ],
                $this->themeConfigDefaults
            )
        );
        $collection->add($set);
		
        $set = new ConfigSet();
        $set->setName('__theme_views_scheme_red_wedding__')->setDescription(
            '__theme_views_scheme_red_wedding_description__'
        )->setValues(
            array_merge(
                $this->themeColorDefaults,
                [
					//base colors
                    'brand-primary' => '#d80042',
                    'brand-primary-light' => '#e24374',
                    'brand-primary-dark' => '#81082d',
                    'brand-secondary' => '#ffffff',
                    'brand-secondary-light' => '#fbf5f7',
                    'brand-secondary-dark' => '#f3dde5',
					//border style
					'border-color' => 'rgba(226, 67, 116, 1)',
					'border-color-light' => 'rgba(226, 67, 116, 0.25)',
					//scaffolding
					'header-bg' => 'rgba(255,255,255,1)',
					'main-navigation-bg' => '@brand-secondary-dark',
					'main-navigation-button-color' => '@brand-primary',
					'main-navigation-button-active-color' => '#ffffff',
					'advanced-menu-header-bg' => '@button-primary-bg',
					'sidebar-box-bg' => '@brand-secondary-light',
					'sidebar-box-link-active-bg' => '@button-primary-bg',
					'sidebar-box-link-active-color' => '#ffffff',
					'footer-text-color' => '@brand-primary',
					'footer-link-color' => '@brand-primary',
                    //listing
                    'listing-filter-shadow' => 'inset 0 0 2px 0 rgba(0,0,0,0.3)',
                    'listing-filter-arrow-shadow' => 'inset 1px -1px 0px 0 rgba(0,0,0,0.2)',
                    'listing-filter-panel-bg' => 'rgba(255,255,255,1)',
                    'listing-filter-panel-shadow' => '0 0 2px rgba(0,0,0,0.3)',
                    //product box basic
                    'product-box-basic-bg' => '@brand-secondary-light',
                    'product-box-basic-shadow' => '0 0 1px rgba(226,67,116,0.75)',
                    //product box minimal
                    'product-box-minimal-bg' => '@brand-secondary-light',
                    'product-box-minimal-shadow' => '0 0 1px rgba(226,67,116,0.75)',
                    //detail product navigation
                    'product-navigation-button-shadow' => '0 0 0 2px rgba(226,67,116,0.2)',
                    //detail configurator
                    'product-configurator-bg' => '@brand-secondary-light',
                    'product-configurator-border-color' => '@border-color-light',
					//text colors
					'text-color' => '#888888',
					'text-color-light' => '@brand-primary-light',
					'text-color-dark' => '@brand-primary-dark',					
					'text-color-secondary' => '@brand-primary-dark',
					'link-color' => '@brand-primary-dark',
					//icon colors
					'icon-color-base' => '@brand-primary',
					'icon-color-light' => '@brand-primary-light',
					'icon-color-dark' => '@brand-primary-dark',
					//button coiors
					'button-primary-bg' => '@brand-primary',
					'button-primary-color' => 'rgba(255,255,255,1)',
                    'button-secondary-color' => '@button-primary-color',		
                    'button-danger-color' => '@button-primary-color',	
                    'button-warning-color' => '@button-primary-color',		
                    'button-success-color' => '@button-primary-color',		
                    'button-info-color' => '@button-primary-color',		
                    'button-default-color' => '@button-primary-color',	
					//form base style
					'input-bg' => 'rgba(255,255,255,1)',
                    //product badges
                    'product-badge-discount-color' => '#ffffff',
                    'product-badge-newcomer-color' => '#ffffff',
                    'product-badge-recommend-color' => '#ffffff',
                    //badge colors
                    'badge-primary-color' => '@button-primary-color',
                    'badge-secondary-color' => '@badge-primary-color',
                    'badge-danger-color' => '@badge-primary-color',
                    'badge-warning-color' => '@badge-primary-color',
                    'badge-success-color' => '@badge-primary-color',
                    'badge-info-color' => '@badge-primary-color',
                    'badge-default-color' => '@badge-primary-color',
					//box shadows
					'main-navigation-shadow' => 'none'
                ],
                $this->themeConfigDefaults,
                [
                    'mobileLogo' => 'frontend/_public/src/img/logos/logo--shop-redwedding.png',
                    'tabletLogo' => 'frontend/_public/src/img/logos/logo--shop-redwedding.png',
                    'tabletLandscapeLogo' => 'frontend/_public/src/img/logos/logo--shop-redwedding.png',
                    'desktopLogo' => 'frontend/_public/src/img/logos/logo--shop-redwedding.png'
                ]
            )
        );
        $collection->add($set);
    }
	
}