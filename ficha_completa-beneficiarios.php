<?php
include 'connection.php';
include 'paginas/controller/functions.php';

$municipio_id = $_GET['municipio'];
//header("location: /ficha-completa/?municipio=$municipio_id&pesquisar=Pesquisar");
//if ($municipio_id != "selecione" || $municipio_id != " ") {
    if (isset($municipio_id)) {
//echo $municipio_id;
//echo 'nada';
//exit;
?>

    <h1>Ficha Completa <img src="/docs_nepmv/imagens/layout01/ico-relatorio.png"></h1>

    <!-- Município / Região Integração -->
    <?php include_once 'paginas/view/relatorios/regiao_integracao_view.php'; ?>

    <!-- Resultados Alcançados pelo Município -->
    <?php include_once 'paginas/view/relatorios/atividades_view.php' ?>

<?php } else {
   // header("location: /?page_id=918");
   ?> <p>Sem Informações</p> <?php
}

?>
<style>
    table {
        font-size: 15px;
    }
</style>