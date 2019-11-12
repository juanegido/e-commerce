<?php require PATH_APP . '/views/inc/header.php'; ?>
<p><?php echo $data['title'];?></p>
<ul>
    <?php foreach($data['Skills'] as $skill): ?>
        <li> <?php echo $skill->name; ?> </li>
        <li> <?php echo $skill->price; ?></li>
    <?php endforeach; ?>
</ul>

<?php require PATH_APP . '/views/inc/footer.php'; ?>
