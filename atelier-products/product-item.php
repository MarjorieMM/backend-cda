<article class="item">
    <div class="picture">
        <img src="assets/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
    </div>
    <div class="infos">
        <h3><?php echo $product['name']; ?></h3>
        <div class="categories">
            <?php foreach ($product['categories'] as $category) { ?>
            <p><?php echo $category; ?></p>
            <?php } ?>
        </div>
        <h4><?php echo $product['priceHT']; ?> € HT</h4>
    </div>
</article>