<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <?php echo($this->Html->charset()."\n"); ?>
    <title>CakePHP Brasil</title>
	<?php echo($this->Html->css(array('reset', 'estilo'))); ?>
	<?php echo($this->Html->script(array('jquery-1.6.1.min', 'jquery.easing.1.3', 'scripts'))); ?>
</head>
<body>
<div id="geral">
	<?php echo($this->element('header')."\n"); ?>
	<div id="site">
		<div id="conteudo">
	<?php echo($content_for_layout."\n"); ?>
		</div>
	</div>
	<?php echo($this->element('footer')."\n"); ?>
</div>
</body>
</html>
