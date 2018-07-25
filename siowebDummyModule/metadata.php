<?php

// Pfad im Verzeichnis
$ModuleID = 'sioweb/siowebDummyModule';

$aModule = array(
    'id'          => 'siowebDummyModule',
    'title'       => '<b style="color: #005ba9">Sioweb</b> | Dummy Modul für v4.10+',
    'description' =>  array(
        'de'=>'Deutsche Beschreibung für dein Modul',
        'en'=>'English description for your module',
    ),
    'version'     => '1.0',
    'url'         => 'https://www.sioweb.de',
    'email'       => 'support@sioweb.de',
    'author'      => 'Sascha Weidner',

    // Welche Klassen sollen überschrieben werden?
    // Bitte vorher hier prüfen, ob die gewünschte 
    // Klasse überschrieben werden kann: https://oxidforge.org/en/list-of-not-overloadable-classes.html
    'extend'      => array(
        // Mehrsprachige Views in der Datenbank erzeugen
        'oxlang' => $ModuleID.'/core/SiowebDummy_Lang',
        // Ein Smarty-Plugin Registrieren (Achtung: Pfad muss in der Datei angepasst werden)
        'oxutilsview' => $ModuleID.'/core/SiowebDummy_Utilsview',
        // Einen eigenen Speicherpfad für hochgeladene Bilder erzeugen
        // (Achting: Bilderpfad muss in der Datei angepasst werden)
        'oxutilsfile' => $ModuleID.'/core/SiowebDummy_UtilsFile'
    ),
    // Bietet dein Modul eigene Klassen?
    // z.B. 
    // - Admin-Seiten
    // - Frontend-Controller
    // - Smarty-Erweiterungen
    // - Models
    'files'      => array(
        'SiowebDummyEvents' => $ModuleID.'/events/SiowebDummyEvents.php',
    ),
    // Bietet dein Modul Templates?
    // Überschreibt dein Modul Templates?
    'templates' => array(
        'sioweb_dummy.tpl' => $ModuleID.'/application/views/sioweb_dummy.tpl',
    ),
    // Events sind vor allem geeignet, um die
    // Datenbank zu manipulieren, oder den Cache zu leeren
    // sobald das Modul aktiviert wird. 
    'events'       => array(
        'onActivate'   => 'SiowebDummyEvents::onActivate',
        'onDeactivate' => 'SiowebDummyEvents::onDeactivate'
    )
);
