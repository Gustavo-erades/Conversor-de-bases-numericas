<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Decimal</title>
</head>
<?php
    include_once("./funções/DecToBin.php");
    include_once("./funções/DecToHex.php");
    include_once("./funções/DecToOct..php");
    $decimal=null;
    $num_binario=null;
    $num_hex=null;
    $num_oct=null;
    if(isset($_GET['submit'])){
        $decimal=$_GET['decimal'];
        $num_binario=decToBin($decimal);
        $num_hex=decToHex($decimal);
        $num_oct=decToOct($decimal);
    }
?>
<body>
    <div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" mehod="get">
            <div>
                <label for="decimal">Digite o número decimal:</label>
                <input type="number" min=0 id="decimal" name="decimal" value="<?= $decimal ?>">
            </div>
            
            <input type="submit" value="Converter" name="submit">
            <div>
                <label for="binario">Número binário correspondente:</label>
                <input type="number" value="<?= $num_binario ?>" name="binario" disabled>
            </div>
            <div>
                <label for="hexadecimal">Número hexadecimal correspondente:</label>
                <input value="<?php echo $num_hex; ?>" id="hexadecimal" disabled>
            </div>
            <div>
                <label for="octal">Número Octal correspondente:</label>
                <input value="<?php echo $num_oct; ?>" id="octal" disabled>
            </div>
        </form>
    </div>
</body>
</html>