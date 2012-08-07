flex_content_slider
===================

Ein flexibler Wrapper f�r Content-Slider jeglicher Art f�r Contao.

### Kurzanleitung
Diese Erweiterung stellt lediglich das Grundger�st f�r Content-Slider zur Verf�gung:
- Start-Element
- Trenner-Element
- End-Element

Die eigentliche Slide-Funktionalit�t muss �ber eine weitere Erweiterung integriert werden. (https://github.com/JanoschSkuplik/fcs_flexslider)

Hierdurch wird eine m�glichst gro�e Flexibilit�t erreicht, verschiedene Slider zu verwenden.

### Config-Variablen
Die folgenden Variablen werden aktuell von unter-Erweiterungen ber�cksichtigt:
$GLOBALS['fcsSlider']['STARTTEMPLATE']
$GLOBALS['fcsSlider']['ENDTEMPLATE']
$GLOBALS['fcsSlider']['LISTTEMPLATE']
$GLOBALS['fcsSlider']['SLIDERCLASS']
$GLOBALS['fcsSlider']['ITEMCLASS']

#### $GLOBALS['fcsSlider']['STARTTEMPLATE'] (string)
�ber diese Variable kann das Template gesteuert werden, das zus�tzlich ins Template am Beginn der Slider-Gruppe integriert werden soll.

#### $GLOBALS['fcsSlider']['ENDTEMPLATE'] (string)
Hier�ber kann das Template gesteuert werden, das am Ende der Slider-Gruppe integriert werden soll. Dieses bietet sich daf�r an die evtl. ben�tigten JS/CSS-Dateien zu laden und den JS-Aufruf des Sliders durchzuf�hren.

#### $GLOBALS['fcsSlider']['LISTTEMPLATE'] (boolean)
Hier�ber kann gesteuert werden ob die einzelnen Slide-Elemente durch divs oder als Liste ausgegeben werden.

#### $GLOBALS['fcsSlider']['SLIDERCLASS'] (string)
Hier�ber l�sst sich eine CSS-Klasse f�r den Slider zus�tzlich festlegen. 

#### $GLOBALS['fcsSlider']['ITEMCLASS'] (string)
Hier�ber l�sst sich den einzelnen Slide-Elementen eine weitere css-Klasse geben.
