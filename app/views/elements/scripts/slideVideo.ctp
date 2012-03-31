<?php
$scriptSlide = "$(function(){
			$('.slidesVideo').slides({
				preload: true,
				preloadImage: '".$this->HProperties->APP ."img/loading.gif',
				play: null,
				pause: null,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});";
echo $this->Html->scriptBlock($scriptSlide, array('inline' => false));
?>
