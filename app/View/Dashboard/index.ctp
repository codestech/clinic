<div class="users index">
	<h2><?php echo __('Appointed Patients'); ?></h2>
    <table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th class="actions"><?php //echo __('Actions'); ?></th>-->
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone', 'Contact Number'); ?></th>
			<th><?php echo $this->Paginator->sort('app_date', 'Appoinment Date'); ?></th>
			
	</tr>
	<?php
	foreach ($patients as $item): ?>
	<tr>
		<!--<td class="actions">
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Patient']['id']), null, __('Are you sure you want to delete # %s?', $item['Patient']['id'])); ?>
		</td>-->
		<td><?php echo $this->Html->link($item['Patient']['name'], array('controller' => 'patients', 'action' => 'details', $item['Patient']['id'])); ?><br /><?php echo $this->Html->link('[+]History', array('controller' => 'patients', 'action' => 'addhistory', $item['Patient']['id']), array('class' => 'smallerLink')); ?>&nbsp;<?php echo $this->Html->link('[+]Priscription', array('controller' => 'priscriptions', 'action' => 'add', $item['Patient']['id']), array('class' => 'smallerLink')); ?>&nbsp;<?php echo $this->Html->link('Delete', array('controller' => 'priscriptions', 'action' => 'delete', $item['Patient']['id']), array('class' => 'smallerLink'), "Are you sure you wish to delete this Patient?"); ?></td>
		<td><?php echo h($item['Patient']['email']); ?>&nbsp;</td>
		<td><?php echo h($item['Patient']['age']); ?>&nbsp;</td>
		<td><?php echo h($item['Patient']['sex']); ?>&nbsp;</td>
		<td><?php echo h($item['Patient']['address']); ?>&nbsp;</td>
		<td><?php echo h($item['Patient']['phone']); ?>&nbsp;</td>
		<td><?php echo h($item['Patient']['app_date']); ?>&nbsp;</td>
		
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
        <li><?php echo $this->Html->link(__('Settings'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
