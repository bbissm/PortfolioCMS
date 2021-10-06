#Symfony Guidelines

#Model

**Model erstellen**
* symfony console make:entity
  * Klassenname
  * Feld
    * Type (String,Integer,Boolean,Date)
    * Null? (YES)
    * Field length (255,11)
  

**!! Wichtig nach Model erstellen => Migration machen für die Datenbank.**

#Datenbank
* symfony console make:migration
* symfony console doctrine:migrations:migrate

**Datenbank aktualisieren**
* symfony console doctrine:schema:update --force



# Fixtures
**Eintrag in die Datenbank vorbereiten**

* symfony console make:fixtures
  * Modelname - Fixture ( NewsFixtures )
  
**Fixtures laden**

* symfony console doctrine:fixtures:load -- WILL COMPLETELY OVERRIDE
  * --append - Damit ein Einträge nicht überschrieben werden.


# Controller

**Better make controller by your self**

# Design

# CSS
!! In der App.scss werden alle Variablen Bulma überschrieben und css Templates gespeichert.

**Befehl**

encore dev --watch 

# EasyAdmin 
Das Model im Admin anzeigen lassen, indem man den benötigten CrudController erstellt
* symfony console:make:admin:crud
  * Auswahl welches Model
  * Directory - so lassen
  * Namespace - so lassen


# Bilderupload mit VichBundleImage
* composer require vich/uploader-bundle
* services.yaml pfad definieren
* vich_uploader.yaml mapping zum pfad setzen
* Entities erfasst: $image & $imageFile mit der Vich\Bundle... annotation
* Datenbank aktualisiert
* CrudController Felder vom Model konfiguriert.
  

  (Custom Field) =>
* Extra Klasse für VichImageField programmiert und in den Controller implementiert.
* Extra Template für VichImageField erstellt. 






