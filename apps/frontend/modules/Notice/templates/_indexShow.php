<ul>
<?php foreach ($noticias as $noticia): ?>
    <li class="texto_avisos"><a href="<?php echo url_for('News/show?noti_cd_chave='.$noticia->getNotiCdChave()) ?>"><?php echo $noticia->getNotiNmTitulo() ?></a></li>
<?php endforeach; ?>
</ul>