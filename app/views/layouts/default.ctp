<!DOCTYPE html>  
<html lang="es">
    <head>
        <meta charset="utf-8">   
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="language" content="Spanish" />
        <meta name="author" content="Daniel Tala de Dompierre de Chaufepie, Francisco Ventosa" />

        <title><?php echo $title_for_layout; ?></title> 
        <?php
        if (isset($description_for_layout))
            echo $this->Html->meta('description', $description_for_layout);
        if (isset($keywords_for_layout))
            echo $this->Html->meta('keywords', $keywords_for_layout);
        ?>
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('base', 'http://fonts.googleapis.com/css?family=Anton'));
        if (isset($css_for_layout))
            echo $this->Html->css($css_for_layout);
        echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'));
        echo $this->element('scripts/analytics');
        ?>

    </head>
    <body>
        <div id="header">
            <div id="headerContenedor">
                <div id="headerPaises">
                    <?php e($this->element('layout/paises')); ?>
                </div>
                <div id="headerLogo">
                    <header>
                        <hgroup>
                            <?php
                            echo $this->Html->link($this->Html->image('logo.png', array('alt' => __('CELUWORLD! Tu portal de informacion sobre celulares.', true),
                                        'width' => '270', 'height' => '48')), $this->HProperties->APP, array('escape' => false));
                            ?>
                        </hgroup>
                    </header>
                </div>
            </div>
        </div>
        <div id="main">

            <nav>
                <div id="menuPrincipal">
                    <div class="lineamenu1"></div> 
                    <a href="<?php e($this->HProperties->APP); ?>" target="_self"><div class="menu1">home</div></a>
                    <a href="<?php e($this->HProperties->APP); ?>lista/smartphones" target="_self"><div class="menu2">smarts</div></a>
                    <a href="<?php e($this->HProperties->APP); ?>lista/tablets" target="_self"><div class="menu2">tablets</div></a>
                    <a href="<?php e($this->HProperties->APP); ?>noticias" target="_self"> <div class="menu2">noticias</div></a>
                    <a href="<?php e($this->HProperties->APP); ?>faqs" target="_self"><div class="menu2">faqs</div></a>
                    <a href="<?php e($this->HProperties->APP); ?>sitemap/usuario" target="_self"><div class="menu3">mapa del sitio</div></a>
                    <div class="lineamenu3"></div>
                    <div id="contenedor-busqueda" >
                        <?php echo $this->element('addsense/busqueda', array('size' => 30)); ?>
                    </div>
                    <div class="clean"></div>
                </div>
            </nav>
            <div id="contenido">
                <div id="contenidoColIz">
                   
                    <?php //echo $this->Session->flash(); ?>
                    <?php echo $content_for_layout; ?>
                </div>
                <div id="contenidoColDer">  
                    <aside>
                        <div class="sideElement" >
                            <?php echo $this->element('layout/twitter'); ?>
                        </div>

                        <div class="sideElement" >
                            <?php echo $this->element('layout/facebook'); ?>
                        </div>

                        <!--                            <div class="sideElement" >
                        <?php echo $this->element('addsense/busquedasPopulares'); ?>
                                                    </div>-->
                        <div class="sideElement" >
                            <?php echo $this->element('banners/talaman'); ?>
                        </div>

                        <div class="sideElement">
                            <div>
                                <?php echo $this->element('addsense/celuworld11'); ?>
                            </div>
                        </div>
                        <div class="sideElement" id="dclic" >
                            <?php echo $this->element('addsense/celuworld8'); ?>
                        </div>
                    </aside>
                </div>
                <div class="clean"></div>
            </div>
        </div>
        <footer>
            <div id="footer">
                <?php echo $this->element('layout/footerTxt'); ?>
                <?php echo $this->element('layout/logos'); ?>
                <div class="clean"></div>
            </div>
        </footer>

        <?php
        echo $scripts_for_layout;
//        echo $this->Html->script(array('jquery.lazyload.mini'));
        echo $this->element('scripts/celuScripts');
        echo $this->element('scripts/apture');
        ?>
    </body>
</html>