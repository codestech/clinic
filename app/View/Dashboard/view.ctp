<div class="users view">
<h2><?php  echo __('Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($team['BlinkIdea']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Name'); ?></dt>
		<dd>
			<?php echo h($team['BlinkIdea']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idea Title'); ?></dt>
		<dd>
			<?php echo h($team['BlinkIdea']['idea_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($team['BlinkIdea']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($team['BlinkIdea']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Members'); ?></dt>
        <dd>
            <?php foreach($members as $item):  ?>
                <?php echo $this->Html->link($item['BlinkUser']['name'], array('controller' => 'dashboard', 'action' => 'viewuser', $item['BlinkUser']['id'])); ?>,    
            <?php endforeach  ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Project Doc'); ?></dt>
		<dd>
            <a target="_blank" href="<?php echo $this->Html->url("/".$team['BlinkIdea']['idea_file']); ?>"><?php echo $team['BlinkIdea']['idea_file']; ?></a>
		</dd>
		
	</dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['BlinkIdea']['id']), null, __('Are you sure you want to delete # %s?', $team['BlinkIdea']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Registrations'), array('action' => 'users')); ?> </li>
        <li><?php echo $this->Html->link(__('Teams'), array('controller' => 'dashboard', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'dashboard', 'action' => 'logout')); ?> </li>
    </ul>
</div>
