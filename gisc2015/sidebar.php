<aside id="sidebar">
<?php if ( is_active_sidebar('primary-widget-area') ) : ?>
<p id="site-description"><?php bloginfo( 'description' ) ?></p>
<div id="primary" class="widget-area">
<ul class="sid">
<?php dynamic_sidebar('primary-widget-area'); ?>
</ul>
</div>
<div id="search">
<?php get_search_form(); ?>
</div>
<?php endif; ?>
</aside>