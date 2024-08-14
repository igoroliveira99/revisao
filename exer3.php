<?php require("cabecalho.php"); ?>

<h1>Exercício 3 </h1>

<form action="exer3.php" method="post">
    <div class="row mt-3">
        <div class="col">
            <label for="lucro" class="form-label">
                Lucro da empresa a ser distribuído
            </label>
            <input type="number" name="lucro" id="lucro" class="form-control"/>
        </div>
        <div class="col">
            <label for="escala" class="form-label">
                Escala de recebimento do lucro
            </label>
            <input type="number" min="1" max="5" name="escala" id="escala" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="nome" class="form-label">
                Nome do funcionário
            </label>
            <input type="text" name="nome" id="nome" class="form-control"/>
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
        $lucro = $_POST['lucro'];
        $escala = $_POST['escala'];
        $bonus = $escala / 1000 * $lucro;
        echo "<h3 class='mt-3'>Bônus do(a) " . $nome . ": R$ " . number_format($bonus, 2, ",", ".") . "</h3>";
    }

    require("rodape.php");
?>