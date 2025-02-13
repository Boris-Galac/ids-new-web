<aside class="aside blogs-page-section__aside-bar">
    <div>
        <h2 class="aside-heading">Search</h2>
        <?php get_search_form() ?>
    </div>
    <div>
        <h2 class="aside-heading">Topics</h2>
        <ul class="aside__list">
            <?php
            $categories = get_categories([
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => true, // Only show categories with posts
                'exclude'    => [1], // Exclude Uncategorized (ID 1)
            ]);

            foreach ($categories as $category) {
                $category_link = get_category_link($category->term_id);
                $category_name = esc_html($category->name);
                $post_count = $category->count;
            ?>
                <li class="aside__item">
                    <a href="<?php echo esc_url($category_link); ?>" class="aside__link"><?php echo $category_name; ?></a>
                    <div class="aside__dashed-border"></div>
                    <span class="aside__item-count">(<?php echo $post_count; ?>)</span>
                </li>
            <?php } ?>
        </ul>


    </div>
    <div>
        <h2 class="aside-heading">Archives</h2>
        <ul class="aside__list">
            <?php
            global $wpdb;
            $archives = $wpdb->get_results("
        SELECT YEAR(post_date) AS year, 
               MONTH(post_date) AS month, 
               DATE_FORMAT(post_date, '%M %Y') AS formatted_date, 
               COUNT(ID) as post_count
        FROM $wpdb->posts
        WHERE post_status = 'publish' AND post_type = 'post'
        GROUP BY year, month
        ORDER BY post_date DESC
    ");

            foreach ($archives as $archive) {
                $archive_link = get_month_link($archive->year, $archive->month);
            ?>
                <li class="aside__item">
                    <a href="<?php echo esc_url($archive_link); ?>"
                        class="aside__link"><?php echo esc_html($archive->formatted_date); ?></a>
                    <span class="aside__item-count">(<?php echo esc_html($archive->post_count); ?>)</span>
                </li>
            <?php } ?>
        </ul>

    </div>
</aside>