<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Usua cd chave</th>
      <th>Usua nm usuario</th>
      <th>Usua cd senha</th>
      <th>Tius cd chave</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('User/edit?usua_cd_chave='.$usuario->getUsuaCdChave()) ?>"><?php echo $usuario->getUsuaCdChave() ?></a></td>
      <td><?php echo $usuario->getUsuaNmUsuario() ?></td>
      <td><?php echo $usuario->getUsuaCdSenha() ?></td>
      <td><?php echo $usuario->getTiusCdChave() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('User/new') ?>">New</a>
