<div class="titulo1">

<h1>Fórum &#8226 <?php echo $topico->getTopiTxTitulo(); ?></h1>
<h3 class="backLink"><a href="<?php echo url_for('Topic/index'); ?>">Voltar aos tópicos</a></h3>

<div id="topicContainer">
    <div class="topic">
        <div class="header title">
            <span class="title"><?php echo $topico->getTopiTxTitulo(); ?></span>
            <span class="sep">&#8226</span>
            <span class="author"><?php echo $topico; ?></span>
        </div>
        <div class="body">
            <p><?php echo nl2br($topico->getTopiTxConteudo()); ?></p>
        </div>
        <div class="commentLine"></div>

        <div class="replies">
            <?php
            foreach($messages as $message)
            {
            ?>
                <div class="reply">
                    <div class="comment"><?php echo nl2br($message->getMensTxConteudo()); ?></div>
                    <div class="replierName">
                        <span><?php echo $message; ?></span>
                    </div>                    
                </div>
            <?php
            }
            ?>
        </div>

        <?php include_partial('Message/form', array('form' => $form));?>
    </div>
</div>
</div>