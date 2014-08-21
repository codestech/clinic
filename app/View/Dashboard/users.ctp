<?php 

 ?>
<div class="users index">
	<h2><?php echo __('Registrations'); ?></h2>
    <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($users as $item): ?>
	<tr>
		<td><?php echo h($item['User']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($item['User']['name'], "http://facebook.com/{$item['User']['fb_id']}",array("target"=>"_blank")); ?>
			&nbsp;
			
			</td>
		<td><?php echo h($item['User']['email']); ?>&nbsp;</td>
        <td><?php echo h($item['User']['location']); ?>&nbsp;</td>

        <td><?php echo h($item['User']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($item['User']['birthday']); ?>&nbsp;</td>

		<td><?php echo h($item['User']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'deleteuser', $item['User']['id']), null, __('Are you sure you want to delete # %s?', $item['User']['id'])); ?>
		</td>
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
        <li><?php echo $this->Html->link(__('Photos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Registration'), array('action' => 'users')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'dashboard', 'action' => 'logout')); ?> </li>
	</ul>
</div>
