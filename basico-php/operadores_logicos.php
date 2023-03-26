<?php
    $gatos_son_felinos = true;
    $gatos_tienen_4patas = true;
    $gatos_programan_php = false;
    $gatos_fuman = false;
    //Operador AND
    var_dump($gatos_son_felinos && $gatos_fuman);
    echo("\n");
    //Operador OR
    var_dump($gatos_son_felinos || $gatos_fuman);
    echo("\n");
    //Operador NOT
    var_dump(!$gatos_son_felinos);
    echo("\n");    
?>