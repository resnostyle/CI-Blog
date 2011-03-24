<?php
/*
@todo set up count for main max and second max
*/
$Main_max = 2000;
$Min_max = 100;
?>

<?php foreach($Posts as $row): ?>

<h1><?php echo anchor('post/'. $row->id,  $row->title) ?> </h1>

<div id="date"><?php echo $row->date ?></div>
    <?php echo substr(nl2br($row->post), 0, $Main_max); ?>
    <?php if (strlen($row->post) === $Main_max ) {
        echo '...' . anchor('post/'.$row->id.'#cont','[Continued]');
    } ?>

    <?php echo anchor('post/'.$row->id.'/#comment','Comments'); ?>»
</div>
<?php endforeach; ?>

<?php foreach($Shortened as $row): ?>

<h1><?php echo anchor('post/'. $row->id,  $row->title) ?> </h1>
<div id="date"><?php echo $row->date ?></div>
    <?php echo substr(nl2br($row->post), 0, $Min_max); ?>
    <?php if (strlen($row->post) === $Min_max ) {
        echo '...' . anchor('post/'.$row->id.'#cont','[Continued]');
    } else 
        {
        echo anchor('post/' . $row->id, 'View Post');
       }
                ?>
<?php echo anchor('post/'.$row->id.'/#comment','Comments'); ?>»
<?php endforeach; ?>
<br><br>
<?php echo $this->pagination->create_links(); ?>