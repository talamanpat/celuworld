<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout; ?> - celuworld</title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('base'));

        echo $this->Html->script(array('analytics'));
        echo $scripts_for_layout;
        ?>

    </head>
    <body>
                            <?php echo $this->Session->flash(); ?>
                            <?php echo $content_for_layout; ?>
    </body>
</html>