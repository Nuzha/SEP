<?php 

echo form_open('main/create');

// an array of the fields in the student table
$field_array = array('name','s_date','e_date');

foreach($field_array as $field)
{
  echo '<p>' . $field;
  echo form_input(array('name' => $field)) . '</p>';
}

// not setting the value attribute omits the submit from the $_POST array
echo form_submit('', 'Add new iteration'); 

echo form_close();

?>
