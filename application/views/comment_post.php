
<?php foreach($Posts as $row): ?>

<h1><?php echo  $row->title; ?> </h1>

    <?php echo $row->date ?>





    <?php echo nl2br($row->post); ?>

<?php endforeach; ?>

<?php
//loads up the the comment module
$this->load->view('modules/comment_form');
//loads up the the comments

$this->load->view('modules/previous_comments');
?>

