<?php

class SiowebDummyEvents
{
    /**
     * Cache leeren, falls dein Modul ein eigenes Smarty-Objekt benötigt
     * @see https://github.com/vanilla-thunder/vt-smartyext
     */
    protected static function _clearCache() {
        foreach (glob(oxRegistry::getConfig()->getConfigParam("sCompileDir") . '*') as $item) {
            if (!is_dir($item)) {
                unlink($item);
            }
        }
    }

    public static function onActivate() {
        self::_clearCache();
        oxRegistry::get("oxUtilsView")->getSmarty(true);

        oxDb::getDb()->execute("
            CREATE TABLE IF NOT EXISTS `sioweb_dummy` (
                `OXID` char(32) character set latin1 collate latin1_general_ci NOT NULL COMMENT 'Attachment id',
                `OXSHOPID` int(11) NOT NULL default '1' COMMENT 'Shop id (oxshops)',
                `OXTITLE` varchar(255) NOT NULL default '' COMMENT 'Title (multilanguage)',
                `OXTITLE_1` varchar(255) NOT NULL default '' COMMENT '',
                `OXTITLE_2` varchar(255) NOT NULL default '' COMMENT '',
                `OXTITLE_3` varchar(255) NOT NULL default '' COMMENT '',
                `OXPIC`   VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Picture filename, used for hotspot background (multilanguage)',
                `OXPIC_1` VARCHAR(255) NOT NULL DEFAULT '',
                `OXPIC_2` VARCHAR(255) NOT NULL DEFAULT '',
                `OXPIC_3` VARCHAR(255) NOT NULL DEFAULT '',
                `OXACTIVE` tinyint(1) NOT NULL default '1' COMMENT 'Active',
                `OXACTIVEFROM` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT 'Active from specified date',
                `OXACTIVETO` datetime NOT NULL default '0000-00-00 00:00:00' COMMENT 'Active to specified date',
                `OXSORT` int( 5 ) NOT NULL DEFAULT '0' COMMENT 'Sorting',
                `OXTIMESTAMP` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP COMMENT 'Timestamp',
                PRIMARY KEY  (`OXID`),
                index(`oxsort`)
            ) ENGINE=InnoDB;
        ");
    }

    public static function onDeactivate() {
        self::_clearCache();
    }
}
