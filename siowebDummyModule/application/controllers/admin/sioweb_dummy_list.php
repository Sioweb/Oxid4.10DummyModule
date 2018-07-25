
<?php

class SiowebDummyList extends oxAdminList
{

    protected $_sThisTemplate = 'sioweb_dummy_list.tpl';

    protected $_sListClass = 'SiowebDummy';

    protected $_sDefSortField = 'oxtitle';

    public function render()
    {
        parent::render();
        return $this->_sThisTemplate;
    }

    protected function _prepareWhereQuery($aWhere, $sqlFull)
    {
        $sQ = parent::_prepareWhereQuery($aWhere, $sqlFull);
        $sDisplayType = (int) oxRegistry::getConfig()->getRequestParameter('displaytype');
        $sTable = getViewName("sioweb_dummy");

        //searchong for empty oxfolder fields
        if ($sDisplayType) {

            $sNow = date('Y-m-d H:i:s', oxRegistry::get("oxUtilsDate")->getTime());

            switch ($sDisplayType) {
                case 1: // active
                    $sQ .= " and {$sTable}.oxactivefrom < '{$sNow}' and {$sTable}.oxactiveto > '{$sNow}' ";
                    break;
                case 2: // upcoming
                    $sQ .= " and {$sTable}.oxactivefrom > '{$sNow}' ";
                    break;
                case 3: // expired
                    $sQ .= " and {$sTable}.oxactiveto < '{$sNow}' and {$sTable}.oxactiveto != '0000-00-00 00:00:00' ";
                    break;
            }
        }
        return $sQ;
    }
}
