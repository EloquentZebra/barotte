# barotte

Eine Roverrotte der [Pfadi Angenstein](https://www.pfadiangenstein.ch).

Website: [barotte.pfadiangenstein.ch](https://barotte.pfadiangenstein.ch)

## Techniches

### Passwort

Das Login-Password wird in der Datei `includes/credentials.php` als Variable `$pwinclude` festgelegt.

### Ausgeschlossene Daten

Persönliche Daten, vornehmlich Mitgliederlisten mit Adressen und Telefonnummern, werden mittels `.gitignore` ausgeschlossen. Die Daten werden mittels `include()` geladen, der direkte Zugriff mittels `.htaccess` verhindert.