<div class="container">
    <h1>Progress Tracker</h1>
	<h3>Select cadet to edit</h3>
</div>
<div id="container">
<?php echo form_open('admin/progtrack_edit'); ?>
    <table class="table table-hover">
		<thead>
		<tr>
			<th>Select</th>
			<th>Rank</th>
			<th>Name</th>
			<th>Classification</th>
			<?php foreach ($db_badge as $badges): ?>
				<th>
				<?php echo $badges['Badge_Name'];?>
				</th>
			<?php endforeach; ?>
		</tr>
		</thead>
		<?php foreach ($db_cadets as $cadets): ?>
		<tr>
			<td>
				<?php echo form_radio('Selector',$cadets['Name']);?>
			</td>
			<td>
				<?php echo $cadets['Rank'];?>
			</td>
			<td>
				<?php echo $cadets['Name'];?>
			</td>
			<td>
				<?php echo $cadets['Classification'];?>
			</td>
			<?php 
				$result = $this->db_model->get_achieved_specific($cadets['Name']);
				foreach ($result as $badge_achieved):
					$level = $badge_achieved['Level'];
					$colour = '';
					if($level == 'Bronze')
					{
						$colour = 'chocolate';
					} 
					else if ($level == 'Grey')
					{
						$colour = '';			
					}
					else
					{
						$colour = $level;
					}
					echo '<td style="background-color:'.$colour.';">';
					if ($level != 'Grey')
					{
						echo $badge_achieved['Date'];
					}
					echo '</td>';
				endforeach;
			?>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<div class="container">
	<a href="/admin/progtracker" class="btn btn-primary" role="button">Back</a>
	<a href="/admin/progcadetadd" class="btn btn-secondary" role="button">Add Cadet</a>
	<a href="/admin/progcadetdelete" class="btn btn-secondary" role="button">Delete Cadet</a>
	<a href="/admin/progbadgeadd" class="btn btn-secondary" role="button">Add Badge</a>
	<a href="/admin/progbadgedelete" class="btn btn-secondary" role="button">Delete Badge</a>
	<button type="submit" class="btn btn-default">Submit</button>
</div>
