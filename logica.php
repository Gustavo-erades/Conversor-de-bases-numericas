<?php
include_once("./funções/DecToBin.php");
include_once("./funções/DecToHex.php");
include_once("./funções/DecToOct..php");
$num_binario=null;
$num_hex=null;
$num_oct=null;
$nome_base=null;
function logica_do_programa($convBase, $num_decimal){
    if($convBase=='base_binario'){
        $num_binario=decToBin($num_decimal);
        return $num_binario;
    }elseif($convBase=='base_hexadecimal'){
        $num_hex=decToHex($num_decimal);
        return $num_hex;
    }elseif($convBase=='base_octal'){
        $num_oct=decToOct($num_decimal);
        return $num_oct; 
    }
}
function nome_base($convBase){
    if($convBase=='base_binario'){
        $nome_base='Binária';
        return $nome_base;
    }elseif($convBase=='base_hexadecimal'){
        $nome_base='Hexadecimal';
        return $nome_base;
    }elseif($convBase=='base_octal'){
        $nome_base='Octal';
        return $nome_base; 
    }
}
?>