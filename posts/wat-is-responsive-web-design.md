# Wat is responsive web design?
- Kees Kluskens
- webduck_nl
- 2013/10/11
- Geen
- published

Responsive web design (RWD) houdt in dat de layout van de website zich aanpast aan de grootte van het scherm waarop het bekeken wordt. Als het goed wordt toegepast, ziet een website er daardoor op élk scherm goed uit. Ook op schermformaten die nu nog niet eens bestaan. Sinds de introductie van RWD in 2010 is er veel veranderd. Inmiddels ondersteund vrijwel elke browser RWD, op Internet Explorer 8 na. Daarnaast gebruiken nu ook de grote spelers het. Maar hoe pas je het verstandig toe en wat zijn de voordelen en nadelen ervan?

### Het probleem
Tablets en smartphones worden steeds meer gebruikt om op te surfen. Er komen steeds meer apparaten op de markt met afwijkende schermformaten. In het begin reageerden webdevelopers hierop door met behulp van *browser sniffing* het type apparaat te detecteren en vervolgens door te sturen naar een mobiele variant van de website. Hier zitten een aantal nadelen aan. Beide websites hebben dan onderhoud nodig. Daarnaast is browser sniffing niet future-proof. Met de komst van nieuwe apparaten met een afwijkend formaat zal de code weer geüpdatet moeten worden.

### De voordelen van responsive web design
Met RWD is er maar een website die zich met behulp van media queries automatisch aanpast aan de grootte van het scherm. Op kleine schermen komen alle blokken netjes onder elkaar te staan, terwijl op grote schermen de blokken naast elkaar kunnen komen.

#### Horizontaal scrollen en zoomen is verleden tijd
Doordat RWD op kleine schermen blokken onder elkaar zet en de volledige breedte benut, is het met name op smartphones niet meer nodig om handmatig in te zoomen totdat het lettertype leesbaar is. Ook is het niet meer nodig om horizontaal te scrollen als het browserscherm klein is.

### Nadelen en valkuilen
RWD heeft eigenlijk twee grote nadelen of valkuilen: performance en browser-ondersteuning.

#### Performance op smartphones
Smartphones zijn traag. De alledaagse smartphonegebruiker kan een goedkope of oude smartphone hebben en wilt via 2G jouw website bekijken. Met een aparte mobiele website is dat geen probleem, die is immers zo te optimaliseren dat die te klein wordt. Maar op een responsive website wil je natuurlijk niet te kleine afbeeldingen gebruiken, want dat ziet er lelijk uit op grote schermen.

Er zijn wel een aantal oplossingen om op kleine schermen ook kleinere afbeeldingen in te laden, maar helaas is hier nog wel een extra script voor nodig. Smashing Magazine heeft een [heel goed artikel](http://mobile.smashingmagazine.com/2013/07/08/choosing-a-responsive-image-solution/) geschreven over de beste oplossingen.

#### Internet Explorer
Internet Explorer (IE) ondersteunt pas vanaf IE9 media-queries. Helaas werkt IE9 alleen op Windows Vista en nieuwer. Alle gebruikers die op Windows XP zitten en IE gebruiken blijven daardoor vastzitten op IE8. Het marktaandeel van IE6 en IE7 is tegenwoordig zo klein dat dit meestal genegeerd kan worden. IE8 daarentegen heeft nog een te groot marktaandeel om volledig te negeren. Gelukkig is er wel een aantal  

### RWD een kostenbesparing?
RWD zal meestal kosten besparen. Als een webdesigner eenmaal de techniek en denkwijze van RWD snapt, kost het voor hem nauwelijks meer tijd om een responsive website te maken dan een 'gewone' website. Er hoeft dan ook geen aparte mobiele website gemaakt te worden die eens in de zoveel tijd geüpdatet moet worden. Een *goede* responsive website is dan ook future-proof en ziet er op elk scherm goed uit.
