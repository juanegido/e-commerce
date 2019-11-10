<?php echo PATH_APP . '/views/inc/header.php'; ?>
<p><?php echo $data['title'];?></p>
<ul>
    <?php foreach($data['skills'] as $skill): ?>
        <li> <?php echo $skill->name; ?> </li>
    <?php endforeach; ?>
</ul>

<?php echo PATH_APP . '/views/inc/footer.php'; ?>
