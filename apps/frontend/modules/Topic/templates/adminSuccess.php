<div class="titulo1">

<h1>Tópicos</h1>

<div class="adminControls">
    <a href="<?php echo url_for('Topic/new') ?>">Adicionar tópico</a>
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
    <?php foreach ($topicos as $topico): ?>
    <tr>
      <td class="title"><?php echo $topico->getTopiTxTitulo() ?></td>
      <td><?php echo $topico->getTopiDtCriacao() ?></td>
      <td>
          <?php if($topico->isOwner()) 
          {
          ?>
            <a href="<?php echo url_for('Topic/edit?topi_cd_chave='.$topico->getTopiCdChave()) ?>">Editar</a>
            <?php echo link_to('Remover', 'Topic/delete?topi_cd_chave='.$topico->getTopiCdChave(), array('method' => 'delete', 'confirm' => 'Tem certeza que desejar apagar este tópico?')); ?>
          <?php 
          }
          ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>
