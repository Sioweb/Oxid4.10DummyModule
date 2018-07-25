<?php

class SiowebDummyShopcontrol extends SiowebDummyShopcontrol_parent
{
    // Klasse umschreiben, damit die klasse nicht kleingeschrieben werden muss
    protected function _process($sClass, $sFunction, $aParams = null, $aViewsChain = null)
    {
        if (isset($_GET['cl']) && $_GET['cl'] === 'sioweb_dummy_controller') {
            $_GET['cl'] = 'SiowebDummyController';
            $sClass = 'SiowebDummyController';
        }

        return parent::_process($sClass, $sFunction, $aParams, $aViewsChain);
    }
}
