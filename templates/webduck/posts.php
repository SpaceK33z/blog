<article class="<?php echo($post_status); ?>">
    <div class="row row-article">
        <div class="small-12 large-2 columns meta">
            <div class="thumbnail">
                <img src="<?php echo($post_image); ?>" alt="<?php echo($post_title); ?>" />
            </div>

            <ul>
                <?php /* <li>Door <?php echo($post_author); ?></li> */ ?>
                <li><?php echo($published_date); ?></li>
                <?php /* <li>Over <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></li> */ ?>
            </ul>
        </div>

        <div class="small-12 large-7 columns post">
            <h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <?php echo($post_intro); ?>

            <ul class="actions">
                <li><a class="button" href="<?php echo($post_link); ?>">Verder lezen</a></li>
                <?php if ($category) { ?>
                <li><a class="button" href="<?php echo($blog_url); ?>">Meer artikelen</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</article>
