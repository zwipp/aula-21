<?php

    $paises = ['ar','br','co','jp','ch','in'];

    function valida_campo($campo){
        if(!isset($campo)  ||  ($campo == '')){
            return false;
        }
        else{
            return true;
        }
    }

    function valida_pais($p){
        global $paises;
        if(!isset($p) || !in_array($p,$paises)){
            return false;
        }
        else{
            return true;
        }
    }

?>