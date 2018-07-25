<?php

class SiowebDummy_Lang extends SiowebDummy_Lang_parent
{
    public function getMultiLangTables()
    {
        $aTables = parent::getMultiLangTables();
        $aTables = array_merge($aTables, array('sioweb_dummy'));

        return $aTables;
    }
}
