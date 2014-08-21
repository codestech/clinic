<?php
    echo $this->Form->create('User', 
            array('action' => $this->action));
    echo $this->Form->input('name', array('label' => 'Name', 'id'=>'reg_user_name', 'error' => array(
                    'attributes' => array('escape' => false)
                )));
    echo $this->Form->input('email', array('label' => 'Email', 'error' => array(
                    'attributes' => array('escape' => false)
                )));
    echo $this->Form->input('password', array('label' => "Password", 'error' => array(
                    'attributes' => array('escape' => false)
                )));
    echo $this->Form->input('repassword', array('label' => "Retype password", 'type'=>'password'));
    echo $this->Form->input('group', array('value' => "manager", 'type'=>'hidden'));
    echo $this->Form->input('status', array('value' => "active", 'type'=>'hidden'));
    echo $this->Form->submit('Register');
    echo $this->Form->end();
?>