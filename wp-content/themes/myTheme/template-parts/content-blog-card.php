<article class="blog-article">
    <a href="<?php the_permalink() ?>" class="blog-article__thumbnail">
        <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="thumbnail image">
        <?php } else { ?>
            <img src="/wp-content/themes/myTheme/src/assets/images/default-blog.jpg" alt="default generic image"
                class="avatar-card-img">
        <?php } ?>
        <div class="blog-article__body">
            <h3 class="blog-article__heading"><?php the_title() ?></h3>
            <p class="paragraph">
                <?php echo wp_trim_words(get_the_content(), 24) ?>
            </p>
            <a href="<?php the_permalink() ?>" class="blog-article-read-more-btn">read more
                <img src="/wp-content/themes/myTheme/src/assets/icons/read-more-icon.svg" alt="book icon" /></a>
        </div>
</article>