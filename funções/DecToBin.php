<?php
    /**
     * Função para conversão do número decimal para número binário.
     * @since 01/10/2023
     * @version 3.0
     */
    function decToBin($num_decimal){
        $num_binario=null;
        $quociente=$num_decimal;
        while($quociente>=2){
            $resto=$quociente%2;
            $quociente= intval($quociente/2);
            $num_binario=$resto.$num_binario;
        }
        $num_binario=$quociente.$num_binario;
        return $num_binario;
    }
    
?>