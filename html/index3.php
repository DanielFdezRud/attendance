<?php
    $arr = "uf1,uf2,uffdfasbdf,asda,uf3,uf4";
    $arrdos = explode(',', $arr);
    $array_regex = ['uf1','uf2','uffdfasbdf','asda','uf2','uf3'];
    $matches = preg_grep('/^uf[1-9]/i', $arrdos);
    print_r($matches);
/*
    $array_regex = ['uf1','uf2','uffdfasbdf','asda','uf2','uf3'];
    $matches = preg_grep('/^uf[1-9]/i', $array_regex);
    print_r($matches);
*/