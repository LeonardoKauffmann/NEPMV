<?php
require 'paginas/connection.php';

$current_page_id = get_the_ID(); // Obter o ID da página atual no WordPress

?>

<label style="text-align: center;">Escolha um Município:</label>
<div>
    <div class='col-auto-my-1'>
        <select class='custom-select mr-sm-2' id="municipio" name="municipio" onChange="AbrirSecao(this.value)">
            <option value="selecione">Selecione um município</option>

            <?php while ($row = mysqli_fetch_array($consulta_municipio)) { 
                $option_value = "?page_id=264&municipio=".$row['id']."&pesquisar=Pesquisar";

                // Verificar o ID da página atual e modificar o valor da opção conforme necessário
                if ($current_page_id == 2656) {
                    $option_value = "?page_id=16432&municipio=".$row['id']."&pesquisar=Pesquisar";
                } elseif ($current_page_id == 1459) {
                    $option_value = "?page_id=16455&municipio=".$row['id']."&pesquisar=Pesquisar";
                }
                ?>

                <option value="<?= $option_value ?>"><?= $row['nome_municipio'] ?></option>

            <?php } ?>
        </select>
    </div>
</div>
<hr/>

<script>
    function AbrirSecao(secao) {
        window.open("" + secao + "", "_parent");
    }
</script>
