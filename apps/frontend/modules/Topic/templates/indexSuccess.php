<div class="titulo1">

<h1>Fórum</h1>

<div class="search">
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <input id="searchInput"
                           class="textInput"
                           type="text"
                           value="" >
                </td>
                <td>
                    <input id="searchSubmit"
                           class="confirmButton"
                           type="submit"
                           value="Procurar">
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php foreach ($topicos as $topico): ?>
<div id="topic<?php echo $topico->getTopiCdChave() ?>" class="topicContainer">
    <h2><a href="<?php echo url_for('Topic/show?topi_cd_chave='.$topico->getTopiCdChave()); ?>"><?php echo $topico->getTopiTxTitulo() ?></a></h2>
    <h3>Criado por <?php echo $topico; ?></h3>
</div>
<?php endforeach; ?>

</div>