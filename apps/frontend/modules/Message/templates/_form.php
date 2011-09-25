<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="addComment">
    <form action="<?php echo url_for('Message/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?mens_cd_chave='.$form->getObject()->getMensCdChave() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
      <table cellpadding="0">
        <tbody>
          <?php echo $form->renderHiddenFields(false); ?>
          <?php echo $form->renderGlobalErrors(); ?>     
          <tr>            
            <td>
              <?php echo $form['mens_tx_conteudo']->renderError() ?>
              <?php echo $form['mens_tx_conteudo']->render(array('class' => 'textInput')); ?>
            </td>
            <td>
                <input id="addCommentSubmit" class="confirmButton" type="submit" value="Enviar">
            </td>
          </tr>
        </tbody>
      </table>
    </form>
</div>