# Oxid4.10DummyModule

Ein How2 Repository, in dem ich gewisse Techniken notiere. 

**Achtung:** Das Modul ist nicht `getestet` worden. Es kann sein, dass Pfade etc. nicht passen. Die meisten Entwicklungen, können in den jeweiligen Core-Funktionen herauskopiert bzw. abgeschaut werden.

## Hilfreiche Links

- [Oxid Datenbankschema](https://github.com/OXID-eSales/oxideshop_ce/blob/master/source/Setup/Sql/database_schema.sql)
- [Klassen, die nicht überladen werden können](https://oxidforge.org/en/list-of-not-overloadable-classes.html)
- [API/Core-Dokumentation(4.10.6)](https://docs.oxid-esales.com/sourcecodedocumentation/4.10.6/)
- [Wo werden Bilder nach dem Upload hingeladen](https://docs.oxid-esales.com/sourcecodedocumentation/4.10.6/oxutilsfile_8php_source.html#l00006)
- [Daten aus der Datenbank nutzen](https://oxidforge.org/de/datenbankdesign-kennen-lernen.html)
- [Code-Beispiele aus dem Oxid Kochbuch](https://github.com/OXIDCookbook/Cookbook_GER1)

## Notes

### Smarty-Block Prepend/Append

  // Dieser Code wird an den Anfang des Blocks gesetzt
  <h1>Überschrift am Anfang des Blocks</h1>
  [{$smarty.block.parent}]
  // Dieser Code wird an das Ende des Block gesetzt
  <hr>
