<?php

class SiowebDummy_UtilsFile extends SiowebDummy_UtilsFile_parent
{
    public function __construct()
    {
        $this->_aTypeToPath['SIOWEBDUMMY'] = '../media/siowebDummy';
        parent::__construct();
    }
}
