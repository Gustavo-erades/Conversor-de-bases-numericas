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
    <link rel="stylesheet" href="./estilo/style.css">
    <!-- Style bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Converter Decimal</title>
    <style>
        body{
            background-color: aliceblue;
        }
        .container{
            box-shadow: 2px 2px 4px rgb(0,0,0,0.4);
        }
    </style>
</head>
<body>
    <?php
        include_once("./funções/DecToBin.php");
        include_once("./funções/DecToHex.php");
        include_once("./funções/DecToOct..php");
        $decimal=null;
        $binario=null;
        $hexadecimal=null;
        $octal=null;
        $display='none';
        if(isset($_GET['submit'])){
            $decimal=$_GET['decimal'];
            $binario=decToBin($decimal);
            $hexadecimal=decToHex($decimal);
            $octal=decToOct($decimal);
        }
        if(isset($_GET['submit'])!=null && $_GET['decimal']!=null){
            $display='block';
        }
    ?>
    <div id="caixaFora">
        <div class="container">
            <h1 id="titulo">Conversor de base numérica</h1>
            <form action="" mehod="get" class="form-group">
                <div>
                    <label for="decimal">Digite o número decimal:</label>
                    <input type="number" min=0 id="decimal" name="decimal"  class="form-control" value="<?=$decimal?>">
                </div>
                <input type="submit" value="Converter" name="submit" class="btn">
                <div style="<?='display:'. $display.';' ?>">
                    <label for="bin">Base binária:</label>
                    <input  disabled class="form-control" id="bin" value="<?=$binario?>">
                    <label for="hex">Base Hexadecimal:</label>
                    <input  disabled class="form-control" id="hex" value="<?=$hexadecimal?>">
                    <label for="oct">Base Octal:</label>
                    <input  disabled class="form-control" id="oct" value="<?=$octal?>">
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