<div class="titulo1">

<h1>Notícias</h1>

<div id="news<?php echo $noticia->getNotiCdChave() ?>" class="newsContainer">
    <h2><?php echo $noticia->getNotiNmTitulo() ?></h2>
    <p><?php echo nl2br($noticia->getNotiTxConteudo()); ?></p>
    <h3>Fonte: <?php echo $noticia->getNotiNmFonte() ?> - <?php echo $noticia->getNotiDtPublicacao() ?></h3>
</div>

</div>