<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php if (!empty($page_title)) : ?>
			<?php echo $page_title; ?> - 
		<?php endif; ?>
		<?php echo $title_for_layout; ?>
	</title>	
	<?php
		echo $this->Html->meta('icon');
		// google fonts
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic');
		// styles
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('styles');
		// js
		echo $this->Html->script('jquery.min', array('inline' => false));
		echo $this->Html->script('jquery.form.min', array('inline' => false));
		echo $this->Html->script('jquery.sticky', array('inline' => false));
		echo $this->Html->script('bootstrap.min', array('inline' => false));
		echo $this->Html->script('scripts', array('inline' => false));

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="container">
		<div id="header" class="container-fluid">
			<div class="container">
				<h1><?php echo $title_for_layout; ?><small class="hidden-xs hidden-sm"><?php echo $baseline; ?></small></h1>
			</div>
		</div>
		<?php if (!empty($page_homepage)) : ?>
			<div id="banner" class="container">
				<?php echo $this->element('banner'); ?>
			</div>
		<?php endif; ?>
		<div id="menu" class="container-fluid">
			<div class="menu-toggle hidden-md hidden-lg" data-position="collapsed">
				<span>+ Menu</span>
			</div>
			<div class="menu-collapse hidden-xs hidden-sm">
				<?php echo $this->element('menu'); ?>
			</div>
		</div>
		<div id="content" class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
		<div id="footer" class="container-fluid">
			<div class="container">
				<small>© <?php echo date('Y'); ?> Hélène Massieu</small>
			</div>
		</div>
	</div>
	<?php if (!empty($googleTrackingId)) : ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php echo $googleTrackingId; ?>', 'auto');
			ga('send', 'pageview');
		</script>
	<?php endif; ?>
	<?php echo $this->fetch('script'); ?>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>