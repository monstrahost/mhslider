#MonstraHost Slider

MonstraHost slider is a simple, responsive jQuery image slider.

Additional info may be available at [MonstraHost](http://www.monstrahost.com/)


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

rotate : true -> start the slider on page load,  false -> use navigation buttons or arrow keys to animate slider

duration : time in milliseconds (ms) to show each slider image

transition : time in milliseconds (ms) to fade one slide to next

nav : true -> show navigation arrows on the slider pane, false -> disable navigation images