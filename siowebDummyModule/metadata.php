<?php

// Pfad im Verzeichnis
// - sioweb durch deinen Firmennamen ersetzen
// - siowebDummyModule durch deinen Modulnamen ersetzen
// Achte darauf die Ordnerstruktur anzupassen
$ModuleID = 'sioweb/siowebDummyModule';

$aModule = array(
    'id'          => 'siowebDummyModule',
    // Die HTML-Formatierung ist nicht nötig, aber stylisch
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
        /** @see https://github.com/vanilla-thunder/vt-smartyext */
        'oxutilsview' => $ModuleID.'/core/SiowebDummy_Utilsview',
        // Einen eigenen Speicherpfad für hochgeladene Bilder erzeugen
        // (Achtung: Bilderpfad muss in der Datei angepasst werden)
        'oxutilsfile' => $ModuleID.'/core/SiowebDummy_UtilsFile'
    ),
    // Bietet dein Modul eigene Klassen?
    // z.B. 
    // - Admin-Seiten
    // - Frontend-Controller
    // - Smarty-Erweiterungen
    // - Models
    'files'      => array(
        // Backend-Klassen
        'AdminSiowebDummy' => $ModuleID.'/application/controllers/admin/AdminSiowebDummy.php',
        'AdminSiowebDummyList' => $ModuleID.'/application/controllers/admin/AdminSiowebDummyList.php',
        'AdminSiowebDummyMain' => $ModuleID.'/application/controllers/admin/AdminSiowebDummyMain.php',
        // Model
        'SiowebDummy' => $ModuleID.'/application/models/SiowebDummy.php',
        // Event-Handler
        'SiowebDummyEvents' => $ModuleID.'/events/SiowebDummyEvents.php',
    ),
    // Bietet dein Modul Templates?
    // Überschreibt dein Modul Templates?
    'templates' => array(
        // Um einen Backend-Menüpunkt hinzuzufügen, brauchst du 
        // die menu.xml im Root des Modules
        'admin_sioweb_dummy.tpl' => $ModuleID.'/application/views/admin/admin_sioweb_dummy.tpl',
        'admin_sioweb_dumm_listy.tpl' => $ModuleID.'/application/views/admin/admin_sioweb_dumm_listy.tpl',
        'admin_sioweb_dummy_main.tpl' => $ModuleID.'/application/views/admin/admin_sioweb_dummy_main.tpl',
    ),
    // Events sind vor allem geeignet, um die
    // Datenbank zu manipulieren, oder den Cache zu leeren
    // sobald das Modul aktiviert wird. 
    'events'       => array(
        'onActivate'   => 'SiowebDummyEvents::onActivate',
        'onDeactivate' => 'SiowebDummyEvents::onDeactivate'
    )
);
