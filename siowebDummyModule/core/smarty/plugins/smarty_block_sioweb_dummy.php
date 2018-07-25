<?php

function smarty_block_sioweb_dummy($params, $content, &$smarty, &$repeat)
{
    // Beispiel:
    // [{ sioweb_dummy dummy="Ich werde in einer Überschrift verwendet" }][{/sioweb_dummy}]
    // dummy="..." könnte auch eine Kategorie, eine Oxid, Whatever sein,
    // mit welcher Daten aus der Datenbank gezogen werden können.
    
    
    // Ein eigenes Template laden:
    $Renderer = oxNew('oxSmartyRenderer');
    // Daten aus einer Datenbank laden? 
    // $oxData = oxNew( '...' );
    return $Renderer->renderTemplate('sioweb_dummy_smarty_block.tpl', array(
        // 'oxidData' => $oxData->load( $params['oxid'] )
        'headline' => 'Dummy variable: '.$params['dummy']
    ));
    
}
