<?php
    /**
     * Função para conversão do número decimal para número hexadecimal.
     * @since 01/20/2023
     * @version 1.0
     */
    function decToOct($num_decimal){
        $octal=null;
        $quociente=$num_decimal;
        while($quociente>=8){
            $resto=$quociente%8;
            $quociente= intval($quociente/8);
            $octal=$resto.$octal;
        }
        $octal=$quociente.$octal;
        return $octal;
    }
?>