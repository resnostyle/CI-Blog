
<a id="comment"></a>

<?php
echo heading('Have something to say?', 3);
echo form_open('post/submit_comment');

echo form_hidden('entry_id', $this->uri->segment(2));
echo form_label('What is your Name', 'username');
echo form_input('Name', '');
echo form_label('What is your Comment', 'Comment');
echo form_textarea('Comment');
?>

<p id="sneak">
<?php
echo form_label('LEAVE BLANK', 'LEAVE BLANK');
echo form_input('sneaky');
?>
</p>

<div id="button"><?php echo form_submit('submit', 'Submit'); ?></div>

<?php echo form_close(); ?>

<div id='errors'>

<?php echo validation_errors(); ?>
</div>



