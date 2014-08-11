<h2><?php echo ___('bookings-title', 'Bookings'); ?></h2>

<div class="container">
	<div class="row">
		<h3 class="month-selector">
			<span class="col-xs-1 col-xs-offset-1 col-sm-offset-2 col-md-offset-3 col-lg-offset-4 text-center">
				<?php echo $this->Html->link('<i class="glyphicon glyphicon-chevron-left"></i>', array('action' => 'index', $year, $month-1), array('escape' => false)); ?>
			</span>
			<span class="col-xs-8 col-sm-6 col-md-4 col-lg-2  text-center">
				<?php echo $this->Time->format('F Y', $monthTime); ?>
			</span>
			<span class="col-xs-1 text-center">
				<?php echo $this->Html->link('<i class="glyphicon glyphicon-chevron-right"></i>', array('action' => 'index', $year, $month+1), array('escape' => false)); ?>
			</span>
		</h3>
	</div>
</div>

<table class="table calendar">
	<thead>
		<tr>
			<th class="visible-xs"><?php echo ___('bookings-monday-s', 'M'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-monday-m', 'Mon'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-monday-l', 'Monday'); ?></th>
			<th class="visible-xs"><?php echo ___('bookings-tuesday-s', 'T'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-tuesday-m', 'Tue'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-tuesday-l', 'Tuesday'); ?></th>
			<th class="visible-xs"><?php echo ___('bookings-wednesday-s', 'W'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-wednesday-m', 'Wed'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-wednesday-l', 'Wednesday'); ?></th>
			<th class="visible-xs"><?php echo ___('bookings-thursday-s', 'T'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-thursday-m', 'Thu'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-thursday-l', 'Thursday'); ?></th>
			<th class="visible-xs"><?php echo ___('bookings-friday-s', 'F'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-friday-m', 'Fri'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-friday-l', 'Friday'); ?></th>
			<th class="visible-xs"><?php echo ___('bookings-saturday-s', 'S'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-saturday-m', 'Sat'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-saturday-l', 'Saturday'); ?></th>
			<th class="visible-xs"><?php echo ___('bookings-sunday-s', 'S'); ?></th>
			<th class="visible-sm"><?php echo ___('bookings-sunday-m', 'Sun'); ?></th>
			<th class="visible-md visible-lg"><?php echo ___('bookings-sunday-l', 'Sunday'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php $day = 1; ?>
		<?php while ($day <= count($days)) : ?>
			<tr>
				<?php for ($i = 0; $i <= 6; $i++) : ?>
					<?php if (($day <= count($days)) && (($day == 1 && $dayOffset <= $i) || $day > 1)) : ?>
						<td class="day-<?php echo $days[$day]; ?>"><?php echo $day; ?></td>
						<?php $day++; ?>
					<?php else : ?>
						<td></td>
					<?php endif; ?>
				<?php endfor; ?>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>