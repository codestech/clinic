<div class="users form">
<?php echo $this->Form->create('Login'); ?>
    <fieldset>
        <legend><?php echo __('Sangapore Airlines Quiz'); ?></legend>
    <?php
        echo $this->Form->input('username',array('style'=>'width:200px'));
        echo $this->Form->input('password',array('style'=>'width:200px'));
        
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
    
</div>
