<?php require("cabecalho.php"); ?>

<h1>Exercício 6</h1>

<form action="exer6.php" method="post">
    <div class="row mt-3">
        <div class="col">
            <label for="horas" class="form-label">Horas previstas</label>
            <input type="number" name="horas" id="horas" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="taxa" class="form-label">Taxa por hora</label>
            <input type="number" name="taxa" id="taxa" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="adic" class="form-label">Custos adicionais</label>
            <input type="number" name="adic" id="adic" class="form-control"/>
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
        $taxa = $_POST['taxa'];
        $adic = $_POST['adic'];
        $custo = $horas * $taxa + $adic;

        echo "<h3 class='mt-3'>Custo total do projeto: R$ " . number_format($custo, 2, ",", ".") . "</h3>";
    }

    require("rodape.php");
?>