<?php

echo form_open($action, NULL, array('id' => $id));

echo '<br />';

echo $this->msg->help('Are you sure you want to delete this item?');

if(isset($text)){ echo $this->msg->warn($text); }

?>

	<br /><br />
	<table class="form">
	<?php
	$t = 1;
	unset($buttons);
	$buttons[] = array('submit', 'positive', 'Delete', 'f_err.gif', $t);
	$buttons[] = array('cancel', 'negative', 'Cancel', 'arr-left.gif', $t+2, site_url($cancel));
	$this->load->view('parts/buttons', array('buttons' => $buttons));
	?>
	</table>

</form>