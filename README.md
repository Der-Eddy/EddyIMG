ImageQuotes by Der-Eddy
=====================
~~Wer am Projekt teilnehmen möchte solle bitte Der-Eddy anschreiben, ich behalte mir vor bestimmten Moderatoren den Zugriff zu meinem Portal zu verwehren~~

----------

Ich weiß das der Code weder sonderlich sauber ist noch ich Lust habe alles zu übersetzen. Hoffe aber trotzdem das irgendwer einen Nutzen davon tragen kann
Hauptsätzlich ist das Repo jedoch da damit ich ihren Fortschritt dokumentieren kann


----------

Installation:
-------------

Für das Projekt benutze ich den [PHP Composer][1]

Dieser muss auf den Webspace gebracht werden (siehe Composer Webseite) - also die `composer.phar`
Anschließend wechselt man zur PHP Konsole und geht in den Pfad in der mein Projekt und die `composer.phar` neben der `composer.json` liegt

Führt nun die folgenden Befehle aus:

    php composer.phar install
    php composer.phar self-update
    php composer.phar update

Eventuell muss noch das [Semantic-UI][2] Paket extra hochgeladen werden da deren Paket im [Packagist][3] noch nicht so Top ist

----------

Was es zu bieten hat:
---------------------

 - Flat Files statt Datenbankverbindungen
 - Schöne Auflistung der Bilder
 - Implentierung des Autorennamens in den Dateinamen der Bilder
 - Schönes UI


----------

 
Was noch kommen wird (oder auch nicht):
---------------------

 - Cookie Sessions
 - Anime Chicks
 - Schöneres Upload Modal
 - Schönere Ausgabe der PHP Verarbeitung (z.B. "Login granted")
 - Schönere PHP Funktionen oder sogar etwas OOP (Oben-Ohne-Programmierung)






  [1]: https://getcomposer.org/
  [2]: http://semantic-ui.com/
  [3]: https://packagist.org/