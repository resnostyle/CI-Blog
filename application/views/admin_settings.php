
<div id="containerHolder">
    <div id="container">
        <div id="sidebar">
            <ul class="sideNav">
                Mutiple Screens here for various settings
            </ul>
            <!-- // .sideNav -->
        </div>
        <!-- // #sidebar -->



        <!-- h2 stays for breadcrumbs -->
        <h2><?php echo anchor('active','Dashboard') ?> &raquo; <class="active">Settings</h2>

        <div id="main">

            <?php
            $form_open_attribs = array('class' => 'jNice');


            echo form_fieldset('');
            echo form_open('active/setted', $form_open_attribs);

            ?>

            <?php echo heading('Newest Post', 2); ?>
            <p><?php echo form_label('Posts Shown:', 'recent_posts_shown'); ?><?php echo form_input(); ?></p>
            <p><?php echo form_label('Words Shown:', 'recent_exercept_shown'); ?><?php echo form_input(); ?></p>

            <?php echo heading('Older Posts', 2); ?>
            <p><?php echo form_label('Posts Shown:', 'old_posts_shown'); ?><?php echo form_input(); ?></p>
            <p><?php echo form_label('Words Shown:', 'old_exercept_shown'); ?><?php echo form_input(); ?></p>



            <?php

            echo form_submit('submit', 'Save!');

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
