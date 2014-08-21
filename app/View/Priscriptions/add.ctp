<h2><?php echo __('Add Prescription'); ?></h2>
<?php
    echo $this->Form->create('Priscription', 
            array('url' => array('controller' => 'priscriptions', 'action' => 'add', $currentPatient['Patient']['id'])));
    echo $this->Form->input('id', array('value' => $currentPatient['Patient']['id'], 'type'=>'hidden'));
    echo $this->Form->input('name', array('label' => 'Name', 'value' => $currentPatient['Patient']['name'], 'readonly'));
    echo $this->Form->input('age', array('label' => "Age", 'value' => $currentPatient['Patient']['age'], 'readonly'));
    echo $this->Form->input('sex', array('label' => "Sex", 'value' => $currentPatient['Patient']['sex'], 'readonly'));
?>
    <a href="javascript:" id="AddMoreMedicinBox" style="font-size: 110%; margin: 10px 0; display: block;">[+] Medicin</a>
    <div id="medicinWrapper"></div>
    <a href="javascript:" id="AddMoreTestBox" style="font-size: 110%; margin: 10px 0; display: block;">[+] Test</a>
    <div id="testWrapper"></div>
<?php
    echo $this->Form->submit('Save Prescription');
    echo $this->Form->end();
?>

<script type="text/javascript">
$(document).ready(function() {

var MaxInputs       = 8; //maximum input boxes allowed

var medicinWrapper   = $("#medicinWrapper"); //Input boxes wrapper ID
var AddMedicin       = $("#AddMoreMedicinBox"); //Add button ID

var testWrapper   = $("#testWrapper"); //Input boxes wrapper ID
var AddTest       = $("#AddMoreTestBox"); //Add button ID

var x = medicinWrapper.length; //initlal text box count
var medicinCount=1; //to keep track of text box added

var y = testWrapper.length; //initlal text box count
var testCount=1; //to keep track of text box added

$(AddMedicin).click(function (e)  //on add input button click
{
        if(x <= MaxInputs) //max input box allowed
        {
            medicinCount++; //text box added increment
            //add input box
            $(medicinWrapper).append('<div class="input text"><input style="width:96%" type="text" name="data[Priscription][Medicin][]" id="field_'+ medicinCount +'" value=""/><a href="#" class="removeMedicin">&times;</a></div>');
            x++; //text box increment
        }
return false;
});

$(AddTest).click(function (e)  //on add input button click
{
        if(y <= MaxInputs) //max input box allowed
        {
            testCount++; //text box added increment
            //add input box
            $(testWrapper).append('<div class="input text"><input style="width:96%" type="text" name="data[Priscription][Test][]" id="field_'+ testCount +'" value=""/><a href="#" class="removeTest">&times;</a></div>');
            y++; //text box increment
        }
return false;
});

$("body").on("click",".removeMedicin", function(e){ //user click on remove text
        if( x > 1 ) {
                $(this).parent('div').remove(); //remove text box
                x--; //decrement textbox
        }
return false;
}) 

$("body").on("click",".removeTest", function(e){ //user click on remove text
        if( y > 1 ) {
                $(this).parent('div').remove(); //remove text box
                y--; //decrement textbox
        }
return false;
}) 

});
</script>