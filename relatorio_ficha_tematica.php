<?php 
session_start();

if (isset($_GET['pesquisar'])) {
    $municipio_id = $_GET['municipio'];
    $tipo_tema = $_GET['tipo_tema'];

    if($tipo_tema == 'car'){
        header("location: /?page_id=1685&tipo_tema=car&municipio=$municipio_id&pesquisar=Pesquisar");

    }elseif($tipo_tema =='desmatamento'){

        header("location: /?page_id=1699&tipo_tema=desmatamento&municipio=$municipio_id&pesquisar=Pesquisar");

    }elseif($tipo_tema =='gestao_ambiental'){
        
        header("location: /?page_id=1702&tipo_tema=gestao_ambiental&municipio=$municipio_id&pesquisar=Pesquisar");
    }elseif($tipo_tema =='adesao_pacto_grupo'){
        header("location: /?page_id=1704&tipo_tema=adesao_pacto_grupo&municipio=$municipio_id&pesquisar=Pesquisar");
    }else{
        header("location: /?page_id=1666&tipo_tema=adesao_pacto_grupo&municipio=$municipio_id&pesquisar=Pesquisar");
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'> Faltam seleções de campos! </div>";
    }
}else{
    header("location: /?page_id=1666&tipo_tema=adesao_pacto_grupo&municipio=$municipio_id&pesquisar=Pesquisar");
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'> Verifique a pesquisa e tente novamenteasdasd! </div>";
}
