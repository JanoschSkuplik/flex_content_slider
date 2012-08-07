flex_content_slider
===================

Ein flexibler Wrapper für Content-Slider jeglicher Art für Contao.

### Kurzanleitung
Diese Erweiterung stellt lediglich das Grundgerüst für Content-Slider zur Verfügung:
- Start-Element
- Trenner-Element
- End-Element

Die eigentliche Slide-Funktionalität muss über eine weitere Erweiterung integriert werden. (https://github.com/JanoschSkuplik/fcs_flexslider)

Hierdurch wird eine möglichst große Flexibilität erreicht, verschiedene Slider zu verwenden.

### Config-Variablen
Die folgenden Variablen werden aktuell von unter-Erweiterungen berücksichtigt:
$GLOBALS['fcsSlider']['STARTTEMPLATE']
$GLOBALS['fcsSlider']['ENDTEMPLATE']
$GLOBALS['fcsSlider']['LISTTEMPLATE']
$GLOBALS['fcsSlider']['SLIDERCLASS']
$GLOBALS['fcsSlider']['ITEMCLASS']

#### $GLOBALS['fcsSlider']['STARTTEMPLATE'] (string)
Über diese Variable kann das Template gesteuert werden, das zusätzlich ins Template am Beginn der Slider-Gruppe integriert werden soll.

#### $GLOBALS['fcsSlider']['ENDTEMPLATE'] (string)
Hierüber kann das Template gesteuert werden, das am Ende der Slider-Gruppe integriert werden soll. Dieses bietet sich dafür an die evtl. benötigten JS/CSS-Dateien zu laden und den JS-Aufruf des Sliders durchzuführen.

#### $GLOBALS['fcsSlider']['LISTTEMPLATE'] (boolean)
Hierüber kann gesteuert werden ob die einzelnen Slide-Elemente durch divs oder als Liste ausgegeben werden.

#### $GLOBALS['fcsSlider']['SLIDERCLASS'] (string)
Hierüber lässt sich eine CSS-Klasse für den Slider zusätzlich festlegen. 

#### $GLOBALS['fcsSlider']['ITEMCLASS'] (string)
Hierüber lässt sich den einzelnen Slide-Elementen eine weitere css-Klasse geben.
