<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Notice/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?noti_cd_chave='.$form->getObject()->getNotiCdChave() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table class="adminTable newTable">
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('Notice/index') ?>">Cancelar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Remover', 'Notice/delete?noti_cd_chave='.$form->getObject()->getNotiCdChave(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Salvar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th>Título<?php //echo $form['noti_nm_titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['noti_nm_titulo']->renderError() ?>
          <?php echo $form['noti_nm_titulo'] ?>
        </td>
      </tr>
      <tr>
        <th>Fonte<?php //echo $form['noti_nm_fonte']->renderLabel() ?></th>
        <td>
          <?php echo $form['noti_nm_fonte']->renderError() ?>
          <?php echo $form['noti_nm_fonte'] ?>
        </td>
      </tr>
      <tr>
        <th>Data da Publicação<?php //echo $form['noti_dt_publicacao']->renderLabel() ?></th>
        <td>
          <?php echo $form['noti_dt_publicacao']->renderError() ?>
          <?php echo $form['noti_dt_publicacao'] ?>
        </td>
      </tr>
      <tr>
        <th>Conteúdo<?php //echo $form['noti_tx_conteudo']->renderLabel() ?></th>
        <td>
          <?php echo $form['noti_tx_conteudo']->renderError() ?>
          <?php echo $form['noti_tx_conteudo'] ?>
        </td>
      </tr>            
      <tr>
        <th>Link Relacionado<?php //echo $form['noti_nm_link']->renderLabel() ?></th>
        <td>
          <?php echo $form['noti_nm_link']->renderError() ?>
          <?php echo $form['noti_nm_link'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
