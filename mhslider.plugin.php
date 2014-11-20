<?php

/**
 *  MHslider plugin
 *
 *  @package Monstra
 *  @subpackage Plugins
 *  @author MonstraHost
 *  @License open - attribution appreciated 
 *  @version 0.1a
 *
 */

// Register plugin
Plugin::register( __FILE__,
                __('MHslider', 'mhslider'),
                __('MHslider plugin for Monstra', 'mhslider'),
                '0.1a',
                'MonstraHost',
                'http://www.monstrahost.com/',
                'mhslider');



// Load Javascript and CSS assets
	Stylesheet::add('plugins/mhslider/css/mhslider.css','frontend',17);

	Javascript::add('plugins/mhslider/js/mhslider.js','frontend',17);




// Register MHslider shortcode

Shortcode::add('mhslider', 'mhslider');

// Shortcode function to return prebuilt slider

function mhslider($attributes) {
    // Extract
    extract($attributes);
    
    $attCount = count($attributes);

    // Set variables
    if (isset($rotate)) $attCount = ($attCount - 1); else $rotate = 'true';
    if (isset ($transition)) $attCount = ($attCount - 1); else $transition = '500';
    if (isset ($duration)) $attCount = ($attCount - 1); else $duration = '2500';
    if (isset ($nav)) $attCount = ($attCount - 1); else $nav = 'true';


	// Build the slider html
	$sliderHtml = "";
	
	for ($x = 1; $x <= $attCount; $x++) {
	    $sliderHtml = $sliderHtml . "<div><img src='".${'slide' . $x}."' /></div>";
	}; 
	
	// build the inline javascript
	$jsInline = <<<EOT
<script>
$( document ).ready(function(){ 
$('.slider').sss({ 
slideShow : $rotate, 
startOn : 0,
transition : $transition, 
speed : $duration, 
arrows : $nav
});
});
</script>
EOT;


	// return the prebuilt slider to the shortcode embed

	return 	"<div class='slider'>".$sliderHtml."</div>".$jsInline;


}
