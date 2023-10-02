<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Html shiv --> 
    <!--[if lt IE 9]>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->
    <!-- fonte awesome -->
    <script src="https://kit.fontawesome.com/574d869779.js" crossorigin="anonymous"></script>
    <!-- Style customizado -->
    <link rel="stylesheet" href=".\css\style.css">
    <!-- Style bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        $selected=$_GET['baseNumerica'];
        echo $selected;
    }
?>
<body>
    <div id="caixaFora">
        <div class="container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" mehod="get" class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="decimal">Digite o número decimal:</label>
                    <input type="number" min=0 id="decimal" name="decimal" value="<?= $decimal ?>" class="form-control">
                  </div>
                  <div class="col-6">
                    <label for="baseNumerica">Base numérica desejada:</label>
                    <select name="baseNumerica" id="baseNumerica">
                        <option value="base_binario" name="binaria">Binaria</option>
                        <option value="base_hexadecimal" name="hexadecimal">Hexadecimal</option>
                        <option value="base_octal" name="octal">Octal</option>
                    </select>
                  </div>
                </div>
                <input type="submit" value="Converter" name="submit" class="btn btn-primary">
                <div>
                    <h1><?= $num_binario ?></h1>
                    <h4>x na base xyz</h4>
                </div>
            </form>
        </div>
    </div>
    <!-- JavaScript bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>