<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('User/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?usua_cd_chave='.$form->getObject()->getUsuaCdChave() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('User/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'User/delete?usua_cd_chave='.$form->getObject()->getUsuaCdChave(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['usua_nm_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['usua_nm_usuario']->renderError() ?>
          <?php echo $form['usua_nm_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['usua_cd_senha']->renderLabel() ?></th>
        <td>
          <?php echo $form['usua_cd_senha']->renderError() ?>
          <?php echo $form['usua_cd_senha'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tius_cd_chave']->renderLabel() ?></th>
        <td>
          <?php echo $form['tius_cd_chave']->renderError() ?>
          <?php echo $form['tius_cd_chave'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
