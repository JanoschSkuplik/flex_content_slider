<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Flex_content_slider
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentFlexContentSlider' => 'system/modules/flex_content_slider/ContentFlexContentSlider.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_content_slider' => 'system/modules/flex_content_slider/templates',
));
