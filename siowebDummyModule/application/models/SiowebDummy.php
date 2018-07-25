<?php

class SiowebDummy extends oxI18n
{

    protected $_sClassName = "sioweb_dummy";

    public function __construct() {
        parent::__construct();
        $this->init("sioweb_dummy");
    }
}
