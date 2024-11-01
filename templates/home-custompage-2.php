<!--custompage2 section-->
<?php
$custompage2_title = $custompage2_subtitle = $custompage2_desc = $custompage2_parallax = "";
$custompage2_align = esc_attr(get_theme_mod( 'custompage2_align', 'center'));
$custompage2_title = esc_attr(get_theme_mod( 'custompage2_title', __( 'Welcome To TemplatesNext OnePager', 'txo' )));
$custompage2_subtitle = esc_attr(get_theme_mod( 'custompage2_subtitle', __( 'The Next Generation Media Development Company', 'txo' )));
$custompage2_id = esc_attr(get_theme_mod( 'custompage2_page_id', 2));

$custompage2_bg_image = esc_url(get_theme_mod( 'custompage2_bg_image', '' ));
$custompage2_bg_repeat = esc_attr(get_theme_mod( 'custompage2_bg_repeat', 'repeat' ));
$custompage2_bg_attach = esc_attr(get_theme_mod( 'custompage2_bg_attach', 'fixed' ));
$custompage2_bg_size = esc_attr(get_theme_mod( 'custompage2_bg_size', 'auto' ));
$custompage2_bg_position = esc_attr(get_theme_mod( 'custompage2_bg_position', 'left top' ));
$custompage2_bg_color = esc_attr(get_theme_mod( 'custompage2_bg_color', 'rgb(255, 255, 255)' ));
$custompage2_overlay_color = esc_attr(get_theme_mod( 'custompage2_overlay_color', 'rgba(255, 255, 255, 0.0)' ));
$custompage2_fullwidth = esc_attr(get_theme_mod( 'custompage2_fullwidth', 1 ));

$custompage2_title_color = esc_attr(get_theme_mod( 'custompage2_title_color', '#484848' ));
$custompage2_subtitle_color = esc_attr(get_theme_mod( 'custompage2_subtitle_color', '#595959' ));

$section_style = '';
$custompage2_parallax = 0;

if( $custompage2_parallax == 0 ) {
	$section_style .= 'background-image : url('. $custompage2_bg_image . '); ';
}
$section_style .= 'background-repeat : '. $custompage2_bg_repeat . '; ';
$section_style .= 'background-attachment : '. $custompage2_bg_attach . '; ';
$section_style .= 'background-size : '. $custompage2_bg_size . '; ';
$section_style .= 'background-position : '. $custompage2_bg_position . '; ';
$section_style .= 'background-color : '. $custompage2_bg_color . ';';

$custompage2_title_color = esc_attr(get_theme_mod( 'custompage2_title_color', '#484848' ));
$custompage2_subtitle_color = esc_attr(get_theme_mod( 'custompage2_subtitle_color', '#595959' ));
$custompage2_text_color = esc_attr(get_theme_mod( 'custompage2_text_color', '#646464' ));

$section_fullwidth = '';

if( $custompage2_fullwidth == 1 )
{
	$section_fullwidth = 'tx-fullwidthrow tx-fwidth';
}

$custompage2_top_padding = esc_attr(get_theme_mod( 'custompage2_top_padding', 72 ));
$custompage2_bottom_padding = esc_attr(get_theme_mod( 'custompage2_bottom_padding', 72 ));
$custompage2_shape_seperator = esc_attr(get_theme_mod( 'custompage2_shape_seperator', 'none' ));
$custompage2_ss_color_1 = esc_attr(get_theme_mod( 'custompage2_ss_color_1', '#83b735' ));
$custompage2_ss_color_2 = esc_attr(get_theme_mod( 'custompage2_ss_color_2', '#649f0c' ));

?>
<section id="custompage2" class="txsec-custompage2 txo-section">
	<?php txo_shape_seperator(get_theme_mod( 'custompage2_shape_seperator', 'none' ), $custompage2_ss_color_1, $custompage2_ss_color_2, 1); ?>
    <div class="shortcut-wrap">
        <div class="customizer-shortcut" style="display:none;">
            <span class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></span>
        </div>
		<?php if ( current_user_can( 'customize' ) ) { ?> 
            <div class="customizer-shortcut-admin">
                <a href="<?php echo admin_url( 'customize.php?autofocus[panel]=custompage2' ); ?>" class="editoptions"><?php _e( 'Edit Section', 'txo' ) ?></a>
            </div>
        <?php }?>
	</div>
    
    <div class="custompage2_inner txo-section-inner txo-align-<?php echo $custompage2_align; ?>" style="text-align: <?php echo $custompage2_align; ?>">
    	
        <div class="tx-row <?php echo $section_fullwidth; ?>" style="">
            <div class="tx-fw-inner" style="<?php echo $section_style; ?>">	
                <div class="tx-fw-overlay" style="background-color: <?php echo $custompage2_overlay_color; ?> ;">        
                    <div class="tx-fw-content" style="color: <?php echo $custompage2_text_color; ?>; padding-top: <?php echo $custompage2_top_padding; ?>px; padding-bottom: <?php echo $custompage2_bottom_padding; ?>px;">
                        <h2 class="custompage2-title txo-title" style="color: <?php echo $custompage2_title_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($custompage2_title)); ?></h2>
                        <h3 class="custompage2-subtitle txo-subtitle" style="color: <?php echo $custompage2_subtitle_color; ?>"><?php echo do_shortcode(htmlspecialchars_decode($custompage2_subtitle)); ?></h3>
                        <div class="custompage2-desc"><?php echo apply_filters('the_content', get_post_field('post_content', $custompage2_id)); ?></div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>
<!--/custompage2 section-->

