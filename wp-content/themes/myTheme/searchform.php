<form method="get" class="search-form" title="Search" role="search" action="<?php echo home_url('/') ?>">
    <input class="search-form__input" aria-label="search" type="search" name="s" id="search"
        placeholder="Search for blogs..." value="<?php echo get_search_query(); ?>" required />
    <button class="search-form__submit" type="submit">
        <img src="/wp-content/themes/myTheme/src/assets/icons/search-icon.svg" aria-hidden="true" />
    </button>
</form>