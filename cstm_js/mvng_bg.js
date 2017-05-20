var scrollSpeed = 20; 		// Speed in milliseconds
            var step = 2; 				// How many pixels to move per step
            var current = 0;			// The current pixel row
            var imageHeight = 600;		// Background image height
            var headerHeight = screen.height;		// How tall the header is.
            var restartPosition = -(imageHeight - headerHeight);
            function scrollBg(){
                current -= step;
                if (current == restartPosition){
                    current = 0;
                }
                $('html').css("background-position","0 "+current+"px");
            }
            var init = setInterval("scrollBg()", scrollSpeed);