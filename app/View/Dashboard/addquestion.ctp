<div class="users form">
<?php echo $this->Form->create(null, array('url' => array('controller' => 'Dashboard', 'action' => 'addquestion'))); ?>
    <fieldset>
        <legend><?php echo __('Add Question/Answer'); ?></legend>
    <?php
        echo $this->Form->input('set',array('options'=>array('a'=>'A','b'=>'B','c'=>'C','d'=>'D','e'=>'E')));
        echo $this->Form->input('que',array('label'=>'Question'));
        echo $this->Form->input('a',array('label'=>'Answer a)'));
        echo $this->Form->input('b',array('label'=>'Answer b)'));
        echo $this->Form->input('c',array('label'=>'Answer c)'));
        echo $this->Form->input('d',array('label'=>'Answer d)'));
        echo $this->Form->input('correct_ans',array('label'=>'Correct Answer', 'options'=>array('a'=>'A','b'=>'B','c'=>'C','d'=>'D','e'=>'E')));
        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Add')); ?>
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
