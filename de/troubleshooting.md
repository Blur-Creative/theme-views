---
layout: docs
title: Troubleshooting
---

Hier findest du Hilfestellungen zu Problemen die im Theme auftreten können.

### Fehlende Textbausteine in der Theme-Einstellungen

Sollten in den Theme Einstellungen kryptische Bezeichnungen auftauchen (z.b. __product_options_tab__) gehe wie folgt vor:

1. Öffne den Theme-Manager und gehe oben auf `Einstellungen`
2. Setze bei 'Neuladen der Textbausteine erzwingen' den Haken und speichere
3. Klicke oben im Theme-Manager auf `Themes neu laden`

Wenn du nun die Theme Einstellungen erneut öffnest sollte eine lesbare Bezeichnung erscheinen.
Falls das nicht geholfen haben sollte eröffne ein Issue auf GitHub oder kontaktiere uns auf Twitter / per Mail

### Fehler beim kompilieren nach dem Update

Es kann vorkommen dass du nach einem Update einen Fehler beim kompilieren des Themes bekommst.
Meist sagt die Fehlermeldung dass irgendeine LESS Variable nicht definiert ist. 
Das liegt daran dass das Theme neu hinzugekommene Variablen noch nicht kennt.

Das kann ganz einfach behoben werden.

1. Öffne den Theme-Manager und gehe auf `Theme konfigurieren`
2. Gehe dann einfach auf `Speichern` und lasse das Theme erneut kompilieren

Danach sollte sich das Theme ohne Fehler kompilieren lassen.
Falls das nicht geholfen haben sollte eröffne ein Issue auf GitHub oder kontaktiere uns auf Twitter / per Mail