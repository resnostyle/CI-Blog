<div id="containerHolder">
    <div id="container">
        <div id="sidebar">
            <ul class="sideNav">
                <li><a href="#">Events</a></li>
            </ul>
            <!-- // .sideNav -->
        </div>
        <!-- // #sidebar -->

        <!-- h2 stays for breadcrumbs -->

        <div id="main">
        
                <h3>Recent Posts & Comments</h3>
                <table cellpadding="0" cellspacing="0">
                    <?php $x = 0;                    ?>
                    <?php foreach($Posts as $row): $x++; ?>
                        
                    <tr <?php if ($x % 2) {
                            echo "class='odd'";
                        }                     ?>
                        <td><?php echo $row->title ?></td>
                        <td class="action">
                            <?php echo anchor($row->title, 'View',array('class' => 'view')); ?>
                            <?php echo anchor('#', 'Edit',array('class' => 'edit')); ?>
                            <?php echo anchor('#', 'Delete',array('class' => 'delete')); ?>
                            
                            </td>
                    </tr>

                    <?php endforeach; ?>

                </table>
        </div>
        <!-- // #main -->

        <div class="clear"></div>
    </div>
    <!-- // #container -->
</div>
<!-- // #containerHolder -->
