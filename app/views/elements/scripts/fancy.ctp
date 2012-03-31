<?php
$scriptFancy ="$(document).ready(function() {
		
			$(\"a[rel=".$rel."]\").fancybox({
                                'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9,
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id=\"fancybox-title-outside\">".$cel." - Imagen ' + (currentIndex + 1) + ' de ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
                        $(\".popupLB\").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			
		});";
echo $this->Html->script(array('fancybox/jquery.mousewheel-3.0.4.pack',
    'fancybox/jquery.fancybox-1.3.4.pack'), 
        array('inline' => false));
echo $this->Html->css(array('jquery.fancybox-1.3.4'),'stylesheet', array('inline' => false ) );
echo $this->Html->scriptBlock($scriptFancy, array('inline' => false));
?>
