#MonstraHost Slider

MonstraHost slider is a simple, responsive jQuery image slider for the open source cms [Monstra](http://www.monstra.org)

Additional info about the plugin may be available at [MonstraHost](http://www.monstrahost.com/)

This plugin is available on GitHub [download ZIP](https://github.com/thoncs/mhslider/archive/master.zip)

##Installation

1. Unzip the plugin archive and upload the folder 'mhslider' to the plugins directory of your Monstra installation
2. Activate the plugin by navigating to ` Extends -> Plugins -> Install New `

##Usage

MHslider uses a shortcode to create a slider in your page. Place the shortcode as `{mhslider slide1='path/to/image.jpg' slide2='path/to/image2.png'}` where you want a slider to appear. Use the shortcode 'mhslider' and options as in the following example: 

#### Example

		{mhslider 
		rotate="true" 
		duration="3200" 
		nav="true" 
		transition="1800" 
		slide1="/public/uploads/slider-nginx.png" 
		slide2="/public/uploads/slider-apache.png" 
		slide3="/public/uploads/slider-vesta.png" 
		}

or

		{mhslider rotate="true" duration="3200" nav="true" transition="1800" slide1="/public/uploads/slider-nginx.png" slide2="/public/uploads/slider-apache.png" slide3="/public/uploads/slider-vesta.png" }
		

#### Variables

+	rotate 
	
	true -> start the slider on page load
	
	false -> use navigation buttons or arrow keys to animate slider

+	duration

	time in milliseconds (ms) to show each slider image

+	transition

	time in milliseconds (ms) to fade one slide to next
	
+	nav

	true -> show navigation arrows on the slider pane
	
	false -> disable navigation images