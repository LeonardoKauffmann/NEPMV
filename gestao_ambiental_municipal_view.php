<?php
include 'paginas/connection.php';
$query = "SELECT gestao_ambiental_habilitado, gestao_ambiental_7389_iniciou, gestao_ambiental_079_iniciou, gestao_ambiental_tgadc_iniciou, gestao_ambiental_7389_data, gestao_ambiental_079_data, gestao_ambiental_tgadc_data FROM gestao_ambientais ga WHERE municipio_id = $municipio_id";

$resultado = mysqli_query($connection, $query);
$ga = mysqli_fetch_array($resultado);
?>

<table class="table table-sm">
    <thead class="thead-dark">
        <tr>
            <th colspan="3">Meta VII - Possuir Sistema e Órgão Municipal de meio ambiente estruturado.</th>
        </tr>
    </thead>
    <tbody class="table-active">
        <?php
        $gestao_ambiental_7389  = $ga['gestao_ambiental_7389_iniciou'];
        $gestao_ambiental_079   = $ga['gestao_ambiental_079_iniciou'];
        $gestao_ambiental_tgadc = $ga['gestao_ambiental_tgadc_iniciou'];

        $gestao_ambiental_7389_data  = $ga['gestao_ambiental_7389_data'];
        $gestao_ambiental_079_data   = $ga['gestao_ambiental_079_data'];
        $gestao_ambiental_tgadc_data = $ga['gestao_ambiental_tgadc_data'];

        if ($gestao_ambiental_7389 == 'sim') {
            $gestao_ambiental_instrumento = 'Lei Estadual 7.389';
            $gestao_ambiental_data = $gestao_ambiental_7389_data;
        } elseif ($gestao_ambiental_079 == 'sim') {
            $gestao_ambiental_instrumento = 'Resolução COEMA 079';
            $gestao_ambiental_data = $gestao_ambiental_079_data;
        } elseif ($gestao_ambiental_tgadc == 'sim') {
            $gestao_ambiental_instrumento = 'TGADC';
            $gestao_ambiental_data = $gestao_ambiental_tgadc_data;
        } else {
            $gestao_ambiental_instrumento = 'não disponível';
        }

        $gestao_ambiental_habilitado = isset($ga['gestao_ambiental_habilitado']) ? $ga['gestao_ambiental_habilitado'] : "NÃO";
        $gestao_ambiental_data = isset($gestao_ambiental_data) ? date('d/m/Y', strtotime($gestao_ambiental_data)) : null;
        ?>
        <tr>
            <td>Possui capacidade de exercer a Gestão Ambiental?</td>
            <td><?= $gestao_ambiental_habilitado ?></td>
            <td>
                <?php if ($gestao_ambiental_habilitado == 'sim') : ?>
                    <a href="https://www.semas.pa.gov.br/wp-content/uploads/2022/09/Munic%C3%ADpios-com-capacidade-de-exercer-gest%C3%A3o-ambiental-06.07.2022.pdf" target="_blank">Lista de Municípios Aptos</a>
                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
        </tr>
    </tbody>
</table>