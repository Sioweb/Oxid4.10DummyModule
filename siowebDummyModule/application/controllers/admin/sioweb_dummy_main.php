<?php

class SiowebDummyMain extends oxAdminDetails
{

    public function render()
    {
        parent::render();
        $myConfig = $this->getConfig();

        // Load some stuff ...
        // Mehr Code in Kürze ...
        /** @see https://docs.oxid-esales.com/sourcecodedocumentation/4.10.6/class_article___main.html

        return "ci_hotspots_main.tpl";
    }


    public function save()
    {
        // Do some stuff ...
        // Mehr Code in Kürze ...
        /** @see https://docs.oxid-esales.com/sourcecodedocumentation/4.10.6/class_article___main.html
    }

    public function saveinnlang()
    {
        $this->save();
    }
}
