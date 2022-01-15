<article class="user">
    <div class="avatar">
        <?php if (!$user['avatar']) { ?>
            <img src="assets/avatars/default.jpg" alt="<?php echo $user['name']; ?>" />
        <?php } else { ?>
            <img src="assets/avatars/<?php echo $user['avatar']; ?>" alt="<?php echo $user['name']; ?>" />
        <?php } ?>
    </div>
    <div class="infos">
        <h3><?php echo $user['name']; ?></h3>
        <h3><?php echo $user['firstname']; ?></h3>
        <h3><?php echo $user['birthdate']; ?></h3>
    </div>
</article>