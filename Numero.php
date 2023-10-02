<?php
    class Numero{
        private $binario;
        private $hexadecimal;
        private $octal;
     //getters e setters
	public function getBinario() {
		return $this->binario;
	}
	public function setBinario($binario): self {
		$this->binario = $binario;
		return $this;
	}

    public function getHexadecimal() {
		return $this->hexadecimal;
	}
	public function setHexadecimal($hexadecimal): self {
		$this->hexadecimal = $hexadecimal;
		return $this;
	}

    public function getOctal() {
		return $this->octal;
	}
	public function setOctal($octal): self {
		$this->octal = $octal;
		return $this;
	}
    //métodos
    function decToBin($num_decimal){
        $num_binario=null;
        $quociente=$num_decimal;
        while($quociente>=2){
            $resto=$quociente%2;
            $quociente= intval($quociente/2);
            $num_binario=$resto.$num_binario;
        }
        $num_binario=$quociente.$num_binario;
        $this->setBinario($num_binario);
    }

   
    

    function decToHex($num_decimal){ // realiza as divisões sucessivas
        $hexadecimal=null;
        $resto=null;
        $quociente=$num_decimal;
        if($num_decimal>=16){
            while($quociente>=16){
                $resto=$quociente%16;
              
                $quociente=intval($quociente/16);
               
                $hexadecimal=$restoHex.$hexadecimal;
            }
            $hexadecimal=$quocienteHex.$hexadecimal;
            $this->setHexadecimal($hexadecimal);
        }else{
            $num_decimal=moreThanOrEqual10($num_decimal);
            $this->setHexadecimal($num_decimal);
        }
    }

    function decToOct($num_decimal){
        $octal=null;
        $quociente=$num_decimal;
        while($quociente>=8){
            $resto=$quociente%8;
            $quociente= intval($quociente/8);
            $octal=$resto.$octal;
        }
        $octal=$quociente.$octal;
        $this->setOctal($octal);
    }
} 
?>