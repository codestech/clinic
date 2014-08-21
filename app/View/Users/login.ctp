<?php
    echo $this->Form->create('User', array('action' => $this->action));
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->input('remember', array(
                    'label' => "remember me for 2 weeks",
                    'type' => "checkbox"
            ));
    echo $this->Form->submit();
    echo $this->Form->end();
?>

