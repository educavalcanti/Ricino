<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Topic/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?topi_cd_chave='.$form->getObject()->getTopiCdChave() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="adminTable newTable">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('Topic/index') ?>">Voltar para os Tópicos</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Remover', 'Topic/delete?topi_cd_chave='.$form->getObject()->getTopiCdChave(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Salvar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>      
      <tr>
        <th>Título<?php //echo $form['topi_tx_titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['topi_tx_titulo']->renderError() ?>
          <?php echo $form['topi_tx_titulo'] ?>
        </td>
      </tr>
      <tr>
        <th>Conteúdo<?php //echo $form['topi_tx_conteudo']->renderLabel() ?></th>
        <td>
          <?php echo $form['topi_tx_conteudo']->renderError() ?>
          <?php echo $form['topi_tx_conteudo'] ?>
        </td>
      </tr>
      <tr>
        <th>Anexo<?php //echo $form['topi_nm_anexo']->renderLabel() ?></th>
        <td>
          <?php echo $form['topi_nm_anexo']->renderError() ?>
          <?php echo $form['topi_nm_anexo'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
