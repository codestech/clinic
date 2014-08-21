<h2><?php echo __('Upload Patient history file (file format should be pdf)'); ?></h2>
<?php
    echo $this->Form->create('Patient', 
            array('url' => array('controller' => 'patients', 'action' => 'addhistory', $id), 'type' => 'file'));
    echo $this->Form->input('file', array('label' => 'Select history file', 'type' => 'file', 'error' => array(
                    'attributes' => array('escape' => false))));
    echo $this->Form->input('max_file_size', array('value' => "2000000", 'name'=>'MAX_FILE_SIZE', 'type'=>'hidden'));
    echo $this->Form->submit('Save History');
    echo $this->Form->end();
?>