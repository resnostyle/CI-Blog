

<?php

$date = array ('value' => date('m/d/Y'),
               'id' => 'date',
               'name' => 'date',
               'class' => 'text-short');

$title = array('id' => 'title', 
               'class' => 'text-long',
               'name' => 'title' );


?>

<div id="containerHolder">
    <div id="container">
  <div id="sidebar">
            <ul class="sideNav">
 <?php $this->load->view('admin_defaults/admin_options.php'); ?>
            </ul>
            <!-- // .sideNav -->
        </div>
        <!-- // #sidebar -->

 
 
        <!-- h2 stays for breadcrumbs -->
        <h2><?php echo anchor('active','Dashboard') ?> &raquo; <class="active">Post</h2>

        <div id="main">

            <?php echo heading('Post an entry', 3); ?>

            <div id='errors'>
                <?php echo heading(validation_errors(), 2); ?>
            </div>


            <?php
            $form_open_attribs = array('class' => 'jNice');


            echo form_fieldset('');
            echo form_open('active/posted', $form_open_attribs);

            ?>

            <p><?php echo form_label('Date:', 'date'); ?><?php echo form_input($date); ?></p>
            <p><?php echo form_label('Title:', 'title'); ?><?php echo form_input($title); ?></p>
            <p><?php echo form_label('Catergory:', 'catergory'); ?>
                <select>
                    <option>Select one</option>
                   <option>Select one</option>

                </select>
            </p>

            <p><?php echo form_label('Post:', 'post'); ?><?php echo form_textarea('post'); ?></p>

            <?php

            echo form_submit('submit', 'Post!');

            echo form_close();
            echo form_fieldset_close();

            ?>


        </div>
        <!-- // #main -->

        <div class="clear"></div>
    </div>
    <!-- // #container -->
</div>
<!-- // #containerHolder -->
