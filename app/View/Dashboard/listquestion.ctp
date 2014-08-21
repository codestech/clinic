<div class="users index">
	<h2><?php echo __('Sangapore Airlines Quiz'); ?></h2>
    <table cellpadding="0" cellspacing="0">
	<tr>
			<th class="actions"><?php echo __('Actions'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('contact', 'Contact Number'); ?></th>
			<th><?php echo $this->Paginator->sort('dob','Date of Birth'); ?></th>
			<th><?php echo $this->Paginator->sort('correct_ans', 'Correct Answar'); ?></th>
			<th><?php echo $this->Paginator->sort('time_spent', 'Time Spent'); ?></th>
			
	</tr>
	<?php
	foreach ($users as $item): ?>
	<tr>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['User']['id']), null, __('Are you sure you want to delete # %s?', $item['User']['id'])); ?>
		</td>
		<td><?php echo h($item['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['contact']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['dob']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['correct_ans']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['time_spent']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['created']); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
        <li><?php echo $this->Html->link(__('Leaderboard'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Question'), array('action' => 'listquestion')); ?></li>
        <li><?php echo $this->Html->link(__('Add Question'), array('action' => 'addquestion')); ?></li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'dashboard', 'action' => 'logout')); ?> </li>
	</ul>
</div>
