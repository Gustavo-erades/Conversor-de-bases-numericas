<?php
    /**
     * Função para conversão do número decimal para número hexadecimal.
     * @since 01/20/2023
     * @version 1.0
     */
    function moreThanOrEqual10($num){ // verifica se o número passa de 10 e faz sua substituição
        $listaAlfabeto=['A','B','C','D','E','F','G'];
        for($i=10;$i<=16;$i++){
            if($num==$i){
                $num=$listaAlfabeto[$i-10];
            }
        }
        return $num;
    }
    function decToHex($num_decimal){ // realiza as divisões sucessivas
        $hexadecimal=null;
        $resto=null;
        $quociente=$num_decimal;
        if($num_decimal>=16){
            while($quociente>=16){
                $resto=$quociente%16;
                $restoHex= moreThanOrEqual10($resto);
                $quociente=intval($quociente/16);
                $quocienteHex=moreThanOrEqual10($quociente);
                $hexadecimal=$restoHex.$hexadecimal;
            }
            $hexadecimal=$quocienteHex.$hexadecimal;
            return $hexadecimal;
        }else{
            $num_decimal=moreThanOrEqual10($num_decimal);
            return $num_decimal;
        }
    }
?>