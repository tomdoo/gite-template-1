<?php $languages = !empty($languages) ? $languages : $this->requestAction(array('controller' => 'configuration', 'action' => 'languages')); ?>
<?php if (!empty($languages)) : ?>
	<ul class="list list-inline languages">
		<?php foreach ($languages as $code => $language) : ?>
			<li>
				<?php echo $this->Html->link(
					$this->Html->image(
						'/img/flags/'.$code.'.png',
						array(
							'alt' => $language,
							'title' => $language
						)
					),
					'/'.$code,
					array(
						'title' => $language,
						'escape' => false
					)
				); ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>