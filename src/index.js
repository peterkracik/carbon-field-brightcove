/**
 * External dependencies.
 */
import { registerFieldType } from '@carbon-fields/core';

/**
 * Internal dependencies.
 */
import './style.scss';
import VideoField from './main';

registerFieldType( 'brightcove_video', VideoField );
