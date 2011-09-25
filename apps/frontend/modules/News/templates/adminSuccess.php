<div class="titulo1">
    
<h1>Notícias</h1>

<div class="adminControls">
    <a href="<?php echo url_for('News/new') ?>">Adicionar notícia</a>
</div>

<table class="adminTable">
    
  <thead>
    <tr>
      <th class="title">Título</th>
      <th>Publicação</th>
      <th></th>
    </tr>
  </thead>
    
  <tbody>
    <?php foreach ($noticias as $noticia): ?>
    <tr>
      <td class="title"><?php echo $noticia->getNotiNmTitulo() ?></td>
      <td><?php echo $noticia->getNotiDtPublicacao() ?></td>
      <td>
          <a href="<?php echo url_for('News/edit?noti_cd_chave='.$noticia->getNotiCdChave()) ?>">Editar</a>
          <?php echo link_to('Remover', 'News/delete?noti_cd_chave='.$noticia->getNotiCdChave(), array('method' => 'delete', 'confirm' => 'Tem certeza que desejar apagar essa notícia?')); ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>