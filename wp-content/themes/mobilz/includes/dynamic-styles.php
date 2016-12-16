<?php

global $nz_ninzio;


/*	STYLING OPTIONS
/*====================================================================*/
	
	$nz_color           = ($nz_ninzio['main-color']) ? $nz_ninzio['main-color'] : "#08ade4";
	$nz_button_color    = ($nz_ninzio['button-color']) ? $nz_ninzio['button-color'] : "#ffffff";
	$nz_slider_cc       = (isset($nz_ninzio['slider-cc']['color']) && !empty($nz_ninzio['slider-cc']['color'])) ? ninzio_hex_to_rgba($nz_ninzio['slider-cc']['color'], $nz_ninzio['slider-cc']['alpha']) : "rgba(0,0,0,0.5)";
	$nz_slider_cc_hover = (isset($nz_ninzio['slider-cc']['color']) && !empty($nz_ninzio['slider-cc']['color'])) ? $nz_ninzio['slider-cc']['color'] : "rgba(0,0,0,0.8)";

	$nz_site_back_col = (isset($nz_ninzio['site-background']['background-color']) && $nz_ninzio['site-background']['background-color']) ? $nz_ninzio['site-background']['background-color'] : "#ffffff";
	$nz_site_back_img = (isset($nz_ninzio['site-background']['background-image']) && $nz_ninzio['site-background']['background-image']) ? esc_url($nz_ninzio['site-background']['background-image']) : "";
	$nz_site_back_r   = (isset($nz_ninzio['site-background']['background-repeat']) && $nz_ninzio['site-background']['background-repeat']) ? $nz_ninzio['site-background']['background-repeat'] : "no-repeat";
	$nz_site_back_s   = (isset($nz_ninzio['site-background']['background-size']) && $nz_ninzio['site-background']['background-size']) ? $nz_ninzio['site-background']['background-size'] : "inherit";
	$nz_site_back_a   = (isset($nz_ninzio['site-background']['background-attachment']) && $nz_ninzio['site-background']['background-attachment']) ? $nz_ninzio['site-background']['background-attachment'] : "inherit";
	$nz_site_back_p   = (isset($nz_ninzio['site-background']['background-position']) && $nz_ninzio['site-background']['background-position']) ? $nz_ninzio['site-background']['background-position'] : "left top";

/*	TYPOGRAPHY OPTIONS
/*====================================================================*/
	
	$nz_main_font_size        = (isset($nz_ninzio['main-typo']['font-size']) && $nz_ninzio['main-typo']['font-size']) ? $nz_ninzio['main-typo']['font-size'] : "13px";
	$nz_main_line_height      = (isset($nz_ninzio['main-typo']['line-height']) && $nz_ninzio['main-typo']['line-height']) ? $nz_ninzio['main-typo']['line-height'] : "22px";
	$nz_main_font_family      = (isset($nz_ninzio['main-typo']['font-family']) && $nz_ninzio['main-typo']['font-family']) ? $nz_ninzio['main-typo']['font-family'] : "Arial, Helvetica, sans-serif";
	$nz_main_color            = (isset($nz_ninzio['main-typo']['color']) && $nz_ninzio['main-typo']['color']) ? $nz_ninzio['main-typo']['color'] : "#777777";

	$nz_small_font_size       = (isset($nz_ninzio['small-typo']['font-size']) && $nz_ninzio['small-typo']['font-size']) ? $nz_ninzio['small-typo']['font-size'] : "11px";
	$nz_small_line_height     = (isset($nz_ninzio['small-typo']['line-height']) && $nz_ninzio['small-typo']['line-height']) ? $nz_ninzio['small-typo']['line-height'] : "22px";

	$nz_headings_font_family    = (isset($nz_ninzio['headings-typo']['font-family']) && $nz_ninzio['headings-typo']['font-family']) ? $nz_ninzio['headings-typo']['font-family'] : $nz_main_font_family;
	$nz_headings_text_transform = (isset($nz_ninzio['headings-typo']['text-transform']) && $nz_ninzio['headings-typo']['text-transform']) ? $nz_ninzio['headings-typo']['text-transform'] : "none";
	$nz_headings_color          = (isset($nz_ninzio['headings-typo']['color']) && $nz_ninzio['headings-typo']['color']) ? $nz_ninzio['headings-typo']['color'] : "#333333";

	$nz_h1_font_size    = (isset($nz_ninzio['h1-typo']['font-size']) && $nz_ninzio['h1-typo']['font-size']) ? $nz_ninzio['h1-typo']['font-size'] : "28px";
	$nz_h1_line_height  = (isset($nz_ninzio['h1-typo']['line-height']) && $nz_ninzio['h1-typo']['line-height']) ? $nz_ninzio['h1-typo']['line-height'] : "34px";
	$nz_h2_font_size    = (isset($nz_ninzio['h2-typo']['font-size']) && $nz_ninzio['h2-typo']['font-size']) ? $nz_ninzio['h2-typo']['font-size'] : "26px";
	$nz_h2_line_height  = (isset($nz_ninzio['h2-typo']['line-height']) && $nz_ninzio['h2-typo']['line-height']) ? $nz_ninzio['h2-typo']['line-height'] : "32px";
	$nz_h3_font_size    = (isset($nz_ninzio['h3-typo']['font-size']) && $nz_ninzio['h3-typo']['font-size']) ? $nz_ninzio['h3-typo']['font-size'] : "24px";
	$nz_h3_line_height  = (isset($nz_ninzio['h3-typo']['line-height']) && $nz_ninzio['h3-typo']['line-height']) ? $nz_ninzio['h3-typo']['line-height'] : "30px";
	$nz_h4_font_size    = (isset($nz_ninzio['h4-typo']['font-size']) && $nz_ninzio['h4-typo']['font-size']) ? $nz_ninzio['h4-typo']['font-size'] : "22px";
	$nz_h4_line_height  = (isset($nz_ninzio['h4-typo']['line-height']) && $nz_ninzio['h4-typo']['line-height']) ? $nz_ninzio['h4-typo']['line-height'] : "28px";
	$nz_h5_font_size    = (isset($nz_ninzio['h5-typo']['font-size']) && $nz_ninzio['h5-typo']['font-size']) ? $nz_ninzio['h5-typo']['font-size'] : "20px";
	$nz_h5_line_height  = (isset($nz_ninzio['h5-typo']['line-height']) && $nz_ninzio['h5-typo']['line-height']) ? $nz_ninzio['h5-typo']['line-height'] : "26px";
	$nz_h6_font_size    = (isset($nz_ninzio['h6-typo']['font-size']) && $nz_ninzio['h6-typo']['font-size']) ? $nz_ninzio['h6-typo']['font-size'] : "18px";
	$nz_h6_line_height  = (isset($nz_ninzio['h6-typo']['line-height']) && $nz_ninzio['h6-typo']['line-height']) ? $nz_ninzio['h6-typo']['line-height'] : "24px";

	$nz_button_typo   = (isset($nz_ninzio['button-typo']['font-family']) && $nz_ninzio['button-typo']['font-family']) ? $nz_ninzio['button-typo']['font-family'] : $nz_main_font_family;
	$nz_button_fw     = (isset($nz_ninzio['button-typo']['font-weight']) && $nz_ninzio['button-typo']['font-weight']) ? $nz_ninzio['button-typo']['font-weight'] : '700';

/*	HEADER OPTIONS
/*====================================================================*/

	/*	HEADER DESK
	/*----------------------------------------------------------------*/
		
		$nz_desk_top_back               = ($nz_ninzio['desk-top-back']['color']) ? ninzio_hex_to_rgba($nz_ninzio['desk-top-back']['color'], $nz_ninzio['desk-top-back']['alpha']) : "#ffffff";
		$nz_desk_top_color              = ($nz_ninzio['desk-top-color']) ? $nz_ninzio['desk-top-color'] : "#999999";
		$nz_desk_sl_color               = ($nz_ninzio['desk-sl-color']) ? $nz_ninzio['desk-sl-color'] : "#999999";
		$nz_desk_ls_hov                 = ($nz_ninzio['desk-ls-hover']) ? $nz_ninzio['desk-ls-hover'] : "#777777"; 
		$nz_desk_ls_back_hov            = ($nz_ninzio['desk-ls-back-hover']) ? $nz_ninzio['desk-ls-back-hover'] : "#f9f9f9";
		$nz_desk_ls_w    	            = (isset($nz_ninzio['desk-lw']['width']) && !empty($nz_ninzio['desk-lw']['width'])) ? $nz_ninzio['desk-lw']['width'] : "149px"; 
		$nz_desk_back     	            = ($nz_ninzio['desk-back']) ? ninzio_hex_to_rgba($nz_ninzio['desk-back']['color'], $nz_ninzio['desk-back']['alpha']) : "#ffffff";
		$nz_desk_menu_p                 = ($nz_ninzio['desk-menu-p']) ? $nz_ninzio['desk-menu-p'] : '0';
		$nz_desk_menu_m                 = ($nz_ninzio['desk-menu-m']) ? $nz_ninzio['desk-menu-m'] : '0';
		
		$nz_desk_height                 = ($nz_ninzio['desk-height']) ? $nz_ninzio['desk-height'] : '90';
		$nz_desk_menu_color_reg         = ($nz_ninzio['desk-menu-color']['regular']) ? $nz_ninzio['desk-menu-color']['regular'] : "#333333"; 
		$nz_desk_menu_color_hov         = ($nz_ninzio['desk-menu-color']['hover']) ? $nz_ninzio['desk-menu-color']['hover'] : "#333333";
		
		$nz_desk_menu_effect_color      = ($nz_ninzio['desk-menu-effect-color']) ? $nz_ninzio['desk-menu-effect-color'] : "#07abef";
		$nz_desk_menu_effect            = ($nz_ninzio['desk-menu-effect']) ? $nz_ninzio['desk-menu-effect'] : "none";
		
		$nz_desk_menu_font_weight       = ($nz_ninzio['desk-menu-typo']['font-weight']) ? $nz_ninzio['desk-menu-typo']['font-weight'] : "normal";
		$nz_desk_menu_font_size         = ($nz_ninzio['desk-menu-typo']['font-size']) ? $nz_ninzio['desk-menu-typo']['font-size'] : "14px";
		$nz_desk_menu_font_family       = ($nz_ninzio['desk-menu-typo']['font-family']) ? $nz_ninzio['desk-menu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_desk_menu_text_transform    = (isset($nz_ninzio['desk-menu-typo']['text-transform']) && !empty($nz_ninzio['desk-menu-typo']['text-transform'])) ? $nz_ninzio['desk-menu-typo']['text-transform'] : "none";
		
		$nz_desk_submenu_color_reg  	= ($nz_ninzio['desk-submenu-color']['regular']) ? $nz_ninzio['desk-submenu-color']['regular'] : "#999999"; 
		$nz_desk_submenu_color_hov      = ($nz_ninzio['desk-submenu-color']['hover']) ? $nz_ninzio['desk-submenu-color']['hover'] : "#777777";
		$nz_desk_submenu_back           = ($nz_ninzio['desk-submenu-back']['regular']) ? $nz_ninzio['desk-submenu-back']['regular'] : "#ffffff";
		$nz_desk_submenu_back_hov       = ($nz_ninzio['desk-submenu-back']['hover']) ? $nz_ninzio['desk-submenu-back']['hover'] : "#f9f9f9";
		$nz_desk_submenu_border_col     = ($nz_ninzio['desk-submenu-border-color']) ? $nz_ninzio['desk-submenu-border-color'] : "#e0e0e0";
		$nz_desk_submenu_font_weight    = ($nz_ninzio['desk-submenu-typo']['font-weight']) ? $nz_ninzio['desk-submenu-typo']['font-weight'] : "normal";
		$nz_desk_submenu_font_size      = ($nz_ninzio['desk-submenu-typo']['font-size']) ? $nz_ninzio['desk-submenu-typo']['font-size'] : "14px";
		$nz_desk_submenu_line_height    = ($nz_ninzio['desk-submenu-typo']['line-height']) ? $nz_ninzio['desk-submenu-typo']['line-height'] : "24px";
		$nz_desk_submenu_font_family    = ($nz_ninzio['desk-submenu-typo']['font-family']) ? $nz_ninzio['desk-submenu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_desk_submenu_text_transform = (isset($nz_ninzio['desk-submenu-typo']['text-transform']) && !empty($nz_ninzio['desk-submenu-typo']['text-transform'])) ? $nz_ninzio['desk-submenu-typo']['text-transform'] : "none";
		$nz_desk_submenu_border_top_color  = (isset($nz_ninzio['desk-submenu-border-top-color']) && !empty($nz_ninzio['desk-submenu-border-top-color'])) ? $nz_ninzio['desk-submenu-border-top-color'] : "";
		
		$nz_desk_megamenu_font_weight        = (isset($nz_ninzio['desk-megamenu-top-typo']['font-weight']) && $nz_ninzio['desk-megamenu-top-typo']['font-weight']) ? $nz_ninzio['desk-megamenu-top-typo']['font-weight'] : $nz_desk_menu_font_weight;
		$nz_desk_megamenu_text_transform     = (isset($nz_ninzio['desk-megamenu-top-typo']['text-transform']) && $nz_ninzio['desk-megamenu-top-typo']['text-transform']) ? $nz_ninzio['desk-megamenu-top-typo']['text-transform'] : $nz_desk_menu_text_transform;
		$nz_desk_megamenu_sub_font_weight    = (isset($nz_ninzio['desk-megamenu-sub-typo']['font-weight']) && $nz_ninzio['desk-megamenu-sub-typo']['font-weight']) ? $nz_ninzio['desk-megamenu-sub-typo']['font-weight'] : $nz_desk_submenu_font_weight;
		$nz_desk_megamenu_sub_text_transform = (isset($nz_ninzio['desk-megamenu-sub-typo']['text-transform']) && $nz_ninzio['desk-megamenu-sub-typo']['text-transform']) ? $nz_ninzio['desk-megamenu-sub-typo']['text-transform'] : $nz_desk_submenu_text_transform;
		$nz_desk_megamenu_top_color          = (isset($nz_ninzio['desk-megamenu-top-color']) && $nz_ninzio['desk-megamenu-top-color']) ? $nz_ninzio['desk-megamenu-top-color'] : $nz_desk_submenu_color_reg;
		$nz_desk_menu_border_color           = ($nz_ninzio['desk-menu-border-color']) ? ninzio_hex_to_rgba($nz_ninzio['desk-menu-border-color']['color'], $nz_ninzio['desk-menu-border-color']['alpha']) : "#eeeeee";

	/*	HEADER FIXED
	/*----------------------------------------------------------------*/

		$nz_fixed_back     	            = (isset($nz_ninzio['fixed-back']) && $nz_ninzio['fixed-back']) ? ninzio_hex_to_rgba($nz_ninzio['fixed-back']['color'], $nz_ninzio['fixed-back']['alpha']) : $nz_desk_back;
		$nz_fixed_height                = ($nz_ninzio['fixed-height']) ? $nz_ninzio['fixed-height'] : $nz_desk_height;
		$nz_fixed_menu_color_reg        = (isset($nz_ninzio['fixed-menu-color']['regular']) && $nz_ninzio['fixed-menu-color']['regular']) ? $nz_ninzio['fixed-menu-color']['regular'] : $nz_desk_menu_color_reg; 
		$nz_fixed_menu_color_hov        = (isset($nz_ninzio['fixed-menu-color']['hover']) && $nz_ninzio['fixed-menu-color']['hover']) ? $nz_ninzio['fixed-menu-color']['hover'] : $nz_desk_menu_color_hov;
		$nz_fixed_menu_effect_color     = (isset($nz_ninzio['fixed-menu-effect-color']) && $nz_ninzio['fixed-menu-effect-color']) ? $nz_ninzio['fixed-menu-effect-color'] : $nz_desk_menu_effect_color;
		$nz_fixed_submenu_color_reg  	= (isset($nz_ninzio['fixed-submenu-color']['regular']) && $nz_ninzio['fixed-submenu-color']['regular']) ? $nz_ninzio['fixed-submenu-color']['regular'] : $nz_desk_submenu_color_reg; 
		$nz_fixed_submenu_color_hov     = (isset($nz_ninzio['fixed-submenu-color']['hover']) && $nz_ninzio['fixed-submenu-color']['hover']) ? $nz_ninzio['fixed-submenu-color']['hover'] : $nz_desk_submenu_color_hov;
		$nz_fixed_submenu_back          = (isset($nz_ninzio['fixed-submenu-back']['regular']) && $nz_ninzio['fixed-submenu-back']['regular']) ? $nz_ninzio['fixed-submenu-back']['regular'] : $nz_desk_submenu_back;
		$nz_fixed_submenu_back_hov      = (isset($nz_ninzio['fixed-submenu-back']['hover']) && $nz_ninzio['fixed-submenu-back']['hover']) ? $nz_ninzio['fixed-submenu-back']['hover'] : $nz_desk_submenu_back_hov;
		$nz_fixed_submenu_border_col    = (isset($nz_ninzio['fixed-submenu-border-color']) && $nz_ninzio['fixed-submenu-border-color']) ? $nz_ninzio['fixed-submenu-border-color'] : $nz_desk_submenu_border_col;
		$nz_fixed_submenu_border_top_color  = (isset($nz_ninzio['fixed-submenu-border-top-color']) && !empty($nz_ninzio['fixed-submenu-border-top-color'])) ? $nz_ninzio['fixed-submenu-border-top-color'] : $nz_desk_submenu_border_top_color;
		$nz_fixed_megamenu_top_color        = (isset($nz_ninzio['fixed-megamenu-top-color']) && $nz_ninzio['fixed-megamenu-top-color']) ? $nz_ninzio['fixed-megamenu-top-color'] : $nz_desk_megamenu_top_color;
		$nz_fixed_menu_border_color     = (isset($nz_ninzio['fixed-menu-border-color']) && !empty($nz_ninzio['fixed-menu-border-color'])) ? ninzio_hex_to_rgba($nz_ninzio['fixed-menu-border-color']['color'], $nz_ninzio['fixed-menu-border-color']['alpha']) : $nz_desk_menu_border_color;  

	/*	HEADER STUCK
	/*----------------------------------------------------------------*/

		$nz_stuck_top_back               = (isset($nz_ninzio['stuck-top-back']['color']) && !empty($nz_ninzio['stuck-top-back']['color'])) ? ninzio_hex_to_rgba($nz_ninzio['stuck-top-back']['color'], $nz_ninzio['stuck-top-back']['alpha']) : $nz_desk_top_back;
		$nz_stuck_top_color              = (isset($nz_ninzio['stuck-top-color']) && !empty($nz_ninzio['stuck-top-color'])) ? $nz_ninzio['stuck-top-color'] : $nz_desk_top_color;
		$nz_stuck_sl_color               = (isset($nz_ninzio['stuck-sl-color']) && !empty($nz_ninzio['stuck-sl-color'])) ? $nz_ninzio['stuck-sl-color'] : $nz_desk_sl_color; 
		$nz_stuck_ls_hov                 = (isset($nz_ninzio['stuck-ls-hover']) && !empty($nz_ninzio['stuck-ls-hover'])) ? $nz_ninzio['stuck-ls-hover'] : $nz_desk_ls_hov; 
		$nz_stuck_ls_back_hov            = (isset($nz_ninzio['stuck-ls-back-hover']) && !empty($nz_ninzio['stuck-ls-back-hover'])) ? $nz_ninzio['stuck-ls-back-hover'] : $nz_desk_ls_back_hov; 
		$nz_stuck_back     	            = (isset($nz_ninzio['stuck-back']['color']) && $nz_ninzio['stuck-back']['color']) ? ninzio_hex_to_rgba($nz_ninzio['stuck-back']['color'], $nz_ninzio['stuck-back']['alpha']) : $nz_desk_back;
		$nz_stuck_height                = ($nz_ninzio['stuck-height']) ? $nz_ninzio['stuck-height'] : $nz_desk_height;
		$nz_stuck_menu_color_reg        = (isset($nz_ninzio['stuck-menu-color']['regular']) && $nz_ninzio['stuck-menu-color']['regular']) ? $nz_ninzio['stuck-menu-color']['regular'] : $nz_desk_menu_color_reg; 
		$nz_stuck_menu_color_hov        = (isset($nz_ninzio['stuck-menu-color']['hover']) && $nz_ninzio['stuck-menu-color']['hover']) ? $nz_ninzio['stuck-menu-color']['hover'] : $nz_desk_menu_color_hov;
		$nz_stuck_menu_effect_color     = (isset($nz_ninzio['stuck-menu-effect-color']) && $nz_ninzio['stuck-menu-effect-color']) ? $nz_ninzio['stuck-menu-effect-color'] : $nz_desk_menu_effect_color;
		$nz_stuck_submenu_color_reg  	= (isset($nz_ninzio['stuck-submenu-color']['regular']) && $nz_ninzio['stuck-submenu-color']['regular']) ? $nz_ninzio['stuck-submenu-color']['regular'] : $nz_desk_submenu_color_reg; 
		$nz_stuck_submenu_color_hov     = (isset($nz_ninzio['stuck-submenu-color']['hover']) && $nz_ninzio['stuck-submenu-color']['hover']) ? $nz_ninzio['stuck-submenu-color']['hover'] : $nz_desk_submenu_color_hov;
		$nz_stuck_submenu_back          = (isset($nz_ninzio['stuck-submenu-back']['regular']) && $nz_ninzio['stuck-submenu-back']['regular']) ? $nz_ninzio['stuck-submenu-back']['regular'] : $nz_desk_submenu_back;
		$nz_stuck_submenu_back_hov      = (isset($nz_ninzio['stuck-submenu-back']['hover']) && $nz_ninzio['stuck-submenu-back']['hover']) ? $nz_ninzio['stuck-submenu-back']['hover'] : $nz_desk_submenu_back_hov;
		$nz_stuck_submenu_border_col    = (isset($nz_ninzio['stuck-submenu-border-color']) && $nz_ninzio['stuck-submenu-border-color']) ? $nz_ninzio['stuck-submenu-border-color'] : $nz_desk_submenu_border_col;
		$nz_stuck_submenu_border_top_color  = (isset($nz_ninzio['stuck-submenu-border-top-color']) && !empty($nz_ninzio['stuck-submenu-border-top-color'])) ? $nz_ninzio['stuck-submenu-border-top-color'] : $nz_desk_submenu_border_top_color;
		$nz_stuck_megamenu_top_color        = (isset($nz_ninzio['stuck-megamenu-top-color']) && $nz_ninzio['stuck-megamenu-top-color']) ? $nz_ninzio['stuck-megamenu-top-color'] : $nz_desk_megamenu_top_color;
		$nz_stuck_menu_border_color     = (isset($nz_ninzio['stuck-menu-border-color']) && !empty($nz_ninzio['stuck-menu-border-color'])) ? ninzio_hex_to_rgba($nz_ninzio['stuck-menu-border-color']['color'], $nz_ninzio['stuck-menu-border-color']['alpha']) : $nz_desk_menu_border_color;  

	/*	HEADER MOBILE
	/*----------------------------------------------------------------*/
		
		$nz_mob_height          	   = ($nz_ninzio['mob-height']) ? $nz_ninzio['mob-height'] : '90';
		$nz_mob_toggle_color    	   = ($nz_ninzio['mob-toggle-color']) ? $nz_ninzio['mob-toggle-color'] : "#1e2229";
		$nz_mob_header_back     	   = ($nz_ninzio['mob-header-back']) ? $nz_ninzio['mob-header-back'] : "#ffffff";
		$nz_mob_menu_color_reg  	   = ($nz_ninzio['mob-menu-color']['regular']) ? $nz_ninzio['mob-menu-color']['regular'] : "#ffffff"; 
		$nz_mob_menu_color_hov  	   = ($nz_ninzio['mob-menu-color']['hover']) ? $nz_ninzio['mob-menu-color']['hover'] : "#ffffff";
		$nz_mob_menu_back_reg  	       = ($nz_ninzio['mob-menu-back']['regular']) ? $nz_ninzio['mob-menu-back']['regular'] : "#1e2229"; 
		$nz_mob_menu_back_hov  	       = ($nz_ninzio['mob-menu-back']['hover']) ? $nz_ninzio['mob-menu-back']['hover'] : "#1a1d23";

		$nz_mob_menu_font_weight       = (isset($nz_ninzio['mob-menu-typo']['font-weight']) && $nz_ninzio['mob-menu-typo']['font-weight']) ? $nz_ninzio['mob-menu-typo']['font-weight'] : $nz_desk_menu_font_weight;
		$nz_mob_menu_font_size         = (isset($nz_ninzio['mob-menu-typo']['font-size']) && $nz_ninzio['mob-menu-typo']['font-size']) ? $nz_ninzio['mob-menu-typo']['font-size'] : $nz_desk_menu_font_size;
		$nz_mob_menu_line_height       = (isset($nz_ninzio['mob-menu-typo']['line-height']) && $nz_ninzio['mob-menu-typo']['line-height']) ? $nz_ninzio['mob-menu-typo']['line-height'] : "24px";
		$nz_mob_menu_font_family       = (isset($nz_ninzio['mob-menu-typo']['font-family']) && $nz_ninzio['mob-menu-typo']['font-family']) ? $nz_ninzio['mob-menu-typo']['font-family'] : $nz_desk_menu_font_family;
		$nz_mob_menu_text_transform    = (isset($nz_ninzio['mob-menu-typo']['text-transform']) && $nz_ninzio['mob-menu-typo']['text-transform']) ? $nz_ninzio['mob-menu-typo']['text-transform'] : $nz_desk_menu_text_transform;
		
		$nz_mob_submenu_font_weight    = (isset($nz_ninzio['mob-submenu-typo']['font-weight']) && $nz_ninzio['mob-submenu-typo']['font-weight']) ? $nz_ninzio['mob-submenu-typo']['font-weight'] : $nz_desk_submenu_font_weight;
		$nz_mob_submenu_font_size      = (isset($nz_ninzio['mob-submenu-typo']['font-size']) && $nz_ninzio['mob-submenu-typo']['font-size']) ? $nz_ninzio['mob-submenu-typo']['font-size'] : $nz_desk_submenu_font_size;
		$nz_mob_submenu_line_height    = (isset($nz_ninzio['mob-submenu-typo']['line-height']) && $nz_ninzio['mob-submenu-typo']['line-height']) ? $nz_ninzio['mob-submenu-typo']['line-height'] : $nz_desk_submenu_line_height;
		$nz_mob_submenu_font_family    = (isset($nz_ninzio['mob-submenu-typo']['font-family']) && $nz_ninzio['mob-submenu-typo']['font-family']) ? $nz_ninzio['mob-submenu-typo']['font-family'] : $nz_desk_submenu_font_family;
		$nz_mob_submenu_text_transform = (isset($nz_ninzio['mob-submenu-typo']['text-transform']) && $nz_ninzio['mob-submenu-typo']['text-transform']) ? $nz_ninzio['mob-submenu-typo']['text-transform'] : $nz_desk_submenu_text_transform;

/*	WIDGET AREAS OPTIONS
/*====================================================================*/
	
	$nz_sidebar_back        = (isset($nz_ninzio['sidebar-back']) && $nz_ninzio['sidebar-back']) ? $nz_ninzio['sidebar-back'] : "#1e2229";
	$nz_sidebar_color       = (isset($nz_ninzio['sidebar-color']) && $nz_ninzio['sidebar-color']) ? $nz_ninzio['sidebar-color'] : "#ffffff";
	$nz_sidebar_hover       = (isset($nz_ninzio['sidebar-hover']) && $nz_ninzio['sidebar-hover']) ? $nz_ninzio['sidebar-hover'] : $nz_color;
	$nz_sidebar_title_color = (isset($nz_ninzio['sidebar-title-color']) && $nz_ninzio['sidebar-title-color']) ? $nz_ninzio['sidebar-title-color'] : "#ffffff";

	$nz_footer_back         = ($nz_ninzio['footer-back']) ? $nz_ninzio['footer-back'] : "#1a1d23";
	$nz_footer_border       = ($nz_ninzio['footer-border']) ? $nz_ninzio['footer-border'] : "#1a1d23";
	$nz_footer_color        = ($nz_ninzio['footer-color']) ? $nz_ninzio['footer-color'] : "#ffffff";
	$nz_footer_color_hover  = ($nz_ninzio['footer-color-hover']) ? $nz_ninzio['footer-color-hover'] : "#ffffff";
	$nz_footer_wa_back      = ($nz_ninzio['footer-wa-back']) ? $nz_ninzio['footer-wa-back'] : "#1e2229";
	$nz_footer_wa_color     = ($nz_ninzio['footer-wa-color']) ? $nz_ninzio['footer-wa-color'] : "#ffffff";
	$nz_footer_wa_hover     = (isset($nz_ninzio['footer-wah']) && $nz_ninzio['footer-wah']) ? $nz_ninzio['footer-wah'] : $nz_color;
	$nz_footer_wat_color    = ($nz_ninzio['footer-wat-color']) ? $nz_ninzio['footer-wat-color'] : "#ffffff";
?>

<style>

<?php 
	if(isset($nz_ninzio['font-custom-css']) && !empty($nz_ninzio['font-custom-css'])){echo $nz_ninzio['font-custom-css'];}
	if(isset($nz_ninzio['custom-css']) && !empty($nz_ninzio['custom-css'])){echo $nz_ninzio['custom-css'];}
?>

/*  MIX
/*====================================================================*/

	.widget_icl_lang_sel_widget a,
	.widget_product_tag_cloud .tagcloud a {
		font-size: <?php echo $nz_main_font_size; ?> !important;
		font-family:<?php echo $nz_main_font_family; ?>;
	}

	.social-links a span {
		font-family:<?php echo $nz_main_font_family; ?>;
		font-size: <?php echo $nz_main_font_size; ?>;
		line-height: <?php echo $nz_main_line_height; ?>;
	}

	.woocommerce .quantity input[type="button"].minus,
	.woocommerce .quantity input[type="button"].plus,
	.widget_nav_menu ul li a,
	.nz-counter .count-title {
		font-family:<?php echo $nz_main_font_family; ?>;
	}

	.nz-content-box > .nz-box .box-title,
	.nz-circle .title,
	.post-meta > .post-author a:hover,
	.post-meta > .post-category a:hover,
	.post-meta > .post-comments a:hover,
	.search-r .post-meta > .post-author a:hover,
	.search-r .post-meta > .post-category a:hover,
	.search-r .post-meta > .post-comments a:hover,
	.post-comments-area a:hover,
	.posted_in a:hover,
	.tagged_as a:hover,
	.product-name a:hover {
		color: <?php echo $nz_headings_color; ?>;
	}

	#top{background-color: <?php echo $nz_color; ?>;}

	.nz-pricing-table .column .title,
	.nz-tagline-2 .container > .tagline-title {
		font-family:<?php echo $nz_headings_font_family; ?>;
	}

	.woocommerce .products .product h3 {
		font-size: <?php echo $nz_h4_font_size; ?>; line-height: <?php echo $nz_h4_line_height; ?>;
	}

	.ninzio-slider-bullets span {
		background-color:<?php echo $nz_slider_cc; ?>;
	}

	.ninzio-slider-bullets span:hover {
		background-color:<?php echo $nz_slider_cc_hover; ?>;
	}

/*  BACKGROUND
/*====================================================================*/

	html,
	#gen-wrap {
		background-color:<?php echo $nz_site_back_col; ?>;
		<?php if(!empty($nz_site_back_img)): ?>
			background-image:url(<?php echo $nz_site_back_img; ?>);
			background-repeat:<?php echo $nz_site_back_r; ?>;
			background-attachment: <?php echo $nz_site_back_a; ?>;
			-webkit-background-size: <?php echo $nz_site_back_s; ?>;
			-moz-background-size: <?php echo $nz_site_back_s; ?>;
			background-size: <?php echo $nz_site_back_s; ?>;
			background-position:<?php echo $nz_site_back_p; ?>;
		<?php endif; ?>
	}

/*  COLOR
/*====================================================================*/

	a:not(.button) {color:<?php echo $nz_color; ?>;}

	blockquote {
		border-left-color:<?php echo $nz_color; ?>;
	}
	
	::-moz-selection {
		background-color:<?php echo $nz_color; ?>;
		color: #ffffff;
	}

	::selection {
		background-color:<?php echo $nz_color; ?>;
		color: #ffffff;
	}

	.nz-testimonials .name:before,
	.nz-highlight,
	.nz-thumbnail .post-date,
	.one-page-bullets .one-page-active a[href*="#"],
	.one-page-bullets a[href*="#"]:hover,
	.wp-caption .wp-caption-text,
	.nz-media-slider .flex-direction-nav a:hover,
	.post-gallery .flex-direction-nav a:hover,
	.woocommerce .product .onsale,
	.ui-slider .ui-slider-range,
	.nz-accordion .toggle-title.active,
	.post-sticky,
	.ninzio-slider-bullets span.current-bullet,
	.ninzio-overlay:before,
	.widget_mailchimp .icon,
	.nz-mailchimp .icon,
	.timer-item-wrap,
	.owl-controls .owl-page.active,
	.nz-media-slider .flex-control-paging li a.flex-active,
	.nz-media-slider .flex-direction-nav a, 
	.post-gallery .flex-direction-nav a,
	.nz-mailchimp .subscribe .icon-checkmark,
	.ninzio-overlay .overlay-content .button,
	.post-social-share .share-message {
		background-color:<?php echo $nz_color; ?>;
	}

	.ninzio-overlay .overlay-content .button:hover,
	.ninzio-overlay .overlay-content .added_to_cart:hover {
		background-color:<?php echo ninzio_hex_to_rgb_shade($nz_color,20); ?>
	}

	.nz-portfolio-filter .filter:hover,
	.nz-portfolio-filter .filter.active {
		box-shadow: inset 0 0 0 2px <?php echo $nz_color; ?> !important;
	}

	.nz-portfolio-filter .filter.active:after {
		border-color: <?php echo $nz_color; ?> transparent transparent transparent;
	}

	.nz-accordion .toggle-title.active,
	.widget_price_filter .ui-slider .ui-slider-handle {
		border-color:<?php echo $nz_color; ?>;
	}

	.nz-tabs.horizontal:not(.tab-full) .tabset .tab.active:after,
	.woocommerce-tabs:not(.tab-full) .tabs > li.active:after {
		border-color:<?php echo $nz_color; ?> transparent transparent transparent;
	}

	.nz-tabs.vertical .tabset .tab.active:after,
	.post-social-share .share-message:after {
		border-color: transparent transparent transparent <?php echo $nz_color; ?>;
	}

	.mejs-controls .mejs-time-rail .mejs-time-loaded {
		background-color:<?php echo $nz_color; ?> !important;
	}

	.ninzio-overlay
	{background-color: <?php echo ninzio_hex_to_rgba($nz_color, 0.8); ?>;}

	.nz-tabs .tabset .tab.active,
	.woocommerce-tabs .tabs > li.active  {
		background-color:<?php echo $nz_color; ?> !important;
		border-color:<?php echo $nz_color; ?> !important;
	}

	.nz-testimonials .flex-control-nav li a.flex-active:before {
		box-shadow: inset 0 0 0 5px <?php echo $nz_color; ?>;
	}

	.nz-testimonials .flex-control-nav li a.flex-active:after,
	.nz-testimonials .flex-control-nav li a:hover:after {
		border-color: <?php echo $nz_color; ?> transparent transparent transparent;
	}

	.comment-author,
	.woocommerce .product .amount,
	.nz-testimonials .name,
	.nz-persons .person .name h4,
	.single-details .nz-i-list span.icon,
	.toggle-title.active .arrow:before,
	.post-date > span:first-child,
	.ninzio-navigation li a:hover,
	.ninzio-navigation li span.current,
	.woocommerce-pagination li a:hover,
	.woocommerce-pagination li span.current,
	.nz-portfolio-filter .filter:hover,
	.nz-portfolio-filter .filter.active,
	.woocommerce .products .product .product-det:hover h3 {
		color:<?php echo $nz_color; ?>;
	}

	.post-author-info-title a,
	.loop .port-cat a:hover,
	.single-details .nz-i-list a:hover,
	.post-info a:hover,
	.loop .blog-post .post-title a:hover,
	.nz-recent-posts .post-title a:hover,
	.project-details a:hover,
	.project-category a:hover
	{color: <?php echo $nz_color; ?> !important;}

	.post-author-info-title a:hover
	{color: <?php echo $nz_headings_color; ?> !important;}

	button,
	input[type="reset"],
	input[type="submit"],
	input[type="button"],
	.button {
		font-family: <?php echo $nz_button_typo; ?>;
		font-weight: <?php echo $nz_button_fw; ?>;
	}

	.btn-normal button,
	.btn-normal input[type="reset"],
	.btn-normal input[type="submit"],
	.btn-normal input[type="button"],
	.button-normal,
	.btn-normal .project-link,
	.btn-normal .search-button,
	.btn-normal .wc-forward,
	.search-r .post-indication {
		background-color: <?php echo $nz_color; ?>;
		color: <?php echo $nz_button_color; ?>;
	}

	.btn-ghost button,
	.btn-ghost input[type="reset"],
	.btn-ghost input[type="submit"],
	.btn-ghost input[type="button"],
	.button-ghost,
	.btn-ghost .project-link,
	.btn-ghost .search-button,
	.btn-ghost .wc-forward {
		box-shadow:inset 0 0 0 2px <?php echo $nz_color; ?>;
		color: <?php echo $nz_button_color; ?>;
	}

	.btn-3d button,
	.btn-3d input[type="reset"],
	.btn-3d input[type="submit"],
	.btn-3d input[type="button"],
	.button-3d,
	.btn-3d .project-link,
	.btn-3d .search-button,
	.btn-3d .wc-forward {
		background-color: <?php echo $nz_color; ?>;
		box-shadow: 0 4px <?php echo ninzio_hex_to_rgb_shade($nz_color,20); ?>;
		color: <?php echo $nz_button_color; ?>;
	}

	.btn-ghost .wc-forward {color: <?php echo $nz_button_color; ?> !important;}

	.btn-ghost button:hover,
	.btn-ghost input[type="reset"]:hover,
	.btn-ghost input[type="submit"]:hover,
	.btn-ghost input[type="button"]:hover,
	.animate-false.button-ghost:hover,
	.btn-ghost .project-link:hover,
	.btn-ghost .search-button:hover,
	.btn-ghost .wc-forward:hover {
		background-color: <?php echo $nz_color; ?>;
	}

	.btn-3d button:hover,
	.btn-3d input[type="reset"]:hover,
	.btn-3d input[type="submit"]:hover,
	.btn-3d input[type="button"]:hover,
	.button-3d.animate-false:hover,
	.btn-3d .project-link:hover,
	.btn-3d .search-button:hover,
	.btn-3d .wc-forward:hover
	{box-shadow: 0 2px <?php echo ninzio_hex_to_rgb_shade($nz_color,20); ?>;}

	.nz-mailchimp input[type="submit"]:hover,
	#top:hover
	{background-color:<?php echo ninzio_hex_to_rgb_shade($nz_color,20); ?>;}

	.ninzio-navigation li a:before,
	.ninzio-navigation li span.current:before,
	.woocommerce-pagination li a:before,
	.woocommerce-pagination li span.current:before {
		background-color: <?php echo $nz_color; ?>;
	}

	.woocommerce-message,
	.woocommerce-info,
	.woocommerce-error li,
	p.woocommerce-error,
	.woocommerce-checkout .woocommerce > p:first-child,
	.woocommerce .cart-empty {
		border-color:<?php echo ninzio_hex_to_rgba($nz_color,0.3); ?>;
		color: <?php echo $nz_color; ?>;
		background: <?php echo ninzio_hex_to_rgba($nz_color,0.1); ?>;
	}

	.post-sticky:before {
		border-color: <?php echo $nz_color; ?> transparent transparent transparent;
	}

	.post-sticky:after {
		border-color: transparent <?php echo $nz_color; ?> transparent transparent;
	}

/*  TYPOGRAPHY
/*====================================================================*/
	
	body, button, input, pre, code, kbd, samp, dt {
		font-size: <?php echo $nz_main_font_size; ?>;
		line-height: <?php echo $nz_main_line_height; ?>;
		font-family:<?php echo $nz_main_font_family; ?>;
		color: <?php echo $nz_main_color; ?>;
	}

	textarea {
		color: <?php echo $nz_main_color; ?>;
	}

	h1,h2,h3,h4,h5,h6 {
		font-family:<?php echo $nz_headings_font_family; ?>;
		color: <?php echo $nz_headings_color; ?>;
		text-transform: <?php echo $nz_headings_text_transform; ?>;
	}

	h1 {font-size: <?php echo $nz_h1_font_size; ?>; line-height: <?php echo $nz_h1_line_height; ?>;}
	h2 {font-size: <?php echo $nz_h2_font_size; ?>; line-height: <?php echo $nz_h2_line_height; ?>;}
	h3 {font-size: <?php echo $nz_h3_font_size; ?>; line-height: <?php echo $nz_h3_line_height; ?>;}
	h4 {font-size: <?php echo $nz_h4_font_size; ?>; line-height: <?php echo $nz_h4_line_height; ?>;}
	h5 {font-size: <?php echo $nz_h5_font_size; ?>; line-height: <?php echo $nz_h5_line_height; ?>;}
	h6 {font-size: <?php echo $nz_h6_font_size; ?>; line-height: <?php echo $nz_h6_line_height; ?>;}

/*  HEADER
/*====================================================================*/

	.mob-header {background-color: <?php echo $nz_mob_header_back; ?>;}
	.mob-header .logo-toggle {height: <?php echo $nz_mob_height; ?>px;}

	.mob-header .menu-toggle span,
	.mob-header .sidebar-toggle span
	{background-color: <?php echo $nz_mob_toggle_color; ?>;}

	.mob-menu li a {
		color: <?php echo $nz_mob_menu_color_reg; ?>;
		background-color: <?php echo $nz_mob_menu_back_reg; ?>;
		text-transform: <?php echo $nz_mob_menu_text_transform; ?>;
		font-weight: <?php echo $nz_mob_menu_font_weight; ?>;
		font-size: <?php echo $nz_mob_menu_font_size; ?>;
		line-height: <?php echo $nz_mob_menu_line_height; ?>;
		font-family: <?php echo $nz_mob_menu_font_family; ?>;
		border-bottom: 1px solid <?php echo ninzio_hex_to_rgba($nz_mob_menu_color_reg, 0.1); ?>;
	}
	.mob-menu ul ul > li > a {
		text-transform: <?php echo $nz_mob_submenu_text_transform; ?>;
		font-weight: <?php echo $nz_mob_submenu_font_weight; ?>;
		font-size: <?php echo $nz_mob_submenu_font_size; ?>;
		line-height: <?php echo $nz_mob_submenu_line_height; ?>;
		font-family: <?php echo $nz_mob_submenu_font_family; ?>;
	}
	.mob-menu li a:hover {
		color: <?php echo $nz_mob_menu_color_hov; ?>;
		background-color: <?php echo $nz_mob_menu_back_hov; ?>;
	}

	.mob-int-true .mob-menu ul li > a > .di {
		background-color: <?php echo ninzio_hex_to_rgba($nz_mob_menu_color_reg, 0.1); ?>;
	}

	.mob-search-true .search {
		background-color: <?php echo $nz_mob_menu_back_reg; ?>;
	}

	.mob-search-true .search,
	.mob-search-true .search .icon-search2 {
		color: <?php echo $nz_mob_menu_color_reg; ?>;
	}

	.mob-search-true .search input[type="text"] {
		border-color: <?php echo ninzio_hex_to_rgba($nz_mob_menu_color_reg, 0.1); ?>;
		color: <?php echo $nz_mob_menu_color_reg; ?>;
	}

	.mob-search-true .search input[type="text"]:focus {
		background-color: <?php echo $nz_mob_menu_back_hov; ?>;
	}

/*  WIDGET AREAS
/*====================================================================*/

	.widget_title,
	.widget_rss .widget_title a
	{color: <?php echo $nz_headings_color; ?>;}

	.sidebar:not(.single-details) a
	{color: <?php echo $nz_main_color; ?>;}

	.sidebar:not(.single-details) a:hover,
	.widget_nav_menu ul li a:hover,
	.widget_rss a:hover,
	.widget_nz_recent_entries a:hover,
	.widget_recent_entries a:hover,
	.widget_recent_comments a:hover,
	.widget_twitter ul li a:hover,
	.widget_mailchimp #mc-embedded-subscribe:hover + .icon-plus,
	.widget_search #searchsubmit:hover + .icon-search2,
	.widget_product_search form:hover:after
	{color: <?php echo $nz_color; ?>;}

	.widget_icl_lang_sel_widget li a:hover,
	.widget_categories ul li a:hover,
	.widget_pages ul li a:hover,
	.widget_archive ul li a:hover,
	.widget_product_categories ul li a:hover
	{color: <?php echo $nz_color; ?> !important;}

	.widget_icl_lang_sel_widget a
	{color: <?php echo $nz_main_color; ?> !important;}


	.widget_calendar td#today 
	{background-color:<?php echo ninzio_hex_to_rgba($nz_main_color, 0.1); ?>;}

	.widget_twitter ul li:before 
	{color: <?php echo ninzio_hex_to_rgba($nz_main_color, 0.3); ?>;}

	.main-widget-area 
	{background-color: <?php echo $nz_sidebar_back; ?>;}
	
	.ps-container .ps-scrollbar-y 
	{background-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.6); ?>;}
	.ps-container .ps-scrollbar-y-rail:hover,
	.ps-container .ps-scrollbar-y-rail.hover,
	.ps-container .ps-scrollbar-y-rail.in-scrolling
	{background-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.4); ?>;}
	.ps-container .ps-scrollbar-y-rail:hover .ps-scrollbar-y,
	.ps-container .ps-scrollbar-y-rail.hover .ps-scrollbar-y
	{background-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.7); ?>;}

	.main-widget-area .widget_title {
		color: <?php echo $nz_sidebar_title_color; ?>;
	}

	.sidebar-close {box-shadow: inset 0 0 0 2px <?php echo $nz_sidebar_color; ?>;}

	.sidebar-close span {
		background-color:<?php echo $nz_sidebar_color; ?>;
	}

	.main-widget-area .widget_nav_menu ul li a {
		border-bottom-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.3); ?>;
	}

	.main-widget-area .widget_nav_menu ul.menu > li:first-child > a {
		border-top-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.3); ?>;
	}

	.main-widget-area .widget_icl_lang_sel_widget a,
	.main-widget-area .widget_categories ul li a, 
	.main-widget-area .widget_pages ul li a, 
	.main-widget-area .widget_archive ul li a 
	{color: <?php echo $nz_sidebar_color; ?> !important;}

	.main-widget-area .widget_rss .widget_title a 
	{color: <?php echo $nz_sidebar_title_color; ?>;}

	.main-widget-area,
	.main-widget-area a
	{color: <?php echo $nz_sidebar_color; ?>;}

	.main-widget-area a:hover,
	.main-widget-area .widget_nav_menu ul li a:hover,
	.main-widget-area .widget_rss a:hover,
	.main-widget-area .widget_nz_recent_entries a:hover,
	.main-widget-area .widget_recent_entries a:hover,
	.main-widget-area .widget_recent_comments a:hover,
	.main-widget-area .widget_twitter ul li a:hover,
	.main-widget-area .widget_categories ul li a:hover,
	.main-widget-area .widget_pages ul li a:hover,
	.main-widget-area .widget_archive ul li a:hover,
	.main-widget-area .widget_mailchimp #mc-embedded-subscribe:hover + .icon-plus,
	.main-widget-area .widget_search .icon-search2:hover,
	.main-widget-area .widget_search #searchsubmit:hover + .icon-search,
	.main-widget-area .widget_product_search form:hover:after,
	.main-widget-area .woocommerce .star-rating
	{color: <?php echo $nz_sidebar_hover; ?>;}

	.main-widget-area .widget_icl_lang_sel_widget li a:hover,
	.main-widget-area .widget_categories ul li a:hover,
	.main-widget-area .widget_pages ul li a:hover,
	.main-widget-area .widget_archive ul li a:hover,
	.main-widget-area .widget_product_categories ul li a:hover
	{color: <?php echo $nz_sidebar_hover; ?> !important;}

	.main-widget-area .widget_icl_lang_sel_widget a
	{color: <?php echo $nz_sidebar_color; ?> !important;}

	.main-widget-area .widget_tag_cloud .tagcloud a,
	.main-widget-area .widget_product_tag_cloud .tagcloud a {
		color: <?php echo $nz_sidebar_color; ?> !important;
		background-color:<?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.1); ?>;
	}

	.main-widget-area .widget_tag_cloud .tagcloud a:hover,
	.main-widget-area .widget_product_tag_cloud .tagcloud a:hover {
		color: <?php echo $nz_sidebar_hover; ?> !important;
	}

	.main-widget-area textarea,
	.main-widget-area select,
	.main-widget-area input[type="date"],
	.main-widget-area input[type="datetime"],
	.main-widget-area input[type="datetime-local"],
	.main-widget-area input[type="email"],
	.main-widget-area input[type="month"],
	.main-widget-area input[type="number"],
	.main-widget-area input[type="password"],
	.main-widget-area input[type="search"],
	.main-widget-area input[type="tel"],
	.main-widget-area input[type="text"],
	.main-widget-area input[type="time"],
	.main-widget-area input[type="url"],
	.main-widget-area input[type="week"],
	.main-widget-area .widget_icl_lang_sel_widget > div > ul > li:first-child,
	.main-widget-area .widget_price_filter .price_slider_amount .price_label {
		border-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.3); ?>;
		color: <?php echo $nz_sidebar_color; ?>;
	}

	.main-widget-area textarea:focus,
	.main-widget-area select:focus,
	.main-widget-area input[type="date"]:focus,
	.main-widget-area input[type="datetime"]:focus,
	.main-widget-area input[type="datetime-local"]:focus,
	.main-widget-area input[type="email"]:focus,
	.main-widget-area input[type="month"]:focus,
	.main-widget-area input[type="number"]:focus,
	.main-widget-area input[type="password"]:focus,
	.main-widget-area input[type="search"]:focus,
	.main-widget-area input[type="tel"]:focus,
	.main-widget-area input[type="text"]:focus,
	.main-widget-area input[type="time"]:focus,
	.main-widget-area input[type="url"]:focus,
	.main-widget-area input[type="week"]:focus
	{border-color: <?php echo $nz_sidebar_color; ?>;}

	.main-widget-area .widget_calendar caption,
	.main-widget-area .widget_calendar table 
	{background-color: <?php echo $nz_sidebar_back; ?>;}

	.main-widget-area .widget_calendar th:first-child 
	{border-left-color:<?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.3); ?>;}
	.main-widget-area .widget_calendar th:last-child 
	{border-right-color:<?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.3); ?>;}
		
	.main-widget-area .widget_calendar td,
	.main-widget-area .widget_calendar td#prev,
	.main-widget-area .widget_calendar td#next,
	.main-widget-area .widget_calendar caption,
	.main-widget-area .widget_nz_recent_entries .post-date,
	.main-widget-area .widget_tag_cloud .tagcloud a,
	.main-widget-area .widget_shopping_cart .cart_list > li,
	.main-widget-area .widget_products .product_list_widget > li,
	.main-widget-area .widget_recently_viewed_products .product_list_widget > li,
	.main-widget-area .widget_recent_reviews .product_list_widget > li,
	.main-widget-area .widget_top_rated_products .product_list_widget > li
	{border-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.2); ?>;}

	.main-widget-area .widget_twitter ul li:before {
		background-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.05); ?>;	
	}

	.main-widget-area .widget_calendar td#today 
	{background-color:<?php echo ninzio_hex_to_rgba($nz_sidebar_hover, 0.1); ?>;}

	.main-widget-area .widget_rss ul li,
	.main-widget-area .widget_nz_recent_entries ul li,
	.main-widget-area .widget_recent_entries ul li,
	.main-widget-area .widget_recent_comments ul li,
	.main-widget-area .widget_twitter ul li 
	{border-bottom-color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.3); ?>;}

	.main-widget-area .widget_twitter ul li:before,
	.main-widget-area .widget_nz_recent_entries .post-date
	{color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.5); ?>;}

	.main-widget-area .widget_facebook .fb-like-box,
	.main-widget-area .widget_facebook .fb-like-box span,
	.main-widget-area .widget_facebook .fb-like-box span iframe
	{background-color: <?php echo $nz_sidebar_back; ?>;}

	.main-widget-area .widget_recent_reviews .star-rating:before,
	.main-widget-area .widget_top_rated_products .star-rating:before 
	{color: <?php echo ninzio_hex_to_rgba($nz_sidebar_color, 0.5); ?>;}

	.footer {
		background-color: <?php echo $nz_footer_back; ?>;
	}

	.desk .search {
		background-color: <?php echo ninzio_hex_to_rgba($nz_footer_back, 0.9); ?>;
	}

	.desk .search input[type="text"],
	.desk .search .icon-close {
		color: <?php echo $nz_footer_color; ?>;
	}

	.footer .footer-content {
		border-top:1px solid <?php echo $nz_footer_border; ?>;
	}

	.footer-info {color: <?php echo $nz_footer_color; ?>;}

	.footer .footer-content .social-links a,
	.footer .footer-menu ul li:after
	{color: <?php echo $nz_footer_color; ?> !important;}

	.footer .footer-menu ul li a
	{color: <?php echo $nz_footer_color; ?> !important;}

	.footer .footer-menu a:hover
	{color:<?php echo $nz_footer_color_hover; ?> !important;}

	.footer .footer-content .social-links a {background-color:<?php echo ninzio_hex_to_rgba($nz_footer_color,0.1); ?>;}

	.footer-widget-area 
	{background-color: <?php echo $nz_footer_wa_back; ?>;}

	.footer-widget-area .widget_title {
		color: <?php echo $nz_footer_wat_color; ?>;
	}

	.footer-widget-area .widget_nav_menu ul li a {
		border-bottom-color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;
	}

	.footer-widget-area .widget_nav_menu ul.menu > li:first-child > a {
		border-top-color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;
	}

	.footer-widget-area .widget_rss .widget_title a 
	{color: <?php echo $nz_footer_wat_color; ?>;}

	.footer-widget-area,
	.footer-widget-area a:not(.button)
	{color: <?php echo $nz_footer_wa_color; ?>;}

	.footer-widget-area a:not(.button):hover,
	.footer-widget-area .widget_nav_menu ul li a:hover 
	{color: <?php echo $nz_footer_wa_hover; ?>;}

	.footer-widget-area .widget_rss a:hover,
	.footer-widget-area .widget_nz_recent_entries a:hover,
	.footer-widget-area .widget_recent_entries a:hover,
	.footer-widget-area .widget_recent_comments a:hover,
	.footer-widget-area .widget_twitter ul li a:hover,
	.footer-widget-area .widget_categories ul li a:hover,
	.footer-widget-area .widget_pages ul li a:hover,
	.footer-widget-area .widget_archive ul li a:hover,
	.footer-widget-area .widget_mailchimp #mc-embedded-subscribe:hover + .icon-plus,
	.footer-widget-area .widget_search .icon-search2:hover,
	.footer-widget-area .widget_search #searchsubmit:hover + .icon-search,
	.footer-widget-area .widget_product_search form:hover:after,
	.footer-widget-area .woocommerce .star-rating
	{color: <?php echo $nz_footer_wa_hover; ?>;}

	.footer-widget-area .widget_icl_lang_sel_widget li a:hover,
	.footer-widget-area .widget_categories ul li a:hover,
	.footer-widget-area .widget_pages ul li a:hover,
	.footer-widget-area .widget_archive ul li a:hover,
	.footer-widget-area .widget_product_categories ul li a:hover 
	{color: <?php echo $nz_footer_wa_hover; ?> !important;}

	.footer-widget-area .widget_icl_lang_sel_widget a,
	.footer-widget-area .widget_categories ul li a, 
	.footer-widget-area .widget_pages ul li a, 
	.footer-widget-area .widget_archive ul li a
	{color: <?php echo $nz_footer_wa_color; ?> !important;}

	.footer-widget-area .widget_tag_cloud .tagcloud a,
	.footer-widget-area .widget_product_tag_cloud .tagcloud a {
		color: <?php echo $nz_footer_wa_color; ?> !important;
		background-color:<?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.1); ?>;
	}

	.footer-widget-area .widget_tag_cloud .tagcloud a:hover,
	.footer-widget-area .widget_product_tag_cloud .tagcloud a:hover {
		color: <?php echo $nz_footer_wa_hover; ?> !important;
	}

	.footer-widget-area textarea,
	.footer-widget-area select,
	.footer-widget-area input[type="date"],
	.footer-widget-area input[type="datetime"],
	.footer-widget-area input[type="datetime-local"],
	.footer-widget-area input[type="email"],
	.footer-widget-area input[type="month"],
	.footer-widget-area input[type="number"],
	.footer-widget-area input[type="password"],
	.footer-widget-area input[type="search"],
	.footer-widget-area input[type="tel"],
	.footer-widget-area input[type="text"],
	.footer-widget-area input[type="time"],
	.footer-widget-area input[type="url"],
	.footer-widget-area input[type="week"],
	.footer-widget-area .widget_icl_lang_sel_widget > div > ul > li:first-child {
		border-color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;
		color: <?php echo $nz_footer_wa_color; ?>;
	}

	.footer-widget-area textarea:focus,
	.footer-widget-area select:focus,
	.footer-widget-area input[type="date"]:focus,
	.footer-widget-area input[type="datetime"]:focus,
	.footer-widget-area input[type="datetime-local"]:focus,
	.footer-widget-area input[type="email"]:focus,
	.footer-widget-area input[type="month"]:focus,
	.footer-widget-area input[type="number"]:focus,
	.footer-widget-area input[type="password"]:focus,
	.footer-widget-area input[type="search"]:focus,
	.footer-widget-area input[type="tel"]:focus,
	.footer-widget-area input[type="text"]:focus,
	.footer-widget-area input[type="time"]:focus,
	.footer-widget-area input[type="url"]:focus,
	.footer-widget-area input[type="week"]:focus
	{border-color: <?php echo $nz_footer_wa_color; ?>;}

	.footer-widget-area .widget_calendar caption,
	.footer-widget-area .widget_calendar table 
	{background-color: <?php echo $nz_footer_wa_back; ?>;}

	.footer-widget-area .widget_calendar th:first-child 
	{border-left-color:<?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;}
	.footer-widget-area .widget_calendar th:last-child 
	{border-right-color:<?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;}
		
	.footer-widget-area .widget_calendar td,
	.footer-widget-area .widget_calendar td#prev,
	.footer-widget-area .widget_calendar td#next,
	.footer-widget-area .widget_calendar caption,
	.footer-widget-area .widget_nz_recent_entries .post-date,
	.footer-widget-area .widget_tag_cloud .tagcloud a,
	.footer-widget-area .widget_shopping_cart .cart_list > li,
	.footer-widget-area .widget_products .product_list_widget > li,
	.footer-widget-area .widget_recently_viewed_products .product_list_widget > li,
	.footer-widget-area .widget_recent_reviews .product_list_widget > li,
	.footer-widget-area .widget_top_rated_products .product_list_widget > li
	{border-color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;}

	.footer-widget-area .widget_twitter ul li:before {
		background-color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.2); ?>;
	}

	.footer-widget-area .widget_calendar td#today 
	{background-color:<?php echo ninzio_hex_to_rgba($nz_footer_wa_hover, 0.1); ?>;}

	.footer-widget-area .widget_rss ul li,
	.footer-widget-area .widget_nz_recent_entries ul li,
	.footer-widget-area .widget_recent_entries ul li,
	.footer-widget-area .widget_recent_comments ul li,
	.footer-widget-area .widget_twitter ul li 
	{border-bottom-color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;}

	.footer-widget-area .widget_twitter ul li:before 
	{color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.7); ?>;}

	.footer-widget-area .widget_facebook .fb-like-box,
	.footer-widget-area .widget_facebook .fb-like-box span,
	.footer-widget-area .widget_facebook .fb-like-box span iframe
	{background-color: <?php echo $nz_footer_wa_back; ?>;}

	.footer-widget-area .widget_recent_reviews .star-rating:before,
	.footer-widget-area .widget_top_rated_products .star-rating:before 
	{color: <?php echo ninzio_hex_to_rgba($nz_footer_wa_color, 0.3); ?>;}

/* RESPONSIVE
/*====================================================================*/

	<?php if(isset($nz_ninzio['custom-css-mob-port']) && !empty($nz_ninzio['custom-css-mob-port'])): ?>
		@media only screen and (max-width: 320px) {
			<?php echo $nz_ninzio['custom-css-mob-port']; ?>
		}
	<?php endif; ?>

	<?php if(isset($nz_ninzio['custom-css-mob-land']) && !empty($nz_ninzio['custom-css-mob-land'])): ?>
		@media only screen and (min-width: 321px) and (max-width: 480px) {
			<?php echo $nz_ninzio['custom-css-mob-land']; ?>
		}
	<?php endif; ?>

	<?php if(isset($nz_ninzio['custom-css-tab-port']) && !empty($nz_ninzio['custom-css-tab-port'])): ?>
		@media only screen and (min-width: 481px) and (max-width: 768px) {
			<?php echo $nz_ninzio['custom-css-tab-port']; ?>
		}
	<?php endif; ?>

	@media only screen and (min-width: 768px)  {

		.nz-row .col6 .nz-tabs.vertical .tab.active,
		.nz-row .col7 .nz-tabs.vertical .tab.active,
		.nz-row .col8 .nz-tabs.vertical .tabset .tab.active,
		.nz-row .col9 .nz-tabs.vertical .tabset .tab.active,
		.nz-row .col10 .nz-tabs.vertical .tabset .tab.active,
		.nz-row .col11 .nz-tabs.vertical .tabset .tab.active,
		.nz-row .col12 .nz-tabs.vertical .tabset .tab.active {
			border-left-color:<?php echo $nz_color; ?> !important;
		}

	}

	<?php if(isset($nz_ninzio['custom-css-tab-land']) && !empty($nz_ninzio['custom-css-tab-land'])): ?>
		@media only screen and (min-width: 769px) and (max-width: 1024px) {
			<?php echo $nz_ninzio['custom-css-tab-land']; ?>
		}
	<?php endif; ?>
	
	@media only screen and (min-width:1025px)  {

		/*STATIC
		===========*/

			.desk .header-top {background-color:<?php echo $nz_desk_top_back; ?>;}
			.desk-slogan {color: <?php echo $nz_desk_top_color; ?>;}
			
			.desk .social-links a,
			.desk .ls a {
				color: <?php echo $nz_desk_sl_color; ?> !important;
			}

			.desk .ls > div > ul > li > a,
			.desk .ls > div.lang_sel_list_vertical > ul > li:last-child > a,
			.desk .ls > div.lang_sel_list_horizontal > ul > li:last-child > a {
				border-color: <?php echo ninzio_hex_to_rgba($nz_desk_sl_color, 0.1); ?> !important;
			}

			.desk .ls a {
				font-size: <?php echo $nz_main_font_size; ?> !important;
				font-family:<?php echo $nz_main_font_family; ?>;
			}

			.desk .ls ul ul a {
				border-bottom-color: <?php echo ninzio_hex_to_rgba($nz_desk_sl_color, 0.1); ?> !important;
				border-left-color: <?php echo ninzio_hex_to_rgba($nz_desk_sl_color, 0.1); ?> !important;
				border-right-color: <?php echo ninzio_hex_to_rgba($nz_desk_sl_color, 0.1); ?> !important;
			}

			.desk .ls ul ul li:first-child a {
				border-top-color: <?php echo ninzio_hex_to_rgba($nz_desk_sl_color, 0.1); ?> !important;
			}

			<?php if($nz_ninzio['desk-top-back']['alpha'] == "0.00"): ?>
				.desk .ls ul ul a,
				.desk #lang_sel_click .lang_sel_sel {background-color:<?php echo $nz_desk_ls_back_hov; ?> !important;}
			<?php else: ?>
				.desk .ls ul ul a,
				.desk #lang_sel_click .lang_sel_sel {background-color:<?php echo $nz_desk_top_back; ?> !important;}
			<?php endif; ?>

			.desk .ls li:hover > a,
			.desk #lang_sel_click li:hover > .lang_sel_sel {
				color: <?php echo $nz_desk_ls_hov; ?> !important;
				background-color:<?php echo $nz_desk_ls_back_hov; ?> !important;
			}

			.desk .ls ul ul {width: <?php echo $nz_desk_ls_w; ?> !important;}

			.desk {height: <?php echo $nz_desk_height; ?>px;}
			.stuck-false.desk.top-true {height: <?php echo $nz_desk_height+40; ?>px;}

			.desk .search {height:<?php echo $nz_desk_height; ?>px;}
			.desk .search.animated {top:<?php echo $nz_desk_height; ?>px;}
			.stuck-false.top-true .search.animated {top:<?php echo $nz_desk_height+40; ?>px;}


			.desk .search span:before,
			.desk .search span {
				height: <?php echo $nz_desk_height; ?>px;
				line-height: <?php echo $nz_desk_height; ?>px;
			}

			.desk .header-content {
				background-color: <?php echo $nz_desk_back; ?>;
				height: <?php echo $nz_desk_height; ?>px;
			}

			.desk-menu > ul > li,
			.desk .cart-toggle,
			.desk .highlights-menu {
				line-height: <?php echo $nz_desk_height; ?>px;
				height: <?php echo $nz_desk_height; ?>px;
			}

			.desk-menu > ul > li > a,
			.desk .cart-toggle .cart-contents {
				color: <?php echo $nz_desk_menu_color_reg; ?>;
				text-transform: <?php echo $nz_desk_menu_text_transform; ?>;
				font-weight: <?php echo $nz_desk_menu_font_weight; ?>;
				font-size: <?php echo $nz_desk_menu_font_size; ?>;
				font-family: <?php echo $nz_desk_menu_font_family; ?>;
				padding-right:<?php echo $nz_desk_menu_p; ?>px;
				padding-left:<?php echo $nz_desk_menu_p; ?>px;
			}

			.desk .cart-dropdown .widget_shopping_cart .cart_list > li a.remove {
				background-color: <?php echo ninzio_hex_to_rgba($nz_desk_submenu_color_reg,0.1); ?>;;
				color: <?php echo $nz_desk_submenu_color_reg; ?>;;
			}

			.sidebar-toggle span {background-color: <?php echo $nz_desk_menu_color_reg; ?>;}

			.desk-menu > ul > li:hover > a,
			.desk-menu > ul > li.one-page-active > a
			{color: <?php echo $nz_desk_menu_color_hov; ?>;}

			.desk-di-true .desk-menu > ul > li > a:not(:only-child) {
				padding-right:<?php echo ($nz_desk_menu_p+15); ?>px;
				padding-left:<?php echo $nz_desk_menu_p; ?>px;
			}

			.desk-menu > ul > li > a > .di {right: <?php echo round(($nz_desk_menu_p+10)/2,0); ?>px;}
			.desk-menu > ul > li {margin-right:<?php echo $nz_desk_menu_m; ?>px;}

			.desk .cart-toggle,
			.desk .search-toggle,
			.desk .sidebar-toggle
			{margin-left:<?php echo $nz_desk_menu_m; ?>px;}

			.desk .search-toggle 
			{color: <?php echo $nz_desk_menu_color_reg; ?>;}

			.desk.effect-upperline .desk-menu > ul > li > a:after,
			.desk.effect-fill .desk-menu > ul > li:hover,
			.desk.effect-fill .desk-menu > ul > li.one-page-active,
			.desk.effect-fill-boxed .desk-menu > ul > li:hover > a,
			.desk.effect-fill-boxed .desk-menu > ul > li.one-page-active > a,
			.desk.effect-line .desk-menu > ul > li > a:after
			{background-color: <?php echo $nz_desk_menu_effect_color; ?>;}

			.desk.effect-outline .desk-menu > ul > li > a:after 
			{border-color: <?php echo $nz_desk_menu_effect_color; ?>;}

			.desk-menu > ul > li > .sub-menu,
			.desk .cart-dropdown 
			{top:<?php echo $nz_desk_height; ?>px;}

			.menu-border-true .desk-menu > ul > li > a:before,
			.desk .cart-toggle .cart-contents:before,
			.desk .search-toggle:after,
			.desk .sidebar-toggle:before,
			.desk .sidebar-toggle:after {
				left:-<?php echo $nz_desk_menu_m/2; ?>px;
				background-color: <?php echo $nz_desk_menu_border_color; ?>;
			}

			.menu-border-true .desk-menu > ul ul {
				left:-<?php echo $nz_desk_menu_m/2; ?>px;
			}

			.desk .sidebar-toggle:after {
				left: auto !important;
				right: -<?php echo $nz_desk_menu_m/2; ?>px;
			}

			.desk-menu .sub-menu li {line-height: <?php echo $nz_desk_submenu_line_height; ?>;}

			.desk-menu .sub-menu li > a {
				color: <?php echo $nz_desk_submenu_color_reg; ?>;
				background-color: <?php echo $nz_desk_submenu_back; ?>;
				border-color:<?php echo $nz_desk_submenu_border_col; ?>;
				text-transform: <?php echo $nz_desk_submenu_text_transform; ?>;
				font-weight: <?php echo $nz_desk_submenu_font_weight; ?>;
				font-size: <?php echo $nz_desk_submenu_font_size; ?>;
				font-family: <?php echo $nz_desk_submenu_font_family; ?>;
				line-height: <?php echo $nz_desk_submenu_line_height; ?>;
			}

			.desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {
				border-bottom-color:<?php echo $nz_desk_submenu_back; ?>;
			}
			.desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
				border-bottom-color:<?php echo $nz_desk_submenu_border_col; ?>;
			}

			.desk-menu > ul > .megamenu > ul {
				border-color:<?php echo $nz_desk_submenu_border_col; ?>;
				background-color: <?php echo $nz_desk_submenu_back; ?>;
			}

			.desk-menu .megamenu .sub-menu li:hover > a {
				background-color: <?php echo $nz_desk_submenu_back; ?>;
			}

			.desk-menu .sub-menu li:hover > a,
			.desk-menu .megamenu .sub-menu li > a:hover {
				color: <?php echo $nz_desk_submenu_color_hov; ?>;
				background-color: <?php echo $nz_desk_submenu_back_hov; ?>;
			}

			.desk-menu > ul > .megamenu > ul > li 
			{border-right-color: <?php echo $nz_desk_submenu_border_col; ?>;}

			.desk-menu .megamenu > .sub-menu > li:last-child > a 
			{border-bottom-color:<?php echo $nz_desk_submenu_border_col; ?> !important;}

			.desk-menu .megamenu > .sub-menu > li > a {
				text-transform: <?php echo $nz_desk_megamenu_text_transform; ?>;
				font-weight: <?php echo $nz_desk_megamenu_font_weight; ?>;
				color:<?php echo $nz_desk_megamenu_top_color ?>
			}

			.desk-menu .megamenu > .sub-menu .sub-menu > li > a {
				text-transform: <?php echo $nz_desk_megamenu_sub_text_transform; ?>;
				font-weight: <?php echo $nz_desk_megamenu_sub_font_weight; ?>;
			}

			<?php if(!empty($nz_desk_submenu_border_top_color)): ?>
				.desk .sub-menu > li:first-child,
				.desk-menu .megamenu > .sub-menu,
				.desk .cart-dropdown {
					border-top:2px solid <?php echo $nz_desk_submenu_border_top_color; ?>;
				}

				.desk .cart-dropdown {
					border-top:2px solid <?php echo $nz_desk_submenu_border_top_color; ?> !important;
				}

				.desk .sub-menu > li:first-child > a,
				.desk .cart-dropdown .widget_shopping_cart
				{border-top: none !important;}

				.desk-menu > ul > .megamenu > ul:after,
				.desk-menu > ul > .megamenu > ul:before {
					background-color: <?php echo $nz_desk_submenu_border_top_color; ?>;
				}
				.desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
					border-bottom-color:<?php echo $nz_desk_submenu_border_top_color; ?>;
				}
				.desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {top: -8px;}
				.desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
					left: 27px;
					top: -11px;
					border-left: 11px solid transparent;
					border-right: 11px solid transparent;
					border-bottom-width: 11px;
				}
			<?php endif; ?>

			.desk .cart-dropdown {
				background-color: <?php echo $nz_desk_submenu_back; ?>;
				color: <?php echo $nz_desk_submenu_color_reg; ?>;
				font-weight: <?php echo $nz_desk_submenu_font_weight; ?>;
				font-size: <?php echo $nz_desk_submenu_font_size; ?>;
				font-family: <?php echo $nz_desk_submenu_font_family; ?>;
				line-height: <?php echo $nz_desk_submenu_line_height; ?>;
			}

			.desk .cart-dropdown .widget_shopping_cart {
				border-color:<?php echo $nz_desk_submenu_border_col; ?>;
			}

			.desk .cart-dropdown .widget_shopping_cart .cart_list > li:not(.empty) {
				border-bottom-color:<?php echo $nz_desk_submenu_border_col; ?>;
			}

			.desk .cart-dropdown .widget_shopping_cart .cart_list > li > a {
				color: <?php echo $nz_desk_submenu_color_reg; ?>;
			}

		/*STUCKED
		===========*/

			.stuck-true .header-top {background-color:<?php echo $nz_stuck_top_back; ?>;}
			.stuck-true .desk-slogan {color: <?php echo $nz_stuck_top_color; ?>;}
			
			.stuck-true .social-links a,
			.stuck-true .ls a {
				color: <?php echo $nz_stuck_sl_color; ?> !important;
			}

			.stuck-true .ls a:hover {color: <?php echo $nz_stuck_ls_hov; ?> !important;}

			.stuck-true .ls > div > ul > li > a,
			.stuck-true .ls > div.lang_sel_list_vertical > ul > li:last-child > a,
			.stuck-true .ls > div.lang_sel_list_horizontal > ul > li:last-child > a {
				border-color: <?php echo ninzio_hex_to_rgba($nz_stuck_sl_color, 0.1); ?> !important;
			}
			.stuck-true .ls ul ul a {
				border-bottom-color: <?php echo ninzio_hex_to_rgba($nz_stuck_sl_color, 0.1); ?> !important;
				border-left-color: <?php echo ninzio_hex_to_rgba($nz_stuck_sl_color, 0.1); ?> !important;
				border-right-color: <?php echo ninzio_hex_to_rgba($nz_stuck_sl_color, 0.1); ?> !important;
			}
			.stuck-true .ls ul ul li:first-child a {
				border-top-color: <?php echo ninzio_hex_to_rgba($nz_stuck_sl_color, 0.1); ?> !important;
			}
			<?php if(isset($nz_ninzio['stuck-top-back']['color']) && !empty($nz_ninzio['stuck-top-back']['color']) && $nz_ninzio['stuck-top-back']['alpha'] == "0.00"): ?>
				.stuck-true .ls ul ul a,
				.stuck-true #lang_sel_click .lang_sel_sel {background-color:<?php echo $nz_stuck_ls_back_hov; ?> !important;}
			<?php else: ?>
				.stuck-true .ls ul ul a,
				.stuck-true #lang_sel_click .lang_sel_sel {background-color:<?php echo $nz_stuck_top_back; ?> !important;}
			<?php endif; ?>
			.stuck-true .ls li:hover > a,
			.stuck-true #lang_sel_click li:hover > .lang_sel_sel {
				color: <?php echo $nz_stuck_ls_hov; ?> !important;
				background-color:<?php echo $nz_stuck_ls_back_hov; ?> !important;
			}
			.stuck-true {height: <?php echo $nz_stuck_height; ?>px;}
			.stuck-true.stuck-top-true {height: <?php echo $nz_stuck_height+40; ?>px;}

			.stuck-true .search {height:<?php echo $nz_stuck_height; ?>px;}
			.stuck-true .search.animated {top:<?php echo $nz_stuck_height; ?>px;}
			.stuck-true.stuck-top-true .search.animated {top:<?php echo $nz_stuck_height+40; ?>px;}

			.stuck-true .search span:before,
			.stuck-true .search span {
				height: <?php echo $nz_stuck_height; ?>px;
				line-height: <?php echo $nz_stuck_height; ?>px;
			}

			.stuck-true .header-content {
				background-color: <?php echo $nz_stuck_back; ?>;
				height: <?php echo $nz_stuck_height; ?>px;
			}

			.stuck-true + .rich-header .page-title-content {
				margin-top:<?php echo $nz_stuck_height/2; ?>px; 
			}

			.stuck-true .desk-menu > ul > li,
			.stuck-true .cart-toggle,
			.stuck-true .highlights-menu {
				line-height: <?php echo $nz_stuck_height; ?>px;
				height: <?php echo $nz_stuck_height; ?>px;
			}

			.stuck-true .sidebar-toggle span {background-color: <?php echo $nz_stuck_menu_color_reg; ?>;}

			.stuck-true .desk-menu > ul > li > a,
			.stuck-true .cart-toggle .cart-contents 
			{color: <?php echo $nz_stuck_menu_color_reg; ?>;}

			.stuck-true .cart-dropdown .widget_shopping_cart .cart_list > li a.remove {
				background-color: <?php echo ninzio_hex_to_rgba($nz_stuck_submenu_color_reg,0.1); ?>;;
				color: <?php echo $nz_stuck_submenu_color_reg; ?>;;
			}

			.stuck-true .desk-menu > ul > li:hover > a,
			.stuck-true .desk-menu > ul > li.one-page-active > a 
			{color: <?php echo $nz_stuck_menu_color_hov; ?>;}
			
			.stuck-true .search-toggle
			{color: <?php echo $nz_stuck_menu_color_reg; ?>;}
			
			.stuck-true.effect-upperline .desk-menu > ul > li > a:after,
			.stuck-true.effect-fill .desk-menu > ul > li:hover,
			.stuck-true.effect-fill .desk-menu > ul > li.one-page-active,
			.stuck-true.effect-fill-boxed .desk-menu > ul > li:hover > a,
			.stuck-true.effect-fill-boxed .desk-menu > ul > li.one-page-active > a,
			.stuck-true.effect-line .desk-menu > ul > li > a:after
			{background-color: <?php echo $nz_stuck_menu_effect_color; ?>;}

			.stuck-true.effect-outline .desk-menu > ul > li > a:after
			{border-color: <?php echo $nz_stuck_menu_effect_color; ?>;}

			.menu-border-true.stuck-true .desk-menu > ul > li > a:before,
			.stuck-true .cart-toggle .cart-contents:before,
			.stuck-true .search-toggle:after,
			.stuck-true .sidebar-toggle:before,
			.stuck-true .sidebar-toggle:after {
				background-color: <?php echo $nz_stuck_menu_border_color; ?>;
			}

			.stuck-true .desk-menu > ul > li > .sub-menu,
			.stuck-true .cart-dropdown 
			{top:<?php echo $nz_stuck_height; ?>px;}

			.stuck-true .desk-menu .sub-menu li > a {
				color: <?php echo $nz_stuck_submenu_color_reg; ?>;
				background-color: <?php echo $nz_stuck_submenu_back; ?>;
				border-color:<?php echo $nz_stuck_submenu_border_col; ?>;
			}

			.stuck-true .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {
				border-bottom-color:<?php echo $nz_stuck_submenu_back; ?>;
			}
			.stuck-true .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
				border-bottom-color:<?php echo $nz_stuck_submenu_border_col; ?>;
			}

			.stuck-true .desk-menu > ul > .megamenu > ul {
				border-color:<?php echo $nz_stuck_submenu_border_col; ?>;
				background-color: <?php echo $nz_stuck_submenu_back; ?>;
			}

			.stuck-true .desk-menu .megamenu .sub-menu li:hover > a {
				color: <?php echo $nz_stuck_submenu_color_reg; ?>;
				background-color: <?php echo $nz_stuck_submenu_back; ?>;
			}

			.stuck-true .desk-menu .sub-menu li:hover > a,
			.stuck-true .desk-menu .megamenu .sub-menu li > a:hover {
				color: <?php echo $nz_stuck_submenu_color_hov; ?>;
				background-color: <?php echo $nz_stuck_submenu_back_hov; ?>;
			}

			.stuck-true .desk-menu > ul > .megamenu > ul > li 
			{border-right-color: <?php echo $nz_stuck_submenu_border_col; ?>;}

			.stuck-true .desk-menu .megamenu > .sub-menu > li:last-child > a 
			{border-bottom-color:<?php echo $nz_stuck_submenu_border_col; ?> !important;}

			.stuck-true .desk-menu .megamenu > .sub-menu > li > a {
				color:<?php echo $nz_stuck_megamenu_top_color ?>
			}

			<?php if(!empty($nz_stuck_submenu_border_top_color)): ?>
				.stuck-true .sub-menu > li:first-child,
				.stuck-true .desk-menu .megamenu > .sub-menu,
				.stuck-true .cart-dropdown {
					border-top:2px solid <?php echo $nz_stuck_submenu_border_top_color; ?>;
				}

				.stuck-true .cart-dropdown {
					border-top:2px solid <?php echo $nz_stuck_submenu_border_top_color; ?> !important;
				}

				.stuck-true .sub-menu > li:first-child > a,
				.stuck-true .cart-dropdown .widget_shopping_cart
				{border-top: none !important;}

				.stuck-true .desk-menu > ul > .megamenu > ul:after,
				.stuck-true .desk-menu > ul > .megamenu > ul:before {
					background-color: <?php echo $nz_stuck_submenu_border_top_color; ?>;
				}

				.stuck-true .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {
					border-bottom-color:<?php echo $nz_stuck_submenu_back; ?>;
				}
				.stuck-true .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
					border-bottom-color:<?php echo $nz_stuck_submenu_border_top_color; ?>;
				}
				.stuck-true .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {top: -8px;}
				.stuck-true .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
					left: 27px;
					top: -11px;
					border-left: 11px solid transparent;
					border-right: 11px solid transparent;
					border-bottom-width: 11px;
				}
			<?php endif; ?>

			.stuck-true .cart-dropdown {
				background-color: <?php echo $nz_stuck_submenu_back; ?>;
				color: <?php echo $nz_stuck_submenu_color_reg; ?>;
			}

			.stuck-true .cart-dropdown .widget_shopping_cart {
				border-color:<?php echo $nz_stuck_submenu_border_col; ?>;
			}

			.stuck-true .cart-dropdown .widget_shopping_cart .cart_list > li:not(.empty) {border-bottom-color:<?php echo $nz_stuck_submenu_border_col; ?>;}
			.stuck-true .cart-dropdown .widget_shopping_cart .cart_list > li > a {color: <?php echo $nz_stuck_submenu_color_reg; ?>;}

			.blank-false .stuck-false + #ninzio-slider[data-autoheight="true"] {
				height:calc(100% - <?php echo $nz_desk_height; ?>px);
				height: calc(100vh - <?php echo $nz_desk_height; ?>px);
			}
			.blank-false .stuck-false + .admin-bar #ninzio-slider[data-autoheight="true"] {
				height:calc(100% - <?php echo $nz_desk_height+32; ?>px);
			}

			.blank-false .stuck-false.top-true + #ninzio-slider[data-autoheight="true"] {
				height:calc(100% - <?php echo $nz_desk_height+40; ?>px);
				height: calc(100vh - <?php echo $nz_desk_height+40; ?>px);
			}
			.blank-false .stuck-false.top-true + .admin-bar #ninzio-slider[data-autoheight="true"] {
				height:calc(100% - <?php echo $nz_desk_height+72; ?>px);
			}

		/*FIXED
		===========*/

			.fixed {height: <?php echo $nz_fixed_height; ?>px !important;}

			.fixed .search {height:<?php echo $nz_fixed_height; ?>px;}
			.fixed .search.animated {top:<?php echo $nz_fixed_height; ?>px;}

			.fixed .search span:before,
			.fixed .search span {
				height: <?php echo $nz_fixed_height; ?>px;
				line-height: <?php echo $nz_fixed_height; ?>px;
			}

			.fixed .header-content {
				background-color: <?php echo $nz_fixed_back; ?>;
				height: <?php echo $nz_fixed_height; ?>px;
			}

			.fixed .desk-menu > ul > li,
			.fixed .cart-toggle,
			.fixed .highlights-menu {
				line-height: <?php echo $nz_fixed_height; ?>px;
				height: <?php echo $nz_fixed_height; ?>px;
			}

			.fixed .desk-menu > ul > li > a,
			.fixed .cart-toggle .cart-contents 
			{color: <?php echo $nz_fixed_menu_color_reg; ?>;}

			.fixed .cart-dropdown .widget_shopping_cart .cart_list > li a.remove {
				background-color: <?php echo ninzio_hex_to_rgba($nz_fixed_submenu_color_reg,0.1); ?>;;
				color: <?php echo $nz_fixed_submenu_color_reg; ?>;;
			}

			.fixed .sidebar-toggle span {background-color: <?php echo $nz_fixed_menu_color_reg; ?>;}

			.fixed .desk-menu > ul > li:hover > a,
			.fixed .desk-menu > ul > li.one-page-active > a
			{color: <?php echo $nz_fixed_menu_color_hov; ?>;}

			.fixed .search-toggle
			{color: <?php echo $nz_fixed_menu_color_reg; ?>;}
			
			.fixed.effect-upperline .desk-menu > ul > li > a:after,
			.fixed.effect-fill .desk-menu > ul > li:hover,
			.fixed.effect-fill .desk-menu > ul > li.one-page-active,
			.fixed.effect-fill-boxed .desk-menu > ul > li:hover > a,
			.fixed.effect-fill-boxed .desk-menu > ul > li.one-page-active > a,
			.fixed.effect-line .desk-menu > ul > li > a:after
			{background-color: <?php echo $nz_fixed_menu_effect_color; ?>;}

			.fixed.effect-outline .desk-menu > ul > li > a:after
			{border-color: <?php echo $nz_fixed_menu_effect_color; ?>;}

			.menu-border-true.fixed .desk-menu > ul > li > a:before,
			.fixed .cart-toggle .cart-contents:before,
			.fixed .search-toggle:after,
			.fixed .sidebar-toggle:before,
			.fixed .sidebar-toggle:after {
				background-color: <?php echo $nz_fixed_menu_border_color; ?>;
			}

			.fixed .desk-menu > ul > li > .sub-menu,
			.fixed .cart-dropdown 
			{top:<?php echo $nz_fixed_height; ?>px;}

			.fixed .desk-menu .sub-menu li > a {
				color: <?php echo $nz_fixed_submenu_color_reg; ?>;
				background-color: <?php echo $nz_fixed_submenu_back; ?>;
				border-bottom-color:<?php echo $nz_fixed_submenu_border_col; ?>;
			}

			.fixed .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {
				border-bottom-color:<?php echo $nz_fixed_submenu_back; ?>;
			}
			.fixed .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
				border-bottom-color:<?php echo $nz_fixed_submenu_border_col; ?>;
			}

			.fixed .desk-menu > ul > .megamenu > ul {
				border-color:<?php echo $nz_fixed_submenu_border_col; ?>;
				background-color: <?php echo $nz_fixed_submenu_back; ?>;
			}

			.fixed .desk-menu .megamenu .sub-menu li:hover > a {
				color: <?php echo $nz_fixed_submenu_color_reg; ?>;
				background-color: <?php echo $nz_fixed_submenu_back; ?>;
			}

			.fixed .desk-menu .sub-menu li:hover > a,
			.fixed .desk-menu .megamenu .sub-menu li > a:hover {
				color: <?php echo $nz_fixed_submenu_color_hov; ?>;
				background-color: <?php echo $nz_fixed_submenu_back_hov; ?>;
			}

			.fixed .desk-menu > ul > .megamenu > ul > li 
			{border-right-color: <?php echo $nz_fixed_submenu_border_col; ?>;}

			.fixed .desk-menu .megamenu > .sub-menu > li:last-child > a 
			{border-bottom-color:<?php echo $nz_fixed_submenu_border_col; ?> !important;}

			.fixed .desk-menu .megamenu > .sub-menu > li > a {
				color:<?php echo $nz_fixed_megamenu_top_color ?>
			}

			<?php if(!empty($nz_fixed_submenu_border_top_color)): ?>
				.fixed .sub-menu > li:first-child,
				.fixed .desk-menu .megamenu > .sub-menu,
				.fixed .cart-dropdown {
					border-top:2px solid <?php echo $nz_fixed_submenu_border_top_color; ?>;
				}

				.fixed .cart-dropdown {
					border-top:2px solid <?php echo $nz_fixed_submenu_border_top_color; ?> !important;
				}

				.fixed .desk-menu > ul > .megamenu > ul:after,
				.fixed .desk-menu > ul > .megamenu > ul:before {
					background-color: <?php echo $nz_fixed_submenu_border_top_color; ?>;
				}

				.fixed .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {
					border-bottom-color:<?php echo $nz_fixed_submenu_back; ?>;
				}
				.fixed .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
					border-bottom-color:<?php echo $nz_fixed_submenu_border_top_color; ?>;
				}
				.fixed .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:before {top: -8px;}
				.fixed .desk-menu > ul > li:not(.megamenu) > ul > li:first-child:after {
					left: 27px;
					top: -11px;
					border-left: 11px solid transparent;
					border-right: 11px solid transparent;
					border-bottom-width: 11px;
				}
			<?php endif; ?>

			.fixed .cart-dropdown {
				background-color: <?php echo $nz_fixed_submenu_back; ?>;
				color: <?php echo $nz_fixed_submenu_color_reg; ?>;
			}

			.fixed .cart-dropdown .widget_shopping_cart {
				border-color:<?php echo $nz_fixed_submenu_border_col; ?>;
			}

			.fixed .cart-dropdown .widget_shopping_cart .cart_list > li:not(.empty) {border-bottom-color:<?php echo $nz_fixed_submenu_border_col; ?>;}
			.fixed .cart-dropdown .widget_shopping_cart .cart_list > li > a {color: <?php echo $nz_fixed_submenu_color_reg; ?>;}
	
	}

</style>