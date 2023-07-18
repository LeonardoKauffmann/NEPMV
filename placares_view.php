<?php
//placares
include 'paginas/connection.php';
    $query = "select * from placares";
    $resultado = mysqli_query($connection, $query);


?>
<div style="text-align: center;" id="placares" class="col-md-12 col-md-offset-0 text indicadores-home">
    <?php
    while ($placares = mysqli_fetch_array($resultado)) {
        if ($placares['id'] == 1) { ?>
            <div class="media">
                <div class="pull-left">
                    <img class="img-responsive img-thumbnail" style="margin-top: 0px;" src="/docs_nepmv/imagens/layout01/ico-desmatamento.png">
                </div>

                <div class="media-body">
                    <span><?= $placares['nome'] ?>:</span><br>
                    <h5><?= $placares['valor'] ?></h5>
                    Fonte: <?= $placares['fonte'] ?><br />
                    Meta: <?= $placares['meta'] ?>

                </div>

            </div>

        <?php } ?>

        <?php if ($placares['id'] == 2) { ?>
            <div class="media">
                <div class="pull-left">
                    <img class="img-responsive img-thumbnail" style="margin-top: 0px;" src="/docs_nepmv/imagens/layout01/ico-munverdes.png">
                </div>
                <div class="media-body">
                    <span><?= $placares['nome'] ?>:</span><br>
                    <h5><?= $placares['valor'] ?></h5>
                    Fonte: <?= $placares['fonte'] ?><br />
                    Meta: <?= $placares['meta'] ?>
                </div>
            </div>
        <?php  } ?>


        <?php if ($placares['id'] == 3) { ?>
            <div class="media">
                <div class="pull-left">
                    <img class="img-responsive img-thumbnail" style="margin-top: 0px;" src='/docs_nepmv/imagens/layout01/ico-desmatamento.png'>
                </div>
                <div class="media-body">
                    <span><?= $placares['nome'] ?>:</span><br>
                    <h5><?= $placares['valor'] ?></h5>
                    Fonte: <?= $placares['fonte'] ?><br />
                    Meta: <?= $placares['meta'] ?>
                </div>

            </div>
    <?php  }
    echo '<hr />';
    } ?>
</div>

<style>
    #placares {
        padding: 10px;
        margin: 2px 0px;
    }
</style>