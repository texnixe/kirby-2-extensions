<?php

	kirbytext::$tags['bscarousel'] = array(
		'html' => function($tag) {
			
			$item = '';
			$n    = 0;
			
			foreach ($tag->page()->images() as $image) {
				
				if($n == 0) {
					$active = 'active';
				} else {
					$active = false;
				}
				
				$caption = $image->alt(); // Could be any other field, of course
				
				$item .= '<div class="item ' . $active . '"><img src="' . $image->url() . '" /><div class="carousel-caption">'  . $caption . '</div></div>';

				$n++;

			}
			
			$buttons = "<a class='left carousel-control' href='#carousel' role='button' data-slide='prev'>
							<span class='glyphicon glyphicon-chevron-left'></span>
						</a>
						<a class='right carousel-control' href='#carousel' role='button' data-slide='next'>
							<span class='glyphicon glyphicon-chevron-right'></span>
						</a>";
			
			return '<div id="carousel" class="carousel slide" data-ride="carousel"><div class="carousel-inner">' . $item . '</div>' . $buttons . '</div>';

		}
	);

?>
