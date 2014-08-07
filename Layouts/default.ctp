<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');

		// google fonts
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('styles');
		echo $this->Html->script('jquery.min', array('inline' => false));
		echo $this->Html->script('jquery.form.min', array('inline' => false));
		echo $this->Html->script('bootstrap.min', array('inline' => false));
		echo $this->Html->script('scripts', array('inline' => false));


		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="container-fluid">
			<div class="container">
				<h1><?php echo $title_for_layout; ?><small class="hidden-xs hidden-sm"><?php echo $baseline; ?></small></h1>
			</div>
		</div>
		<div id="menu" class="container-fluid">
			<div class="menu-toggle hidden-md hidden-lg" data-position="collapsed">
				<span>+ Menu</span>
			</div>
			<div class="menu-collapse hidden-xs hidden-sm">
				<?php echo $this->element('menu'); ?>
			</div>
		</div>
		<div id="content" class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer" class="container-fluid">
			<div class="container">
				<small>© <?php echo date('Y'); ?> Hélène Massieu</small>
			</div>
		</div>
	</div>
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
