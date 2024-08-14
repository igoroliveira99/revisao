<?php require("cabecalho.php"); ?>

<h1>Exercício 4 </h1>

<form action="exer4.php" method="post">
    <div class="row mt-3">
        <div class="col">
            <label for="tarefa" class="form-label">Nome da tarefa</label>
            <input type="text" name="tarefa" id="tarefa" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="h_tarefa" class="form-label">Total de horas da tarefa</label>
            <input type="number" name="h_tarefa" id="h_tarefa" class="form-control"/>
        </div>
        <div class="col">
            <label for="complex" class="form-label">Complexidade</label>
            <select id="complex" name="complex" class="form-select">
                <option value="alta">Alta</option>
                <option value="media">Média</option>
                <option value="baixa">Baixa</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="funcion" class="form-label">Nome do funcionário</label>
            <input type="text" name="funcion" id="funcion" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="h_dispon" class="form-label">Total de horas disponíveis</label>
            <input type="number" name="h_dispon" id="h_dispon" class="form-control"/>
        </div>
        <div class="col">
            <label for="exper" class="form-label">Nível de experiência</label>
            <select id="exper" name="exper" class="form-select">
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
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
        $tarefa = $_POST['tarefa'];
        $h_tarefa = $_POST['h_tarefa'];
        $complex = $_POST['complex'];
        $funcion = $_POST['funcion'];
        $h_dispon = $_POST['h_dispon'];
        $exper = $_POST['exper'];
        
        $h_tarefa += $h_tarefa * 0.1;

        if ($h_dispon >= $h_tarefa)
        {
            if (($exper == "junior" && $complex == "baixa") || 
            ($exper == "pleno" && $complex == "baixa") || ($exper == "pleno" && $complex == "media") || 
            ($exper == "senior" && $complex == "media") || ($exper == "senior" && $complex == "alta"))
            {
                echo "<h3 class='mt-3'>O(a) " . $funcion . " está apto para executar o(a) " . $tarefa . "</h3>";
            }
            else
            {
                echo "<h3 class='mt-3'>O(a) " . $funcion . " não possui a experiência desejada para executar o(a) " . $tarefa . "</h3>";
            }
        }
        else
        {
            echo "<h3 class='mt-3'>O(a) " . $funcion . " não possui disponibilidade suficiente para executar o(a) " . $tarefa . "</h3>";
        }
    }

    require("rodape.php");
?>