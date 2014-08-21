<h2><?php echo __('Set Your Appoinment Now'); ?></h2>
<?php
    echo $this->Form->create('Patient', 
            array('action' => $this->action));
    echo $this->Form->input('name', array('label' => 'Name', 'id'=>'reg_user_name', 'error' => array(
                    'attributes' => array('escape' => false)
                )));
    echo $this->Form->input('email', array('label' => 'Email', 'error' => array(
                    'attributes' => array('escape' => false)
                )));
    echo $this->Form->input('age', array('label' => "Age", 'error' => array(
                    'attributes' => array('escape' => false)
                )));
    echo $this->Form->input('sex', array('label' => "Sex", 'options' => array('Male'=>'male','Female'=>'female')));
    echo $this->Form->input('address', array('type'=>'textarea'));
    echo $this->Form->input('phone');
    echo $this->Form->input('app_date', array('value' => $appDate, 'type'=>'text', 'label'=>'Appoinment Date & Time', 'readonly'));
    echo $this->Form->input('status', array('value' => "active", 'type'=>'hidden'));
    echo $this->Form->submit('Set Appoinment');
    echo $this->Form->end();
?>