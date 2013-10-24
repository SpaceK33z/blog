# Het pijnpunt van afbeeldingen en responsive websites
- Kees Kluskens
- webduck_nl
- 2013/10/23
- Geen
- published

Afbeeldingen zijn groot. Voor een desktop computer is dat geen probleem, maar voor een smartphone met trage verbinding wel. Daarnaast zijn er nu apparaten met hogere resolutie (‘retina’), die 2x zo grote afbeeldingen ‘moeten’ hebben. Hoe zorg je dat de afbeelding op elk scherm er mooi uit zien, maar ook snel laden?

### Oplossingen
Er zijn een aantal technieken om flink bandbreedte te besparen. Helaas heeft op dit moment nog élke techniek minstens een nadeel. Hieronder bespreek ik er drie die ik ook zelf heb uitgeprobeerd en het beste vond werken. Er zijn echter nog meer oplossingen, die Smashing Magazine [heel goed uitlegt](http://mobile.smashingmagazine.com/2013/07/08/choosing-a-responsive-image-solution/). 

#### Lazy-loading (javascript)
Lazy-loaden houdt in dat er pas iets ingeladen wordt als het nodig is. In dit geval betekent dat dat alleen de afbeeldingen die zichtbaar zijn op het scherm geladen worden.

Een jQuery plugin die gebruik maakt van deze techniek is [unveil.js](http://luis-almeida.github.io/unveil/). Deze plugin werkt simpel, is erg lichtgewicht (900kb) en biedt ook ondersteuning voor het laden van retina varianten van afbeeldingen. Ook kan de afbeelding bijvoorbeeld 200 pixels van te voren geladen worden, zodat de afbeelding meestal al geladen is als de gebruiker 'm tegenkomt.

Zo ziet een `<img>` element er dan voortaan uit:

	<img src="loading.gif" data-src="img2.jpg" data-src-retina="img2@2x.jpg" />

De plugin kijkt dan eerst of er sprake is van een retina scherm, en verplaatst aan de hand daarvan `data-src` of `data-src-retina` naar `src`.

De nadelen van deze techniek zijn:

- Er is jQuery voor nodig.
- Kleine schermen worden niet gedetecteerd, dus zij krijgen geen kleinere afbeelding voorgeschoteld.

#### Server-side
[Adaptive Images](http://adaptive-images.com/) is een server-side oplossing die eerst de schermgrootte detecteert, vervolgens in een cookie opslaat en dan via een PHP-script een afbeelding van gepaste grootte levert. Hoe het precies werkt staat [hier](http://adaptive-images.com/details.htm) beschreven.

Het grote voordeel van deze techniek is dat na het [installeren](http://adaptive-images.com/details.htm#install) je niet handmatig alle afbeeldingen op formaat hoeft te maken. Het script doet dit vanzelf. Het script heeft veel opties, dus je kunt het precies naar je hand zetten. Het werkt ook op alle browsers.

De nadelen:

- Er is Apache of Nginx met PHP voor nodig.
- Het werkt alleen met afbeeldingen die op dezelfde server staan.
- Het script verkleint de afbeeldingen vanzelf, waardoor je minder vrijheid hebt om bijvoorbeeld een gedeelte te croppen.

#### De html oplossing (native)
Het [W3C](http://www.w3.org/) is al vrij lang aan het discussiëren over een mogelijke oplossing voor het ‘responsive afbeeldingen probleem’. Ze hebben nog steeds geen definitieve oplossing, maar Webkit heeft al een oplossing geïntroduceerd die momenteel werkt in Chrome en Safari. Smashing Magazine heeft hier een [lang artikel over](http://mobile.smashingmagazine.com/2013/08/21/webkit-implements-srcset-and-why-its-a-good-thing/).

De syntax ziet er als volgt uit:

	<img src="fallback.jpg" srcset="small.jpg 640w 1x,
	small-hd.jpg 640w 2x, large.jpg 1x, large-hd.jpg 2x" alt="…">

Het werkt zo: Als een browser nog geen ondersteuning hiervoor heeft, wordt `fallback.jpg` geladen. Is het scherm 640 pixels of kleiner breed met een pixelratio van 1 (dus *geen* retinascherm), dan wordt `small.jpg` geladen. `small-hd.jpg` wordt geladen als het scherm 640 pixels of kleiner breed is en **wel** een retinascherm heeft. Als het scherm breder is dan 640 pixels wordt `large.jpg` geladen (en `large-hd.jpg` uiteraard als het een retinascherm is).

Deze techniek is uiteindelijk het meest ideaal, aangezien er geen Javascript of hacks voor nodig zijn. De nadelen:

- Zeer karige browser-ondersteuning.
- Dit hoort eigenlijk in de CSS thuis, HTML is niet voor opmaak.
- Syntax staat nog in discussie en kan zomaar veranderen.

### Conclusie
Er is nog geen ideale manier om met responsive afbeeldingen om te gaan. Elke techniek heeft zijn nadelen. Ik denk dat de beste aanpak op dit moment is om per website te kijken welke techniek de minste (erge) nadelen heeft. Er zijn nog veel meer oplossingen dan hierboven staan, dus ik raad je zeker aan om nog [dit artikel](http://mobile.smashingmagazine.com/2013/07/08/choosing-a-responsive-image-solution/) op Smashing Magazine te lezen.