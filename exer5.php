<?php require("cabecalho.php"); ?>

<h1>Exercício 5</h1>

<form action="exer5.php" method="post">
    <div class="row mt-3">
        <div class="col">
            <label for="nome" class="form-label">Nome do funcionário</label>
            <input type="text" name="nome" id="nome" class="form-control"/>
        </div>
        <div class="col">
            <label for="dias" class="form-label">Quantidade de dias trabalhados</label>
            <input type="number" name="dias" id="dias" class="form-control"/>
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
        $nome = $_POST['nome'];
        $dias = $_POST['dias'];
        $ferias = intdiv($dias, 30);

        if ($ferias > 30)
        {
            $ferias = 30;
        }

        echo "<h3 class='mt-3'>O(a) " . $nome . " poderá tirar " . $ferias . " dias de férias.</h3>";
    }

    require("rodape.php");
?>