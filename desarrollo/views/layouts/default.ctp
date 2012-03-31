<!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="language" content="Spanish" />
        <meta name="author" content="Daniel Tala de Dompierre de Chaufepie, Francisco Ventosa" />
        <title><?php echo $title_for_layout; ?> - CELUWORLD</title>
        <?php
        if (isset($description_for_layout))
            echo $this->Html->meta('description', $description_for_layout);
        if (isset($keywords_for_layout))
            echo $this->Html->meta('keywords', $keywords_for_layout);
        ?>

        <script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'es-419'}</script>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('base', 'http://fonts.googleapis.com/css?family=Anton','paises'));
        echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'));
        
        ?>
    </head>
    <body>
        <div class="bg_top">
            <div id="Main">
                <div id="Header">
                    <div style="float: right; margin-top: 20px;margin-right: 10px;width: 140px;">
                        <?php //e($this->element('global/paisesLinks')); ?>
                        <?php e($this->element('layout/paises')); ?>
                    </div>

                    <div id="HeaderLogo">
                        <header>
                            <hgroup></hgroup>
                            <?php
                            echo $this->Html->link($this->Html->image('logo.png', array('alt' => __('CELUWORLD! Tu portal de informacion sobre celulares.', true),
                                        'width' => '270', 'height' => '48')), $this->HProperties->APP, array('escape' => false));
                            ?>
                        </header>
                    </div>
                </div>
                <nav>
                    <div id="MenuPrincipal">
                        <div class="Lineamenu1"></div> 
                        <a href="<?php e($this->HProperties->APP);?>" target="_self"><div class="Menu1">home</div></a>
                        <a href="<?php e($this->HProperties->APP);?>lista/smarts" target="_self"><div class="Menu2">smarts</div></a>
                        <a href="<?php e($this->HProperties->APP);?>lista/tablets" target="_self"><div class="Menu2">tablets</div></a>
                        <a href="<?php e($this->HProperties->APP);?>faqs" target="_self"><div class="Menu2">faqs</div></a>
                        <a href="<?php e($this->HProperties->APP);?>info" target="_self"> <div class="Menu3">sobre celuworld</div></a>
                        <a href="<?php e($this->HProperties->APP);?>sitemap/usuario" target="_self"><div class="Menu3">mapa del sitio</div></a>
                        <div class="Lineamenu3"></div>
                        <div id="contenedor-busqueda" >
                            <?php echo $this->element('addsense/busqueda', array('size' => 30)); ?>
                        </div>
                    </div>
                </nav>
                <div id="Contenido">
                    <div id="ContenidoColIz">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $content_for_layout; ?>
                    </div>
                    <div id="ContenidoColDer">  
                        <aside>
                            <div class="sideElement">
                                <div  class="BarraTitulo"></div>
                                <div style="height: 250px; ">
                                    <?php echo $this->element('addsense/celuworld1'); ?>
                                </div>
                                <div  class="BarraTituloInferior"></div>
                            </div>
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
                            <div class="sideElement" style="text-align: left; margin-left: 10px">
                                <?php echo $this->element('addsense/celuworld8'); ?>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <footer>
                <div id="Footer">
                    <?php echo $this->element('layout/footerTxt'); ?>
                    <?php echo $this->element('layout/logos'); ?>
                </div>
            </footer>
        </div>
        <?php
        echo $this->Html->script(array('celuScripts','paises'));//, 'analytics'));
        echo $scripts_for_layout;
        
        ?>
</body>
</html>