<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if($atts['custom_class']){$custom_class = ' '.$atts['custom_class'];}else{$custom_class = '';}
if($atts['custom_id']){$custom_id = ' id="'.$atts['custom_id'].'"';}else{$custom_id = '';}
if($atts['bg_color']){$bg_color = ' id="'.$atts['bg_color'].'"';}else{$custom_id = '';}

$style = '';

if($atts['bg_color']){
	if($atts['bg_color']){$bg_color = 'background-color: ' . $atts['bg_color'];}else{$bg_color = '';}
	$style = ' style="' . $bg_color . '"';
}

$animate = '';
$animate_class = '';

if($atts['animate_off'] == 1){
	if($atts['select_animate']){
		$animate_class = ' wow ' . $atts['select_animate'];
	}

	if($atts['duration']){
		$animate = $animate . ' data-wow-duration="' . ($atts['duration'] / 1000) .'s"';
	}

	if($atts['delay']){
		$animate = $animate . ' data-wow-delay="' . ($atts['delay'] / 1000) .'s"';
	}

	if($atts['offset']){
		$animate = $animate . ' data-wow-offset="' . $atts['offset'] .'"';
	}

	if($atts['iteration']){
		$animate = $animate . ' data-wow-iteration="' . $atts['iteration'] .'"';
	}
}

?>

<div class="fw-kdv-custom-img-block<?php echo $custom_class.$animate_class; ?>"<?php echo $custom_id; ?><?php echo $style; ?><?php echo $animate; ?>>
	<h3><?php echo $atts['title']; ?></h3>
<?php
	echo $atts['custom_text'];
?>
</div>