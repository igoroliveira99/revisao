<?php require("cabecalho.php"); ?>

<h1>Exercício 3 </h1>

<form action="exer3.php" method="post">
    <div class="row mt-3">
        <div class="col">
        
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="lucro" class="form-label">
                Lucro da empresa
            </label>
            <input type="number" name="lucro" id="lucro" class="form-control"/>
        </div>
        <div class="col">
            <label for="escala" class="form-label">
                Escala de recebimento do lucro
            </label>
            <input type="number" name="escala" id="escala" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php
    if ($_POST)
    {
        $horas = $_POST['horas'];
        $valor = $_POST['valor'];
        $salario = ($horas * $valor) / 4.33;
        echo "<h3 class='mt-3'>Salário semanal: R$ " . number_format($salario, 2, ",", ".") . "</h3>";
    }

    require("rodape.php");
?>