# Foundation: het ultieme CSS framework
- Kees Kluskens
- webduck_nl
- 2013/10/16
- Geen
- published

[Foundation](http://foundation.zurb.com/) is een responsive CSS framework van [Zurb](http://zurb.com/). Aan de basis van het framework staat een flexibele grid die meeschaalt met het scherm en de indeling automatisch veranderd aan de hand van het scherm. Verder helpt Foundation met de typografie, levert wat standaardstijlen mee en zijn er een aantal javascript plugins te gebruiken.

### Waarom Foundation?
Foundation neemt veel werk uit handen. Door de solide grid ziet een website er op elk scherm altijd goed uit. De meegeleverde basisstijlen zorgen er daarnaast voor dat de website er al meteen redelijk uitziet. De javascript plugins zijn uiteraard allemaal responsive en zijn snel te gebruiken.

### Iets niet nodig?
Een CSS framework heeft als nadeel dat het wat groter is dan een ‘op maat gemaakt’ framework. Gelukkig kan er op de website van Foundation een [custom download](http://foundation.zurb.com/download.php) worden gemaakt, waarmee je precies kan downloaden wat je nodig hebt.

### In de praktijk
Voor het maken van de [*FIRST*® LEGO® League](http://firstlegoleague.nl/) (*FLL*) website heb ik voor het eerst gebruik gemaakt van Foundation. Ik begon met het lezen van de [documentatie](http://foundation.zurb.com/docs/) en heb daarna wat gespeeld met het grid systeem. Tot mijn verbazing werkte alles heel simpel.

#### Prototypen
Ik ben begonnen met een prototype maken van het ontwerp. In het prototype gebruikte ik gewoon de standaardstijlen die Foundation meelevert. Op deze manier kun je al snel een algemene indruk krijgen hoe de website eruit gaat zien.

<a href="#" class="th text-center">
  <img src="http://blog.dev/posts/img/fll-prototype1.png" alt="Het eerste FLL prototype">
</a>

In samenwerking met [Volle Kracht](http://www.volle-kracht.nl/) hebben we hierna, op basis van bovenstaand prototype het volgend ontwerp gemaakt.

<a href="#" class="th text-center">
  <img src="http://blog.dev/posts/img/fll-site1.png" alt="Het eerste FLL prototype">
</a>

#### Javascript
De javascript plugins van Foundation zijn vrij minimalistisch. De [slider plugin](http://foundation.zurb.com/docs/components/orbit.html) bleek uiteindelijk toch te weinig functies te hebben, dus heb ik [Royal Slider](http://dimsemenov.com/plugins/royal-slider/) gebruikt.

De FLL website heeft op de meeste pagina’s een linkermenu, waarin elke link maximaal één submenu kan bevatten. Het submenu verschijnt als er met de muis over een link bewogen wordt. Dit kan niet op een touchscreen apparaat en is ook niet praktisch op een klein scherm, dus moest ik hier iets anders voor bedenken. Foundation heeft gelukkig een **top bar plugin** die op kleinere schermen submenu’s automatisch klikbaar maakt in plaats van ‘hoverbaar’.

#### IE8 ondersteuning
Foundation ondersteunt alleen Internet Explorer 9+, aangezien lagere versies van IE geen ondersteuning hebben voor media queries. De *FLL* website vereiste (helaas) Internet Explorer 8+ ondersteuning, aangezien een groot deel van de doelgroep nog IE8 gebruikt.

Om dit op te lossen heb ik gebruik gemaakt van [Respond.js](https://github.com/scottjehl/Respond). Respond.js is een <abbr title="Een polyfill maakt functie(s) mogelijk die een bepaalde browser nog niet standaard ondersteund">polyfill</abbr> die media queries inschakelt voor browsers die het niet ondersteunen.

Verder wordt er met de onderstaande code in de `<html>` een `.lt-ie9` class toegevoegd aan IE9- browsers, waardoor het erg makkelijk is om IE8-specifieke hacks uit te voeren.

    <!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="nl" > <!--<![endif]-->

### Conclusie
Foundation is een ideaal framework. De grid werkt erg goed op alle schermen, de meegeleverde stijlen zijn makkelijk aan te passen (of te verwijderen indien onnodig) en alle functies zijn goed gedocumenteerd.