<?php $this->load->helper('url'); ?>
<!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
<ul id="mainNav">
<li><a href="<?php echo site_url("active"); ?>">Home</a></li> <!-- Use the "active" class for the active menu item  -->
<li><a href="<?php echo site_url("active/post"); ?>">post</a></li>
<li><a href="<?php echo site_url("active/#"); ?>">upload</a></li>
<li><a href="<?php echo site_url("active/settings"); ?>">settings</a></li>
<li><a href="<?php echo site_url("active/#"); ?>">Stats - email subscribers, comments, geeky stuff</a></li>
<li class="logout"><a href="<?php echo site_url("admin/logout"); ?>">LOGOUT</a></li>

</ul>
<!-- // #end mainNav -->
<h3>Welcome back, <?php echo $this->session->userdata('username'); ?>!</h3>