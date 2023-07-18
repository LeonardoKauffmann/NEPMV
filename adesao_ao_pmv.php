<?php
    include 'paginas/connection.php';
    $query = "select ma.municipio_id, m.nome_municipio as 'municipio', ca.nome as 'categoria', ma.adesao_pmv_possui, ma.tc_mpf_possui, ma.tc_mpf_data as 'data_mpf',
            ma.adesao_pmv_data as 'data_adesao_pmv' from municipio_adesoes ma join municipio m on
            m.id = ma.municipio_id join categoria_pmv_municipio cpm on 
            cpm.municipio_id = m.id join categoria_pmv ca on 
            cpm.categoria_pmv_id = ca.id order by m.nome_municipio asc";

        $resultado = mysqli_query($connection, $query);
?>

<h3>Municípios que aderem o PMV</h3>
<br>
<table class="table table-sm responsive">
    <thead class="thead thead-dark">
        <tr>
            <th>Município</th>
            <th>Categoria</th>
            <th>Adesão ao PMV</th>
            <th>Data Adesão</th>
            <th>Termo de Compromisso MPF</th>
            <th>Data MPF</th>
        </tr>
    </thead>
    <tbody class="table-active">
        <tr>
            <?php while ($adesao = mysqli_fetch_array($resultado)) { ?>
                <td><?= $adesao['municipio'] ?></td>
                <td><?= $adesao['categoria'] ?></td>
                <td><?= ($adesao['adesao_pmv_possui']) ? 'SIM' : 'NÃO' ?></td>
                <td><?= ($adesao['data_adesao_pmv']) ? date("d/m/Y", strtotime($adesao['data_adesao_pmv'])) : '' ?></td>
                <td><?= ($adesao['tc_mpf_possui']) ? 'SIM' : 'NÃO' ?></td>
                <td><?= ($adesao['data_mpf']) ? date("d/m/Y", strtotime($adesao['data_mpf'])) : '' ?></td>

        </tr>
    <?php } ?>
    </tbody>

</table>