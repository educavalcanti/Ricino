<h1>Mensagems List</h1>

<table>
  <thead>
    <tr>
      <th>Mens cd chave</th>
      <th>Usua cd criador</th>
      <th>Topi cd chave</th>
      <th>Mens dt criacao</th>
      <th>Mens tx conteudo</th>
      <th>Mens nm anexo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mensagems as $mensagem): ?>
    <tr>
      <td><a href="<?php echo url_for('Message/edit?mens_cd_chave='.$mensagem->getMensCdChave()) ?>"><?php echo $mensagem->getMensCdChave() ?></a></td>
      <td><?php echo $mensagem->getUsuaCdCriador() ?></td>
      <td><?php echo $mensagem->getTopiCdChave() ?></td>
      <td><?php echo $mensagem->getMensDtCriacao() ?></td>
      <td><?php echo $mensagem->getMensTxConteudo() ?></td>
      <td><?php echo $mensagem->getMensNmAnexo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Message/new') ?>">New</a>
