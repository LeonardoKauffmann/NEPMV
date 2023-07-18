<?php

require 'paginas/connection.php';
?>
    <label style="text-align: center;">Escolha um Município: </label>
    <div>
        <div class='col-auto-my-1' >    
        <select class='custom-select mr-sm-2' id= municipio name=municipio onChange="AbrirSecao(this.value)">
        <option value = "selecione"> Selecione um municipio</option>

    <?php while ($row = mysqli_fetch_array($consulta_municipio)){ ?>
        <option value="?page_id=264&municipio=<?= $row['id']?>&pesquisar=Pesquisar"><?= $row['nome_municipio']?></option>
    <?php } ?> 
        </select>
        </div>
    </div>
<hr/>

<script>
            function AbrirSecao(secao){
                window.open(""+secao+"", "_parent");
            }
</script>
