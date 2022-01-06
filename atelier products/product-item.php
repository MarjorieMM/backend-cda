<article class="item">
    <div class="picture">
        <a href="get_param.php?id=<?php echo $people['id']; ?>">
            <img src="<?php echo $people['avatar']; ?>"
                alt="<?php echo $people['name'] . ' ' . $people['firstname']; ?>" />
        </a>
    </div>
    <div class="infos">
        <h3><?php echo $people['name'] . ' ' . $people['firstname']; ?></h3>
        <h4><?php echo $people['age']; ?> ans</h4>
    </div>
</article>