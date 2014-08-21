<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($user['BlinkUser']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Facebook Profile'); ?></dt>
		<dd>
            <a target="_blank" href="http://www.facebook.com/<?php echo $user['BlinkUser']['fb_id']; ?>">facebook profile</a>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institution Name'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['university_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Roll'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['class_roll']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Batch'); ?></dt>
		<dd>
			<?php echo h($user['BlinkUser']['batch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Session'); ?></dt>
        <dd>
            <?php echo h($user['BlinkUser']['session']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Postal Address'); ?></dt>
        <dd>
            <?php echo h($user['BlinkUser']['postal_address']); ?> 
            <?php echo h($user['BlinkUser']['address2']); ?>
            &nbsp;
        </dd><dt><?php echo __('Mobile'); ?></dt>
		<dd>
            <?php echo h($user['BlinkUser']['mobile']); ?> 
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'deleteuser', $user['BlinkUser']['id']), null, __('Are you sure you want to delete # %s?', $user['BlinkUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Registrations'), array('action' => 'users')); ?> </li>
        <li><?php echo $this->Html->link(__('Teams'), array('controller' => 'dashboard', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'dashboard', 'action' => 'logout')); ?> </li>
	</ul>
</div>
 