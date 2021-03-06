<?php if (empty($menu)) : ?>
	<?php $first = true; ?>
	<?php $menu = $this->requestAction(array('controller' => 'pages', 'action' => 'menu')); ?>
<?php endif; ?>
<?php if (!empty($menu)) : ?>
	<ul class="<?php echo $first ? 'list-inline' : ''; ?>">
		<?php foreach ($menu as $element) : ?>
			<li>
				<?php echo $this->Html->link($element['Post']['title'], array('controller' => 'pages', 'action' => 'view', $element['Post']['slug'])); ?>
				<?php /*if (!empty($element['children'])) : ?>
					<?php echo $this->element('menu', array('menu' => $element['children'])); ?>
				<?php endif;*/ ?>
			</li>
		<?php endforeach; ?>
		<?php if ($first) : ?>
			<li><?php echo $this->Html->link(___('bookings-title', 'Bookings'), array('controller' => 'bookings')); ?></li>
			<li><?php echo $this->Html->link(___('contacts-title', 'Contact us'), array('controller' => 'contacts')); ?></li>
		<?php endif; ?>
	</ul>
<?php endif; ?>