<?php
use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Brightcove\Video_Field;

define( 'Carbon_Field_Brightcove\\DIR', __DIR__ );

Carbon_Fields::extend( Video_Field::class, function( $container ) {
	return new Video_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
} );