<?php
/**
* @wordpress-plugin
* Plugin Name: Agreable Standfirst Plugin
* Plugin URI: http://github.com/shortlist-digital/agreable-standfirst-plugin
* Description: Introduces a standfirst field to the post Base Fields
* Version: 1.0.0
* Author: Shortlist Studio
* Author URI: http://shortlist.studio
* License: MIT
*/
class AgreableStandfirstPlugin
{
	public function __construct()
	{
		add_action('agreable_base_theme_article_basic_acf', array($this, 'register_custom_field'));
	}
	public function register_custom_field($acf)
	{
		$acf['fields'][] = array (
			'instructions' => 'An introductory paragraph which summarizes the article',
			'key' => 'basic_standfirst',
			'label' => 'Standfirst',
			'name' => 'standfirst',
			'no_return' => true,
			'simplify' => true,
			'type' => 'strict_wysiwyg',
		);
		return $acf;
	}
}
new AgreableStandfirstPlugin();
