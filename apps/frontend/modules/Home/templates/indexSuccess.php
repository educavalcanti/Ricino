<div id="banner">
    <div class="imagem">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="609" height="154" id="bannerContent" align="middle">
            <param name="movie" value="../images/banner.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#ffffff" />
            <param name="play" value="true" />
            <param name="loop" value="true" />
            <param name="wmode" value="window" />
            <param name="scale" value="showall" />
            <param name="menu" value="true" />
            <param name="devicefont" value="false" />
            <param name="salign" value="" />
            <param name="allowScriptAccess" value="sameDomain" />
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../images/banner.swf" width="609" height="154">
                    <param name="movie" value="../images/banner.swf" />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <param name="play" value="true" />
                    <param name="loop" value="true" />
                    <param name="wmode" value="window" />
                    <param name="scale" value="showall" />
                    <param name="menu" value="true" />
                    <param name="devicefont" value="false" />
                    <param name="salign" value="" />
                    <param name="allowScriptAccess" value="sameDomain" />
            <!--<![endif]-->
                    <a href="http://www.adobe.com/go/getflash">
                            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                    </a>
            <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
    </object>
        <!--
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="609" height="154">
          <param name="movie" value="banner.swf" />
          <param name="quality" value="high" />
          <embed src="http://www.ricino.org.br/web/images/banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="609" height="154"></embed>
        </object>
        -->
    </div>
</div>
<div id="noticias">
    <div class="faixa"></div>
    <div class="titulo_box">
        <p>Notícias</p>
    </div>
    <div class="fundo_box">
        <?php include_partial('News/indexShow', array('noticias' => $noticias))?>
    </div>
    <div class="ver_mais">
        <p><a href="<?php echo url_for('News/index'); ?>">VER MAIS +</a></p>
    </div>
</div>
<div id="avisos">
    <div class="faixa_avisos"></div>
    <div class="titulo_box_avisos">
        <p>Eventos</p>
    </div>
    <div class="fundo_box_avisos">
        <?php include_partial('Notice/indexShow', array('noticias' => $avisos))?>
    </div>
    <div class="ver_mais_avisos">
        <p><a href="<?php echo url_for('Notice/index'); ?>">VER MAIS +</a></p>
    </div>
</div>