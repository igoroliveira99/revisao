<?php require("cabecalho.php"); ?>

<h1>Exercício 2 </h1>

<form action="exer2.php" method="post">
    <div class="row mt-3">
        <div class="col">
            <label for="horas" class="form-label">
                Horas trabalhadas no mês:
            </label>
            <input type="number" name="horas" id="horas" class="form-control"/>
        </div>
        <div class="col">
            <label for="valor" class="form-label">
                Valor da hora:
            </label>
            <input type="number" name="valor" id="valor" class="form-control"/>
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