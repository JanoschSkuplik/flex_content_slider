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
 * Class ContentFlexContentSlider
 *
 * Front end content element "flex_content_slider".
 * @copyright  DMA Dortmund
 * @author     Janosch Skuplik <skuplik@dma.do>
 * @package    FlexContentSlider
 */
class ContentFlexContentSlider extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_content_slider';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new BackendTemplate($this->strTemplate);
			
			switch ($this->fcsType)
			{
				case 'fcsStart':
					$this->Template->wildcard = '### CONTENT-SLIDER START ###<br>Hierdurch wird ein neuer Content-Slider eingeleitet.';
					break;
				case 'fcsDivider':
					$this->Template->wildcard = '### CONTENT-SLIDER DIVIDER ###<br>Dieses Element dient der Trennung einzelner Einträge des Content-Sliders.';
					break;
				case 'fcsStop':
					$this->Template->wildcard = '### CONTENT-SLIDER END ###<br>Hierdurch wird der Content-Slider beendet.';	
					break;
				default:
					$this->Template->wildcard = '### CONTENT-SLIDER ###';
				
			}
		}

		switch ($this->fcsType)
		{
			case 'fcsStart':
				if ($GLOBALS['fcsSlider'] && $GLOBALS['fcsSlider']['STARTTEMPLATE'])
				{
					$objStartTemplate = new FrontendTemplate($GLOBALS['fcsSlider']['STARTTEMPLATE']);
					$objStartTemplate->data = $this->arrData;
					$GLOBALS['fcsSlider']['STARTDATA'] = $this->arrData;
				}
				$this->Template->startTemplate = $GLOBALS['fcsSlider']['STARTTEMPLATE'] ? $objStartTemplate->parse() : false;
				break;
			case 'fcsDivider':
				
				break;
			case 'fcsStop':
				if ($GLOBALS['fcsSlider'] && $GLOBALS['fcsSlider']['ENDTEMPLATE'])
				{
					$objEndTemplate = new FrontendTemplate($GLOBALS['fcsSlider']['ENDTEMPLATE']);
					$objEndTemplate->data = $this->arrData;
					$objEndTemplate->startData = $GLOBALS['fcsSlider']['STARTDATA'];
				}
				$this->Template->endTemplete = $GLOBALS['fcsSlider']['ENDTEMPLATE'] ? $objEndTemplate->parse() : false;	
				break;
			default:

				
		}
		if ($GLOBALS['fcsSlider'] && $GLOBALS['fcsSlider']['SLIDERCLASS'])
		{
			$this->Template->sliderClass = $GLOBALS['fcsSlider']['SLIDERCLASS'];
		}
		if ($GLOBALS['fcsSlider'] && $GLOBALS['fcsSlider']['ITEMCLASS'])
		{
			$this->Template->itemClass = $GLOBALS['fcsSlider']['ITEMCLASS'];
		}	
	}
}

?>