<?php

class SiowebDummy_Utilsview extends SiowebDummy_Utilsview_parent
{
    protected function _fillCommonSmartyProperties($oSmarty)
    {
        parent::_fillCommonSmartyProperties($oSmarty);
        array_unshift($oSmarty->plugins_dir, oxRegistry::getConfig()->getModulesDir() . "/sioweb/siowebDummyModule/core/smarty/plugins");
    }
}
