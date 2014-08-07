<h2>Bookings</h2>

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
			<th class="visible-xs">M</th>
			<th class="visible-sm">Mon</th>
			<th class="visible-md visible-lg">Monday</th>
			<th class="visible-xs">T</th>
			<th class="visible-sm">Tue</th>
			<th class="visible-md visible-lg">Tuesday</th>
			<th class="visible-xs">W</th>
			<th class="visible-sm">Wed</th>
			<th class="visible-md visible-lg">Wednesday</th>
			<th class="visible-xs">T</th>
			<th class="visible-sm">Thu</th>
			<th class="visible-md visible-lg">Thursday</th>
			<th class="visible-xs">F</th>
			<th class="visible-sm">Fri</th>
			<th class="visible-md visible-lg">Friday</th>
			<th class="visible-xs">S</th>
			<th class="visible-sm">Sat</th>
			<th class="visible-md visible-lg">Saturday</th>
			<th class="visible-xs">S</th>
			<th class="visible-sm">Sun</th>
			<th class="visible-md visible-lg">Sunday</th>
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