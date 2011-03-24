<?php
$form_open_attribs = array('class' => 'jNice');
?>
<h3>Login</h3>
<div id="containerHolder">
    <div id="container">
        <div id="sidebar">
            <ul class="sideNav">
            <!-- // .sideNav -->
        </div>
        <!-- // #sidebar -->

        <!-- h2 stays for breadcrumbs -->
<fieldset>
<?php echo form_open('admin/login', $form_open_attribs); ?>

       
<p><label>Username:</label><input class="text-long" type="text" name="user_name" /></p>
<p><label>Password:</label><input class="text-long" type="password" name="pass_word" /></p>

<!--
 <p><label>Username:</label><?php //echo form_input('user_name'); ?></p>
<p><label>Password:</label><?php //echo form_password('pass_word'); ?></p>
-->

<?php echo form_submit('login', 'Login'); ?>


</form>
<div id='errors'>
 
<?php echo validation_errors(); ?>
</div>
</fieldset>

        </div>
        <!-- // #main -->

        <div class="clear"></div>
    </div>
    <!-- // #container -->
</div>
<!-- // #containerHolder -->
