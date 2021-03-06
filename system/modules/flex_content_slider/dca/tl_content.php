<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  DMA Dortmund
 * @author     Janosch Skuplik <skuplik@dma.do>
 * @package    FlexContentSlider
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'fcsType';

$GLOBALS['TL_DCA']['tl_content']['palettes']['flex_content_slider'] = '{type_legend},type,fcsType';

$GLOBALS['TL_DCA']['tl_content']['palettes']['flex_content_sliderfcsStart'] = '{type_legend},type,fcsType;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

if ($GLOBALS['TL_DCA']['tl_content']['flex_content_slider']['additional'])
{
	$GLOBALS['TL_DCA']['tl_content']['palettes']['flex_content_sliderfcsStart'] = str_replace('fcsType;', 'fcsType;' . $GLOBALS['TL_DCA']['tl_content']['flex_content_slider']['additional'], $GLOBALS['TL_DCA']['tl_content']['palettes']['flex_content_sliderfcsStart']);
}

$GLOBALS['TL_DCA']['tl_content']['fields']['fcsType'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fcsType'],
	'default'                 => 'fcsStart',
	'exclude'                 => true,
	'inputType'               => 'radio',
	'options'                 => array('fcsStart', 'fcsDivider', 'fcsStop'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
	'eval'                    => array('helpwizard'=>true, 'submitOnChange'=>true)
);

?>