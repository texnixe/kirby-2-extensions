<?php

	kirbytext::$tags['twocol'] = array(
		
		'html' => function($tag) {
			switch($tag->attr('twocol')) {
  				case 'start':
  					return '<div class="row cf"><div class="col-md-6">';
  					break;
  				case 'break':
  					return '</div><div class="col-md-6">';
  					break;
  				case 'end':
  					return '</div></div>';
  					break;
  				default:
  					return '';
  					break;
  			}

  		}
	);

	kirbytext::$tags['threecol'] = array(
		
		'html' => function($tag) {
			switch($tag->attr('threecol')) {
  				case 'start':
  					return '<div class="row cf"><div class="col-md-4">';
  					break;
  				case 'break':
  					return '</div><div class="col-md-4">';
  					break;
  				case 'end':
  					return '</div></div>';
  					break;
  				default:
  					return '';
  					break;
  			}
		}
	);

	kirbytext::$tags['fourcol'] = array(
		
		'html' => function($tag) {
			switch($tag->attr('fourcol')) {
  				case 'start':
  					return '<div class="row cf"><div class="col-md-3">';
  					break;
  				case 'break':
  					return '</div><div class="col-md-3">';
  					break;
  				case 'end':
  					return '</div></div>';
  					break;
  				default:
  					return '';
  					break;
  			}
  		}
	);
