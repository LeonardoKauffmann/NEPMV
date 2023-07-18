<?php 
session_start();

if (isset($_GET['pesquisar'])) {
    $municipio_id = $_GET['municipio'];
    $relatorio = $_GET['relatorio'];

    if($relatorio == 'resumo'){
        header("location: /ficha-resumo/?municipio=$municipio_id&pesquisar=Pesquisar");

    }else{

        header("location: /ficha-completa/?municipio=$municipio_id&pesquisar=Pesquisar");
    }
}else{
    header("location: /?page_id=1666&tipo_tema=adesao_pacto_grupo&municipio=$municipio_id&pesquisar=Pesquisar");
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'> Verifique a pesquisa e tente novamenteasdasd! </div>";
}
