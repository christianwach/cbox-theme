<?php
/**
 * PIE API: feature extensions, custom css feature class file
 *
 * @author Marshall Sorenson <marshall.sorenson@gmail.com>
 * @link http://marshallsorenson.com/
 * @copyright Copyright (C) 2010 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package PIE
 * @subpackage features-ext
 * @since 1.0
 */

/**
 * Custom CSS feature
 *
 * @package PIE
 * @subpackage features-ext
 */
class Pie_Easy_Exts_Feature_Custom_Css extends Pie_Easy_Features_Feature
{
	/**
	 * Enqueue the css export script
	 */
	final public function init_styles()
	{
		if ( $this->supported() ) {
			wp_enqueue_style( 'infinity-custom', INFINITY_EXPORT_URL . '/css.php', null, infinity_option_meta( 'infinity_custom_css', 'time_updated' ) );
		}
	}
}

?>
