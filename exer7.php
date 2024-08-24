<?php require("cabecalho.php"); ?>

<h1>Exercício 7</h1>

<form action="exer7.php" method="post">
    <div class="row mt-3">
        <div class="col">
            <label for="prazo" class="form-label">Prazo para finalização do projeto</label>
            <input type="number" name="prazo" id="prazo" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="proj" class="form-label">Número de atividades do projeto</label>
            <input type="number" name="proj" id="proj" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="desenv" class="form-label">Número de atividades já desenvolvidas</label>
            <input type="number" name="desenv" id="desenv" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="dia" class="form-label">Número de atividades desenvolvidas por dia</label>
            <input type="number" name="dia" id="dia" class="form-control"/>
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
        $prazo = $_POST['prazo'];
        $proj = $_POST['proj'];
        $desenv = $_POST['desenv'];
        $dia = $_POST['dia'];
        $previsao = ($proj - $desenv) / $dia;

        if ($previsao > $prazo)
        {
            echo "<h3 class='mt-3'>O projeto não anda bem! Nesse rítimo ele não será concluído dentro do prazo.</h3>";
        }
        else
        {
            echo "<h3 class='mt-3'>Parabéns! Nesse rítimo o projeto será concluído dentro do prazo estipulado.</h3>";
        }
    }

    require("rodape.php");
?>